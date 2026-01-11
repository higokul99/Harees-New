@extends('layouts.app')

@section('content')

@if(session('success'))
<div id="toast-success" class="fixed top-24 right-5 z-50 flex items-center w-full max-w-md p-4 mb-4 text-gray-500 bg-white rounded-lg shadow-xl border-l-4 border-green-500 animate-fade-in" role="alert">
    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg">
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
        </svg>
        <span class="sr-only">Check icon</span>
    </div>
    <div class="ml-3 text-sm font-normal text-gray-800">{{ session('success') }}</div>
    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8" aria-label="Close" onclick="document.getElementById('toast-success').remove()">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
    </button>
</div>
<script>
    setTimeout(function() {
        const toast = document.getElementById('toast-success');
        if (toast) {
            toast.style.transition = 'opacity 0.5s ease-out';
            toast.style.opacity = '0';
            setTimeout(() => toast.remove(), 500);
        }
    }, 5000); // Auto dismiss after 5s
</script>
@endif

{{-- Hero Carousel --}}
<div id="gallery">
    <div class="carousel-slide-container">
        <div class="carousel-slide active">
            <img src="{{ asset('assets/banners-main/new2/1.png') }}" alt="Banner 1">
        </div>
        <div class="carousel-slide">
            <img src="{{ asset('assets/banners-main/new2/2.png') }}" alt="Banner 2">
        </div>
        <div class="carousel-slide">
            <img src="{{ asset('assets/banners-main/new2/3.png') }}" alt="Banner 3">
        </div>
        <div class="carousel-slide">
            <img src="{{ asset('assets/banners-main/new2/4.png') }}" alt="Banner 4">
        </div>

        <button type="button" class="carousel-button carousel-prev" data-carousel-prev>
            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
            </svg>
            <span class="sr-only">Previous</span>
        </button>
        <button type="button" class="carousel-button carousel-next" data-carousel-next>
            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
        </button>
    </div>
</div>

{{-- Round Product Categories --}}
<div class="p-5 mx-auto overflow-hidden">
    <div class="relative">
        <div class="flex space-x-4 pb-2 scrollbar-hide" id="productsContainer">
            @php
            $categories = [
            ['type' => 'rings', 'image' => 'harees-jewellery-rings.webp', 'name' => 'Rings'],
            ['type' => 'anklets', 'image' => 'harees-jewellery-anklets.webp', 'name' => 'Anklets'],
            ['type' => 'bangles', 'image' => 'harees-jewellery-bangles.webp', 'name' => 'Bangles'],
            ['type' => 'earrings', 'image' => 'harees-jewellery-earrings.webp', 'name' => 'Earrings'],
            ['type' => 'nosepins', 'image' => 'harees-jewellery-nosepins.webp', 'name' => 'Nosepins'],
            ['type' => 'necklaces', 'image' => 'harees-jewellery-necklace.webp', 'name' => 'Necklaces'],
            ['type' => 'fancy-chains', 'image' => 'harees-jewellery-chains.webp', 'name' => 'Fancy chains'],
            ['type' => 'studs', 'image' => 'harees-jewellery-studs.webp', 'name' => 'Studs'],
            ['type' => 'bracelets', 'image' => 'harees-jewellery-bracelets.webp', 'name' => 'Bracelets'],
            ['type' => 'chains', 'image' => 'harees-jewellery-chains.webp', 'name' => 'Chains'],
            ['type' => 'pendants', 'image' => 'harees-jewellery-pendants.webp', 'name' => 'Pendants'],
            ['type' => 'kadas', 'image' => 'harees-jewellery-kadas.webp', 'name' => 'Kada'],
            ];
            @endphp

            @foreach(array_merge($categories, $categories, $categories, $categories) as $category)
            <a href="{{ route('product-all', ['type' => $category['type']]) }}" class="story-item">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[122px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="{{ asset('assets/' . $category['image']) }}"
                        alt="{{ $category['name'] }}" />
                    <h1 class="mt-2 text-center text-sm">{{ $category['name'] }}</h1>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>

{{-- Wedding Gold Booking Section --}}
<div class="max-w-7xl mx-auto p-3 mb-3">
    <h1 class="text-2xl font-bold text-blue-900 text-center mb-4">Wedding Gold Booking</h1>
    <p class="text-center text-base mb-6">
        Discover the perfect blend of tradition and versatility with our exclusive Gold wedding collection.
    </p>

    <div class="grid gap-2">
        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('assets/1.png') }}" alt="Wedding Gold" />
        </div>
        <div class="grid grid-cols-5 gap-2">
            @for($i = 1; $i <= 5; $i++)
                <div>
                <a href="{{ route('custom-jewellery') }}" class="block overflow-hidden rounded-lg transition-all duration-300 hover:scale-105 hover:shadow-lg">
                    <img class="h-auto max-w-full rounded-lg hover:brightness-110"
                        src="{{ asset('assets/gold-booking-section/s-1.png') }}"
                        alt="Gold Booking {{ $i }}" />
                </a>
        </div>
        @endfor
    </div>
