<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\CustomerOrder;

class OrderController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login');
        }

        $orders = CustomerOrder::where('user_id', $user->user_id)
            ->orderBy('created_at', 'desc')
            ->get();

        // Enrich items with product details (image, name, etc.)
        // Since we don't have a direct relationship to a single product table, we manually fetch.
        // Actually, CustomerOrder has many Items.
        // We need to fetch items.
        // Let's lazy load items: $orders->load('items'); -> Assuming relationship exists.
        // Wait, I haven't defined relationship in CustomerOrder model yet.
        // I should probably define it or just use manual query for now to be safe and fast.

        // Let's fetch items manually for each order to be safe or define relationship.
        // Defining relationship is better.

        // Efficient Bulk Fetch for Products
        $allProductCodes = collect();
        foreach ($orders as $order) {
            $items = \App\Models\CustomerOrderItem::where('order_id', $order->order_id)->get();
            $order->items = $items;
            $allProductCodes = $allProductCodes->merge($items->pluck('product_code'));
        }

        $dbProducts = \App\Models\Product::with('images')
            ->whereIn('product_code', $allProductCodes->unique())
            ->get()
            ->keyBy('product_code');

        foreach ($orders as $order) {
            foreach ($order->items as $item) {
                if ($product = $dbProducts->get($item->product_code)) {
                    $item->product_name = $product->name;
                    // Get primary image or first image
                    $primaryImg = $product->images->where('is_primary', true)->first();
                    $item->product_image = $primaryImg ? $primaryImg->image_path : ($product->images->first()->image_path ?? 'placeholder.jpg');

                    $item->color = $product->metal_type ?? ''; // Add field if exists or derive
                    $item->size = $product->size ?? '';
                } else {
                    $item->product_name = 'Product (Discontinued)'; // Or fallback
                    $item->product_image = 'placeholder.jpg';
                }
            }
        }

        return view('user.orders', compact('orders'));
    }
}
