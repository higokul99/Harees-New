@extends('layouts.app')

@section('content')
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
                },
                animation: {
                    'fade-in': 'fadeIn 0.5s ease-in-out',
                    'slide-up': 'slideUp 0.3s ease-out',
                    'pulse-slow': 'pulse 3s infinite',
                },
            }
        }
    }
</script>
@endpush

<div class="w-full bg-gray-50 min-h-screen pt-24 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
        @endif
        @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
        @endif

        @if($products->isEmpty())
        <!-- Empty Cart State -->
        <div class="bg-white rounded-lg shadow-sm p-12 text-center">
            <div class="text-6xl mb-4">🛒</div>
            <h2 class="text-2xl font-semibold text-gray-700 mb-2">Your cart is empty</h2>
            <p class="text-gray-500">Add some items to get started</p>
            <a href="{{ route('products') }}" class="mt-6 inline-block bg-yellow-400 hover:bg-yellow-600 text-white px-6 py-3 rounded-lg font-medium transition-colors">
                Continue Shopping
            </a>
        </div>
        @else
        <!-- Cart with Items -->
        <div class="lg:grid lg:grid-cols-12 lg:gap-8 relative">
            <!-- Cart Items Section -->
            <div class="lg:col-span-8">
                <div class="bg-white rounded-lg shadow-sm">
                    <!-- Cart Header -->
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h1 class="text-xl font-semibold text-gray-900">
                            My Cart ({{ $products->count() }} items)
                        </h1>
                    </div>

                    <!-- Cart Items -->
                    <div class="divide-y divide-gray-200">
                        @foreach($products as $product)
                        @php
                        $imageUrl = asset('harees/ims/internal/' . ($product->img2 ?? '.jpg'));
                        @endphp
                        <div class="p-4 md:p-6">
                            <div class="flex flex-col md:flex-row gap-4">
                                <!-- Image -->
                                <a href="{{ route('product.show', ['id' => $product->id, 'table' => $product->table_name, 'product_code' => $product->product_code]) }}" class="flex-shrink-0">
                                    <img src="{{ $imageUrl }}" alt="{{ $product->name }}" class="w-24 h-24 md:w-32 md:h-32 object-contain bg-gray-50 rounded-lg">
                                </a>

                                <!-- Details -->
                                <div class="flex-1">
                                    <h3 class="text-base md:text-lg font-medium text-gray-900 mb-1">
                                        <a href="{{ route('product.show', ['id' => $product->id, 'table' => $product->table_name, 'product_code' => $product->product_code]) }}" class="hover:text-sky-900">
                                            {{ $product->name }}
                                        </a>
                                    </h3>
                                    <p class="text-sm text-gray-500 mb-2">Code: {{ $product->product_code }}</p>



                                    <div class="text-lg font-bold text-gray-900 mb-2">
                                        ₹ {{ number_format($product->calculated_price) }}
                                    </div>

                                    @if($product->quantity > 1)
                                    <p class="text-xs text-gray-500">Qty: {{ $product->quantity }} (x ₹ {{ number_format($product->calculated_price) }})</p>
                                    @endif

                                    <!-- Specifications -->
                                    <div class="text-xs text-gray-600 space-y-1">
                                        @if(isset($product->net_weight))
                                        <div>Weight: {{ number_format($product->net_weight, 3) }}g</div>
                                        @endif
                                        @if(isset($product->metal_type))
                                        <div>Metal: {{ $product->metal_type }}</div>
                                        @endif
                                    </div>
                                </div>

                                <!-- Actions -->
                                <div class="flex flex-col justify-between w-full md:w-48 gap-4">
                                    <div class="bg-gray-50 p-3 rounded-lg text-xs space-y-2">
                                        <div class="flex items-center text-gray-600">
                                            <i class="fas fa-check-circle text-green-500 mr-2"></i> Insured Delivery
                                        </div>
                                        <div class="flex items-center text-gray-600">
                                            <i class="fas fa-headset text-green-500 mr-2"></i> Online Support
                                        </div>
                                    </div>

                                    <form action="{{ route('cart.remove') }}" method="POST" onsubmit="return confirm('Remove this item?');">
                                        @csrf
                                        <input type="hidden" name="cart_id" value="{{ $product->cart_id }}">
                                        <button type="submit" class="w-full px-4 py-2 border border-red-300 text-red-600 rounded-md text-sm font-medium hover:bg-red-50 transition-colors">
                                            REMOVE
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Summary Sidebar -->
            <div class="lg:col-span-4 mt-8 lg:mt-0">
                <div class="bg-gradient-to-br from-dark-blue via-navy to-slate-900 rounded-2xl shadow-2xl p-6 text-white border border-golden/20 lg:sticky lg:top-8">
                    <div class="border-b border-yellow-400 pb-4 mb-4">
                        <h2 class="text-xl font-bold text-yellow-400">ORDER SUMMARY</h2>
                    </div>

                    <div class="space-y-4">
                        <div class="flex justify-between text-sm">
                            <span class="text-white/80">Total ({{ $products->count() }} items)</span>
                            <span class="font-semibold text-yellow-300">₹ {{ number_format($cartTotal) }}</span>
                        </div>

                        @if($discountAmount > 0)
                        <div class="flex justify-between text-sm text-green-400">
                            <span>Discount (10%)</span>
                            <span>- ₹ {{ number_format($discountAmount) }}</span>
                        </div>
                        @endif

                        <div class="border-t border-yellow-400 pt-4">
                            <div class="flex justify-between text-lg font-semibold">
                                <span>Total Payable</span>
                                <span class="text-xl font-bold text-yellow-300">₹ {{ number_format($finalTotal) }}</span>
                            </div>
                        </div>

                        <div class="text-sm text-white/80 mt-2">
                            <i class="fas fa-truck text-green-400 mr-1"></i>
                            Delivery expected by {{ date('D, M j', strtotime('+5 days')) }}
                        </div>

                        <a href="{{ route('checkout') }}" class="block w-full text-center mt-4 bg-gradient-to-r from-yellow-400 to-amber-500 text-blue-900 font-bold py-3 px-4 rounded-xl hover:from-amber-400 hover:to-yellow-400 transition-all duration-300 transform hover:scale-105 shadow-lg">
                            PLACE ORDER
                        </a>

                        <div class="border-t border-yellow-400 pt-4 text-sm">
                            <p class="font-medium text-white mb-2">Payment Options:</p>
                            <div class="flex flex-wrap gap-2 text-white/90">
                                <span class="bg-white/10 px-2 py-1 rounded text-sm">Credit Card</span>
                                <span class="bg-white/10 px-2 py-1 rounded text-sm">Debit Card</span>
                                <span class="bg-white/10 px-2 py-1 rounded text-sm">Net Banking</span>
                                <span class="bg-white/10 px-2 py-1 rounded text-sm">UPI</span>
                            </div>
                        </div>

                        <div class="border-t border-yellow-400 pt-4 mt-4 text-sm text-white/80">
                            <p class="mb-2">Any Questions?</p>
                            <p>Call <span class="font-semibold text-white">{{ config('shop.stores.paravur.phone1') }}</span> or
                                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', config('shop.stores.paravur.whatsapp')) }}" class="text-blue-400 hover:text-blue-300 font-medium">WhatsApp Us</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection