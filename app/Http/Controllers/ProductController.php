<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display product listing
     */
    public function index(Request $request)
    {
        $type = $request->query('type');
        $name = $request->query('name');

        // Fetch products from database
        $query = DB::table('products')->where('status', 1);

        if ($type) {
            $query->where('type', $type);
        }

        if ($name) {
            $query->where('category', $name);
        }

        $products = $query->paginate(20);

        return view('products.index', compact('products', 'type', 'name'));
    }

    /**
     * Display all products
     */
    public function all(Request $request)
    {
        $type = $request->query('type');

        $query = DB::table('products')->where('status', 1);

        if ($type) {
            $query->where('category', $type);
        }

        $products = $query->paginate(20);

        return view('products.all', compact('products', 'type'));
    }

    /**
     * Show single product
     */
    public function show($id)
    {
        $product = DB::table('products')->where('id', $id)->first();

        if (!$product) {
            abort(404);
        }

        return view('products.show', compact('product'));
    }

    /**
     * Search products
     */
    public function search(Request $request)
    {
        $query = $request->query('query');

        $products = DB::table('products')
            ->where('status', 1)
            ->where(function($q) use ($query) {
                $q->where('name', 'LIKE', "%{$query}%")
                  ->orWhere('description', 'LIKE', "%{$query}%")
                  ->orWhere('category', 'LIKE', "%{$query}%");
            })
            ->paginate(20);

        return view('products.search', compact('products', 'query'));
    }

    /**
     * Get search suggestions (AJAX)
     */
    public function suggestions(Request $request)
    {
        $query = $request->query('query');

        if (strlen($query) < 2) {
            return response()->json([]);
        }

        $suggestions = DB::table('products')
            ->where('status', 1)
            ->where('name', 'LIKE', "%{$query}%")
            ->limit(5)
            ->get(['id', 'name', 'category']);

        return response()->json($suggestions);
    }
}
