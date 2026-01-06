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
                Contact Us
            </h1>
            <p class="text-gray-600 text-lg">We'd love to hear from you. Visit any of our branches or reach out to us directly.</p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Paravur Location -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-yellow-400/20 animate-fade-in">
                    <div class="p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-amber-500 rounded-lg flex items-center justify-center">
                                <i class="fas fa-store text-blue-900 text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-slate-900">{{ config('shop.stores.paravur.name') }}</h2>
                        </div>

                        <div class="space-y-4 text-gray-700">
                            <div class="flex items-start gap-3">
                                <i class="fas fa-map-marker-alt text-yellow-400 mt-1"></i>
                                <div>
                                    <p class="font-medium">Address:</p>
                                    <p class="mt-1">
                                        {{ config('shop.stores.paravur.address_line1') }}<br>
                                        {{ config('shop.stores.paravur.address_line2') }}<br>
                                        {{ config('shop.stores.paravur.city') }}, {{ config('shop.stores.paravur.state') }}
                                    </p>
                                    <a href="{{ config('shop.stores.paravur.map_url') }}" target="_blank" class="text-blue-900 hover:underline mt-2 inline-block">View on Google Maps</a>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <i class="fas fa-phone-alt text-yellow-400 mt-1"></i>
                                <div>
                                    <p class="font-medium">Contact:</p>
                                    <p class="mt-1">
                                        {{ config('shop.stores.paravur.phone1') }}<br>
                                        {{ config('shop.stores.paravur.phone2') }}<br>
                                        {{ config('shop.stores.paravur.whatsapp') }} <span class="text-sm">(WhatsApp)</span>
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <i class="fas fa-clock text-yellow-400 mt-1"></i>
                                <div>
                                    <p class="font-medium">Hours:</p>
                                    <p class="mt-1">
                                        Monday - Saturday: {{ config('shop.hours.weekday') }}<br>
                                        Sunday: Holiday
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chinnakada Location -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-yellow-400/20 animate-fade-in">
                    <div class="p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-900 to-slate-900 rounded-lg flex items-center justify-center">
                                <i class="fas fa-gem text-yellow-400 text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-slate-900">{{ config('shop.stores.chinnakada.name') }}</h2>
                        </div>

                        <div class="space-y-4 text-gray-700">
                            <div class="flex items-start gap-3">
                                <i class="fas fa-map-marker-alt text-yellow-400 mt-1"></i>
                                <div>
                                    <p class="font-medium">Address:</p>
                                    <p class="mt-1">
                                        {{ config('shop.stores.chinnakada.address_line1') }}<br>
                                        {{ config('shop.stores.chinnakada.address_line2') }}<br>
                                        {{ config('shop.stores.chinnakada.city') }}, {{ config('shop.stores.chinnakada.state') }} - {{ config('shop.stores.chinnakada.pincode') }}
                                    </p>
                                    <a href="{{ config('shop.stores.chinnakada.map_url') }}" target="_blank" class="text-blue-900 hover:underline mt-2 inline-block">View on Google Maps</a>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <i class="fas fa-phone-alt text-yellow-400 mt-1"></i>
                                <div>
                                    <p class="font-medium">Contact:</p>
                                    <p class="mt-1">
                                        {{ config('shop.stores.chinnakada.phone1') }}<br>
                                        {{ config('shop.stores.chinnakada.phone2') }}<br>
                                        {{ config('shop.stores.chinnakada.whatsapp') }} <span class="text-sm">(WhatsApp)</span>
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <i class="fas fa-clock text-yellow-400 mt-1"></i>
                                <div>
                                    <p class="font-medium">Hours:</p>
                                    <p class="mt-1">
                                        Monday - Saturday: {{ config('shop.hours.weekday') }}<br>
                                        Sunday: 10:00 AM - 8:00 PM
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Koottikkada Location -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-yellow-400/20 animate-fade-in">
                    <div class="p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-amber-500 rounded-lg flex items-center justify-center">
                                <i class="fas fa-ring text-blue-900 text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-slate-900">{{ config('shop.stores.koottikkada.name') }}</h2>
                        </div>

                        <div class="space-y-4 text-gray-700">
                            <div class="flex items-start gap-3">
                                <i class="fas fa-map-marker-alt text-yellow-400 mt-1"></i>
                                <div>
                                    <p class="font-medium">Address:</p>
                                    <p class="mt-1">
                                        {{ config('shop.stores.koottikkada.address_line1') }}<br>
                                        {{ config('shop.stores.koottikkada.address_line2') }}<br>
                                        {{ config('shop.stores.koottikkada.city') }}, {{ config('shop.stores.koottikkada.state') }}
                                    </p>
                                    <a href="{{ config('shop.stores.koottikkada.map_url') }}" target="_blank" class="text-blue-900 hover:underline mt-2 inline-block">View on Google Maps</a>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <i class="fas fa-phone-alt text-yellow-400 mt-1"></i>
                                <div>
                                    <p class="font-medium">Contact:</p>
                                    <p class="mt-1">
                                        {{ config('shop.stores.koottikkada.phone1') }}<br>
                                        {{ config('shop.stores.koottikkada.phone2') }}<br>
                                        {{ config('shop.stores.koottikkada.whatsapp') }} <span class="text-sm">(WhatsApp)</span>
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <i class="fas fa-clock text-yellow-400 mt-1"></i>
                                <div>
                                    <p class="font-medium">Hours:</p>
                                    <p class="mt-1">
                                        Monday - Saturday: {{ config('shop.hours.weekday') }}<br>
                                        Sunday: Holiday
                                    </p>
                                </div>
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
                                QUICK CONTACT
                            </h3>
                        </div>

                        <div class="space-y-4 mb-6">
                            <p class="text-white/90">
                                For immediate assistance, contact us through these channels:
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

                            <a href="mailto:{{ config('shop.contact.email') }}" class="block w-full bg-gradient-to-r from-rose-500 to-pink-600 text-white font-bold py-4 px-6 rounded-xl hover:from-rose-600 hover:to-pink-500 transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-between group">
                                <div class="flex items-center gap-3">
                                    <i class="fas fa-envelope text-white text-xl group-hover:scale-110 transition-transform"></i>
                                    <span>EMAIL US</span>
                                </div>
                                <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Business Hours Card -->
                    <div class="bg-gradient-to-br from-yellow-400 via-amber-500 to-yellow-600 rounded-2xl shadow-2xl p-6 text-blue-900 animate-slide-up border border-yellow-400/20">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-blue-900 flex items-center gap-2">
                                <i class="fas fa-clock"></i>
                                BUSINESS HOURS
                            </h3>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-calendar-day text-blue-900 text-sm"></i>
                                </div>
                                <p class="font-medium">Monday - Saturday</p>
                            </div>
                            <p class="ml-11">{{ config('shop.hours.weekday') }}</p>

                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-calendar-times text-blue-900 text-sm"></i>
                                </div>
                                <p class="font-medium">Sunday - Closed</p>
                            </div>
                        </div>
                    </div>

                    <!-- Visit Us Card -->
                    <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-6 border border-yellow-400/20 animate-slide-up">
                        <h3 class="text-xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-map-marked-alt text-yellow-400"></i>
                            FIND OUR STORES
                        </h3>

                        <div class="space-y-3 text-gray-700">
                            <div class="flex items-start gap-2">
                                <i class="fas fa-map-pin text-yellow-400 mt-1"></i>
                                <a href="{{ config('shop.stores.paravur.map_url') }}" target="_blank" class="hover:underline">Paravur Location</a>
                            </div>
                            <div class="flex items-start gap-2">
                                <i class="fas fa-map-pin text-yellow-400 mt-1"></i>
                                <a href="{{ config('shop.stores.chinnakada.map_url') }}" target="_blank" class="hover:underline">Chinnakada Location</a>
                            </div>
                            <div class="flex items-start gap-2">
                                <i class="fas fa-map-pin text-yellow-400 mt-1"></i>
                                <a href="{{ config('shop.stores.koottikkada.map_url') }}" target="_blank" class="hover:underline">Koottikkada Location</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection