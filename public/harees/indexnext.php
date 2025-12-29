<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harees Jewellery - Premium Gold & Diamond Collection</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Crimson+Text:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Inter', sans-serif; }
        .hero-bg { background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 50%, #1e40af 100%); }
        .gold-text { color: #fbbf24; font-family: 'Crimson Text', serif; }
        .gold-gradient { background: linear-gradient(135deg, #fbbf24, #fcd34d); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .card-hover { transition: all 0.3s ease; }
        .card-hover:hover { transform: translateY(-8px); box-shadow: 0 20px 40px rgba(251, 191, 36, 0.2); }
        .category-ring { border: 3px solid #fbbf24; box-shadow: 0 0 20px rgba(251, 191, 36, 0.3); }
        .category-ring:hover { box-shadow: 0 0 30px rgba(251, 191, 36, 0.5); transform: scale(1.05); }
        .shimmer { animation: shimmer 2s infinite; }
        @keyframes shimmer { 0%, 100% { opacity: 0.8; } 50% { opacity: 1; } }
    </style>
</head>

<?php
session_start();
if (isset($_SESSION['userid'])) {
    include('includes/uhead.php');
} else {
    include('includes/head.php');
    include('includes/navbar.php');
}
?>

<body class="bg-gray-50">
    <!-- Hero Carousel -->
    <div id="gallery" class="relative mt-14" data-carousel="slide">
        <div class="relative h-56 md:h-96 overflow-hidden">
            <!-- Single carousel item shown - Copy this div and change src for more images -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/1.png" class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Harees Jewellery Collection" />
            </div>
            <!-- Copy above div for more carousel items: assets/7.png, assets/15.png, assets/10.png, assets/11.png, assets/12.png, assets/harees-jewellery-express-delivery-all-india-delivery-available.png, assets/13.png, assets/14.png -->
        </div>
        
        <!-- Navigation Buttons -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full cursor-pointer group" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 transition-all">
                <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 6 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/></svg>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full cursor-pointer group" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 transition-all">
                <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 6 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/></svg>
            </span>
        </button>
    </div>

    <!-- Categories Section -->
    <div class="max-w-7xl mx-auto p-6">
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
            <!-- Single category shown - Copy this div structure for more categories -->
            <a href="product-all?type=rings" class="card-hover">
                <div class="flex flex-col items-center">
                    <img class="w-32 h-32 object-cover rounded-full category-ring transition-all duration-300" src="assets/harees-jewellery-rings.png" alt="Rings Collection"/>
                    <h3 class="mt-3 text-lg font-medium gold-text">Rings</h3>
                </div>
            </a>
            <!-- Copy above structure for: anklets, bangles, earrings, nosepins, necklaces -->
        </div>
    </div>

    <!-- Wedding Gold Section -->
    <div class="max-w-7xl mx-auto p-6 mb-10">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold gold-gradient mb-4">Wedding Gold Booking</h2>
            <p class="text-xl text-gray-600">Discover the perfect blend of tradition and versatility with our exclusive Gold wedding collection.</p>
        </div>
        <div class="rounded-xl overflow-hidden shadow-2xl card-hover">
            <img class="w-full h-auto" src="assets/advance-gold-booking.png" alt="Wedding Gold Booking"/>
        </div>
    </div>

    <!-- Diamond Collection -->
    <div class="hero-bg py-16">
        <div class="max-w-7xl mx-auto p-6">
            <div class="text-center mb-12 text-white">
                <h2 class="text-4xl font-bold gold-gradient mb-4">Diamond Jewellery</h2>
                <p class="text-xl">Discover the beauty of diamonds with our timeless collection</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Single diamond product shown - Copy this div for more products -->
                <div class="card-hover bg-white/10 backdrop-blur-sm rounded-xl p-4">
                    <img class="w-full h-48 object-contain rounded-lg" src="assets/jewelry-products/1.png" alt="Diamond Collection"/>
                </div>
                <!-- Copy above div for products: 2.png through 9.png -->
            </div>
        </div>
    </div>

    <!-- Special Collections Carousel -->
    <div class="max-w-7xl mx-auto p-6 py-16">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold gold-gradient mb-4 shimmer">Our Special Collections</h2>
            <p class="text-xl text-gray-600">Discover our latest jewellery collection!</p>
        </div>
        
        <div id="gallery2" class="relative" data-carousel="slide">
            <div class="relative h-56 md:h-96 overflow-hidden rounded-xl">
                <!-- Single collection item shown - Copy this div for more collection images -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="assets/banners-bottom/1.jpg" class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Special Collection"/>
                </div>
                <!-- Copy above div for: banners-bottom/2.jpg, banners-bottom/3.jpg -->
            </div>
            
            <!-- Navigation Buttons -->
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 transition-all">
                    <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 6 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/></svg>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 transition-all">
                    <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 6 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/></svg>
                </span>
            </button>
        </div>
    </div>

    <?php include('includes/footer.php'); ?>
</body>
</html>