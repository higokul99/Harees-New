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
                Return & Exchange Policy
            </h1>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                We offer flexible replacement or exchange options to ensure your complete satisfaction
            </p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-yellow-400/20 animate-fade-in">
                    <div class="p-8">
                        <!-- Introduction -->
                        <div class="mb-10">
                            <p class="text-gray-700 mb-6">At Harees Jewellery, we understand that customer preferences may change. We offer a replacement or exchange policy to ensure you're fully satisfied with your purchase. For all return-related concerns, we strongly recommend reviewing both our <a href="{{ route('refund-policy') }}" class="text-blue-900 underline hover:text-slate-900 font-medium">Refund Policy</a> and this <a href="{{ route('return-exchange') }}" class="text-blue-900 underline hover:text-slate-900 font-medium">Return or Exchange Policy</a> to ensure a seamless experience.</p>
                        </div>

                        <!-- Policy Sections -->
                        <div class="space-y-10">
                            <!-- Exchange Within 7 - 10 days -->
                            <div class="border-b border-yellow-400/20 pb-8">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-yellow-400 to-amber-500 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-exchange-alt text-blue-900"></i>
                                    </div>
                                    <h2 class="text-2xl font-bold text-slate-900">Exchange Within 7 - 10 days of Purchase</h2>
                                </div>
                                <ul class="space-y-3 ml-2">
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-yellow-400 mt-1"></i>
                                        <span>You may exchange Gold, Diamond, and Precious Gem jewellery within 7 - 10 days from the purchase date, provided it is in original condition with all documents (invoice, certificates, etc.).</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-yellow-400 mt-1"></i>
                                        <span>Products must be returned to our registered address mentioned.</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-yellow-400 mt-1"></i>
                                        <span>Only one exchange is allowed per invoice.</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-yellow-400 mt-1"></i>
                                        <span>Exchange without deduction of making charges is applicable for unused items.</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-yellow-400 mt-1"></i>
                                        <span>All exchanges are subject to a quality check, which may take up to 4 working days.</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-yellow-400 mt-1"></i>
                                        <span>Part exchange of ornaments is not permitted.</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-yellow-400 mt-1"></i>
                                        <div>
                                            <span>This facility is not available for:</span>
                                            <ul class="ml-4 mt-2 space-y-2">
                                                <li class="flex items-start gap-2">
                                                    <i class="fas fa-minus text-yellow-400 text-xs mt-1.5"></i>
                                                    <span>Products from online marketplaces</span>
                                                </li>
                                                <li class="flex items-start gap-2">
                                                    <i class="fas fa-minus text-yellow-400 text-xs mt-1.5"></i>
                                                    <span>Custom-made, engraved, Smart Buy (Make-to-Order) items</span>
                                                </li>
                                                <li class="flex items-start gap-2">
                                                    <i class="fas fa-minus text-yellow-400 text-xs mt-1.5"></i>
                                                    <span>Rakhi, gold/silver coins, bars, and silver articles</span>
                                                </li>
                                                <li class="flex items-start gap-2">
                                                    <i class="fas fa-minus text-yellow-400 text-xs mt-1.5"></i>
                                                    <span>Promotional or special offer items</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-yellow-400 mt-1"></i>
                                        <span>Exchange value is adjusted against the new product. Any price difference must be paid by the customer.</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-yellow-400 mt-1"></i>
                                        <span>All taxes, duties, and applicable local charges are to be borne by the customer.</span>
                                    </li>
                                    <!-- <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-yellow-400 mt-1"></i>
                                        <span>Any gifts or vouchers received at the time of original purchase must be returned, or their value will be deducted.</span>
                                    </li> -->
                                </ul>
                            </div>

                            <!-- Exchange After 7 - 10 days -->
                            <div class="border-b border-yellow-400/20 pb-8">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-blue-900 to-slate-900 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-calendar-alt text-yellow-400"></i>
                                    </div>
                                    <h2 class="text-2xl font-bold text-slate-900">Exchange After 7 - 10 days of Purchase</h2>
                                </div>
                                <p class="text-gray-600 mb-6">For exchanges made after 7 - 10 days, the prevailing rate on hareesjewellery.harees.in at the time of exchange will apply. Below are the applicable exchange values:</p>

                                <div class="bg-gradient-to-r from-yellow-400/10 to-amber-100/20 p-6 rounded-xl border border-yellow-400/20">
                                    <ul class="space-y-3">
                                        <li class="flex items-start gap-2">
                                            <i class="fas fa-gem text-yellow-400 mt-1"></i>
                                            <span><strong>Gold Jewellery:</strong> 98% of benchmark gold rate</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <i class="fas fa-gem text-yellow-400 mt-1"></i>
                                            <span><strong>Diamond Jewellery:</strong> 98% of benchmark gold rate + 75% prevailing diamond carat rate (minus discount given at purchase)</span>
                                        </li>
                                        <!-- <li class="flex items-start gap-2">
                                            <i class="fas fa-gem text-yellow-400 mt-1"></i>
                                            <span><strong>Era (Uncut Diamond) Jewellery:</strong> 100% benchmark gold rate + 100% of invoice value of uncut diamond (minus discount)</span>
                                        </li> -->
                                        <li class="flex items-start gap-2">
                                            <i class="fas fa-gem text-yellow-400 mt-1"></i>
                                            <span><strong>Precia (Precious Stones):</strong> No buy back value</span>
                                        </li>
                                        <!-- <li class="flex items-start gap-2">
                                            <i class="fas fa-gem text-yellow-400 mt-1"></i>
                                            <span><strong>Solitaire Loose Diamonds:</strong> 100% prevailing diamond rate (minus discount)</span>
                                        </li> -->
                                        <!-- <li class="flex items-start gap-2">
                                            <i class="fas fa-gem text-yellow-400 mt-1"></i>
                                            <span><strong>Solitaire Studded Jewellery:</strong> 100% benchmark gold rate + 100% prevailing diamond rate (minus discount)</span>
                                        </li> -->
                                        <li class="flex items-start gap-2">
                                            <i class="fas fa-gem text-yellow-400 mt-1"></i>
                                            <span><strong>Platinum Jewellery:</strong> 70% buy back value</span>
                                        </li>
                                        <!-- <li class="flex items-start gap-2">
                                            <i class="fas fa-coins text-yellow-400 mt-1"></i>
                                            <span><strong>Gold Coins:</strong> 100% of benchmark gold rate</span>
                                        </li> -->
                                    </ul>
                                </div>

                                <p class="text-gray-600 mt-6">Additional deductions may apply:</p>
                                <ul class="space-y-2 ml-2 mt-3">
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-minus text-yellow-400 mt-1.5"></i>
                                        <span>All making charges, taxes, and non-precious stones (e.g., zircon, pearls) are fully deducted.</span>
                                    </li>
                                    <!-- <li class="flex items-start gap-2">
                                        <i class="fas fa-minus text-yellow-400 mt-1.5"></i>
                                        <span>Products with precious stones (ruby, emerald, sapphire) follow the Precia exchange rule (75% for exchange, 70% for cash).</span>
                                    </li> -->
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-minus text-yellow-400 mt-1.5"></i>
                                        <span>No buyback for synthetic or semi-precious stones and pearls.</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Important Notes -->
                            <div class="border-b border-yellow-400/20 pb-8">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-yellow-400 to-amber-500 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-exclamation-circle text-blue-900"></i>
                                    </div>
                                    <h2 class="text-2xl font-bold text-slate-900">Important Notes</h2>
                                </div>
                                <ul class="space-y-3 ml-2">
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-yellow-400 mt-1"></i>
                                        <span>All exchanges are subject to a Quality Check, which may take up to 4 working days.</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-yellow-400 mt-1"></i>
                                        <span>We reserve the right to assess the returned product before confirming exchange value.</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-yellow-400 mt-1"></i>
                                        <span>Price difference between exchanged and new product must be settled by the customer.</span>
                                    </li>
                                    <!-- <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-yellow-400 mt-1"></i>
                                        <span>All local taxes and duties to be borne by the customer.</span>
                                    </li> -->
                                </ul>
                            </div>

                            <!-- Discretion of Rights -->
                            <div class="border-b border-yellow-400/20 pb-8">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-blue-900 to-slate-900 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-gavel text-yellow-400"></i>
                                    </div>
                                    <h2 class="text-2xl font-bold text-slate-900">Discretion of Rights</h2>
                                </div>
                                <p class="text-gray-600">Harees Jewellery reserves the right to permit or deny exchanges and to modify these terms without prior notice.</p>
                                <p class="text-gray-600 mt-3">All disputes are subject to jurisdiction of the courts at Kollam.</p>
                            </div>

                            <!-- Need Help -->
                            <div class="pt-8">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-blue-900 to-slate-900 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-headset text-yellow-400"></i>
                                    </div>
                                    <h2 class="text-2xl font-bold text-slate-900">Need Help?</h2>
                                </div>
                                <p class="text-gray-600">If you require further clarification or assistance, please contact our customer support team at <a href="{{ route('support') }}" class="text-blue-900 underline hover:text-slate-900 font-medium">Our Support team</a>.</p>
                                <p class="text-gray-600 mt-3">We encourage customers to refer to both the <a href="{{ route('refund-policy') }}" class="text-blue-900 underline hover:text-slate-900 font-medium">Refund Policy</a> and this <a href="{{ route('return-exchange') }}" class="text-blue-900 underline hover:text-slate-900 font-medium">Return or Exchange Policy</a> in parallel before initiating any return or exchange.</p>
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
                                NEED HELP WITH RETURNS?
                            </h3>
                        </div>

                        <div class="space-y-4 mb-6">
                            <p class="text-white/90">
                                Our jewelry experts are here to assist you with any questions about returns or exchanges. Contact us through your preferred method:
                            </p>

                            <a href="https://wa.me/{{ str_replace(['+', ' '], '', config('shop.contact.phone')) }}" target="_blank" class="block w-full bg-gradient-to-r from-green-500 to-green-600 text-white font-bold py-4 px-6 rounded-xl hover:from-green-600 hover:to-green-500 transition-all duration-300 transform hover:scale-[1.02] hover:shadow-lg flex items-center justify-between group">
                                <div class="flex items-center gap-3">
                                    <i class="fab fa-whatsapp text-white text-xl group-hover:scale-110 transition-transform"></i>
                                    <span>WHATSAPP US</span>
                                </div>
                                <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                            </a>

                            <a href="tel:{{ str_replace(['+', ' '], '', config('shop.contact.phone')) }}" class="block w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white font-bold py-4 px-6 rounded-xl hover:from-blue-600 hover:to-blue-500 transition-all duration-300 transform hover:scale-[1.02] hover:shadow-lg flex items-center justify-between group">
                                <div class="flex items-center gap-3">
                                    <i class="fas fa-phone-alt text-white text-xl group-hover:scale-110 transition-transform"></i>
                                    <span>CALL US</span>
                                </div>
                                <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                            </a>

                            <a href="mailto:{{ config('shop.contact.email') }}" class="block w-full bg-gradient-to-r from-amber-500 to-amber-600 text-white font-bold py-4 px-6 rounded-xl hover:from-amber-600 hover:to-amber-500 transition-all duration-300 transform hover:scale-[1.02] hover:shadow-lg flex items-center justify-between group">
                                <div class="flex items-center gap-3">
                                    <i class="fas fa-envelope text-white text-xl group-hover:scale-110 transition-transform"></i>
                                    <span>EMAIL US</span>
                                </div>
                                <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                            </a>
                        </div>

                        <div class="text-center text-white/90 text-sm">
                            <p>Available Monday-Saturday, 10AM to 7PM IST</p>
                        </div>
                    </div>

                    <!-- Exchange Process Card -->
                    <div class="bg-gradient-to-br from-yellow-400 via-amber-500 to-yellow-600 rounded-2xl shadow-2xl p-6 text-blue-900 animate-slide-up border border-yellow-400/20">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-bold text-blue-900 flex items-center gap-2">
                                <i class="fas fa-exchange-alt"></i>
                                EXCHANGE PROCESS
                            </h3>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-blue-900 font-bold">1</span>
                                </div>
                                <p class="text-blue-900 font-medium">Contact support to initiate exchange</p>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-blue-900 font-bold">2</span>
                                </div>
                                <p class="text-blue-900 font-medium">Ship item with all original packaging</p>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-blue-900 font-bold">3</span>
                                </div>
                                <p class="text-blue-900 font-medium">Wait for quality inspection (4 days)</p>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-blue-900 font-bold">4</span>
                                </div>
                                <p class="text-blue-900 font-medium">Select new item or receive credit</p>
                            </div>
                        </div>

                        <div class="mt-6 pt-4 border-t border-blue-900/20 text-center">
                            <p class="text-sm text-blue-900/80">For personalized assistance, contact our jewelry experts</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection