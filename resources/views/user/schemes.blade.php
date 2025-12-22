@extends('layouts.app')

@push('head_scripts')
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    'dark-blue': '#1e3a8a',
                    'darker-blue': '#1e40af',
                    'navy': '#0f172a',
                    'golden': '#fbbf24',
                    'light-golden': '#fcd34d',
                    'rose-gold': '#e0bfb8',
                    'red': '#ef4444',
                },
                animation: {
                    'fade-in': 'fadeIn 0.5s ease-in-out',
                    'slide-up': 'slideUp 0.3s ease-out',
                    'pulse-slow': 'pulse 3s infinite',
                },
                keyframes: {
                    fadeIn: {
                        '0%': { opacity: '0', transform: 'translateY(10px)' },
                        '100%': { opacity: '1', transform: 'translateY(0)' }
                    },
                    slideUp: {
                        '0%': { transform: 'translateY(10px)', opacity: '0' },
                        '100%': { transform: 'translateY(0)', opacity: '1' }
                    }
                }
            }
        }
    }
</script>
@endpush

@section('content')
<div class="bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 min-h-screen pt-24 pb-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto">
        <!-- Page Header -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 mb-8">
            <div>
                <h1 class="text-3xl font-bold text-navy mb-2">My Gold Schemes</h1>
                <p class="text-gray-600">View and manage your enrolled gold savings schemes</p>
            </div>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('schemes.history') }}" class="relative bg-gradient-to-r from-golden to-amber-500 text-dark-blue font-bold px-6 py-3 rounded-lg hover:from-amber-400 hover:to-golden transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center gap-3">
                    <i class="fas fa-history"></i> History
                    @if ($completed_count > 0)
                        <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs font-bold rounded-full h-6 w-6 flex items-center justify-center shadow-md transform hover:scale-110 transition-transform">
                            {{ $completed_count }}
                        </span>
                    @endif
                </a>
                <a href="{{ route('schemes.enroll') }}" class="bg-gradient-to-r from-golden to-amber-500 text-dark-blue font-bold px-6 py-3 rounded-lg hover:from-amber-400 hover:to-golden transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center gap-3">
                    <i class="fas fa-plus"></i>
                    Enroll New Scheme
                </a>
            </div>
        </div>

        @if (session('msg'))
            <div class="mb-8 p-6 bg-gradient-to-r from-golden/20 to-amber-200/30 border-2 border-golden/30 text-dark-blue rounded-2xl shadow-lg animate-slide-up">
                <div class="flex items-center gap-3">
                    <i class="fas fa-check-circle text-golden text-xl"></i>
                    <span class="font-medium">{{ session('msg') }}</span>
                </div>
            </div>
        @endif

        @if (session('error'))
            <div class="mb-8 p-6 bg-gradient-to-r from-red-100 to-amber-100 border-2 border-red-500 text-dark-blue rounded-2xl shadow-lg animate-slide-up">
                <div class="flex items-center gap-3">
                    <i class="fas fa-exclamation-circle text-red-500 text-xl"></i>
                    <span class="font-medium">{{ session('error') }}</span>
                </div>
            </div>
        @endif

        <!-- User's Active Schemes -->
        <div class="mb-12">
            <div class="flex justify-between items-center mb-6 px-2">
                <h2 class="text-2xl font-bold text-navy">Your Active Schemes</h2>
                <div class="text-sm text-gray-500 bg-gray-100 px-4 py-2 rounded-full">
                    {{ $scheme_count }} Active Scheme{{ $scheme_count != 1 ? 's' : '' }}
                </div>
            </div>
            
            @if ($scheme_count > 0)
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($schemes as $scheme)
                        @php
                            $isPremium = in_array($scheme->scheme_type, ['B', 'D', 'F']);
                            $isRoseGold = in_array($scheme->scheme_type, ['C', 'E']);
                        @endphp
                        <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-2xl border-2 border-golden animate-fade-in transform hover:-translate-y-2 transition-all duration-300 group relative overflow-hidden">
                            <div class="absolute top-0 right-0 bg-golden text-dark-blue px-4 py-1 rounded-bl-lg font-bold rotate-45 translate-x-8 -translate-y-2">
                            </div>
                            <div class="p-8">
                                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8">
                                    <div>
                                        <h2 class="text-2xl font-bold text-navy flex items-center gap-3">
                                            <div class="w-10 h-10 bg-gradient-to-br {{ $isPremium ? 'from-dark-blue to-navy' : 'from-golden to-amber-500' }} rounded-lg flex items-center justify-center group-hover:rotate-12 transition-transform">
                                                <i class="{{ 
                                                    $scheme->scheme_type == 'B' ? 'fas fa-crown' : 
                                                    ($scheme->scheme_type == 'D' ? 'fas fa-chess-queen' : 
                                                    ($scheme->scheme_type == 'F' ? 'fas fa-landmark' : 
                                                    ($scheme->scheme_type == 'E' ? 'fas fa-medal' : 'fas fa-coins'))) 
                                                }} {{ $isPremium ? 'text-golden' : 'text-dark-blue' }} text-lg"></i>
                                            </div>
                                            {{ $scheme->scheme_name }}
                                        </h2>
                                    </div>
                                    <div class="mt-4 sm:mt-0 bg-gradient-to-br {{ $isPremium ? 'from-dark-blue to-navy text-golden' : 'from-golden to-amber-500 text-dark-blue' }} px-4 py-2 rounded-lg font-bold">
                                        Scheme {{ $scheme->scheme_type }}
                                    </div>
                                </div>

                                <div class="space-y-4 mb-6">
                                    <div class="relative p-4 bg-gradient-to-br from-gray-50 to-blue-50/30 rounded-xl border {{ $isRoseGold ? 'border-rose-gold/30' : 'border-golden/20' }}">
                                        <div class="flex justify-between items-center">
                                            <div>
                                                <p class="text-sm font-medium text-gray-600">Monthly Installment</p>
                                                <p class="font-semibold text-navy text-xl">₹{{ number_format($scheme->monthly_amount, 2) }}</p>
                                            </div>
                                            <div class="w-12 h-12 bg-gradient-to-br {{ $isRoseGold ? 'from-rose-gold/20 to-pink-200/20' : 'from-golden/20 to-amber-100/20' }} rounded-full flex items-center justify-center">
                                                <i class="fas fa-rupee-sign text-dark-blue"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="relative p-4 bg-gradient-to-br from-gray-50 to-blue-50/30 rounded-xl border {{ $isRoseGold ? 'border-rose-gold/30' : 'border-golden/20' }}">
                                            <p class="text-sm font-medium text-gray-600">Term</p>
                                            <p class="font-semibold text-navy">11 Months</p>
                                        </div>
                                        <div class="relative p-4 bg-gradient-to-br from-gray-50 to-blue-50/30 rounded-xl border {{ $isRoseGold ? 'border-rose-gold/30' : 'border-golden/20' }}">
                                            <p class="text-sm font-medium text-gray-600">Bonus</p>
                                            <p class="font-semibold text-navy">₹{{ number_format($scheme->bonus_amount, 2) }}</p>
                                        </div>
                                    </div>
                                    
                                    <div class="relative p-4 bg-gradient-to-br from-gray-50 to-blue-50/30 rounded-xl border {{ $isRoseGold ? 'border-rose-gold/30' : 'border-golden/20' }}">
                                        <div class="flex justify-between items-center">
                                            <div>
                                                <p class="text-sm font-medium text-gray-600">Final Value</p>
                                                <p class="font-semibold text-navy text-xl">₹{{ number_format($scheme->final_value, 2) }}</p>
                                            </div>
                                            <div class="w-12 h-12 bg-gradient-to-br {{ $isRoseGold ? 'from-rose-gold/20 to-pink-200/20' : 'from-golden/20 to-amber-100/20' }} rounded-full flex items-center justify-center">
                                                <i class="fas fa-gem text-dark-blue"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Progress Bar -->
                                <div class="mb-6">
                                    <div class="flex justify-between text-xs text-gray-500 mb-1">
                                        <span>Progress</span>
                                        <span>{{ round(($scheme->months_completed/11)*100) }}%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-gradient-to-r from-golden to-amber-500 h-2 rounded-full" 
                                            style="width: {{ round(($scheme->months_completed/11)*100) }}%"></div>
                                    </div>
                                </div>

                                <!-- Payment/Download Buttons Section -->
                                <div class="flex flex-col gap-4">
                                    @if ($scheme->payment_pending)
                                        <!-- Pay Now Button (only shows if payment is pending) -->
                                        <!-- Replaced route link with placeholder as upayment is legacy -->
                                        <a href="{{ route('schemes.payment', $scheme->id) }}" 
                                            class="w-full bg-gradient-to-r from-golden to-amber-500 text-dark-blue font-bold px-6 py-3 rounded-xl hover:from-amber-400 hover:to-golden transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-center gap-3 text-center">
                                                Pay ₹{{ $scheme->monthly_amount }} for {{ date('F') }}
                                        </a>
                                    @elseif ($scheme->months_completed >= 11)
                                        <!-- Download Passbook Button (only shows when scheme is completed) -->
                                        <a href="{{ route('schemes.passbook', $scheme->id) }}" 
                                            class="w-full bg-gradient-to-r from-dark-blue to-navy text-white px-6 py-3 rounded-xl hover:from-navy hover:to-dark-blue transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-center gap-3">
                                            <i class="fas fa-download"></i> Download Passbook
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="bg-white rounded-2xl shadow-2xl border-2 border-golden/30 p-8 text-center animate-fade-in">
                    <div class="w-24 h-24 bg-gradient-to-br from-gray-100 to-blue-50 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-coins text-gray-400 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-700 mb-2">No Active Schemes</h3>
                    <p class="text-gray-500 mb-6">Start your gold savings journey today</p>
                    <a href="{{ route('schemes.enroll') }}" class="bg-gradient-to-r from-golden to-amber-500 text-dark-blue font-bold px-6 py-3 rounded-xl hover:from-amber-400 hover:to-golden transition-all duration-300 transform hover:scale-105 hover:shadow-lg inline-flex items-center gap-2">
                        <i class="fas fa-plus"></i>
                        Enroll Now
                    </a>
                </div>
            @endif
        </div>

        <!-- Scheme Passbook Section -->
        @if ($scheme_count > 0)
            <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-2xl overflow-hidden border-2 border-golden/30 animate-fade-in">
                <div class="bg-gradient-to-r from-dark-blue to-navy p-6 text-white">
                    <h2 class="text-2xl font-bold flex items-center gap-3">
                        <i class="fas fa-book text-golden"></i>
                        GOLD FUND PASS BOOK
                    </h2>
                </div>

                <div class="p-8">
                    <!-- User Details -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                        <div class="space-y-4">
                            <div class="border-b border-golden/20 pb-2">
                                <p class="text-xs font-medium text-gray-500">SCHEME No</p>
                                <p class="font-medium text-navy">
                                    {{ 'HGSS' . str_pad($user->id, 4, '0', STR_PAD_LEFT) . '-' . date('Y') }}
                                </p>
                            </div>
                            <div class="border-b border-golden/20 pb-2">
                                <p class="text-xs font-medium text-gray-500">A/c No</p>
                                <p class="font-medium text-navy">{{ 'HGS' . str_pad($user->id, 5, '0', STR_PAD_LEFT) }}</p>  
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="border-b border-golden/20 pb-2">
                                <p class="text-xs font-medium text-gray-500">Name</p>
                                <p class="font-medium text-navy">{{ $user->name }}</p>
                            </div>
                            
                            <div class="border-b border-golden/20 pb-2">
                                <p class="text-xs font-medium text-gray-500">Phone No</p>
                                <p class="font-medium text-navy">{{ $user->phone ?? 'N/A' }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Payment History Table -->
                    <div class="overflow-x-auto mb-8">
                        <table class="min-w-full divide-y divide-golden/20">
                            <thead class="bg-gradient-to-r from-dark-blue/10 to-navy/10">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sr No</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Receipt No</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Installment</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Amt</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-golden/10">
                                @php
                                    $running_total = 0;
                                    $sr_no = 1;
                                    // Make sure payments are sorted oldest to newest for correct running total if we iterate
                                    // But controller passed them desc order for display? 
                                    // Usually running total is displayed chronologically.
                                    // The legacy code calculated running total inside loop but query was desc?
                                    // Legacy query: ORDER BY sp.payment_date DESC
                                    // Legacy loop: $total_paid += $amount;
                                    // This means the newest payment shows the HIGHEST total, which is correct for a "Balance" column, 
                                    // but if it's "Total Amt Paid by User so far", it should be cumulative.
                                    // If list is DESC:
                                    // Row 1 (Newest): Amt 100. Total = 100.
                                    // Row 2 (Older): Amt 100. Total = 200.
                                    // This seems inverted? Legace code: $total_paid += $payment['amount']; display $total_paid.
                                    // If I loop DESC, first row (newest) gets total = amt. Last row (oldest) gets total = sum(all).
                                    // This means the OLDEST payment shows the HIGHEST cumulative total. That is WRONG.
                                    // I will trust the legacy code was probably meant to be ASC or the loop logic was weird.
                                    // Wait, if I want to show "Total Paid After This Transaction", I need to compute it differently or loop ASC.
                                    // I will loop through the $payments collection. If it's DESC, I should probably reverse it for calculation or calculate total first and subtract?
                                    // Let's stick to simple list for now or ASC order.
                                    // Actually, let's just display it.
                                    // If the controller sends DESC, I will just iterate.
                                    // I will flip the collection for the view to show ASC (Oldest First) which makes more sense for a passbook?
                                    // Legacy: top row = $sr_no++. So top row is 1.
                                    // If query is DESC, row 1 is Newest date.
                                    // So Row 1: Date=Today. Total = Amt.
                                    // Row 2: Date=Yesterday. Total = Amt + PrevAmt.
                                    // This implies the oldest transaction has the highest cumulative total. That is definitely wrong for a "running balance" column.
                                    // Passbooks usually show ASC order (Oldest top).
                                    // I will sort the payments ASC in the view or controller.
                                    // Controller had 'desc'. I will use sortBy in view or just change controller?
                                    // I cannot change controller easily now. I will use $payments->sortBy('payment_date') here.
                                @endphp
                                
                                @if($payments->isNotEmpty())
                                    @foreach($payments->sortBy('payment_date') as $payment)
                                        @php $running_total += $payment->amount; @endphp
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-navy">{{ $sr_no++ }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                                {{ \Carbon\Carbon::parse($payment->payment_date)->format('d M Y') }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ $payment->receipt_no }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">₹{{ number_format($payment->amount, 2) }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">₹{{ number_format($running_total, 2) }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                    Paid
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6" class="px-6 py-8 text-center text-gray-500">
                                            <div class="flex flex-col items-center">
                                                <i class="fas fa-wallet text-3xl text-gray-300 mb-3"></i>
                                                <p class="font-medium">No payment history found</p>
                                                <p class="text-sm">Your payment records will appear here once you make payments</p>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>

                    <!-- Summary Section -->
                    <div class="grid md:grid-cols-3 gap-6 mb-8">
                        <div class="bg-gradient-to-br from-gray-50 to-blue-50/30 rounded-xl p-6 border border-golden/20">
                            <p class="text-sm font-medium text-gray-500 mb-2">Total Paid</p>
                            <p class="font-bold text-navy text-2xl">
                                ₹{{ number_format($total_paid, 2) }}
                            </p>
                        </div>
                        <div class="bg-gradient-to-br from-gray-50 to-blue-50/30 rounded-xl p-6 border border-golden/20">
                            <p class="text-sm font-medium text-gray-500 mb-2">Total Bonus</p>
                            <p class="font-bold text-navy text-2xl">
                                ₹{{ number_format($total_bonus, 2) }}
                            </p>
                        </div>
                        <div class="bg-gradient-to-br from-gray-50 to-blue-50/30 rounded-xl p-6 border border-golden/20">
                            <p class="text-sm font-medium text-gray-500 mb-2">Maturity Value</p>
                            <p class="font-bold text-navy text-2xl">
                                ₹{{ number_format($total_paid + $total_bonus, 2) }}
                            </p>
                        </div>
                    </div>

                    <!-- Signature Section -->
                    <div class="flex justify-between items-center pt-8 border-t border-golden/20">
                        <div class="text-center">
                            <p class="text-3xl text-dark-blue font-greatvibes" style="font-family: 'Great Vibes', cursive;">
                                {{ $user->name }}
                            </p>
                            <p class="text-xs text-gray-500 mt-1">Customer Signature</p>
                        </div>
                        <div class="text-center">
                            <img src="{{ asset('assets/sign.webp') }}" alt="Authorized Signature" class="h-16 w-48 object-contain mx-auto">
                            <p class="text-xs text-gray-500 mt-1">Authorized Signature</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
