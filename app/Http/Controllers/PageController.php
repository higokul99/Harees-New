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
        // Fetch latest rate directly from goldrate table
        $latestRate = \App\Models\GoldRate::orderBy('updated_on', 'desc')->first();

        // Initialize rates
        $currentRate18k = $latestRate ? $latestRate->{'18k_1gm'} : 0;
        $currentRate22k = $latestRate ? $latestRate->{'22k_1gm'} : 0;
        $updatedOn = $latestRate ? $latestRate->updated_on : now();

        // Initialize variables
        $data = [
            'rate_18k' => $currentRate18k,
            'rate_22k' => $currentRate22k,
            'date' => $updatedOn,

            // Default values
            'change_18k' => 0,
            'change_22k' => 0,
            'change_percent_18k' => 0,
            'change_percent_22k' => 0,
            'trend_18k' => 'Neutral',
            'trend_22k' => 'Neutral',
            'month_change_18k' => 0,
            'month_change_22k' => 0,
            'month_percent_18k' => 0,
            'month_percent_22k' => 0,
            'prev' => null,
            'month_ago' => null
        ];

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

        $groupedPositions = $positions->groupBy(function ($item) {
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
        $latestRate = \App\Models\GoldRate::orderBy('updated_on', 'desc')->first();
        $goldRate22k = $latestRate ? $latestRate->{'22k_1gm'} : 0;

        return view('pages.advance-gold-booking', compact('goldRate22k'));
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
