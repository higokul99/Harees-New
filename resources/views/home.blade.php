@extends('layouts.app')

@section('content')

{{-- Hero Carousel --}}
<div id="gallery">
    <div class="carousel-slide-container">
        {{-- Slides --}}
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
        
        {{-- Navigation buttons --}}
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
            <a href="{{ route('product-all', ['type' => 'rings']) }}" class="story-item">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[122px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="{{ asset('assets/harees-jewellery-rings.webp') }}"
                        alt="Ring" />
                    <h1 class="mt-2 text-center text-sm">Rings</h1>
                </div>
            </a>
            <a href="{{ route('product-all', ['type' => 'anklets']) }}" class="story-item">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[122px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="{{ asset('assets/harees-jewellery-anklets.webp') }}" alt="Anklets" />
                    <h1 class="mt-2 text-center text-sm">Anklets</h1>
                </div>
            </a>
            <a href="{{ route('product-all', ['type' => 'bangles']) }}" class="story-item">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[122px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="{{ asset('assets/harees-jewellery-bangles.webp') }}"
                        alt="Bangle" />
                    <h1 class="mt-2 text-center text-sm">Bangles</h1>
                </div>
            </a>
            <a href="{{ route('product-all', ['type' => 'earrings']) }}" class="story-item">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[122px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="{{ asset('assets/harees-jewellery-earrings.webp') }}"
                        alt="Earring" />
                    <h1 class="mt-2 text-center text-sm">Earrings</h1>
                </div>
            </a>
            <a href="{{ route('product-all', ['type' => 'nosepins']) }}" class="story-item">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[122px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="{{ asset('assets/harees-jewellery-nosepins.webp') }}"
                        alt="Nosepins" />
                    <h1 class="mt-2 text-center text-sm">Nosepins</h1>
                </div>
            </a>
            <a href="{{ route('product-all', ['type' => 'necklaces']) }}" class="story-item">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[122px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="{{ asset('assets/harees-jewellery-necklace.webp') }}" alt="Necklaces" />
                    <h1 class="mt-2 text-center text-sm">Necklaces</h1>
                </div>
            </a>
            <a href="{{ route('product-all', ['type' => 'fancychains']) }}" class="story-item">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[122px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="{{ asset('assets/harees-jewellery-chains.webp') }}" alt="Fancy Chains" />
                    <h1 class="mt-2 text-center text-sm">Fancy chains</h1>
                </div>
            </a>
            <a href="{{ route('product-all', ['type' => 'studs']) }}" class="story-item">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[122px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="{{ asset('assets/harees-jewellery-studs.webp') }}" alt="Studs" />
                    <h1 class="mt-2 text-center text-sm">Studs</h1>
                </div>
            </a>
            <a href="{{ route('product-all', ['type' => 'bracelets']) }}" class="story-item">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[122px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="{{ asset('assets/harees-jewellery-bracelets.webp') }}" alt="Bracelets" />
                    <h1 class="mt-2 text-center text-sm">Bracelets</h1>
                </div>
            </a>
            <a href="{{ route('product-all', ['type' => 'chains']) }}" class="story-item">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[122px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="{{ asset('assets/harees-jewellery-chains.webp') }}" alt="Chains" />
                    <h1 class="mt-2 text-center text-sm">Chains</h1>
                </div>
            </a>
            <a href="{{ route('product-all', ['type' => 'pendants']) }}" class="story-item">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[122px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="{{ asset('assets/harees-jewellery-pendants.webp') }}" alt="Pendants" />
                    <h1 class="mt-2 text-center text-sm">Pendants</h1>
                </div>
            </a>
            
            {{-- Duplicate items for infinite scroll effect --}}
            <a href="{{ route('product-all', ['type' => 'rings']) }}" class="story-item">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[122px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="{{ asset('assets/harees-jewellery-rings.webp') }}" alt="Ring" />
                    <h1 class="mt-2 text-center text-sm">Rings</h1>
                </div>
            </a>
            <a href="{{ route('product-all', ['type' => 'anklets']) }}" class="story-item">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[122px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="{{ asset('assets/harees-jewellery-anklets.webp') }}" alt="Anklets" />
                    <h1 class="mt-2 text-center text-sm">Anklets</h1>
                </div>
            </a>
        </div>
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
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}

#productsContainer {
    display: flex;
    width: max-content;
    animation: scroll 30s linear infinite;
}

#productsContainer:hover {
    animation-play-state: paused;
}

/* Popup Animation */
@keyframes pulse {
    0% { transform: scale(0.95); }
    50% { transform: scale(1.02); }
    100% { transform: scale(0.95); }
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
    
    .carousel-slide-container {
        margin: 0 auto;
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
// Carousel functionality
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
