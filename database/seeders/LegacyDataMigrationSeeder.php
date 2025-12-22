<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Category;
use App\Models\Metal;
use App\Models\MetalPurity;
use App\Models\ProductImage;

class LegacyDataMigrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * This seeder looks for legacy tables (e.g., '22kgold_product_necklaces')
     * and migrates their data into the new 'products' table.
     */
    public function run(): void
    {
        // Define all legacy tables and their mapping to Metal/Purity
        $legacyMap = [
            // 22K Gold
            '22kgold' => ['metal' => 'Gold', 'purity' => '22K Gold'],
            // 18K Gold
            '18kgold' => ['metal' => 'Gold', 'purity' => '18K Gold'],
            // Silver
            'silver' => ['metal' => 'Silver', 'purity' => '925 Silver'], // Assumption
            // Rose Gold
            'rosegold' => ['metal' => 'Rose Gold', 'purity' => '18K Rose Gold'],
            // 18K Diamond (18kdgold)
            '18kdgold' => ['metal' => 'Gold', 'purity' => '18K Gold', 'diamond' => true],
            '18kd' => ['metal' => 'Gold', 'purity' => '18K Gold', 'diamond' => true], // Sometimes named 18kd_
        ];

        // Categories Map (Legacy Suffix -> New Slug)
        $catMap = [
            'necklaces' => 'necklaces',
            'pendants' => 'pendants',
            'bracelets' => 'bracelets',
            'bangles' => 'bangles',
            'anklets' => 'anklets',
            'earrings' => 'earrings',
            'studs' => 'studs',
            'rings' => 'rings',
            'nose_pins' => 'nose-pins',
            'chains' => 'chains',
            'fancy_chain' => 'fancy-chains',
            'second_studs' => 'second-studs',
        ];

        foreach ($legacyMap as $prefix => $meta) {
            foreach ($catMap as $suffix => $slug) {
                $tableName = "{$prefix}_product_{$suffix}";
                
                if (Schema::hasTable($tableName)) {
                    $this->command->info("Migrating from {$tableName}...");
                    $this->migrateTable($tableName, $meta, $slug);
                }
            }
        }
    }

    private function migrateTable($tableName, $meta, $categorySlug)
    {
        $rows = DB::table($tableName)->get();
        
        $metal = Metal::where('name', $meta['metal'])->first();
        $purity = MetalPurity::where('name', $meta['purity'])->first();
        $category = Category::where('slug', $categorySlug)->first();

        foreach ($rows as $row) {
            // Check if exists
            if (Product::where('product_code', $row->product_code)->exists()) {
                continue;
            }

            // Create Product
            $product = Product::create([
                'product_code' => $row->product_code,
                'name' => $row->name ?? 'Unknown Product',
                // Handle null slug or duplicate slug possibility
                'slug' => Str::slug($row->name . '-' . $row->product_code),
                'description' => $row->description,
                
                'category_id' => $category ? $category->id : null,
                'metal_id' => $metal ? $metal->id : null,
                'metal_purity_id' => $purity ? $purity->id : null,
                
                'stock_quantity' => $row->stock_quantity ?? 0,
                'is_featured' => ($row->is_featured ?? 0) == 1,
                'delist' => ($row->delist ?? 0) == 1,
                
                'gender' => $row->gender ?? 'Unisex',
                'size' => $row->size,
                'gross_weight' => $row->gross_weight ?? 0,
                'net_weight' => $row->net_weight, // Nullable in new DB
                
                // Specs
                'stone_available' => $row->stone_available ?? 0,
                'stone_cost' => $row->stone_cost,
                'diamond_available' => $row->diamond_available ?? 0,
                'dia_count' => $row->dia_count,
                'dia_cent' => $row->dia_cent,
                
                // SEO
                'search_keywords' => $row->search_keywords ?? null,
            ]);

            // Migrate Images
            // Legacy columns: img1_webp, img2 (main), img3, img4, img5
            $images = [];
            
            // img2 is usually Main in legacy view logic (index 0 in loop $i=2)
            if (!empty($row->img2)) {
                $images[] = ['path' => $row->img2, 'primary' => true, 'sort' => 0];
            }
            if (!empty($row->img1_webp)) {
                $images[] = ['path' => $row->img1_webp, 'primary' => false, 'sort' => 1];
            }
            if (!empty($row->img3)) {
                $images[] = ['path' => $row->img3, 'primary' => false, 'sort' => 2];
            }
            if (!empty($row->img4)) {
                $images[] = ['path' => $row->img4, 'primary' => false, 'sort' => 3];
            }
            if (!empty($row->img5)) {
                $images[] = ['path' => $row->img5, 'primary' => false, 'sort' => 4];
            }

            foreach ($images as $img) {
                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $img['path'],
                    'is_primary' => $img['primary'],
                    'sort_order' => $img['sort']
                ]);
            }
        }
    }
}
