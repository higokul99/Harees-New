@extends('layouts.app')

@push('styles')
<style>
    .lazy-placeholder {
        background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
        background-size: 200% 100%;
        animation: loading 1.5s infinite;
    }

    @keyframes loading {
        0% {
            background-position: 200% 0;
        }

        100% {
            background-position: -200% 0;
        }
    }

    .thumbnail-container.active img {
        border: 2px solid #fbbf24;
        /* Amber-400 */
    }
</style>
@endpush

@section('content')
<div class="w-full pt-6 md:pt-16 bg-white">
    <div class="max-w-7xl mx-auto p-4">
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Left Column: Images -->
            <div class="flex-1">
                <!-- Main Image -->
                <div class="main-image-container relative aspect-square bg-gray-50 rounded-lg overflow-hidden border border-gray-100 mb-4">
                    @php
                    // Construct Image URL
                    // Image path: public/harees/ims/internal/ + path from DB
                    $mainImgUrl = asset('harees/ims/internal/' . ($product->img2 ?? 'placeholder.jpg'));
                    @endphp
                    <img id="mainImage" src="{{ $mainImgUrl }}" alt="{{ $product->name }}" class="w-full h-full object-contain">
                </div>

                <!-- Thumbnails -->
                <div class="flex space-x-2 overflow-x-auto pb-2">
                    @php
                    // Main image is img2 in legacy code line 39.
                    // Thumbs loop 2 to 5.
                    // I will verify if img2 is the "main" one usually.
                    // Yes, legacy: $imagedetails = $loc.$row['img2'];
                    // And thumbs: for ($i = 2; $i <= 5; $i++)
                        // Wait, if loop starts at 2, it includes img2 again?
                        // If img2 is main, why loop 2? Maybe img1 is different or unused?
                        // Legacy loop checks !empty($row[$imgKey]).
                        // I'll replicate the loop.
                        @endphp
                        @for ($i=2; $i <=5; $i++)
                        @php
                        $imgKey='img' . $i;
                        $imgVal=$product->$imgKey ?? null;
                        @endphp
                        @if ($imgVal)
                        @php $thumbUrl = asset('harees/ims/internal/' . $imgVal); @endphp
                        <div class="thumbnail-container relative w-20 h-20 rounded-md overflow-hidden cursor-pointer border border-gray-200 hover:border-sky-600 transition-colors"
                            onclick="changeMainImage('{{ $thumbUrl }}')">
                            <img src="{{ $thumbUrl }}" alt="Thumbnail" class="w-full h-full object-cover">
                        </div>
                        @endif
                        @endfor
                </div>
            </div>

            <!-- Right Column: Details -->
            <div class="flex-1">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">{{ $product->name }}</h1>
                <p class="text-gray-600 mb-4">{{ $product->description }}</p>

                <div class="text-sm text-gray-500 mb-4">
                    <p>Product Code: <span class="font-mono text-gray-700">{{ $product->product_code }}</span></p>
                    <p>All India Delivery available | BIS Hallmarked Jewellery</p>
                </div>

                <!-- Availability -->
                <div class="mb-6">
                    <span class="font-semibold text-gray-700">Availability:</span>
                    @if($product->stock_quantity > 0)
                    <span class="text-green-600 font-medium">In Stock</span>
                    @else
                    <span class="text-red-600 font-medium">Out of Stock</span>
                    @endif
                </div>

                <!-- Specs -->
                <div class="grid grid-cols-2 gap-4 mb-6 text-sm bg-gray-50 p-4 rounded-lg">
                    <div>
                        <span class="font-semibold text-sky-900 block">Size</span>
                        <span class="text-gray-700">{{ $product->size ?? 'N/A' }}</span>
                    </div>
                    <div>
                        <span class="font-semibold text-sky-900 block">Weight</span>
                        <span class="text-gray-700">{{ number_format($product->net_weight ?? 0, 3) }} gm</span>
                    </div>
                </div>

                <!-- Pricing -->
                @if(!$hideRates)
                <div class="mb-6">
                    <p class="text-3xl font-bold text-sky-900">₹ {{ $finalPrice }}</p>
                    <small class="text-gray-500">(Inclusive of all taxes)</small>
                </div>

                <!-- Price Breakup -->
                <div class="mb-6">
                    <h2 class="text-sm font-semibold text-gray-800 uppercase tracking-wide mb-2">Price Breakup</h2>
                    <div class="flex flex-wrap gap-2 text-sm">
                        @if($metalCost > 0)
                        <div class="bg-gray-100 px-3 py-2 rounded">
                            <span class="block text-xs text-gray-500">{{ $metalType }}</span>
                            <span class="font-bold">₹ {{ $metalCost }}</span>
                        </div>
                        @endif

                        @if($makingCharges > 0)
                        <div class="bg-gray-100 px-3 py-2 rounded">
                            <span class="block text-xs text-gray-500">Making</span>
                            <span class="font-bold">₹ {{ $makingCharges }}</span>
                        </div>
                        @endif

                        @if($gst > 0)
                        <div class="bg-gray-100 px-3 py-2 rounded">
                            <span class="block text-xs text-gray-500">Tax</span>
                            <span class="font-bold">₹ {{ $gst }}</span>
                        </div>
                        @endif
                    </div>
                </div>
                @else
                <div class="mb-6 bg-amber-50 border-2 border-amber-400 rounded-lg p-6">
                    <div class="flex items-start gap-3">
                        <i class="fas fa-phone-alt text-amber-600 text-2xl mt-1"></i>
                        <div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2">Contact Us for Pricing</h3>
                            <p class="text-gray-600 mb-3">Please get in touch with us to know the current price for this product.</p>
                            <a href="tel:+918921387392" class="inline-flex items-center gap-2 text-amber-600 font-semibold hover:text-amber-700">
                                <i class="fas fa-phone"></i>
                                <span>+91 89213 87392</span>
                            </a>
                        </div>
                    </div>
                </div>
                @endif

                <!-- Actions -->
                <div class="flex flex-col sm:flex-row gap-4 mt-8">
                    @php
                    $waMessage = 'Hi, I am interested in this product (PRODUCT CODE: ' . $product->product_code . ') - ' . urlencode(request()->fullUrl());
                    $waLink = 'https://wa.me/+918921387392?text=' . $waMessage;
                    @endphp
                    <a href="{{ $waLink }}" target="_blank" class="flex-1 bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-6 rounded-lg text-center flex items-center justify-center gap-2 transition-colors">
                        <i class="fab fa-whatsapp text-xl"></i> Chat with us
                    </a>

                    @if(Auth::check())
                    <form action="{{ route('uadd_to_cart') }}" method="POST" class="flex-1"> <!-- Route needs to be made/checked -->
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="product_code" value="{{ $product->product_code }}">
                        <input type="hidden" name="table_name" value="{{ $tableName }}">
                        <button type="submit" class="w-full bg-amber-400 hover:bg-amber-500 text-black font-semibold py-3 px-6 rounded-lg transition-colors">
                            <i class="fas fa-shopping-cart mr-2"></i> Add to Cart
                        </button>
                    </form>
                    @else
                    <a href="{{ route('login') }}" class="flex-1 bg-amber-400 hover:bg-amber-500 text-black font-semibold py-3 px-6 rounded-lg text-center transition-colors">
                        <i class="fas fa-sign-in-alt mr-2"></i> Login to Buy
                    </a>
                    @endif
                </div>

                <div class="mt-6 flex items-center gap-2 text-sm text-gray-500">
                    <i class="fas fa-check-circle text-green-500"></i>
                    <span>100% Certified by International Standards</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Similar Products -->
