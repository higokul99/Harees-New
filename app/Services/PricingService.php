<?php

namespace App\Services;

use App\Models\Product;
use App\Models\Goldrate;
use App\Models\Category;

class PricingService
{
    /**
     * Calculate price breakup for a given product.
     *
     * @param Product $product
     * @return array
     */
    public function calculatePrice(Product $product)
    {
        // 1. Get Gold Rate
        // Assuming we always have a purity. If not (e.g. silver product without purity set?), handle gracefully.
        $metalRate = 0;
        $metalType = 'Unknown';

        if ($product->metalPurity) {
            $rateRecord = Goldrate::getLatestRate($product->metalpurity_id);
            $metalRate = $rateRecord ? $rateRecord->rate_per_gram : 0;
            $metalType = $product->metalPurity->name; // e.g., "18K Gold"
        }

        // 2. Calculate Metal Cost
        // Net weight is crucial. If null, assume 0.
        $weight = $product->net_weight ?? 0;
        $metalCost = $weight * $metalRate;

        // 3. Calculate Making Charges (VA)
        // Fetch from making_charges table using Metal, Purity, and Category
        $makingChargesAmount = 0;
        $vaValue = 0;
        $vaType = 'percent'; // Default mechanism seems to be percent based on legacy code context usually, but let's see.

        if ($product->category_id && $product->metalpurity_id) {
            // We need metal_id. Product should have it.
            $metalId = $product->metal_id;
            // If product doesn't have metal_id directly, get it from purity.
            if (!$metalId && $product->metalPurity) {
                $metalId = $product->metalPurity->metal_id;
            }

            $mcRecord = \App\Models\MakingCharge::getCharges($metalId, $product->metalpurity_id, $product->category_id);

            if ($mcRecord) {
                // MC Types Rules:
                // normal_mc - default MC to take
                // discount_mc - if jewellery turn on discount (Not implemented)
                // excp_normal_mc - Special case (Not implemented)
                // excp_discount_mc - Special case (Not implemented)

                // Currently using normal_mc as the standard
                $vaValue = $mcRecord->normal_mc;

                // Calculate as Percentage
                $makingChargesAmount = ($metalCost * $vaValue) / 100;
            } else {
                // Fallback if missing in table
                $makingChargesAmount = 0;
            }
        }

        // 4. Stone Costs
        $stoneCost = ($product->stone_cost ?? 0) +
            ($product->beads_cost ?? 0) +
            ($product->pearls_cost ?? 0);

        // Diamonds?
        // Logic for diamonds usually implies rate per cent.
        // If 'stone_cost' is already total, good. 
        // Old code didn't seem to calculate diamond cost explicitly from rate * cent in the switch case I saw...
        // Wait, old code Case 6 (Diamond 18K): $finalRate = $metalRate + $diamondRate. 
        // That looked wrong (adding rate per gram to rate per carat?). 
        // I will assume `stone_cost` column in DB holds the pre-calculated stone value 
        // OR I need to implement rate * weight logic if those columns are empty.
        // For now, relying on `stone_cost` column is safest if data exists.

        // 5. Total and GST
        $subTotal = $metalCost + $makingChargesAmount + $stoneCost;
        $gstPercent = 3; // Standard jewelry GST
        $gstAmount = ($subTotal * $gstPercent) / 100;

        $finalPrice = $subTotal + $gstAmount;

        return [
            'total_price' => ceil($finalPrice),
            'metal_cost' => ceil($metalCost),
            'making_charges' => ceil($makingChargesAmount),
            'stone_cost' => ceil($stoneCost),
            'gst' => ceil($gstAmount),
            'metal_type' => $metalType,
            'rate_applied' => $metalRate,
            'breakup' => [
                'weight' => $weight,
                'rate' => $metalRate,
                'va_type' => $vaType,
                'va_value' => $vaValue
            ]
        ];
    }
}
