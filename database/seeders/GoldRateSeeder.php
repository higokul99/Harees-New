<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GoldRateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get Purity IDs
        $purity18k = DB::table('metal_purities')->where('name', '18K Gold')->value('id');
        $purity22k = DB::table('metal_purities')->where('name', '22K Gold')->value('id');
        $puritySilver = DB::table('metal_purities')->where('name', '925 Silver')->value('id');

        // Insert Rates (Sample Data)
        $rates = [
            [
                'metal_purity_id' => $purity22k,
                'rate_per_gram' => 5500.00,
                'effective_date' => now()->format('Y-m-d'),
            ],
            [
                'metal_purity_id' => $purity18k,
                'rate_per_gram' => 4500.00,
                'effective_date' => now()->format('Y-m-d'),
            ],
            [
                'metal_purity_id' => $puritySilver,
                'rate_per_gram' => 75.00,
                'effective_date' => now()->format('Y-m-d'),
            ],
        ];

        foreach ($rates as $rate) {
            if ($rate['metal_purity_id']) {
                DB::table('gold_rates')->insert($rate);
            }
        }
    }
}
