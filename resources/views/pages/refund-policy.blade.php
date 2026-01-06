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
                Refund Policy
            </h1>
            <p class="text-gray-600 text-lg">Our policies for returns and refunds</p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Policy Content Card -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-yellow-400/20 animate-fade-in">
                    <div class="p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-amber-500 rounded-lg flex items-center justify-center">
                                <i class="fas fa-hand-holding-usd text-blue-900 text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-slate-900">Refund Policy Details</h2>
                        </div>

                        <div class="space-y-8 text-gray-700">
                            <p>At Harees Jewellery, we strive to ensure customer satisfaction with our products. If for any reason you are not completely satisfied with your purchase made on our website, we offer a replacement offer instead of refund policy. We do not offer refund policy for any reason.</p>

                            <div class="bg-gradient-to-r from-yellow-400/10 to-amber-100/20 p-6 rounded-xl border border-yellow-400/20">
                                <p class="font-semibold"><i class="fas fa-exclamation-circle text-yellow-400 mr-2"></i> This refund policy is not applicable for purchases made at any of our retail stores or any other online marketplaces.</p>
                            </div>

                            <!-- Return Period -->
                            <div>
                                <h3 class="text-xl font-semibold text-slate-900 mb-4 flex items-center gap-2">
                                    <i class="fas fa-calendar-day text-yellow-400"></i>
                                    Return Period
                                </h3>
                                <p>Customers have a period of <strong>7 - 10 days from the date of delivery</strong> to initiate a return. During this period, you can replace your current product with another product of your choice from same category. We reserve the right to reject any return request that is not initiated within this period. We reserve the right to make the final decision on the replacement offer.</p>
                            </div>

                            <!-- Refund Conditions -->
                            <div>
                                <h3 class="text-xl font-semibold text-slate-900 mb-4 flex items-center gap-2">
                                    <i class="fas fa-clipboard-check text-yellow-400"></i>
                                    Refund Conditions
                                </h3>
                                <ul class="space-y-3">
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-yellow-400 mt-1"></i>
                                        <span>The return request must be made within 7 - 10 days of delivery.</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-yellow-400 mt-1"></i>
                                        <span>The product must be returned in its original condition, along with all accompanying documents including the insurance certificate, invoice, and product certificate.</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-yellow-400 mt-1"></i>
                                        <span>This refund policy does not apply to:
                                            <ul class="ml-6 mt-2 space-y-2">
                                                <li class="flex items-start gap-2">
                                                    <i class="fas fa-minus text-yellow-400 mt-1.5 text-xs"></i>
                                                    <span>Gold coins</span>
                                                </li>
                                                <li class="flex items-start gap-2">
                                                    <i class="fas fa-minus text-yellow-400 mt-1.5 text-xs"></i>
                                                    <span>Silver articles</span>
                                                </li>
                                                <li class="flex items-start gap-2">
                                                    <i class="fas fa-minus text-yellow-400 mt-1.5 text-xs"></i>
                                                    <span>Gold Rakhi</span>
                                                </li>
                                                <li class="flex items-start gap-2">
                                                    <i class="fas fa-minus text-yellow-400 mt-1.5 text-xs"></i>
                                                    <span>Watches</span>
                                                </li>
                                                <li class="flex items-start gap-2">
                                                    <i class="fas fa-minus text-yellow-400 mt-1.5 text-xs"></i>
                                                    <span>Products marked as Smart Buy (Make to Order), customized or engraved items, personalized products, and gift cards</span>
                                                </li>
                                                <li class="flex items-start gap-2">
                                                    <i class="fas fa-minus text-yellow-400 mt-1.5 text-xs"></i>
                                                    <span>Items purchased with promotion codes or discount coupons</span>
                                                </li>
                                            </ul>
                                        </span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-yellow-400 mt-1"></i>
                                        <span>We do not provide any refund facility. We only provide replacement offer instead of refund policy.</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Return Process -->
                            <div>
                                <h3 class="text-xl font-semibold text-slate-900 mb-4 flex items-center gap-2">
                                    <i class="fas fa-exchange-alt text-yellow-400"></i>
                                    Return Process
                                </h3>
                                <p>To initiate a return, please email us at <strong>{{ config('shop.contact.email') }} or {{ config('shop.contact.phone') }}</strong>. Our customer support team will guide you through the steps.</p>
                                <p class="mt-3">You have to send the product to our store safely in a secure packing. Please make a video while packing the product and share it via WhatsApp with your order number at <strong>{{ config('shop.contact.phone') }}</strong>. This video acts as proof of the product's condition before return.</p>
                                <p class="mt-3">After packing, we will arrange a pickup through our courier partner. Make sure to note the airway bill number for tracking.</p>

                                <div class="bg-gradient-to-r from-yellow-400/10 to-amber-100/20 p-4 rounded-xl border border-yellow-400/20 mt-4">
                                    <p class="font-medium"><i class="fas fa-info-circle text-yellow-400 mr-2"></i> The entire return process can take 7–10 business days.</p>
                                </div>

                                <p class="mt-4">If we are unable to assign a courier partner, the customer must return the product using their own insured courier service at their own cost. After a quality check (QC), you can select another product from our store. If the product fails QC, we will notify the customer to raise a claim with their courier partner.</p>
                            </div>

                            <!-- Refund Processing -->
                            <div>
                                <p class="mt-4">Customized or damaged jewellery due to customer mishandling can only be repaired. <strong>No cash refund is applicable</strong> for such cases.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="sticky top-8 space-y-6">
                    <!-- Contact Card -->
                    <div class="bg-gradient-to-br from-blue-900 via-slate-900 to-slate-900 rounded-2xl shadow-2xl p-6 text-white animate-slide-up border border-yellow-400/20">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-bold text-yellow-400 flex items-center gap-2">
                                <i class="fas fa-headset"></i>
                                NEED ASSISTANCE?
                            </h3>
                        </div>

                        <div class="space-y-4 mb-6">
                            <p class="text-white/90">
                                Have questions about our refund policy? Contact our support team for help.
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

                    <!-- Important Notes Card -->
                    <div class="bg-gradient-to-br from-yellow-400 via-amber-500 to-yellow-600 rounded-2xl shadow-2xl p-6 text-blue-900 animate-slide-up border border-yellow-400/20">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-blue-900 flex items-center gap-2">
                                <i class="fas fa-exclamation-circle"></i>
                                IMPORTANT NOTES
                            </h3>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-info text-blue-900 text-sm"></i>
                                </div>
                                <p class="font-medium">Customized items can only be repaired, not refunded</p>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-info text-blue-900 text-sm"></i>
                                </div>
                                <p class="font-medium">No Refunds only replacements</p>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-info text-blue-900 text-sm"></i>
                                </div>
                                <p class="font-medium">Policy varies for different product categories</p>
                            </div>
                        </div>
                    </div>

                    <!-- Related Policies Card -->
                    <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-6 border border-yellow-400/20 animate-slide-up">
                        <h3 class="text-xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-file-contract text-yellow-400"></i>
                            RELATED POLICIES
                        </h3>

                        <div class="space-y-4">
                            <a href="{{ route('cancellation-policy') }}" class="block w-full bg-gradient-to-r from-gray-50 to-blue-50/30 text-blue-900 font-medium py-3 px-4 rounded-xl hover:bg-gradient-to-r hover:from-gray-100 hover:to-blue-100/30 transition-all duration-300 flex items-center justify-between group">
                                <span>Cancellation Policy</span>
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
@endsection