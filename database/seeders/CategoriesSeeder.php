<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Parent Categories (Collections) if wanted, or just flat for now based on old "tables"
        // Let's create a few sample Categories mapping to old table types
        
        $categories = [
            // Core Categories found in legacy tables
            ['name' => 'Necklaces', 'slug' => 'necklaces', 'making_charges' => 12.00, 'type' => 'percent', 'waste' => 0.00],
            ['name' => 'Pendants', 'slug' => 'pendants', 'making_charges' => 8.00, 'type' => 'percent', 'waste' => 0.00],
            ['name' => 'Bracelets', 'slug' => 'bracelets', 'making_charges' => 10.00, 'type' => 'percent', 'waste' => 0.00],
            ['name' => 'Bangles', 'slug' => 'bangles', 'making_charges' => 14.50, 'type' => 'percent', 'waste' => 0.00],
            ['name' => 'Anklets', 'slug' => 'anklets', 'making_charges' => 15.00, 'type' => 'percent', 'waste' => 0.00],
            ['name' => 'Earrings', 'slug' => 'earrings', 'making_charges' => 10.00, 'type' => 'percent', 'waste' => 0.00],
            ['name' => 'Studs', 'slug' => 'studs', 'making_charges' => 8.00, 'type' => 'percent', 'waste' => 0.00],
            ['name' => 'Rings', 'slug' => 'rings', 'making_charges' => 8.00, 'type' => 'percent', 'waste' => 0.00],
            ['name' => 'Nose Pins', 'slug' => 'nose-pins', 'making_charges' => 5.00, 'type' => 'percent', 'waste' => 0.00],
            ['name' => 'Chains', 'slug' => 'chains', 'making_charges' => 11.00, 'type' => 'percent', 'waste' => 0.00],
            ['name' => 'Fancy Chains', 'slug' => 'fancy-chains', 'making_charges' => 12.00, 'type' => 'percent', 'waste' => 0.00],
            ['name' => 'Second Studs', 'slug' => 'second-studs', 'making_charges' => 8.00, 'type' => 'percent', 'waste' => 0.00],
        ];

        foreach ($categories as $cat) {
            DB::table('categories')->insert([
                'name' => $cat['name'],
                'slug' => $cat['slug'],
                'making_charges' => $cat['making_charges'],
                'making_charges_type' => $cat['type'],
                'waste_percentage' => $cat['waste'],
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
