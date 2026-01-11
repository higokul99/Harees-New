<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Services\PricingService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    protected $pricingService;

    public function __construct(PricingService $pricingService)
    {
        $this->pricingService = $pricingService;
    }

    /**
     * Check if product rates should be hidden based on IMS setting
     */
    private function shouldHideRates()
    {
        try {
            // Query the IMS database site_settings table
            $setting = \DB::connection('mysql')->table('site_settings')
                ->where('option_name', 'hide_product_rates')
                ->first();

            // Return true if status is 1 (hide rates), false otherwise
            return $setting ? (bool)$setting->status : false;
        } catch (\Exception $e) {
            // If table doesn't exist or error, default to showing rates
            return false;
        }
    }

    /**
     * Display product listing by Category.
     * URL pattern: /collections/{category_slug}
     */
    public function index(Request $request, $categorySlug = null)
    {
        // If no slug provided, maybe redirect to 'all' or show root categories
        // Assuming the route passes the slug. 
        // Old logic used 'type' and 'name' query params. We support that for backward compatibility or move to clean URLs.
        // Let's support both clean URLs (if route changes) and legacy query params.

        $query = Product::query()->with('category', 'images', 'metalPurity');
        $title = 'Products';
        +$category = null; // Initialize to prevent undefined variable error

        // 1. Filter by Category (Legacy 'name' param or clean slug)
        $catName = $request->query('name') ?? $categorySlug;
        if ($catName) {
            // Find category by slug (or name if legacy)
            // Assuming we seed categories with slugs matching the old 'name' param (e.g., 'anklets')
            $category = Category::where('slug', $catName)->orWhere('name', $catName)->first();

            if ($category) {
                // Filter products by this category's ID directly (flat structure)
                $query->where('category_id', $category->category_id);
                $title = $category->name;
            } else {
                // Category requested but not found (e.g. invalid slug 'nosepins')
                // Force empty result to prevent showing all products of 'type'
                $query->where('category_id', 0);
                $title = 'Category Not Found';
            }
        }

        // 2. Filter by Metal Type / Purity (Dynamic Lookup)
        $type = $request->query('type');
        if ($type) {
            $type = strtolower($type);
            $explicitDiamondRequest = str_contains($type, 'diamond');
            $explicitSilverRequest = str_contains($type, 'silver') && ! str_contains($type, 'rose');

            // A. Search Metal Table (e.g. 'Gold', 'Silver')
            $metalIds = \App\Models\Metal::where('name', 'LIKE', "%{$type}%")->pluck('metal_id');

            // B. Search Purity Table (e.g. '22k', '18k', 'Diamond')
            $purities = \App\Models\MetalsPurity::where('name', 'LIKE', "%{$type}%")->get();

            if (! $explicitDiamondRequest) {
                // If user didn't explicitly ask for diamond, remove purities that contain "Diamond"
                // e.g. "18K" shouldn't match "18K Gold & Diamonds"
                $purities = $purities->reject(function ($p) {
                    return str_contains(strtolower($p->name), 'diamond');
                });
            }

            if ($explicitSilverRequest) {
                // If asking for Silver (and NOT Rose Gold), remove any match that mentions 'rose'
                // This handles "Rose Gold Silver" appearing in "Silver" results
                $purities = $purities->reject(function ($p) {
                    return str_contains(strtolower($p->name), 'rose');
                });

                // STRICT EXCLUSION: "Rose Gold Silver" shares the same metal_id as "Silver".
                // We must explicitly exclude the "Rose Gold" purity IDs if we are in this strict mode.
                $roseGoldPurityIds = \App\Models\MetalsPurity::where('name', 'LIKE', '%rose%')
                    ->whereIn('metal_id', $metalIds)
                    ->pluck('metalpurity_id');

                if ($roseGoldPurityIds->isNotEmpty()) {
                    $query->whereNotIn('metalpurity_id', $roseGoldPurityIds);
                }
            }

            $purityIds = $purities->pluck('metalpurity_id');

            if ($metalIds->isNotEmpty()) {
                // Priority: Metal Match (Broader)
                $query->whereIn('metal_id', $metalIds);
            } elseif ($purityIds->isNotEmpty()) {
                // Secondary: Purity Match (Specific)
                $query->whereIn('metalpurity_id', $purityIds);
            }

            // Strict Flag Enforcement
            if ($explicitDiamondRequest) {
                $query->where('diamond_available', true);
            } else {
                // If not explicitly asking for diamonds, don't show them (even if metal match allows it)
                $query->where('diamond_available', false);
            }
        }

        // 3. Common Filters
        $query->where('is_visible', true)
            ->where('delist', false)
            ->where('stock_quantity', '>', 0)
            ->orderByDesc('is_featured')
            ->orderByDesc('is_featured')
            ->orderBy('product_id', 'asc');

        // Execute Query
        $products = $query->paginate(24); // Use proper pagination

        // Calculate Prices
        $products->getCollection()->transform(function ($product) {
            $priceData = $this->pricingService->calculatePrice($product);
            $product->calculated_price = $priceData['total_price'];
            $product->price_details = $priceData;
            return $product;
        });

        // Legacy: Wishlist needs 'table_name'. Use category slug or 'products'.
        $tableName = $category ? $category->slug : 'products';

        return view('product.index', [
            'products' => $products,
            'title' => $title,
            'category' => $category ?? null,
            'tableName' => $tableName,
            'hideRates' => $this->shouldHideRates()
        ]);
    }

    /**
     * Legacy product-all.php route handler.
     * Maps 'type' query param (bangles, 22k, etc.) to filtered index.
     */
    public function all(Request $request)
    {
        // Legacy: 'type' was used for both Category (bangles) and Metal (22kgold).
        // We pass it as the categorySlug. If it's a category, index matches category.
        // If not, index checks 'type' param for metal keywords.
        return $this->index($request, $request->query('type'));
    }

    /**
     * Search suggestions API (AJAX).
     */
    public function suggestions(Request $request)
    {
        $query = trim($request->query('query'));
        if (empty($query) || strlen($query) < 2) {
            return response()->json([]);
        }

        $suggestions = Product::where('name', 'LIKE', "%{$query}%")
            ->orWhere('product_code', 'LIKE', "%{$query}%")
            ->limit(5)
            ->pluck('name');

        return response()->json($suggestions);
    }

    /**
     * Show single product.
     * Supports both clean URLs (passed as arg) and legacy query params (?id=1&table=...).
     */
    public function show(Request $request, $productSlug = null)
    {
        $product = null;

        // 1. Try finding by Slug directly (Clean URL)
        if ($productSlug) {
            $product = Product::with(['category', 'images', 'metalPurity'])
                ->where('slug', $productSlug)
                ->orWhere('product_code', $productSlug)
                ->first();
        }

        // 2. Legacy: Find by ID (ignoring table name as we are now unified)
        if (!$product && $request->has('id')) {
            $id = $request->query('id');
            $product = Product::with(['category', 'images', 'metalPurity'])
                ->where('product_id', $id)
                ->first();
        }

        // 3. Last Resort: product_code query param
        if (!$product && $request->has('product_code')) {
            $product = Product::with(['category', 'images', 'metalPurity'])
                ->where('product_code', $request->query('product_code'))
                ->first();
        }

        if (!$product) {
            abort(404);
        }

        // Calculate Price
        $priceData = $this->pricingService->calculatePrice($product);

        // Similar Products (Same Category, Metal, and Purity)
        $similarProducts = Product::where('category_id', $product->category_id)
            ->where('metal_id', $product->metal_id)
            ->where('metalpurity_id', $product->metalpurity_id)
            ->where('product_id', '!=', $product->product_id)
            ->where('is_visible', true)
            ->limit(8)
            ->get();

        $similarProducts->transform(function ($sim) {
            $p = $this->pricingService->calculatePrice($sim);
            $sim->calculated_price = $p['total_price'];
            // Legacy view expects 'table_name' for link generation, though we don't strict need it if we updated view.
            // We'll set a dummy or actual category slug to help.
            $sim->table_name = $sim->category ? $sim->category->slug : 'products';
            return $sim;
        });

        // Legacy View Expects 'tableName'. We can pass category slug or 'products'.
        $tableName = $product->category ? $product->category->slug : 'products';

        return view('product.show', [
            'product' => $product,
            'tableName' => $tableName, // Compatibility
            'priceData' => $priceData,
            'similarProducts' => $similarProducts,
            'finalPrice' => $priceData['total_price'],
            'metalCost' => $priceData['metal_cost'],
            'makingCharges' => $priceData['making_charges'],
            'gst' => $priceData['gst'],
            'metalType' => $priceData['metal_type'],
            'hideRates' => $this->shouldHideRates()
        ]);
    }

    /**
     * Search products.
     */
    public function search(Request $request)
    {
        $query = trim($request->query('query'));
        if (empty($query)) {
            return redirect()->route('products.index');
        }

        // Simple Unified Search
        $products = Product::with(['category', 'images'])
            ->where('is_visible', true)
            ->where('delist', false)
            ->where(function ($q) use ($query) {
                $q->where('name', 'LIKE', "%{$query}%")
                    ->orWhere('description', 'LIKE', "%{$query}%")
                    ->orWhere('product_code', 'LIKE', "%{$query}%");
            })
            ->orderByDesc('is_featured')
            ->paginate(20);

        // Calculate Prices
        $products->getCollection()->transform(function ($product) {
            $priceData = $this->pricingService->calculatePrice($product);
            $product->calculated_price = $priceData['total_price'];
            return $product;
        });

        return view('product.search', [
            'products' => $products,
            'query' => $query,
            'title' => "Search Results for '$query'"
        ]);
    }
}
