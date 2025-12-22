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
                },
                animation: {
                    'fade-in': 'fadeIn 0.5s ease-in-out',
                    'slide-up': 'slideUp 0.3s ease-out',
                    'pulse-slow': 'pulse 3s infinite',
                    'float': 'float 6s ease-in-out infinite',
                },
                keyframes: {
                    fadeIn: {
                        '0%': { opacity: '0', transform: 'translateY(10px)' },
                        '100%': { opacity: '1', transform: 'translateY(0)' }
                    },
                    slideUp: {
                        '0%': { transform: 'translateY(10px)', opacity: '0' },
                        '100%': { transform: 'translateY(0)', opacity: '1' }
                    },
                    float: {
                        '0%, 100%': { transform: 'translateY(0)' },
                        '50%': { transform: 'translateY(-10px)' }
                    }
                }
            }
        }
    }
</script>
<script>
    function confirmEnroll(form) {
        const schemeType = form.scheme_type.value;
        // In blade we don't look up by input value easily without IDs, but logic holds.
        // We can just confirm with generic message or try to traverse.
        // Let's use simple confirm.
        return confirm(`Are you sure you want to enroll in this scheme?`);
    }
</script>
@endpush

@section('content')
<div class="bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 min-h-screen pt-24 pb-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto">
        <!-- Hero Section -->
        <div class="relative bg-gradient-to-r from-dark-blue/90 to-navy/90 rounded-2xl shadow-2xl overflow-hidden mb-12 animate-fade-in">
            <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('https://images.unsplash.com/photo-1605100804763-247f67b3557e?q=80&w=2070')"></div>
            <div class="relative z-10 p-8 md:p-12">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
                    <div>
                        <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">Harees Gold Savings Scheme</h1>
                        <p class="text-golden/90 text-lg max-w-2xl">Secure your future with our trusted gold investment plans. Get 916 purity gold with 0% making charges!</p>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('schemes') }}" class="group bg-gradient-to-r from-golden to-amber-500 text-dark-blue font-bold px-8 py-4 rounded-xl hover:from-amber-400 hover:to-golden transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center gap-3 whitespace-nowrap">
                            <i class="fas fa-wallet group-hover:animate-bounce"></i>
                            Go to My Schemes
                        </a>
                        <!-- Policies Link - Placeholder route for now or existing page -->
                        <a href="{{ url('gold-scheme-booking') }}" class="group bg-gradient-to-r from-navy to-dark-blue text-golden font-bold px-8 py-4 rounded-xl hover:from-blue-800 hover:from-navy to-dark-blue transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center gap-3 whitespace-nowrap">
                            <i class="fas fa-file-contract group-hover:animate-pulse"></i>
                            View Policies
                        </a>
                    </div>
                </div>
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

        <!-- Gold Bar Animation -->
        <div class="flex justify-center mb-12 animate-float">
            <div class="bg-gradient-to-r from-golden via-amber-400 to-golden h-4 w-full max-w-3xl rounded-full shadow-lg"></div>
        </div>

        <!-- Scheme Cards Grid - Dynamic Section -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            @foreach ($schemes as $scheme)
                @php
                    $isPremium = in_array($scheme->scheme_code, ['B', 'D', 'F']);
                    $isRoseGold = in_array($scheme->scheme_code, ['C', 'E']);
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
                                            $scheme->scheme_code == 'B' ? 'fas fa-crown' : 
                                            ($scheme->scheme_code == 'D' ? 'fas fa-chess-queen' : 
                                            ($scheme->scheme_code == 'F' ? 'fas fa-landmark' : 
                                            ($scheme->scheme_code == 'E' ? 'fas fa-medal' : 'fas fa-coins'))) 
                                        }} {{ $isPremium ? 'text-golden' : 'text-dark-blue' }} text-lg"></i>
                                    </div>
                                    {{ $scheme->scheme_name }}
                                </h2>
                            </div>
                            <div class="mt-4 sm:mt-0 bg-gradient-to-br {{ $isPremium ? 'from-dark-blue to-navy text-golden' : 'from-golden to-amber-500 text-dark-blue' }} px-4 py-2 rounded-lg font-bold">
                                Scheme {{ $scheme->scheme_code }}
                            </div>
                        </div>

                        <div class="space-y-4 mb-6">
                            <div class="relative p-4 bg-gradient-to-br from-gray-50 to-blue-50/30 rounded-xl border {{ $isRoseGold ? 'border-rose-gold/30' : 'border-golden/20' }}">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <p class="text-sm font-medium text-gray-600">Monthly Installment</p>
                                        <p class="font-semibold text-navy text-xl">₹{{ number_format($scheme->monthly_installment, 2) }}</p>
                                    </div>
                                    <div class="w-12 h-12 bg-gradient-to-br {{ $isRoseGold ? 'from-rose-gold/20 to-pink-200/20' : 'from-golden/20 to-amber-100/20' }} rounded-full flex items-center justify-center">
                                        <i class="fas fa-rupee-sign text-dark-blue"></i>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-2 gap-4">
                                <div class="relative p-4 bg-gradient-to-br from-gray-50 to-blue-50/30 rounded-xl border {{ $isRoseGold ? 'border-rose-gold/30' : 'border-golden/20' }}">
                                    <p class="text-sm font-medium text-gray-600">Term</p>
                                    <p class="font-semibold text-navy">{{ $scheme->term_months }} Months</p>
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
                        <!-- Placeholder form submission. Needs proper implementation of enroll_scheme POST route -->
                        <form action="{{ route('schemes.enroll.submit') }}" method="POST" onsubmit="return confirmEnroll(this)">
                            @csrf
                            <input type="hidden" name="scheme_type" value="{{ $scheme->scheme_code }}">
                            <button type="submit" class="w-full bg-gradient-to-r from-dark-blue to-navy text-white px-6 py-3 rounded-xl hover:from-navy hover:to-dark-blue transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-center gap-2">
                                <i class="fas fa-file-signature"></i>
                                Enroll Now
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Gold Scheme Features -->
        <div class="bg-gradient-to-br from-dark-blue/90 to-navy/90 rounded-2xl shadow-2xl p-8 mb-12 text-white animate-fade-in">
            <h2 class="text-2xl font-bold text-golden mb-8 text-center">Why Choose Harees Gold Scheme?</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-golden to-amber-500 rounded-full flex items-center justify-center text-dark-blue text-2xl">
                        <i class="fas fa-percentage"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">0% Making Charges</h3>
                    <p class="text-white/80">Get 916 purity gold jewelry with no making charges - only GST applies</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-golden to-amber-500 rounded-full flex items-center justify-center text-dark-blue text-2xl">
                        <i class="fas fa-gift"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Attractive Bonus</h3>
                    <p class="text-white/80">Earn bonus amounts on your savings when you complete the scheme</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-golden to-amber-500 rounded-full flex items-center justify-center text-dark-blue text-2xl">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Safe & Secure</h3>
                    <p class="text-white/80">Your investment is protected with transparent terms and conditions</p>
                </div>
            </div>
        </div>

        <!-- Scheme Details -->
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-8">
                <!-- How It Works -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 p-8 animate-fade-in">
                    <h2 class="text-2xl font-bold text-navy mb-6 flex items-center gap-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-golden to-amber-500 rounded-lg flex items-center justify-center">
                            <i class="fas fa-info-circle text-dark-blue text-lg"></i>
                        </div>
                        How Our Gold Scheme Works
                    </h2>
                    
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-dark-blue to-darker-blue rounded-full flex items-center justify-center text-golden">
                                <span class="font-bold text-xl">1</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-navy mb-1">Choose Your Plan</h4>
                                <p class="text-gray-600">Select from our flexible monthly installment options ranging from ₹500 to ₹10,000. Visit any Harees Gold & Diamonds showroom to enroll.</p>
                            </div>
                        </div>
                        
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-dark-blue to-darker-blue rounded-full flex items-center justify-center text-golden">
                                <span class="font-bold">2</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-navy mb-1">Make Monthly Payments</h4>
                                <p class="text-gray-600">Pay your fixed installment before the 10th of each month at any Harees Gold & Diamonds showroom. You'll receive a passbook to track your payments.</p>
                            </div>
                        </div>
                        
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-dark-blue to-darker-blue rounded-full flex items-center justify-center text-golden">
                                <span class="font-bold">3</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-navy mb-1">Receive Your Gold</h4>
                                <p class="text-gray-600">After 11 months, redeem your savings as 916 gold jewelry with 0% making charges (only GST applies). Choose from our exquisite collections.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Terms & Conditions -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 p-8 animate-fade-in">
                    <h2 class="text-2xl font-bold text-navy mb-6 flex items-center gap-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-dark-blue to-navy rounded-lg flex items-center justify-center">
                            <i class="fas fa-file-contract text-golden text-lg"></i>
                        </div>
                        Terms & Conditions
                    </h2>
                    
                    <div class="space-y-4 text-gray-600">
                        <div class="flex gap-3">
                            <i class="fas fa-check text-golden mt-1"></i>
                            <p><strong>Eligibility:</strong> Indian citizens can join the scheme anytime by providing valid ID proof (Aadhar, PAN, etc.) and a color photograph. For minors under 18 years, guardian's ID proof is required.</p>
                        </div>
                        <div class="flex gap-3">
                            <i class="fas fa-check text-golden mt-1"></i>
                            <p><strong>Multiple Schemes:</strong> Members can maintain multiple schemes simultaneously with different installment amounts.</p>
                        </div>
                        <div class="flex gap-3">
                            <i class="fas fa-check text-golden mt-1"></i>
                            <p><strong>Payment Terms:</strong> The first month's installment amount must be maintained for all subsequent months. Payments must be made before the 10th of each month.</p>
                        </div>
                        <div class="flex gap-3">
                            <i class="fas fa-check text-golden mt-1"></i>
                            <p><strong>Maturity:</strong> Gold can only be redeemed after scheme maturity (11 months). Premature closure forfeits bonus benefits - only normal gold purchase is allowed.</p>
                        </div>
                        <div class="flex gap-3">
                            <i class="fas fa-check text-golden mt-1"></i>
                            <p><strong>Gold Purchase:</strong> At maturity, the total amount (savings + bonus) must be used to purchase 916 purity gold jewelry with 0% making charges. Only applicable GST will be charged.</p>
                        </div>
                        <div class="flex gap-3">
                            <i class="fas fa-check text-golden mt-1"></i>
                            <p><strong>Regulations:</strong> Government gold control regulations apply to this scheme. Terms are subject to change as per government policies.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1 space-y-6">
                <!-- Contact Card -->
                <div class="bg-gradient-to-br from-dark-blue via-navy to-slate-900 rounded-2xl shadow-2xl p-6 text-white animate-slide-up border border-golden/20">
                    <h3 class="text-xl font-bold text-golden mb-6 flex items-center gap-2">
                        <i class="fas fa-store"></i>
                        OUR SHOWROOMS
                    </h3>
                    
                    <div class="space-y-4 mb-6">
                        <div class="flex items-start gap-3">
                            <i class="fas fa-map-marker-alt text-golden mt-1"></i>
                            <div>
                                <h4 class="font-semibold">Chinnakada</h4>
                            </div>
                            <i class="fas fa-map-marker-alt text-golden mt-1"></i>
                            <div>
                                <h4 class="font-semibold">Paravur</h4>
                            </div>
                            <i class="fas fa-map-marker-alt text-golden mt-1"></i>
                            <div>
                                <h4 class="font-semibold">Koottikada</h4>
                            </div>
                        </div>
                        <p class="text-golden/80 text-xs mt-1"><i class="fas fa-clock"></i> Open 9:30 AM - 8:30 PM</p>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-mobile-alt text-golden"></i>
                            <a href="tel:9846598663" class="hover:underline">9846598663</a> 
                            &nbsp; &nbsp; &nbsp;
                            <i class="fas fa-mobile-alt text-golden"></i>
                            <a href="tel:8086594491" class="hover:underline">8086594491</a>
                        </div>
                        <div class="flex items-center gap-3 mt-4">
                            <i class="fab fa-whatsapp text-golden text-lg"></i>
                            <a href="https://wa.me/919567102422" class="hover:underline">9567102422</a> 
                            &nbsp; &nbsp; &nbsp;
                            <i class="fas fa-phone-alt text-golden"></i>
                            <a href="tel:04742742916" class="hover:underline">0474 2742916</a>
                        </div>
                    </div>
                </div>

                <!-- FAQ Card -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-6 border border-golden/20 animate-slide-up">
                    <h3 class="text-xl font-bold text-navy mb-6 flex items-center gap-2">
                        <i class="fas fa-question-circle text-dark-blue"></i>
                        FREQUENTLY ASKED QUESTIONS
                    </h3>
                    
                    <div class="space-y-4">
                        <div class="border-b border-golden/20 pb-4">
                            <h4 class="font-semibold text-navy mb-2">Can I change my installment amount later?</h4>
                            <p class="text-gray-600 text-sm">No, the installment amount must remain consistent for all 11 months. However, you can start a new scheme with a different amount while maintaining existing ones.</p>
                        </div>
                        <div class="border-b border-golden/20 pb-4">
                            <h4 class="font-semibold text-navy mb-2">What if I miss a payment?</h4>
                            <p class="text-gray-600 text-sm">Missed payments may affect your bonus eligibility. Please contact us immediately if you anticipate difficulty in making a payment. Late payments may be accepted with a penalty.</p>
                        </div>
                        <div class="border-b border-golden/20 pb-4">
                            <h4 class="font-semibold text-navy mb-2">Can I get cash instead of gold?</h4>
                            <p class="text-gray-600 text-sm">No, the scheme is designed for gold purchase only at maturity. The total amount must be used to purchase gold jewelry from our collections.</p>
                        </div>
                        <div class="border-b border-golden/20 pb-4">
                            <h4 class="font-semibold text-navy mb-2">Is there any making charge?</h4>
                            <p class="text-gray-600 text-sm">No making charges, only applicable GST will be charged on gold purchase. You get 916 purity gold at the day's rate when you redeem your scheme.</p>
                        </div>
                        <div class="pb-2">
                            <h4 class="font-semibold text-navy mb-2">Can I redeem before maturity?</h4>
                            <p class="text-gray-600 text-sm">Premature redemption forfeits the bonus amount. You can only purchase gold at normal rates with the amount paid till that date.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
