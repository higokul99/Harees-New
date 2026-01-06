@extends('layouts.app')

@push('styles')
<style>
    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(10px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideUp {
        0% {
            transform: translateY(10px);
            opacity: 0;
        }

        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .animate-fade-in {
        animation: fadeIn 0.5s ease-in-out;
    }

    .animate-slide-up {
        animation: slideUp 0.3s ease-out;
    }
</style>
@endpush

@section('content')
<main class="pt-24 pb-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto">
        <!-- Page Header -->
        <div class="text-center mb-12 animate-fade-in">
            <h1 class="text-4xl font-bold bg-gradient-to-r from-blue-900 to-slate-900 bg-clip-text text-transparent mb-4">
                Advance Gold Booking
            </h1>
            <p class="text-gray-600 text-lg">Secure your gold at today's price for future purchases</p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-8">
                <!-- How It Works -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-yellow-400/20 animate-fade-in">
                    <div class="p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-amber-500 rounded-lg flex items-center justify-center">
                                <i class="fas fa-coins text-blue-900 text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-slate-900">How Advance Gold Booking Works</h2>
                        </div>

                        <div class="space-y-6 text-gray-700">
                            <p>Our Advance Gold Booking service allows you to lock in today's gold price for future jewellery purchases, protecting you from price fluctuations in the market.</p>

                            <div class="grid md:grid-cols-3 gap-6">
                                <!-- Step 1 -->
                                <div class="bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-yellow-400/20 group hover:shadow-md transition-all duration-300">
                                    <div class="w-14 h-14 bg-gradient-to-br from-yellow-400 to-amber-500 rounded-full flex items-center justify-center text-blue-900 text-xl font-bold mb-4 mx-auto">
                                        1
                                    </div>
                                    <h3 class="text-lg font-semibold text-slate-900 mb-2 text-center">Book & Pay</h3>
                                    <p class="text-gray-600 text-sm text-center">Reserve your gold by paying % of the current gold price. Contact us for more details.</p>
                                </div>

                                <!-- Step 2 -->
                                <div class="bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-yellow-400/20 group hover:shadow-md transition-all duration-300">
                                    <div class="w-14 h-14 bg-gradient-to-br from-yellow-400 to-amber-500 rounded-full flex items-center justify-center text-blue-900 text-xl font-bold mb-4 mx-auto">
                                        2
                                    </div>
                                    <h3 class="text-lg font-semibold text-slate-900 mb-2 text-center">Price Locked</h3>
                                    <p class="text-gray-600 text-sm text-center">Today's gold price is secured for your future purchase</p>
                                </div>

                                <!-- Step 3 -->
                                <div class="bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-yellow-400/20 group hover:shadow-md transition-all duration-300">
                                    <div class="w-14 h-14 bg-gradient-to-br from-yellow-400 to-amber-500 rounded-full flex items-center justify-center text-blue-900 text-xl font-bold mb-4 mx-auto">
                                        3
                                    </div>
                                    <h3 class="text-lg font-semibold text-slate-900 mb-2 text-center">Redeem Later</h3>
                                    <p class="text-gray-600 text-sm text-center">Purchase jewellery at lowest gold price (booked date rate or purchase date rate). t&c apply</p>
                                </div>
                            </div>

                            <div class="bg-gradient-to-r from-yellow-400/10 to-amber-100/20 p-6 rounded-xl border border-yellow-400/20">
                                <h3 class="text-xl font-semibold text-slate-900 mb-4 flex items-center gap-2">
                                    <i class="fas fa-star text-yellow-400"></i>
                                    Key Benefits
                                </h3>
                                <ul class="space-y-3">
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-yellow-400 mt-1"></i>
                                        <span><strong>Price Protection:</strong> Safeguard against gold price increases</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-yellow-400 mt-1"></i>
                                        <span><strong>Flexible Tenure:</strong> Come to shop to make your final purchase</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-yellow-400 mt-1"></i>
                                        <span><strong>No Making Charges:</strong> Pay only for the gold weight at booking</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-yellow-400 mt-1"></i>
                                        <span><strong>Wide Selection:</strong> Choose from our entire collection when redeeming</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pricing Calculator -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-yellow-400/20 animate-fade-in">
                    <div class="p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-900 to-slate-900 rounded-lg flex items-center justify-center">
                                <i class="fas fa-calculator text-yellow-400 text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-slate-900">Gold Booking Calculator 22K</h2>
                        </div>

                        <div class="space-y-6">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-gray-700 font-medium mb-2">Today's Gold Price (per gram)</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <span class="text-gray-500">₹</span>
                                        </div>
                                        <input type="number" id="gold-price-input" class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-yellow-400 focus:border-yellow-400 block w-full pl-10 p-2.5" value="{{ $goldRate22k ?? 0 }}" readonly>
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium mb-2">Gold Weight (grams)</label>
                                    <input type="number" id="gold-weight" min="1" value="8" min="0" class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-yellow-400 focus:border-yellow-400 block w-full p-2.5">
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-gray-700 font-medium mb-2">Advance Percentage</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                            <span class="text-gray-500">%</span>
                                        </div>
                                        <input type="number" id="advance-percentage" value="80" min="0" max="100" class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-yellow-400 focus:border-yellow-400 block w-full p-2.5">
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium mb-2">Advance Amount Payable</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <span class="text-gray-500">₹</span>
                                        </div>
                                        <input type="number" id="advance-amount" class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-yellow-400 focus:border-yellow-400 block w-full pl-10 p-2.5" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-r from-yellow-400/10 to-amber-100/20 p-4 rounded-xl border border-yellow-400/20">
                                <p class="text-gray-700"><i class="fas fa-info-circle text-yellow-400 mr-2"></i> The remaining amount will be payable when you select and purchase your jewellery. Contact us for more details.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="sticky top-8 space-y-6">

                    <!-- Benefits Card -->
                    <div class="bg-gradient-to-br from-yellow-400 via-amber-500 to-yellow-600 rounded-2xl shadow-2xl p-6 text-blue-900 animate-slide-up border border-yellow-400/20">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-blue-900 flex items-center gap-2">
                                <i class="fas fa-medal"></i>
                                WHY BOOK IN ADVANCE?
                            </h3>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-shield-alt text-blue-900 text-sm"></i>
                                </div>
                                <p class="font-medium">Hedge against price volatility</p>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-rupee-sign text-blue-900 text-sm"></i>
                                </div>
                                <p class="font-medium">Better budget planning</p>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-gem text-blue-900 text-sm"></i>
                                </div>
                                <p class="font-medium">Priority access to new collections</p>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-percentage text-blue-900 text-sm"></i>
                                </div>
                                <p class="font-medium">Special discounts on making charges</p>
                            </div>
                        </div>
                    </div>

                    <!-- Policies Card -->
                    <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-6 border border-yellow-400/20 animate-slide-up">
                        <h3 class="text-xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-file-contract text-yellow-400"></i>
                            TERMS & CONDITIONS
                        </h3>

                        <div class="space-y-3 text-gray-700 text-sm">
                            <p class="flex items-start gap-2">
                                <i class="fas fa-circle text-yellow-400 text-xs mt-1.5"></i>
                                <span>Minimum booking amount: Contact Us</span>
                            </p>
                            <p class="flex items-start gap-2">
                                <i class="fas fa-circle text-yellow-400 text-xs mt-1.5"></i>
                                <span>Valid for 30 days from booking date</span>
                            </p>
                            <p class="flex items-start gap-2">
                                <i class="fas fa-circle text-yellow-400 text-xs mt-1.5"></i>
                                <span>Making charges applicable at time of purchase</span>
                            </p>
                            <p class="flex items-start gap-2">
                                <i class="fas fa-circle text-yellow-400 text-xs mt-1.5"></i>
                                <span>Non-refundable, but transferable to family</span>
                            </p>
                            <p class="flex items-start gap-2">
                                <i class="fas fa-circle text-yellow-400 text-xs mt-1.5"></i>
                                <span>Gold price locked at time of advance payment</span>
                            </p>
                        </div>
                    </div>

                    <!-- Enquiry Card -->
                    <div class="bg-gradient-to-br from-blue-900 via-slate-900 to-slate-900 rounded-2xl shadow-2xl p-6 text-white animate-slide-up border border-yellow-400/20">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-bold text-yellow-400 flex items-center gap-2">
                                <i class="fas fa-headset"></i>
                                BOOK YOUR GOLD
                            </h3>
                        </div>

                        <div class="space-y-4 mb-6">
                            <p class="text-white/90">
                                Ready to secure your gold at today's price? Contact us to start your advance gold booking.
                            </p>

                            <a href="https://wa.me/{{ str_replace(['+', ' '], '', config('shop.contact.phone')) }}" target="_blank" class="block w-full bg-gradient-to-r from-green-500 to-green-600 text-white font-bold py-4 px-6 rounded-xl hover:from-green-600 hover:to-green-500 transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-between group">
                                <div class="flex items-center gap-3">
                                    <i class="fab fa-whatsapp text-white text-xl group-hover:scale-110 transition-transform"></i>
                                    <span>WHATSAPP US</span>
                                </div>
                                <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                            </a>

                            <a href="tel:{{ str_replace(['+', ' '], '', config('shop.contact.phone')) }}" class="block w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white font-bold py-4 px-6 rounded-xl hover:from-blue-600 hover:to-blue-500 transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-between group">
                                <div class="flex items-center gap-3">
                                    <i class="fas fa-phone-alt text-white text-xl group-hover:scale-110 transition-transform"></i>
                                    <span>CALL US</span>
                                </div>
                                <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const goldPriceInput = document.getElementById('gold-price-input');
        const goldPrice = parseFloat(goldPriceInput.value) || 0;
        const goldWeightInput = document.getElementById('gold-weight');
        const advancePercentageInput = document.getElementById('advance-percentage');
        const advanceAmountInput = document.getElementById('advance-amount');

        function calculateAdvance() {
            const weight = parseFloat(goldWeightInput.value) || 0;
            const percentage = parseFloat(advancePercentageInput.value) || 0;
            const totalValue = weight * goldPrice;
            const advanceAmount = totalValue * (percentage / 100);
            advanceAmountInput.value = advanceAmount.toFixed(2);
        }

        goldWeightInput.addEventListener('input', calculateAdvance);
        advancePercentageInput.addEventListener('input', calculateAdvance);

        // Initial calculation
        calculateAdvance();
    });
</script>
@endpush