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
                <h1 class="text-3xl font-bold text-navy mb-2">Completed Schemes History</h1>
                <p class="text-gray-600">View all your completed gold savings schemes</p>
            </div>
            <div class="flex gap-4">
                <a href="{{ route('schemes') }}" class="bg-gradient-to-r from-golden to-amber-500 text-dark-blue font-bold px-6 py-3 rounded-lg hover:from-amber-400 hover:to-golden transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center gap-3">
                    <i class="fas fa-arrow-left"></i>
                    Back to Schemes
                </a>
            </div>
        </div>

        <!-- Completed Schemes Grid -->
        @if ($completed_schemes->count() > 0)
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($completed_schemes as $scheme)
                    @php
                        $isPremium = in_array($scheme->scheme_type, ['B', 'D', 'F']);
                        $isRoseGold = in_array($scheme->scheme_type, ['C', 'E']);
                    @endphp
                    <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-2xl border-2 border-green-500 animate-fade-in transform hover:-translate-y-2 transition-all duration-300 group relative overflow-hidden">
                        <div class="absolute top-0 right-0 bg-green-500 text-white px-4 py-1 rounded-bl-lg font-bold text-xs">
                            COMPLETED
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
                                <div class="relative p-4 bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl border border-green-200">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <p class="text-sm font-medium text-gray-600">Monthly Installment</p>
                                            <p class="font-semibold text-navy text-xl">₹{{ number_format($scheme->monthly_amount, 2) }}</p>
                                        </div>
                                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                            <i class="fas fa-check-circle text-green-600"></i>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="relative p-4 bg-gradient-to-br from-gray-50 to-blue-50/30 rounded-xl border {{ $isRoseGold ? 'border-rose-gold/30' : 'border-golden/20' }}">
                                        <p class="text-sm font-medium text-gray-600">Total Paid</p>
                                        <p class="font-semibold text-navy">₹{{ number_format($scheme->monthly_amount * 11, 2) }}</p>
                                    </div>
                                    <div class="relative p-4 bg-gradient-to-br from-gray-50 to-blue-50/30 rounded-xl border {{ $isRoseGold ? 'border-rose-gold/30' : 'border-golden/20' }}">
                                        <p class="text-sm font-medium text-gray-600">Bonus</p>
                                        <p class="font-semibold text-navy">₹{{ number_format($scheme->bonus_amount, 2) }}</p>
                                    </div>
                                </div>
                                
                                <div class="relative p-4 bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl border border-green-200">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <p class="text-sm font-medium text-gray-600">Final Maturity Value</p>
                                            <p class="font-semibold text-navy text-xl">₹{{ number_format($scheme->final_value, 2) }}</p>
                                        </div>
                                        <div class="w-12 h-12 bg-gradient-to-br from-golden/20 to-amber-100/20 rounded-full flex items-center justify-center">
                                            <i class="fas fa-gem text-dark-blue"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Download Passbook Button -->
                            <a href="{{ route('schemes.passbook', $scheme->id) }}" 
                                class="w-full bg-gradient-to-r from-dark-blue to-navy text-white px-6 py-3 rounded-xl hover:from-navy hover:to-dark-blue transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-center gap-3">
                                <i class="fas fa-download"></i> Download Passbook
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="bg-white rounded-2xl shadow-2xl border-2 border-golden/30 p-8 text-center animate-fade-in">
                <div class="w-24 h-24 bg-gradient-to-br from-gray-100 to-blue-50 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-history text-gray-400 text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-700 mb-2">No Completed Schemes</h3>
                <p class="text-gray-500 mb-6">You haven't completed any schemes yet</p>
                <a href="{{ route('schemes') }}" class="bg-gradient-to-r from-golden to-amber-500 text-dark-blue font-bold px-6 py-3 rounded-xl hover:from-amber-400 hover:to-golden transition-all duration-300 transform hover:scale-105 hover:shadow-lg inline-flex items-center gap-2">
                    <i class="fas fa-arrow-left"></i>
                    Back to Active Schemes
                </a>
            </div>
        @endif
    </div>
</div>
@endsection
