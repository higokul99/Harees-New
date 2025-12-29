<style>
    /* Main carousel container */
    #gallery {
        width: 100%;
        position: relative;
        margin-top: 3rem; /* mt-12 equivalent */
    }

    /* Slide container */
    .carousel-slide-container {
        width: 100%;
        position: relative;
        overflow: hidden;
    }

    /* Individual slide */
    .carousel-slide {
        width: 100%;
        display: none;
        transition: opacity 0.7s ease-in-out;
    }

    .carousel-slide.active {
        display: block;
        opacity: 1;
    }

    /* Images */
    .carousel-slide img {
        width: 100%;
        height: auto;
        display: block;
    }

    /* Navigation buttons */
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

    @media (min-width: 768px) {
        .carousel-slide-container {
            margin: 0 auto;
        }
    }
</style>

<div id="gallery">
    <div class="carousel-slide-container">
        <!-- Slides -->
        <div class="carousel-slide active">
            <img src="assets/banners-main/new2/1.png" alt="Banner 1">
        </div>
        <div class="carousel-slide">
            <img src="assets/banners-main/new2/2.png" alt="Banner 2">
        </div>
        <div class="carousel-slide">
            <img src="assets/banners-main/new2/3.png" alt="Banner 3">
        </div>
        <div class="carousel-slide">
            <img src="assets/banners-main/new2/4.png" alt="Banner 4">
        </div>
        
        <!-- Navigation buttons -->
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.carousel-slide');
    const prevButton = document.querySelector('[data-carousel-prev]');
    const nextButton = document.querySelector('[data-carousel-next]');
    let currentSlide = 0;
    let slideInterval;

    // Function to show a specific slide
    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
        });
        currentSlide = index;
    }

    // Function to go to next slide
    function nextSlide() {
        const nextIndex = (currentSlide + 1) % slides.length;
        showSlide(nextIndex);
    }

    // Function to go to previous slide
    function prevSlide() {
        const prevIndex = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(prevIndex);
    }

    // Start automatic sliding
    function startCarousel() {
        slideInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
    }

    // Stop automatic sliding when user interacts
    function pauseCarousel() {
        clearInterval(slideInterval);
    }

    // Event listeners for buttons
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

    // Start the carousel
    startCarousel();

    // Pause on hover (optional)
    const carousel = document.querySelector('#gallery');
    carousel.addEventListener('mouseenter', pauseCarousel);
    carousel.addEventListener('mouseleave', startCarousel);
});
</script>