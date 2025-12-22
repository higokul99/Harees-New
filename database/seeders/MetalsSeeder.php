<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Metals
        $goldId = DB::table('metals')->insertGetId(['name' => 'Gold']);
        $silverId = DB::table('metals')->insertGetId(['name' => 'Silver']);
        $platinumId = DB::table('metals')->insertGetId(['name' => 'Platinum']);
        $roseGoldId = DB::table('metals')->insertGetId(['name' => 'Rose Gold']);

        // 2. Metal Purities
        DB::table('metal_purities')->insert([
            // Gold
            ['metal_id' => $goldId, 'name' => '18K Gold', 'purity_value' => 0.7500],
            ['metal_id' => $goldId, 'name' => '22K Gold', 'purity_value' => 0.9160],
            ['metal_id' => $goldId, 'name' => '24K Gold', 'purity_value' => 0.9990],
            
            // Silver
            ['metal_id' => $silverId, 'name' => '925 Silver', 'purity_value' => 0.9250],
            ['metal_id' => $silverId, 'name' => 'Fine Silver', 'purity_value' => 0.9990],

            // Rose Gold (Often 18K alloy)
            ['metal_id' => $roseGoldId, 'name' => '18K Rose Gold', 'purity_value' => 0.7500],
            
            // Platinum
            ['metal_id' => $platinumId, 'name' => 'Platinum 950', 'purity_value' => 0.9500],
        ]);
    }
}
