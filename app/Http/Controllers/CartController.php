<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Services\PriceCalculator;
use Illuminate\Support\Facades\Schema;

class CartController extends Controller
{
    protected $priceCalculator;

    public function __construct(PriceCalculator $priceCalculator)
    {
        $this->priceCalculator = $priceCalculator;
    }

    public function index()
    {
        $userId = Auth::id();
        $cartItems = DB::table('cart')->where('user_id', $userId)->get();
        
        $products = collect();
        $cartTotal = 0;
        
        foreach ($cartItems as $item) {
            $tableName = $item->table_name;
            $productId = $item->product_id;
            
            if (Schema::hasTable($tableName)) {
                $product = DB::table($tableName)->where('id', $productId)->first();
                if ($product) {
                    $product->table_name = $tableName;
                    $product->cart_id = $item->id;
                    $product->quantity = $item->quantity;
                    
                    // Price Calc
                    $priceData = $this->priceCalculator->calculatePrice($product->product_code, $tableName);
                    $product->calculated_price = ceil($priceData[0]);
                    $product->metal_type = $priceData[4] ?? '';
                    
                    $cartTotal += $product->calculated_price * $product->quantity;
                    $products->push($product);
                }
            }
        }
        
        // Discount Logic (Legacy: > 1.5L get 10% discount on making charge? or total? 
        // Legacy cart.php line 67: if ($cartTotal > 150000) $discountAmount = $cartTotal * 0.10;
        // It says "Upto 10% off on Making Charges" in view, but code does flat 10% on TOTAL.
        // I will replicate the code logic: flat 10% on total.
        $discountAmount = 0;
        if ($cartTotal > 150000) {
            $discountAmount = $cartTotal * 0.10;
        }
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
            'product_id' => 'required',
            'product_code' => 'required',
            'table_name' => 'required'
        ]);

        $userId = Auth::id();
        
        // Check availability
        if (Schema::hasTable($request->table_name)) {
            $product = DB::table($request->table_name)->where('id', $request->product_id)->first();
            if (!$product || $product->stock_quantity <= 0) {
                return redirect()->back()->with('error', 'Product out of stock');
            }
        }

        // Check if exists
        $exists = DB::table('cart')
            ->where('user_id', $userId)
            ->where('product_id', $request->product_id)
            ->where('table_name', $request->table_name)
            ->first();

        if ($exists) {
            // Update quantity? Legacy doesn't simplify quantity, usually 1 item per row or just adds.
            // Legacy add_to_cart just INSERTS. It allows duplicates?
            // "INSERT INTO cart ...". No check.
            // But typical jewelry cart allows multiple same items?
            // I'll increment quantity if exists for better UX, or insert new if I want strict legacy.
            // I'll increment quantity.
            DB::table('cart')->where('id', $exists->id)->increment('quantity');
        } else {
            DB::table('cart')->insert([
                'user_id' => $userId,
                'product_id' => $request->product_id,
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