</div>
</div>

{{-- Diamond Jewellery Grid --}}
<div class="max-w-7xl mx-auto p-3">
    <h1 class="text-2xl font-semibold text-blue-900 text-center mb-4">Diamond Jewellery</h1>
    <p class="text-center text-base mb-6">
        Discover the beauty of diamond with our timeless diamond collection
    </p>

    <div class="grid grid-cols-2 md:grid-cols-4 auto-rows-fr gap-2">
        {{-- Large image at top-left --}}
        <div class="md:col-span-2 md:row-span-2">
            <img class="w-full h-full object-cover rounded-lg"
                src="{{ asset('assets/jewelry-products/webp/1.webp') }}"
                alt="Diamond Necklace" />
        </div>

        {{-- Regular images --}}
        @for($i = 2; $i <= 9; $i++)
            <div>
            <img class="w-full h-full object-cover rounded-lg"
                src="{{ asset('assets/jewelry-products/webp/' . $i . '.webp') }}"
                alt="Diamond Jewellery {{ $i }}" />
    </div>
    @endfor

    {{-- Large image at bottom-right --}}
    <div class="md:col-start-3 md:row-start-3 md:col-span-2 md:row-span-2">
        <img class="w-full h-full object-cover rounded-lg"
            src="{{ asset('assets/jewelry-products/webp/12.webp') }}"
            alt="Diamond Collection" />
    </div>
</div>
</div>

{{-- Gemstone Jewellery Carousel --}}
<h1 class="text-2xl font-bold text-blue-900 text-center mb-2 mt-6">Gemstone Jewellery</h1>
<p class="text-center text-base mb-3">
    Capturing timeless grace in each precious stone
</p>
<div class="container mx-auto pb-3">
    <div class="relative overflow-hidden" id="gemstone-carousel-container">
        <div id="gemstone-carousel" class="flex transition-transform duration-500 ease-in-out">
            @php
            $gemstoneImages = [
            'https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/04_april/homepage/Gemstone-ring.jpg',
            'https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/04_april/homepage/gemstone-earring.jpg',
            'https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/04_april/homepage/Gemstone-pendant.jpg',
            'https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/04_april/homepage/Gemstone-bangle.jpg',
            ];
            @endphp

            @foreach(array_merge($gemstoneImages, $gemstoneImages, $gemstoneImages) as $image)
            <div class="carousel-item p-2">
                <img src="{{ $image }}" alt="Gemstone Jewellery" class="w-full h-auto rounded-lg">
            </div>
            @endforeach
        </div>
        <button id="gemstone-prev" class="absolute left-0 top-1/2 transform -translate-y-1/2 text-white px-4 py-2 rounded-full"></button>
        <button id="gemstone-next" class="absolute right-0 top-1/2 transform -translate-y-1/2 text-white px-4 py-2 rounded-full"></button>
    </div>
</div>

{{-- Birthday/Anniversary Popup --}}
@if($showPopup ?? false)
<div id="celebrationPopup" class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-70">
    <div class="relative bg-white rounded-xl shadow-2xl overflow-hidden w-full max-w-md mx-4 border-2 border-gold-500 transform transition-all duration-500 scale-100 animate-pulse">
        <button onclick="closeCelebration()" class="absolute top-3 right-3 z-50 bg-gold-100 hover:bg-gold-200 rounded-full p-1 transition-all duration-200 shadow-md hover:shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gold-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="p-8 text-center relative z-10">
            <div class="text-6xl mb-4 animate-bounce">
                {{ $celebrationType == 'birthday' ? '🎂' : '💍' }}
            </div>

            <h3 class="text-3xl font-bold text-gold-600 mb-3">
                {{ $celebrationType == 'birthday' ? 'HAPPY BIRTHDAY!' : 'HAPPY ANNIVERSARY!' }}
            </h3>

            <p class="text-lg text-gray-700 mb-6">{{ $message }}</p>

            <a href="{{ route('products', ['celebration' => $celebrationType]) }}" class="inline-block px-8 py-3 bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 hover:from-yellow-500 hover:via-yellow-600 hover:to-yellow-700 text-white font-bold rounded-full transition-all duration-500 transform hover:scale-105 shadow-lg">
                SHOW MY SPECIAL OFFERS
            </a>
        </div>
    </div>
</div>
@endif

@endsection

