<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\Product;
use App\Services\PricingService;

class CheckoutController extends Controller
{
    protected $pricingService;

    public function __construct(PricingService $pricingService)
    {
        $this->pricingService = $pricingService;
    }

    public function index()
    {
        $user = Auth::user();

        $cartItems = DB::table('cart')->where('user_id', $user->user_id)->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart')->with('error', 'Your cart is empty');
        }

        $products = collect();
        $cartTotal = 0;

        // Efficient Bulk Fetch
        $productCodes = $cartItems->pluck('product_code')->unique();
        $dbProducts = Product::with(['category', 'metalPurity'])
            ->whereIn('product_code', $productCodes)
            ->get()
            ->keyBy('product_code');

        foreach ($cartItems as $cartItem) {
            if ($product = $dbProducts->get($cartItem->product_code)) {
                $productDisp = clone $product;

                // Calculate price using Service
                $priceData = $this->pricingService->calculatePrice($productDisp);

                $productDisp->calculated_price = $priceData['total_price'];
                $productDisp->cart_id = $cartItem->id;
                $productDisp->table_name = $cartItem->table_name;
                $productDisp->quantity = $cartItem->quantity;

                $products->push($productDisp);
                $cartTotal += $productDisp->calculated_price * $productDisp->quantity;
            }
        }

        $discountAmount = 0;
        $finalTotal = $cartTotal - $discountAmount;

        return view('user.checkout', compact('user', 'products', 'cartTotal', 'discountAmount', 'finalTotal'));
    }

    public function process(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'mobile' => 'required',
            'delivery' => 'required|in:home,pickup',
            'fullname' => 'required',
            'pincode' => 'required',
            'payment_method' => 'required|in:cod,phonepe',
        ]);

        $user = Auth::user();
        $cartItems = DB::table('cart')->where('user_id', $user->user_id)->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart')->with('error', 'Cart is empty');
        }

        // 1. Calculate Totals & Prepare Items
        $cartTotal = 0;
        $orderItemsData = [];

        // Efficient Bulk Fetch
        $productCodes = $cartItems->pluck('product_code')->unique();
        $dbProducts = Product::with(['category', 'metalPurity'])
            ->whereIn('product_code', $productCodes)
            ->get()
            ->keyBy('product_code');

        foreach ($cartItems as $item) {
            if ($product = $dbProducts->get($item->product_code)) {
                $priceData = $this->pricingService->calculatePrice($product);
                $price = $priceData['total_price'];

                $itemTotal = $price * $item->quantity;
                $cartTotal += $itemTotal;

                $orderItemsData[] = [
                    'product_id' => $product->product_id,
                    'product_code' => $product->product_code,
                    'table_name' => $item->table_name,
                    'quantity' => $item->quantity,
                    'price' => $price,
                    'metal_cost' => $priceData['metal_cost'] ?? 0,
                    'making_charges' => $priceData['making_charges'] ?? 0,
                    'gst' => $priceData['gst'] ?? 0,
                    'metal_type' => $priceData['metal_type'] ?? '',
                ];
            }
        }

        if (empty($orderItemsData)) {
            return redirect()->route('cart')->with('error', 'No valid products in cart');
        }

        \Illuminate\Support\Facades\Log::info('Checkout Request Data:', $request->all());

        $discountAmount = 0;
        $finalTotal = $cartTotal - $discountAmount;

        // 2. Create Order
        $order = new \App\Models\CustomerOrder();
        $order->user_id = $user->user_id;
        $order->fullname = $request->fullname;
        $order->email = $request->email;
        $order->phone = $request->mobile;
        $order->pincode = $request->pincode;
        $order->address = $request->address ?? '';
        $order->city = $request->city;
        $order->state = $request->state;
        $order->delivery_type = $request->delivery;
        $order->total_amount = $cartTotal;
        $order->discount_amount = $discountAmount;
        $order->final_amount = $finalTotal;
        $order->payment_method = $request->payment_method;

        // Generate merchant order ID for PhonePe
        if ($request->payment_method === 'phonepe') {
            $order->merchant_order_id = 'ORD_' . time() . '_' . uniqid();
            $order->status = 'pending_payment';
            $order->payment_status = 'pending';
        } else {
            $order->status = 'pending';
            $order->payment_status = 'pending';
        }

        $order->save();

        // 3. Save Items
        foreach ($orderItemsData as $itemData) {
            $orderItem = new \App\Models\CustomerOrderItem($itemData);
            $orderItem->order_id = $order->order_id;
            $orderItem->save();
        }

        // 4. Clear Cart
        DB::table('cart')->where('user_id', $user->user_id)->delete();

        // 5. Handle Payment Method
        if ($request->payment_method === 'phonepe') {
            // Redirect to PhonePe payment initiation
            return view('user.phonepe-redirect', [
                'order' => $order,
                'amount' => $finalTotal * 100, // Convert to Paise
            ]);
        }

        // COD - Order placed successfully
        return redirect()->route('home')->with('success', 'Order placed successfully! Order #' . $order->order_id);
    }
}
