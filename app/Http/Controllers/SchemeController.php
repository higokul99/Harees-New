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
    
    public function enroll()
    {
        // Fetch active gold schemes for enrollment
        $schemes = DB::table('gold_schemes')
            ->where('status', 'active')
            ->orderBy('monthly_installment', 'asc') // Legacy order
            ->get();

        return view('user.enroll_scheme', compact('schemes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'scheme_type' => 'required|exists:gold_schemes,scheme_code',
        ]);

        $user_id = Auth::id();
        $scheme_type = $request->scheme_type;

        // Fetch scheme details
        $scheme_details = DB::table('gold_schemes')->where('scheme_code', $scheme_type)->first();
        if (!$scheme_details) {
            return redirect()->back()->with('error', 'Invalid scheme selected');
        }

        // Check/Update active completed schemes
        DB::table('user_schemes')
            ->where('user_id', $user_id)
            ->where('months_completed', '>=', 11)
            ->where('status', 'active')
            ->update([
                'status' => 'completed'
            ]);

        // Check for existing active schemes
        // Legacy code restricts to ONE active scheme despite T&C saying multiple. 
        // We will follow legacy CODE logic for safety/fidelity.
        $hasActive = DB::table('user_schemes')
            ->where('user_id', $user_id)
            ->where('status', 'active')
            ->exists();

        if ($hasActive) {
            return redirect()->route('schemes')->with('error', 'You already have an active scheme. Complete your current scheme before enrolling in a new one.');
        }

        // Generate Scheme Number
        // Logic: GS-HASH-USERID-RAND
        $user_hash = strtoupper(substr(md5($user_id), 0, 4));
        $padded_id = str_pad($user_id, 4, '0', STR_PAD_LEFT);
        $rand = rand(100, 999);
        $scheme_number = "GS-{$user_hash}-{$padded_id}-{$rand}";

        // Insert new scheme
        DB::table('user_schemes')->insert([
            'user_id' => $user_id,
            'scheme_type' => $scheme_type,
            'scheme_name' => $scheme_details->scheme_name,
            'monthly_amount' => $scheme_details->monthly_installment, // Note: legacy used hardcoded array, we use DB
            'start_date' => Carbon::now(),
            'status' => 'active',
            'code' => $scheme_number,
            'months_completed' => 0,
            // 'created_at' => Carbon::now(), // If table has timestamps
        ]);

        return redirect()->route('schemes')->with('msg', "Successfully enrolled in Scheme {$scheme_type}! You can make your first payment anytime.");
    }

    public function payment($scheme_id)
    {
        $user_id = Auth::id();
        $scheme = DB::table('user_schemes')->where('id', $scheme_id)->where('user_id', $user_id)->first();

        if (!$scheme) {
            return redirect()->route('schemes')->with('error', 'Invalid scheme selected');
        }

        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;
        $paymentExists = DB::table('scheme_payments')
            ->where('user_id', $user_id)->where('scheme_id', $scheme_id)
            ->whereMonth('payment_date', $currentMonth)->whereYear('payment_date', $currentYear)->exists();

        if ($paymentExists) {
            return redirect()->route('schemes')->with('error', "This month's payment already recorded");
        }

        return view('user.payment', compact('scheme'));
    }

    public function processPayment(Request $request, $scheme_id)
    {
        $request->validate(['payment_method' => 'required|in:cash,online']);
        $user_id = Auth::id();
        $scheme = DB::table('user_schemes')->where('id', $scheme_id)->where('user_id', $user_id)->first();

        if (!$scheme) {
            return redirect()->route('schemes')->with('error', 'Invalid scheme');
        }

        $amount = $scheme->monthly_amount;
        $receipt_no = 'RCPT-' . strtoupper(uniqid());

        DB::table('scheme_payments')->insert([
            'user_id' => $user_id, 'scheme_id' => $scheme_id, 'amount' => $amount,
            'payment_date' => Carbon::now(), 'receipt_no' => $receipt_no,
        ]);

        DB::table('user_schemes')->where('id', $scheme_id)->increment('months_completed');

        $updated_scheme = DB::table('user_schemes')->where('id', $scheme_id)->first();
        if ($updated_scheme->months_completed >= 11) {
            DB::table('user_schemes')->where('id', $scheme_id)->update(['status' => 'completed']);
            return redirect()->route('schemes')->with('msg', "Congratulations! You've completed your gold scheme!");
        }

        return redirect()->route('schemes')->with('msg', "Payment of ₹{$amount} successfully recorded!");
    }

    public function downloadPassbook($scheme_id)
    {
        $user_id = Auth::id();
        $scheme = DB::table('user_schemes as us')
            ->join('gold_schemes as gs', 'us.scheme_type', '=', 'gs.scheme_code')
            ->where('us.id', $scheme_id)->where('us.user_id', $user_id)
            ->select('us.*', 'gs.scheme_name', 'gs.bonus_amount')->first();

        if (!$scheme) {
            return redirect()->route('schemes')->with('error', 'Invalid scheme');
        }

        $user = Auth::user();
        $payments = DB::table('scheme_payments')->where('scheme_id', $scheme_id)->orderBy('payment_date', 'asc')->get();

        return view('user.passbook', compact('scheme', 'user', 'payments'));
    }

    public function history()
    {
        $user_id = Auth::id();
        $user = Auth::user();

        // Fetch completed schemes with their details
        $completed_schemes = DB::table('user_schemes as us')
            ->join('gold_schemes as gs', 'us.scheme_type', '=', 'gs.scheme_code')
            ->where('us.user_id', $user_id)
            ->where('us.status', 'completed')
            ->select('us.*', 'gs.scheme_name', 'gs.bonus_amount', 'gs.final_value')
            ->orderBy('us.id', 'desc')
            ->get();

        return view('user.schemes_history', compact('completed_schemes', 'user'));
    }
}
