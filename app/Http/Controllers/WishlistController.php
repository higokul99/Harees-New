<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Services\PricingService;

class WishlistController extends Controller
{
    protected $pricingService;

    public function __construct(PricingService $pricingService)
    {
        $this->pricingService = $pricingService;
    }

    public function index()
    {
        $userId = Auth::id();
        $wishlistItems = DB::table('user_wishlist')
            ->where('user_id', $userId)
            ->get();

        $products = collect();

        // Optimized fetching using Product Model
        $productIds = $wishlistItems->pluck('product_id')->unique();

        $dbProducts = Product::with(['category', 'metalPurity', 'images'])
            ->whereIn('id', $productIds)
            ->get()
            ->keyBy('id');

        foreach ($wishlistItems as $item) {
            // Find product by ID (assuming wishlist stores new Product ID)
            if ($product = $dbProducts->get($item->product_id)) {

                // Clone to allow modification per item instance if needed
                $productDisp = clone $product;

                // Keep table_name for legacy link compatibility in views
                $productDisp->table_name = $item->table_name;

                // Calculate Price
                $priceData = $this->pricingService->calculatePrice($productDisp);
                $productDisp->calculated_price = $priceData['total_price'];

                // Add view-specific properties if expected by legacy views
                // e.g., metal_type for display
                $productDisp->metal_type = $priceData['metal_type'];

                $products->push($productDisp);
            }
        }

        return view('user.wishlist', [
            'products' => $products
        ]);
    }

    public function toggle(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'table_name' => 'required',
        ]);

        $userId = Auth::id();
        $productId = $request->product_id;
        $tableName = $request->table_name;

        // Check if exists
        $exists = DB::table('user_wishlist')
            ->where('user_id', $userId)
            ->where('product_id', $productId)
            // We loosely check table_name too, though ID should be unique in products table.
            ->where('table_name', $tableName)
            ->exists();

        if ($exists) {
            DB::table('user_wishlist')
                ->where('user_id', $userId)
                ->where('product_id', $productId)
                ->where('table_name', $tableName)
                ->delete();
            $action = 'removed';
        } else {
            DB::table('user_wishlist')->insert([
                'user_id' => $userId,
                'product_id' => $productId,
                'table_name' => $tableName,
                // 'created_at' => now() 
            ]);
            $action = 'added';
        }

        // Get updated count
        $count = DB::table('user_wishlist')->where('user_id', $userId)->count();

        return response()->json([
            'status' => 'success',
            'action' => $action,
            'count' => $count,
            'message' => $action === 'added' ? 'Added to wishlist' : 'Removed from wishlist'
        ]);
    }

    public function remove(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'table_name' => 'required',
        ]);

        $userId = Auth::id();
        DB::table('user_wishlist')
            ->where('user_id', $userId)
            ->where('product_id', $request->product_id)
            ->where('table_name', $request->table_name)
            ->delete();

        return redirect()->back()->with('success', 'Item removed from wishlist');
    }
}
