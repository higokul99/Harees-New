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
                Our Support Team
            </h1>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                We're here to help! Whether you have questions about our products, services, or your order, our dedicated support team is ready to assist you.
            </p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Support Options -->
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Email Support -->
                    <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-yellow-400/20 p-8 animate-fade-in hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-rose-100 to-pink-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-envelope text-rose-600 text-2xl"></i>
                        </div>
                        <h2 class="text-xl font-bold text-slate-900 text-center mb-3">Email Support</h2>
                        <p class="text-gray-600 text-center mb-6">Drop us an email anytime and we'll get back to you as soon as possible.</p>
                        <div class="text-center">
                            <a href="mailto:{{ config('shop.contact.email') }}" class="inline-block max-w-full break-all px-6 py-3 bg-gradient-to-r from-rose-100 to-pink-100 text-rose-700 font-medium rounded-xl hover:from-pink-100 hover:to-rose-100 transition-all duration-300">
                                <i class="fas fa-paper-plane mr-2"></i>{{ config('shop.contact.email') }}
                            </a>
                        </div>
                    </div>

                    <!-- WhatsApp Support -->
                    <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-yellow-400/20 p-8 animate-fade-in hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-green-100 to-emerald-100 rounded-full flex items-center justify-center">
                            <i class="fab fa-whatsapp text-green-600 text-2xl"></i>
                        </div>
                        <h2 class="text-xl font-bold text-slate-900 text-center mb-3">WhatsApp Support</h2>
                        <p class="text-gray-600 text-center mb-6">Message us for quick assistance. We usually respond within minutes!</p>
                        <div class="text-center">
                            <a href="https://wa.me/{{ str_replace(['+', ' '], '', config('shop.contact.phone')) }}" target="_blank" class="inline-block px-6 py-3 bg-gradient-to-r from-green-100 to-emerald-100 text-green-700 font-medium rounded-xl hover:from-emerald-100 hover:to-green-100 transition-all duration-300">
                                <i class="fab fa-whatsapp mr-2"></i>{{ config('shop.contact.phone') }}
                            </a>
                        </div>
                    </div>
                </div>

                <!-- FAQ Section -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-yellow-400/20 animate-fade-in">
                    <div class="p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-900 to-slate-900 rounded-lg flex items-center justify-center">
                                <i class="fas fa-question-circle text-yellow-400 text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-slate-900">Frequently Asked Questions</h2>
                        </div>

                        <div class="space-y-4">
                            <!-- FAQ Item 1 -->
                            <div class="bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-yellow-400/20 faq-item">
                                <button class="flex justify-between items-center w-full text-left faq-button">
                                    <h3 class="font-semibold text-slate-900">What are your business hours?</h3>
                                    <i class="fas fa-chevron-down text-yellow-400 transition-transform"></i>
                                </button>
                                <div class="mt-3 text-gray-600 hidden faq-content">
                                    <p>Our support team is available Monday to Saturday from 10:00 AM to 7:00 PM IST. WhatsApp support may respond outside these hours.</p>
                                </div>
                            </div>

                            <!-- FAQ Item 2 -->
                            <div class="bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-yellow-400/20 faq-item">
                                <button class="flex justify-between items-center w-full text-left faq-button">
                                    <h3 class="font-semibold text-slate-900">How long does shipping take?</h3>
                                    <i class="fas fa-chevron-down text-yellow-400 transition-transform"></i>
                                </button>
                                <div class="mt-3 text-gray-600 hidden faq-content">
                                    <p>Standard shipping typically takes 3-5 business days within India. For custom orders, production time varies based on complexity.</p>
                                </div>
                            </div>

                            <!-- FAQ Item 3 -->
                            <div class="bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-yellow-400/20 faq-item">
                                <button class="flex justify-between items-center w-full text-left faq-button">
                                    <h3 class="font-semibold text-slate-900">Can I modify my order after placing it?</h3>
                                    <i class="fas fa-chevron-down text-yellow-400 transition-transform"></i>
                                </button>
                                <div class="mt-3 text-gray-600 hidden faq-content">
                                    <p>Order modifications may be possible if the order hasn't entered processing. Please contact us immediately for assistance.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="sticky top-8 space-y-6">
                    <!-- Quick Help Card -->
                    <div class="bg-gradient-to-br from-yellow-400 via-amber-500 to-yellow-600 rounded-2xl shadow-2xl p-6 text-blue-900 animate-slide-up border border-yellow-400/20">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-bold text-blue-900 flex items-center gap-2">
                                <i class="fas fa-life-ring"></i>
                                QUICK HELP
                            </h3>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-shipping-fast text-blue-900 text-sm"></i>
                                </div>
                                <p class="text-blue-900 font-medium">Track your order status</p>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-exchange-alt text-blue-900 text-sm"></i>
                                </div>
                                <p class="text-blue-900 font-medium">Returns & exchanges</p>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-gem text-blue-900 text-sm"></i>
                                </div>
                                <p class="text-blue-900 font-medium">Product care guide</p>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-question text-blue-900 text-sm"></i>
                                </div>
                                <p class="text-blue-900 font-medium">General inquiries</p>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Card -->
                    <div class="bg-gradient-to-br from-blue-900 via-slate-900 to-slate-900 rounded-2xl shadow-2xl p-6 text-white animate-slide-up border border-yellow-400/20">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-bold text-yellow-400 flex items-center gap-2">
                                <i class="fas fa-phone-alt"></i>
                                CALL US DIRECTLY
                            </h3>
                        </div>

                        <div class="space-y-4 mb-6">
                            <div class="flex items-center gap-3 bg-slate-900/50 p-4 rounded-xl">
                                <i class="fas fa-store text-yellow-400"></i>
                                <div>
                                    <p class="text-sm text-white/80">Store Inquiries</p>
                                    <p class="font-bold">{{ config('shop.contact.phone') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="text-center text-white/90 text-sm">
                            <p>Our representatives are available Monday to Saturday, 10 AM to 7 PM IST.</p>
                        </div>
                    </div>

                    <!-- Policies Card -->
                    <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-6 border border-yellow-400/20 animate-slide-up">
                        <h3 class="text-xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-file-contract text-yellow-400"></i>
                            SUPPORT RESOURCES
                        </h3>

                        <div class="space-y-4">
                            <a href="{{ route('refund-policy') }}" class="block w-full bg-gradient-to-r from-gray-50 to-blue-50/30 text-blue-900 font-medium py-3 px-4 rounded-xl hover:bg-gradient-to-r hover:from-gray-100 hover:to-blue-100/30 transition-all duration-300 flex items-center justify-between group">
                                <span>Refund Policy</span>
                                <i class="fas fa-chevron-right text-yellow-400 group-hover:translate-x-1 transition-transform"></i>
                            </a>

                            <a href="{{ route('return-exchange') }}" class="block w-full bg-gradient-to-r from-gray-50 to-blue-50/30 text-blue-900 font-medium py-3 px-4 rounded-xl hover:bg-gradient-to-r hover:from-gray-100 hover:to-blue-100/30 transition-all duration-300 flex items-center justify-between group">
                                <span>Return & Exchange Policy</span>
                                <i class="fas fa-chevron-right text-yellow-400 group-hover:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@push('scripts')
<script>
    // FAQ Accordion functionality
    document.querySelectorAll('.faq-button').forEach(button => {
        button.addEventListener('click', () => {
            const faqItem = button.closest('.faq-item');
            const content = faqItem.querySelector('.faq-content');
            const icon = button.querySelector('i');

            // Toggle content visibility
            content.classList.toggle('hidden');

            // Rotate icon
            icon.classList.toggle('rotate-180');
        });
    });
</script>
@endpush
@endsection