@push('styles')
<style>
    /* Carousel Styles */
    #gallery {
        width: 100%;
        position: relative;
        margin-top: 3rem;
    }

    .carousel-slide-container {
        width: 100%;
        position: relative;
        overflow: hidden;
    }

    .carousel-slide {
        width: 100%;
        display: none;
        transition: opacity 0.7s ease-in-out;
    }

    .carousel-slide.active {
        display: block;
        opacity: 1;
    }

    .carousel-slide img {
        width: 100%;
        height: auto;
        display: block;
    }

    .carousel-button {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 30;
        background: rgba(255, 255, 255, 0.3);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: background 0.3s ease;
        border: none;
    }

    .carousel-button:hover {
        background: rgba(255, 255, 255, 0.5);
    }

    .carousel-prev {
        left: 10px;
    }

    .carousel-next {
        right: 10px;
    }

    /* Product Categories Styles */
    .story-item img {
        transition: transform 0.3s ease;
    }

    .story-item:hover img {
        transform: scale(1.1);
    }

    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .story-item {
        flex: 0 0 auto;
        min-width: 120px;
    }

    /* Infinite scroll animation */
    @keyframes scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    #productsContainer {
        display: flex;
        width: max-content;
        animation: scroll 30s linear infinite;
    }

    #productsContainer:hover {
        animation-play-state: paused;
    }

    /* Diamond Grid Hover Effect */
    .grid div img {
        transition: transform 0.3s ease;
    }

    .grid div:hover img {
        transform: scale(1.015);
    }

    /* Gemstone Carousel */
    .carousel-item {
        flex: 0 0 auto;
        width: 25%;
    }

    #gemstone-carousel {
        display: flex;
    }

    /* Popup Animation */
    @keyframes pulse {
        0% {
            transform: scale(0.95);
        }

        50% {
            transform: scale(1.02);
        }

        100% {
            transform: scale(0.95);
        }
    }

    .animate-pulse {
        animation: pulse 2s infinite;
    }

    #celebrationPopup {
        transition: opacity 0.3s ease;
    }

    /* Mobile Responsive */
    @media (max-width: 767px) {
        .story-item {
            min-width: 90px;
        }

        .story-item img {
            width: 56px !important;
        }

        .carousel-item {
            width: 50%;
        }
    }

    @media (min-width: 768px) {
        .carousel-slide-container {
            margin: 0 auto;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    // Main Hero Carousel
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.carousel-slide');
        const prevButton = document.querySelector('[data-carousel-prev]');
        const nextButton = document.querySelector('[data-carousel-next]');
        let currentSlide = 0;
        let slideInterval;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('active', i === index);
            });
            currentSlide = index;
        }

        function nextSlide() {
            const nextIndex = (currentSlide + 1) % slides.length;
            showSlide(nextIndex);
        }

        function prevSlide() {
            const prevIndex = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(prevIndex);
        }

        function startCarousel() {
            slideInterval = setInterval(nextSlide, 5000);
        }

        function pauseCarousel() {
            clearInterval(slideInterval);
        }

        if (nextButton && prevButton) {
            nextButton.addEventListener('click', () => {
                pauseCarousel();
                nextSlide();
                startCarousel();
            });

            prevButton.addEventListener('click', () => {
                pauseCarousel();
                prevSlide();
                startCarousel();
            });
        }

        startCarousel();

        const carousel = document.querySelector('#gallery');
        if (carousel) {
            carousel.addEventListener('mouseenter', pauseCarousel);
            carousel.addEventListener('mouseleave', startCarousel);
        }

        // Gemstone Carousel
        const gemstoneCarousel = document.getElementById('gemstone-carousel');
        const gemstoneContainer = document.getElementById('gemstone-carousel-container');
        const prevBtn = document.getElementById('gemstone-prev');
        const nextBtn = document.getElementById('gemstone-next');

        if (gemstoneCarousel && prevBtn && nextBtn) {
            let currentIndex = 0;
            const itemsToShow = window.innerWidth < 768 ? 2 : 4;
            const totalItems = gemstoneCarousel.children.length;

            function updateCarousel() {
                const itemWidth = gemstoneCarousel.children[0].offsetWidth;
                gemstoneCarousel.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
            }

            nextBtn.addEventListener('click', () => {
                if (currentIndex < totalItems - itemsToShow) {
                    currentIndex++;
                    updateCarousel();
                }
            });

            prevBtn.addEventListener('click', () => {
                if (currentIndex > 0) {
                    currentIndex--;
                    updateCarousel();
                }
            });

            // Auto-scroll
            setInterval(() => {
                currentIndex = (currentIndex + 1) % (totalItems - itemsToShow + 1);
                updateCarousel();
            }, 3000);
        }
    });

    // Celebration popup
    @if($showPopup ?? false)

    function closeCelebration() {
        const popup = document.getElementById('celebrationPopup');
        if (popup) {
            popup.style.opacity = '0';
            setTimeout(() => {
                popup.style.display = 'none';
            }, 300);
        }
    }

    setTimeout(closeCelebration, 15000);
    @endif
</script>
@endpush