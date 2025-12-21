<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Services\PriceCalculator;

class WishlistController extends Controller
{
    protected $priceCalculator;

    public function __construct(PriceCalculator $priceCalculator)
    {
        $this->priceCalculator = $priceCalculator;
    }

    public function index()
    {
        $userId = Auth::id();
        $wishlistItems = DB::table('user_wishlist')
            ->where('user_id', $userId)
            ->get();

        $products = collect();

        foreach ($wishlistItems as $item) {
            $tableName = $item->table_name;
            $productId = $item->product_id;

            // Check if table exists (reusing logic or robust check)
            if (!\Illuminate\Support\Facades\Schema::hasTable($tableName)) {
                continue;
            }

            $product = DB::table($tableName)->where('id', $productId)->first();

            if ($product) {
                $product->table_name = $tableName;
                $priceData = $this->priceCalculator->calculatePrice($product->product_code, $tableName);
                $product->calculated_price = ceil($priceData[0]);
                $products->push($product);
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
                // 'created_at' => now() // Assuming raw query, no timestamps unless column exists. Legacy likely no timestamps or simple ones.
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
