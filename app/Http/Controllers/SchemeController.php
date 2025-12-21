<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SchemeController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $user = Auth::user();

        // Fetch completed schemes count
        $completed_count = DB::table('user_schemes')
            ->where('user_id', $user_id)
            ->where('status', 'completed')
            ->count();

        // Fetch active schemes with their details
        // Legacy: JOIN gold_schemes gs ON us.scheme_type = gs.scheme_code
        $schemes = DB::table('user_schemes as us')
            ->join('gold_schemes as gs', 'us.scheme_type', '=', 'gs.scheme_code')
            ->where('us.user_id', $user_id)
            ->where('us.status', 'active')
            ->select('us.*', 'gs.scheme_name', 'gs.bonus_amount', 'gs.final_value')
            ->get();

        $active_scheme_ids = $schemes->pluck('id')->toArray();
        $scheme_count = $schemes->count();

        // Check for pending payments for each scheme
        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;

        foreach ($schemes as $scheme) {
            $has_payment = DB::table('scheme_payments')
                ->where('scheme_id', $scheme->id)
                ->whereMonth('payment_date', $currentMonth)
                ->whereYear('payment_date', $currentYear)
                ->exists();
            
            $scheme->payment_pending = !$has_payment;
        }

        // Fetch payments for active schemes for passbook
        $payments = collect();
        $total_paid = 0;
        $total_bonus = 0;

        if ($scheme_count > 0) {
            $payments = DB::table('scheme_payments as sp')
                ->join('user_schemes as us', 'us.id', '=', 'sp.scheme_id')
                ->where('sp.user_id', $user_id)
                ->whereIn('sp.scheme_id', $active_scheme_ids)
                ->orderBy('sp.payment_date', 'desc')
                ->select('sp.*', 'us.scheme_type')
                ->get();

            // Calculate totals
            $total_paid = DB::table('scheme_payments')
                ->where('user_id', $user_id)
                ->whereIn('scheme_id', $active_scheme_ids)
                ->sum('amount');
            
            // Calculate total bonus
            // Get all map of gold schemes for bonus calc
            $gold_schemes_map = DB::table('gold_schemes')
                ->where('status', 'active')
                ->pluck('bonus_amount', 'scheme_code');

            foreach ($schemes as $scheme) {
                if (isset($gold_schemes_map[$scheme->scheme_type])) {
                    $total_bonus += $gold_schemes_map[$scheme->scheme_type];
                }
            }
        }

        return view('user.schemes', compact(
            'schemes', 
            'scheme_count', 
            'completed_count', 
            'payments', 
            'total_paid', 
            'total_bonus',
            'user'
        ));
    }
}
