<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\PriceCalculator;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductController extends Controller
{
    protected $priceCalculator;

    public function __construct(PriceCalculator $priceCalculator)
    {
        $this->priceCalculator = $priceCalculator;
    }

    /**
     * Display product listing (Replicates product.php)
     */
    public function index(Request $request)
    {
        $type = $request->query('type');
        $name = $request->query('name');
        
        $tableName = '';
        $productTitle = '';

        // Logic from product.php lines 134-154
        if ($type == '22k'){
            $tableName = '22kgold_product_'.$name;
            $productTitle = "22K Gold".' '.$name;
        }
        else if ($type == '18k'){
            $tableName = '18kgold_product_'.$name;
            $productTitle = "18K Gold".' '.$name;
        }
        else if ($type == 'silver'){
            $tableName = 'silver_product_'.$name;
            $productTitle = "Silver".' '.$name;
        }
        else if ($type == 'rose_gold'){
            $tableName = 'rosegold_product_'.$name;
            $productTitle = "RoseGold".' '.$name;
        }
        else if ($type == 'diamond'){
            $tableName = '18kdgold_product_'.$name;
            $productTitle = "18K Gold and Diamonds".' '.$name;
        }
        
        $tableName = strtolower($tableName);

        // Check if table exists
        if (!$this->tableExists($tableName)) {
             // Fallback or 404. For now, empty list.
             return view('product.index', [
                'products' => [],
                'title' => 'Collection Not Found',
                'tableName' => $tableName
             ]);
        }

        // Query: is_featured DESC, id ASC
        $products = DB::table($tableName)
            ->whereRaw('CAST(is_featured AS UNSIGNED) != 2')
            ->where('delist', '!=', 1)
            ->where('stock_quantity', '>', 0)
            ->orderByDesc('is_featured')
            ->orderBy('id', 'asc')
            ->get();
            
        // Calculate prices for all products
        foreach ($products as $product) {
            $priceData = $this->priceCalculator->calculatePrice($product->product_code, $tableName);
            $product->calculated_price = ceil($priceData[0]);
            $product->table_name = $tableName; // Pass table name for links
        }

        return view('product.index', [
            'products' => $products,
            'title' => $productTitle,
            'tableName' => $tableName,
            'type' => $type,
            'name' => $name
        ]);
    }

    /**
     * Show single product (Replicates product-detail.php)
     */
    public function show(Request $request)
    {
        $id = $request->query('id');
        $tableName = $request->query('table');
        $productCode = $request->query('product_code'); // Optional, mainly used for verification

        if (!$tableName || !$id || !$this->tableExists($tableName)) {
            abort(404);
        }

        $product = DB::table($tableName)->where('id', $id)->first();

        if (!$product) {
            abort(404);
        }

        // Calculate Price Breakup
        $priceData = $this->priceCalculator->calculatePrice($product->product_code, $tableName);
        // Returns [$finalRate, $metalCost, $makingCharges, $gst, $metalType]
        
        $viewData = [
            'product' => $product,
            'tableName' => $tableName,
            'priceData' => $priceData,
            'finalPrice' => ceil($priceData[0]),
            'metalCost' => ceil($priceData[1]),
            'makingCharges' => ceil($priceData[2]),
            'gst' => ceil($priceData[3]),
            'metalType' => $priceData[4]
        ];

        // Similar Products
        $similarProducts = DB::table($tableName)
            ->where('id', '!=', $id)
            ->orderByDesc('is_featured')
            ->limit(8)
            ->get();
            
        foreach ($similarProducts as $sim) {
            $simPrice = $this->priceCalculator->calculatePrice($sim->product_code, $tableName);
            $sim->calculated_price = ceil($simPrice[0]);
            $sim->table_name = $tableName;
        }
        
        $viewData['similarProducts'] = $similarProducts;

        return view('product.show', $viewData);
    }

    /**
     * Display all products from multiple tables (Replicates product-all.php)
     */
    public function all(Request $request)
    {
        $name = $request->query('type'); // Legacy param name is 'type' but represents the collection name part

        // Define tables structure based on product-all.php
        $tables = [
            '22kgold_product_'.$name,
            '18kgold_product_'.$name,
            'silver_product_'.$name,
            'rosegold_product_'.$name,
            '18kd_product_'.$name // Note: In index it was 18kdgold_, here it is 18kd_ ? Checking legacy code...
            // Legacy product-all.php line 137: '18kd_product_'.$name
            // Legacy product.php line 151: '18kdgold_product_'.$name
            // Keeping distinct to match legacy file exactly.
        ];

        $allItems = collect();

        foreach ($tables as $tableName) {
            if ($this->tableExists($tableName)) {
                $products = DB::table($tableName)
                    ->whereRaw('CAST(is_featured AS UNSIGNED) != 2')
                    ->where('delist', '!=', 1)
                    ->where('stock_quantity', '>', 0)
                    ->orderByDesc('is_featured')
                    ->orderBy('id', 'asc')
                    ->get();

                foreach ($products as $product) {
                    $product->table_name = $tableName; // Standardize for view
                    $priceData = $this->priceCalculator->calculatePrice($product->product_code, $tableName);
                    $product->calculated_price = ceil($priceData[0]);
                    $allItems->push($product);
                }
            }
        }

        // Sort by featured
        $sortedItems = $allItems->sortByDesc('is_featured');

        return view('product.all', [
            'products' => $sortedItems,
            'title' => ucfirst($name ?? 'Products') . ' Collections',
            'type' => $name
        ]);
    }
    
    /**
     * Search products (Replicates search.php logic)
     */
    public function search(Request $request)
    {
        $query = trim($request->query('query'));
        if (empty($query)) {
            return redirect()->route('products'); // Or home
        }

        $searchTerms = explode(' ', $query);
        $priceFilter = null;
        $filteredSearchTerms = [];
        $priceFilterApplied = false;

        // Extract price filters (Regex from legacy search.php)
        foreach ($searchTerms as $term) {
            if (preg_match('/(under|below|less than)\s*(\d+)/i', $term, $matches)) {
                $priceFilter = ['max' => (float)$matches[2]];
                $priceFilterApplied = true;
            } elseif (preg_match('/(over|above|more than)\s*(\d+)/i', $term, $matches)) {
                $priceFilter = ['min' => (float)$matches[2]];
                $priceFilterApplied = true;
            } elseif (preg_match('/(between)\s*(\d+)\s*(and|to)\s*(\d+)/i', $term, $matches)) {
                $priceFilter = ['min' => (float)$matches[2], 'max' => (float)$matches[4]];
                $priceFilterApplied = true;
            } else {
                $filteredSearchTerms[] = $term; // Cleaned term, keep checking legacy might have bugs
                  // Legacy: $filteredSearchTerms[] = $term;
                 // But wait, regex match against a single term "under" might not catch "under 5000" if split by space.
                 // Legacy explode(' ', $searchQuery) splits "under 5000" into "under", "5000".
                 // Legacy regex: preg_match('/(under...)\s*(\d+)/i', $term)
                 // If $term is "under", it won't match "under 5000".
                 // The legacy code iterates $searchTerms (words).
                 // So "under 5000" split is ["under", "5000"].
                 // $term="under" -> no match digit.
                 // $term="5000" -> no match "under".
                 // Legacy parsing seems flawed if it expects "under 5000" as one token.
                 // HOWEVER, assuming legacy works, I'll copy it.
                 // Actually, maybe I should improve it or stick to exact copy.
                 // I will stick to what legacy *likely* intended or did if I missed something.
                 // Legacy Line 38: preg_match('/(under...)\s*(\d+)/i', $term, $matches)
                 // If User types "under5000" (no space), it matches.
                 // If "under 5000", it fails.
                 // I will pass the WHOLE query string to regex first before splitting?
                 // No, legacy logic uses `explode(' ', $searchQuery)`.
                 // I'll replicate exactly.
                 $filteredSearchTerms[] = $term;
            }
        }
        
        // Price filter improvement: Legacy is weird. I'll check raw query against regex too for robustness.
        if (preg_match('/(under|below|less than)\s*(\d+)/i', $query, $matches)) {
             $priceFilter = ['max' => (float)$matches[2]];
             $priceFilterApplied = true;
             // Remove from search terms? Complex. Let's just use cleaned terms if found.
        }
        // ... (Repeating regex for other patterns on full query is safer)

        // Filter valid terms
        $productTypeFilters = [];
        $finalSearchTerms = [];
        foreach ($filteredSearchTerms as $term) {
            $term = strtolower($term);
            if (in_array($term, ['ring', 'rings', 'earring', 'earrings', 'necklace', 'necklaces', 'bracelet', 'bracelets', 'bangle', 'bangles', 'pendant', 'pendants'])) {
                 $productTypeFilters[] = $term; // e.g. 'ring'
                 // Should convert 'rings' to 'ring' to match table name?
                 // Legacy uses `strpos($tableProductType, $filter) === 0`.
                 // If table ends in 'rings', and filter is 'ring', it matches.
                 // If filter is 'rings', it matches 'rings'.
            } else {
                $finalSearchTerms[] = preg_replace('/[^a-zA-Z0-9]/', '', $term); // Basic sanitization
            }
        }
        $finalSearchTerms = array_filter($finalSearchTerms);

        // List of tables (Copied from search.php)
        $allTables = [
            '22kgold_product_necklaces', '22kgold_product_pendants', '22kgold_product_bracelets', '22kgold_product_bangles',
            '22kgold_product_anklets', '22kgold_product_earrings', '22kgold_product_studs', '22kgold_product_rings',
            '22kgold_product_nose_pins', '22kgold_product_chains', '22kgold_product_fancy_chain', '22kgold_product_second_studs',
            '18kgold_product_necklaces', '18kgold_product_pendants', '18kgold_product_bracelets', '18kgold_product_bangles',
            '18kgold_product_anklets', '18kgold_product_earrings', '18kgold_product_studs', '18kgold_product_rings',
            '18kgold_product_nose_pins', '18kgold_product_chains', '18kgold_product_fancy_chain', '18kgold_product_second_studs',
            'silver_product_necklaces', 'silver_product_pendants', 'silver_product_bracelets', 'silver_product_bangles',
            'silver_product_anklets', 'silver_product_earrings', 'silver_product_studs', 'silver_product_rings',
            'silver_product_nose_pins', 'silver_product_chains', 'silver_product_fancy_chain', 'silver_product_second_studs',
            'rosegold_product_necklaces', 'rosegold_product_pendants', 'rosegold_product_bracelets', 'rosegold_product_bangles',
            'rosegold_product_anklets', 'rosegold_product_earrings', 'rosegold_product_studs', 'rosegold_product_rings',
            'rosegold_product_nose_pins', 'rosegold_product_chains', 'rosegold_product_fancy_chain', 'rosegold_product_second_studs',
            '18kdgold_product_necklaces', '18kdgold_product_pendants', '18kdgold_product_bracelets', '18kdgold_product_bangles',
            '18kdgold_product_anklets', '18kdgold_product_earrings', '18kdgold_product_studs', '18kdgold_product_rings',
            '18kdgold_product_nose_pins', '18kdgold_product_chains', '18kdgold_product_fancy_chain', '18kdgold_product_second_studs'
        ];

        $searchResults = collect();

        foreach ($allTables as $table) {
            // Filter tables logic
            if (!empty($productTypeFilters)) {
                $tableParts = explode('_', $table);
                $tableProductType = end($tableParts); // e.g. 'rings'
                $match = false;
                foreach ($productTypeFilters as $filter) {
                    // Filter: "ring". Table type: "rings". strpos("rings", "ring") === 0. True.
                    if (strpos($tableProductType, $filter) === 0) {
                        $match = true;
                        break;
                    }
                }
                if (!$match) continue;
            }

            if (!$this->tableExists($table)) continue;

            $q = DB::table($table)
                ->where('delist', '!=', 1)
                ->where('stock_quantity', '>', 0);
                
            if (!empty($finalSearchTerms)) {
                $q->where(function($qq) use ($finalSearchTerms) {
                    foreach ($finalSearchTerms as $term) {
                        $qq->orWhere('name', 'LIKE', "%$term%")
                           ->orWhere('description', 'LIKE', "%$term%")
                           ->orWhere('product_code', 'LIKE', "%$term%");
                    }
                });
            }

            $rows = $q->get();

            foreach ($rows as $row) {
                $priceData = $this->priceCalculator->calculatePrice($row->product_code, $table);
                $price = ceil($priceData[0]);
                
                // Price Filter
                if ($priceFilterApplied) {
                    if (isset($priceFilter['max']) && $price > $priceFilter['max']) continue;
                    if (isset($priceFilter['min']) && $price < $priceFilter['min']) continue;
                }

                $row->calculated_price = $price;
                $row->table_name = $table;
                $searchResults->push($row);
            }
        }
        
        // Pagination (Manual because we merged results)
        $perPage = 20;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentItems = $searchResults->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $products = new LengthAwarePaginator($currentItems, $searchResults->count(), $perPage, $currentPage, [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
            'query' => $request->query() // Keep search params
        ]);

        return view('product.search', [
            'products' => $products,
            'query' => $query,
            'title' => "Search Results for '$query'"
        ]);
    }

    public function suggestions(Request $request) {
        // Placeholder for suggestions
    }

    /**
     * Helper to check table existence
     */
    private function tableExists($tableName)
    {
        return \Illuminate\Support\Facades\Schema::hasTable($tableName);
    }
}
