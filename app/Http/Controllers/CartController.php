<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\Product;
use App\Services\PricingService;

class CartController extends Controller
{
    protected $pricingService;

    public function __construct(PricingService $pricingService)
    {
        $this->pricingService = $pricingService;
    }

    public function index()
    {
        $userId = Auth::id();
        $cartItems = DB::table('cart')->where('user_id', $userId)->get();

        $products = collect();
        $cartTotal = 0;

        // Fetch all related products efficiently
        $productCodes = $cartItems->pluck('product_code')->unique();
        $dbProducts = Product::with(['category', 'metalPurity', 'images'])
            ->whereIn('product_code', $productCodes)
            ->get()
            ->keyBy('product_code');

        foreach ($cartItems as $item) {
            if ($product = $dbProducts->get($item->product_code)) {
                // Clone to avoid modifying the reference if same product added twice (rare but possible in logic)
                $productDisp = clone $product;

                $productDisp->cart_id = $item->id;
                $productDisp->quantity = $item->quantity;
                $productDisp->table_name = $item->table_name; // Legacy compatibility for links

                // Map Image for View (View expects 'img2')
                $primaryImg = $productDisp->images->where('is_primary', true)->first();
                $productDisp->img2 = $primaryImg ? $primaryImg->image_path : ($productDisp->images->first()->image_path ?? '');

                // Price Calc
                $priceData = $this->pricingService->calculatePrice($productDisp);
                $productDisp->calculated_price = $priceData['total_price'];
                $productDisp->metal_type = $priceData['metal_type'] ?? '';

                $cartTotal += $productDisp->calculated_price * $productDisp->quantity;
                $products->push($productDisp);
            }
        }

        // Discount Logic (Flat 10% on total as placeholder logic)
        $discountAmount = 0;
        // if ($cartTotal > 150000) {
        //     $discountAmount = $cartTotal * 0.10;
        // }
        $finalTotal = $cartTotal - $discountAmount;

        return view('user.cart', [
            'products' => $products,
            'cartTotal' => $cartTotal,
            'discountAmount' => $discountAmount,
            'finalTotal' => $finalTotal
        ]);
    }

    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required', // Legacy ID
            'product_code' => 'required',
            'table_name' => 'required'
        ]);

        $userId = Auth::id();

        // Check availability using New Product Model
        $product = Product::where('product_code', $request->product_code)->first();

        if (!$product || $product->stock_quantity <= 0) {
            return redirect()->back()->with('error', 'Product out of stock');
        }

        // Check if exists
        $exists = DB::table('cart')
            ->where('user_id', $userId)
            ->where('product_code', $request->product_code) // Check by code, cleaner
            ->first();

        if ($exists) {
            DB::table('cart')->where('id', $exists->id)->increment('quantity');
        } else {
            DB::table('cart')->insert([
                'user_id' => $userId,
                'product_id' => $product->product_id,
                // Ideally we store the NEW product ID, but 'add' request sends OLD ID.
                // Let's store the OLD one to not break 'table_name' link logic pair? 
                // Actually, 'cart' table doesn't have foreign key constraint in legacy.
                // But safer to store what we received or 0.
                // Wait, if I use product_code for everything, product_id column is less relevant.
                'product_code' => $request->product_code,
                'table_name' => $request->table_name,
                'quantity' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        return redirect()->route('cart')->with('success', 'Product added to cart');
    }

    public function remove(Request $request)
    {
        $cartId = $request->input('cart_id');
        DB::table('cart')->where('id', $cartId)->where('user_id', Auth::id())->delete();

        return redirect()->route('cart')->with('success', 'Item removed from cart');
    }
}