<div class="w-full py-12 bg-gray-50 border-t border-gray-200">
    <div class="max-w-7xl mx-auto p-4">
        <h2 class="text-2xl font-bold text-center mb-8 text-sky-900">Similar Products</h2>

        @if(isset($similarProducts) && count($similarProducts) > 0)
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @foreach($similarProducts as $sim)
            @php
            $simImgUrl = asset('harees/ims/internal/' . ($sim->img2 ?? 'placeholder.jpg'));
            @endphp
            <a href="{{ route('product.show', ['id' => $sim->id, 'table' => $sim->table_name, 'product_code' => $sim->product_code]) }}"
                class="bg-white rounded-lg shadow hover:shadow-lg transition-all duration-300 block overflow-hidden group">
                <div class="aspect-square relative overflow-hidden bg-gray-100">
                    <img src="{{ $simImgUrl }}" alt="{{ $sim->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @if(($sim->is_featured ?? 0) == 1)
                    <div class="absolute top-2 left-2 bg-red-500 text-white text-[10px] uppercase font-bold px-2 py-1 rounded">Featured</div>
                    @endif
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-gray-800 text-sm mb-1 truncate">{{ $sim->name }}</h3>
                    @if(!$hideRates)
                    <p class="text-sky-900 font-bold">₹ {{ $sim->calculated_price }}</p>
                    @else
                    <p class="text-amber-600 font-semibold text-xs">Contact for Price</p>
                    @endif
                </div>
            </a>
            @endforeach
        </div>
        @else
        <div class="text-center text-gray-500">
            No similar products found.
        </div>
        @endif
    </div>
</div>

<script>
    function changeMainImage(src) {
        document.getElementById('mainImage').src = src;
    }
</script>
@endsection