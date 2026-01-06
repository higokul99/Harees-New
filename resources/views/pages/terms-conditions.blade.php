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
                Terms and Conditions
            </h1>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Welcome to Harees Jewellery. By accessing or using our services, you agree to comply with and be bound by the following Terms and Conditions.
            </p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-yellow-400/20 animate-fade-in">
                    <div class="p-8">
                        <!-- Introduction -->
                        <div class="mb-10">
                            <p class="text-gray-700 mb-6">Welcome to Harees Jewellery, the website (www.hareesjewellery.harees.in). By accessing or using our services, you agree to comply with and be bound by the following Terms and Conditions. Please read them carefully.</p>

                            <div class="bg-gradient-to-r from-yellow-400/10 to-amber-100/20 p-6 rounded-xl border border-yellow-400/20">
                                <p class="text-slate-900 font-medium">Last updated: January 7, 2026</p>
                            </div>
                        </div>

                        <!-- Terms Sections -->
                        <div class="space-y-10">
                            <!-- Shipping Policy -->
                            <div class="border-b border-yellow-400/20 pb-8">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-yellow-400 to-amber-500 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-truck text-blue-900"></i>
                                    </div>
                                    <h2 class="text-2xl font-bold text-slate-900">Shipping Policy</h2>
                                </div>
                                <p class="text-gray-600">For detailed information about shipping, please visit our <a href="{{ route('shipping-policy') }}" class="text-blue-900 underline hover:text-slate-900 font-medium">Shipping Policy</a>.</p>
                            </div>

                            <!-- Cancellation Policy -->
                            <div class="border-b border-yellow-400/20 pb-8">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-blue-900 to-slate-900 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-ban text-yellow-400"></i>
                                    </div>
                                    <h2 class="text-2xl font-bold text-slate-900">Cancellation Policy</h2>
                                </div>
                                <p class="text-gray-600">For detailed information on cancellations, please visit our <a href="{{ route('cancellation-policy') }}" class="text-blue-900 underline hover:text-slate-900 font-medium">Cancellation Policy</a>.</p>
                            </div>

                            <!-- Refund Policy -->
                            <div class="border-b border-yellow-400/20 pb-8">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-yellow-400 to-amber-500 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-money-bill-wave text-blue-900"></i>
                                    </div>
                                    <h2 class="text-2xl font-bold text-slate-900">Refund Policy</h2>
                                </div>
                                <p class="text-gray-600">For information about refunds, please refer to our <a href="{{ route('refund-policy') }}" class="text-blue-900 underline hover:text-slate-900 font-medium">Refund Policy</a>.</p>
                            </div>

                            <!-- Return or Exchange Policy -->
                            <div class="border-b border-yellow-400/20 pb-8">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-blue-900 to-slate-900 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-exchange-alt text-yellow-400"></i>
                                    </div>
                                    <h2 class="text-2xl font-bold text-slate-900">Return or Exchange Policy</h2>
                                </div>
                                <p class="text-gray-600">For exchange details, refer to our <a href="{{ route('return-exchange') }}" class="text-blue-900 underline hover:text-slate-900 font-medium">Return or Exchange Policy</a>.</p>
                            </div>

                            <!-- Eligibility Criteria -->
                            <div class="border-b border-yellow-400/20 pb-8">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-yellow-400 to-amber-500 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-user-check text-blue-900"></i>
                                    </div>
                                    <h2 class="text-2xl font-bold text-slate-900">Eligibility Criteria</h2>
                                </div>
                                <p class="text-gray-600">To access and use our services, you must be at least 18 years old. If you are not eligible, please refrain from using our website.</p>
                            </div>

                            <!-- Pricing & Payments -->
                            <div class="border-b border-yellow-400/20 pb-8">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-blue-900 to-slate-900 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-rupee-sign text-yellow-400"></i>
                                    </div>
                                    <h2 class="text-2xl font-bold text-slate-900">Pricing & Payments</h2>
                                </div>
                                <p class="text-gray-600">All prices on our website are subject to change without notice. Payments for orders within India will be accepted only in INR. For international transactions, currency conversion charges may apply.</p>
                            </div>

                            <!-- Registration -->
                            <div class="border-b border-yellow-400/20 pb-8">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-yellow-400 to-amber-500 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-user-edit text-blue-900"></i>
                                    </div>
                                    <h2 class="text-2xl font-bold text-slate-900">Registration</h2>
                                </div>
                                <p class="text-gray-600">To complete any transactions, you must register on our website. The registration process involves submitting necessary personal information and KYC documents. Please ensure that the information provided is accurate and up-to-date.</p>
                            </div>

                            <!-- Gift Cards -->
                            <div class="border-b border-yellow-400/20 pb-8">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-blue-900 to-slate-900 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-gift text-yellow-400"></i>
                                    </div>
                                    <h2 class="text-2xl font-bold text-slate-900">Gift Cards</h2>
                                </div>
                                <p class="text-gray-600">Gift Cards can be redeemed on our website for jewellery products, except new Gift Cards and Solitaire. Once purchased, the Gift Cards cannot be refunded, exchanged, or revalidated.</p>
                            </div>

                            <!-- Site Security -->
                            <div class="border-b border-yellow-400/20 pb-8">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-yellow-400 to-amber-500 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-lock text-blue-900"></i>
                                    </div>
                                    <h2 class="text-2xl font-bold text-slate-900">Site Security</h2>
                                </div>
                                <p class="text-gray-600">You are prohibited from engaging in any activities that may compromise the security of our website, including unauthorized access, attempting to breach systems, or causing disruption in services.</p>
                            </div>

                            <!-- Fraudulent Transaction -->
                            <div class="border-b border-yellow-400/20 pb-8">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-blue-900 to-slate-900 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-shield-alt text-yellow-400"></i>
                                    </div>
                                    <h2 class="text-2xl font-bold text-slate-900">Fraudulent Transaction</h2>
                                </div>
                                <p class="text-gray-600">We reserve the right to take necessary actions against individuals who engage in fraudulent activities on our website. This may include legal actions and the recovery of costs.</p>
                            </div>

                            <!-- Disclaimer -->
                            <div class="border-b border-yellow-400/20 pb-8">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-yellow-400 to-amber-500 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-exclamation-triangle text-blue-900"></i>
                                    </div>
                                    <h2 class="text-2xl font-bold text-slate-900">Disclaimer</h2>
                                </div>
                                <p class="text-gray-600">The website and all its content are provided on an "AS IS" basis. We do not guarantee the accuracy of information displayed and disclaim all warranties unless otherwise stated.</p>
                            </div>

                            <!-- Changes to Terms -->
                            <div class="border-b border-yellow-400/20 pb-8">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-blue-900 to-slate-900 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-sync-alt text-yellow-400"></i>
                                    </div>
                                    <h2 class="text-2xl font-bold text-slate-900">Changes to Terms</h2>
                                </div>
                                <p class="text-gray-600">We reserve the right to modify these Terms and Conditions at any time. Any changes will be effective immediately upon posting on the website.</p>
                            </div>

                            <!-- Governing Law and Jurisdiction -->
                            <div class="border-b border-yellow-400/20 pb-8">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-yellow-400 to-amber-500 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-balance-scale text-blue-900"></i>
                                    </div>
                                    <h2 class="text-2xl font-bold text-slate-900">Governing Law and Jurisdiction</h2>
                                </div>
                                <p class="text-gray-600">These Terms and Conditions shall be governed by the laws of India, and any disputes will be handled in the courts located in Kollam, Kerala.</p>
                            </div>

                            <!-- Contact Us -->
                            <div class="pt-8">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-blue-900 to-slate-900 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-headset text-yellow-400"></i>
                                    </div>
                                    <h2 class="text-2xl font-bold text-slate-900">Contact Us</h2>
                                </div>
                                <p class="text-gray-600">If you have any questions regarding these Terms and Conditions, please contact us at <a href="{{ route('support') }}" class="text-blue-900 underline hover:text-slate-900 font-medium">Our Support team</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="sticky top-8 space-y-6">
                    <!-- Quick Links Card -->
                    <div class="bg-gradient-to-br from-yellow-400 via-amber-500 to-yellow-600 rounded-2xl shadow-2xl p-6 text-blue-900 animate-slide-up border border-yellow-400/20">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-bold text-blue-900 flex items-center gap-2">
                                <i class="fas fa-link"></i>
                                QUICK LINKS
                            </h3>
                        </div>

                        <div class="space-y-4">
                            <a href="{{ route('shipping-policy') }}" class="block w-full bg-white/20 text-blue-900 font-medium py-3 px-4 rounded-xl hover:bg-white/30 transition-all duration-300 flex items-center justify-between group">
                                <span>Shipping Policy</span>
                                <i class="fas fa-chevron-right group-hover:translate-x-1 transition-transform"></i>
                            </a>

                            <a href="{{ route('cancellation-policy') }}" class="block w-full bg-white/20 text-blue-900 font-medium py-3 px-4 rounded-xl hover:bg-white/30 transition-all duration-300 flex items-center justify-between group">
                                <span>Cancellation Policy</span>
                                <i class="fas fa-chevron-right group-hover:translate-x-1 transition-transform"></i>
                            </a>

                            <a href="{{ route('refund-policy') }}" class="block w-full bg-white/20 text-blue-900 font-medium py-3 px-4 rounded-xl hover:bg-white/30 transition-all duration-300 flex items-center justify-between group">
                                <span>Refund Policy</span>
                                <i class="fas fa-chevron-right group-hover:translate-x-1 transition-transform"></i>
                            </a>

                            <a href="{{ route('return-exchange') }}" class="block w-full bg-white/20 text-blue-900 font-medium py-3 px-4 rounded-xl hover:bg-white/30 transition-all duration-300 flex items-center justify-between group">
                                <span>Return Policy</span>
                                <i class="fas fa-chevron-right group-hover:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Need Help Card -->
                    <div class="bg-gradient-to-br from-blue-900 via-slate-900 to-slate-900 rounded-2xl shadow-2xl p-6 text-white animate-slide-up border border-yellow-400/20">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-bold text-yellow-400 flex items-center gap-2">
                                <i class="fas fa-question-circle"></i>
                                NEED HELP?
                            </h3>
                        </div>

                        <div class="space-y-4 mb-6">
                            <p class="text-white/90">Have questions about our terms or policies? Our support team is here to help.</p>

                            <a href="https://wa.me/{{ str_replace(['+', ' '], '', config('shop.contact.phone')) }}" target="_blank" class="block w-full bg-gradient-to-r from-green-500 to-green-600 text-white font-bold py-4 px-6 rounded-xl hover:from-green-600 hover:to-green-500 transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-between group">
                                <div class="flex items-center gap-3">
                                    <i class="fab fa-whatsapp text-white text-xl group-hover:scale-110 transition-transform"></i>
                                    <span>WHATSAPP US</span>
                                </div>
                                <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                            </a>

                            <a href="mailto:{{ config('shop.contact.email') }}" class="block w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white font-bold py-4 px-6 rounded-xl hover:from-blue-600 hover:to-blue-500 transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-between group">
                                <div class="flex items-center gap-3">
                                    <i class="fas fa-envelope text-white text-xl group-hover:scale-110 transition-transform"></i>
                                    <span>EMAIL US</span>
                                </div>
                                <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Last Updated Card -->
                    <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-6 border border-yellow-400/20 animate-slide-up">
                        <h3 class="text-xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-calendar-alt text-yellow-400"></i>
                            LAST UPDATED
                        </h3>

                        <div class="bg-gradient-to-r from-yellow-400/10 to-amber-100/20 p-4 rounded-xl text-center">
                            <p class="text-blue-900 font-medium">{{ date('F j, Y') }}</p>
                            <p class="text-sm text-gray-600 mt-1">These terms were last revised on the above date</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection