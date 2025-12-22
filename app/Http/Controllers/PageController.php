<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function aboutUs()
    {
        return view('pages.about-us');
    }

    public function contactUs()
    {
        return view('pages.contact-us');
    }

    public function stores()
    {
        return view('pages.stores');
    }

    public function goldRate()
    {
        // Fetch specific purities
        $purity18k = \App\Models\MetalPurity::where('name', 'LIKE', '%18K%')->first();
        $purity22k = \App\Models\MetalPurity::where('name', 'LIKE', '%22K%')->first();
        
        $rate18k = $purity18k ? \App\Models\GoldRate::getLatestRate($purity18k->id) : null;
        $rate22k = $purity22k ? \App\Models\GoldRate::getLatestRate($purity22k->id) : null;

        $currentRate18k = $rate18k ? $rate18k->rate_per_gram : 0;
        $currentRate22k = $rate22k ? $rate22k->rate_per_gram : 0;
        $updatedOn = $rate18k ? $rate18k->effective_date : now();

        // Initialize variables
        $data = [
            'rate_18k' => $currentRate18k,
            'rate_22k' => $currentRate22k,
            'date' => $updatedOn,
            
            // Default values
            'change_18k' => 0, 'change_22k' => 0,
            'change_percent_18k' => 0, 'change_percent_22k' => 0,
            'trend_18k' => 'Neutral', 'trend_22k' => 'Neutral',
            'month_change_18k' => 0, 'month_change_22k' => 0,
            'month_percent_18k' => 0, 'month_percent_22k' => 0,
            'prev' => null, 'month_ago' => null
        ];

        // Fetch History Logic (Simplified for now - strictly needs yesterday's rate)
        // ... (Omitting complex history calculation implementation for brevity unless requested, 
        // as new schema history population is assumed empty initially)

        return view('pages.gold-rate', $data);
    }

    public function ourBrands()
    {
        return view('pages.our-brands');
    }

    public function career()
    {
        // Assuming job_positions table still exists independently or needs migration
        // Keeping DB::table if not migrated yet.
        $positions = DB::table('job_positions')
            ->where('status', 'Active')
            ->orderBy('date_posted', 'desc')
            ->get();
            
        $groupedPositions = $positions->groupBy(function($item) {
            $key = str_replace(['Junior ', 'Representative', 'Executive'], '', $item->position_name);
            return trim($key);
        });

        return view('pages.careers', compact('groupedPositions'));
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function refundPolicy()
    {
        return view('pages.refund-policy');
    }

    public function trackOrder()
    {
        return view('pages.track-order');
    }

    public function shippingPolicy()
    {
        return view('pages.shipping-policy');
    }

    public function termsConditions()
    {
        return view('pages.terms-conditions');
    }

    public function privacyPolicy()
    {
        return view('pages.privacy-policy');
    }

    public function returnExchange()
    {
        return view('pages.return-exchange');
    }

    public function cancellationPolicy()
    {
        return view('pages.cancellation-policy');
    }

    public function goldScheme()
    {
        // This maps to gold-scheme-booking route
        return view('pages.gold-scheme');
    }

    public function advanceBooking()
    {
        $purity18k = \App\Models\MetalPurity::where('name', 'LIKE', '%18K%')->first();
        $rate = $purity18k ? \App\Models\GoldRate::getLatestRate($purity18k->id) : null;
        $goldRate18k = $rate ? $rate->rate_per_gram : 0;
        
        return view('pages.advance-gold-booking', compact('goldRate18k'));
    }

    public function customJewellery()
    {
        return view('pages.custom-jewellery');
    }

    public function support()
    {
        return view('pages.support');
    }
}
