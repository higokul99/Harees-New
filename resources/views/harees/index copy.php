<!DOCTYPE html>
<html lang="en">

<!-- head tag open -->
<?php
session_start();

if (isset($_SESSION['userid'])) {
    include('includes/uhead.php');
} else {
    include('includes/head.php');
    include('includes/header.php');
    include('includes/navbar.php');
}
?>

<style>
    /* Original classes modified for auto-height */
    .relative.h-56.md\:h-96 {
        width: 100%;
        height: auto; /* Let height adjust automatically */
        aspect-ratio: 16/9; /* Default mobile ratio */
    }

    @media (min-width: 768px) {
        .relative.h-56.md\:h-96 {
            aspect-ratio: 3/1; /* Desktop ratio */
        }
    }

    /* Image container styling */
    .carousel-image-container {
        width: 100%;
        height: 100%;
    }

    .carousel-image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

<!-- nav bar close -->

    <!-- carousel1 -->

    <div id="gallery" class="relative" data-carousel="slide" data-carousel-item="active">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden mt-14  md:h-96">
            <!-- <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/banners-main/xxx.png"
                    class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="" />
            </div> -->
            <!-- Item 0.100 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/1.png"
                    class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="" />
            </div>
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/7.png"
                    class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="" />
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/15.png"
                    class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="" />
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/10.png"
                    class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="" />
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/11.png"
                    class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="" />
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/12.png"
                    class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="" />
            </div>

            <!-- Item 6 harees-jewellery-express-delivery-all-india-delivery-available-->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/harees-jewellery-express-delivery-all-india-delivery-available.png"
                    class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="" />
            </div>

            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/13.png"
                    class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="" />
            </div>

            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/14.png"
                    class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="" />
            </div>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <style>
  /* Add this to your CSS */
.grid a img {
  transition: transform 0.3s ease; /* Smooth zoom animation */
}

.grid a:hover img {
  transform: scale(1.1); /* 10% zoom (adjust if needed) */
}

/* Animation for the popup */
@keyframes pulse {
    0% { transform: scale(0.95); }
    50% { transform: scale(1.02); }
    100% { transform: scale(0.95); }
}

.animate-pulse {
    animation: pulse 2s infinite;
}

/* Popup transition */
#specialDayPopup {
    transition: opacity 0.3s ease;
}
</style>

    <div class="p-5 mx-auto">
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4">
            <a href="product-all?type=rings">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[150px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="assets/harees-jewellery-rings.webp"
                        alt="Ring" />
                    <h1 class="mt-2 text-center">Rings</h1>
                </div>
            </a>
            <a href="product-all?type=anklets">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[150px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="assets/harees-jewellery-anklets.webp" alt="Anklets" />
                    <h1 class="mt-2 text-center">Anklets</h1>
                </div>
            </a>
            <a href="product-all?type=bangles">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[150px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="assets/harees-jewellery-bangles.webp"
                        alt="Bangle" />
                    <h1 class="mt-2 text-center">Bangles</h1>
                </div>
            </a>
            <a href="product-all?type=earrings">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[150px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="assets/harees-jewellery-earrings.webp"
                        alt="Earring" />
                    <h1 class="mt-2 text-center">Earrings</h1>
                </div>
            </a>
            <a href="product-all?type=nosepins">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[150px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="assets/harees-jewellery-nosepins.webp"
                        alt="Platinum" />
                    <h1 class="mt-2 text-center">Nosepins</h1>
                </div>
            </a>
            <a href="product-all?type=necklaces">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[150px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="assets/harees-jewellery-necklace.webp" alt="GoldChain" />
                    <h1 class="mt-2 text-center">Necklaces</h1>
                </div>
            </a>
        </div>
    </div>





    <!-- grid section 1-->
<div class="max-w-7xl mx-auto p-6 mb-5">
        <h1 class="text-3xl font-bold text-blue-900 text-center mb-8">Wedding Gold Booking</h1>
        <p class="text-center text-lg mb-12">
            Discover the perfect blend of tradition and versatility with our
            exclusive Gold wedding collection.
        </p>

        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="assets/advance-gold-booking_1.png"
                    alt="" />
            </div>
            <div class="grid grid-cols-5 gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="assets/gold-booking-section/s-1.png"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="assets/gold-booking-section/s-1.png"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="assets/gold-booking-section/s-1.png"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="assets/gold-booking-section/s-1.png"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="assets/gold-booking-section/s-1.png"
                        alt="" />
                </div>
            </div>
        </div>
    </div>
    
    <!-- grid section 2 -->
    <div class="max-w-7xl mx-auto p-6">
    <h1 class="text-3xl font-semibold text-blue-900 text-center mb-8">Diamond Jewellery</h1>
    <p class="text-center text-2xl mb-12">
        Discover the beauty of diamond with our timeless diamond collection
    </p>
    <style>
        /* Minimal version */
    .grid div img {
    transition: transform 0.3s ease;
    }
    .grid div:hover img {
    transform: scale(1.015); /* Even more subtle */
    }
    </style>
    <div class="grid grid-cols-2 md:grid-cols-4 auto-rows-fr gap-4">
        <!-- Large image at top-left (responsive) -->
        <div class="md:col-span-2 md:row-span-2">
            <img class="w-full h-full object-cover rounded-lg"
                src="assets/jewelry-products/webp/1.webp"
                alt="Diamond Necklace" />
        </div>

        <!-- Regular images -->
        <div>
            <img class="w-full h-full object-cover rounded-lg"
                src="assets/jewelry-products/webp/2.webp"
                alt="Diamond Earrings" />
        </div>
        <div>
            <img class="w-full h-full object-cover rounded-lg"
                src="assets/jewelry-products/webp/3.webp"
                alt="Diamond Bracelet" />
        </div>
        <div>
            <img class="w-full h-full object-cover rounded-lg"
                src="assets/jewelry-products/webp/4.webp"
                alt="Diamond Ring" />
        </div>
        <div>
            <img class="w-full h-full object-cover rounded-lg"
                src="assets/jewelry-products/webp/5.webp"
                alt="Diamond Pendant" />
        </div>
        <div>
            <img class="w-full h-full object-cover rounded-lg"
                src="assets/jewelry-products/webp/6.webp"
                alt="Diamond Brooch" />
        </div>
        <div>
            <img class="w-full h-full object-cover rounded-lg"
                src="assets/jewelry-products/webp/7.webp"
                alt="Diamond Anklet" />
        </div>
        <div>
            <img class="w-full h-full object-cover rounded-lg"
                src="assets/jewelry-products/webp/8.webp"
                alt="Diamond Tiara" />
        </div>
        <div>
            <img class="w-full h-full object-cover rounded-lg"
                src="assets/jewelry-products/webp/9.webp"
                alt="Diamond Cufflinks" />
        </div>

        <!-- Large image at bottom-right (only on md and above) -->
        <div class="md:col-start-3 md:row-start-3 md:col-span-2 md:row-span-2">
            <img class="w-full h-full object-cover rounded-lg"
                src="assets/jewelry-products/webp/12.webp"
                alt="Diamond Pin" />
        </div>
    </div>
</div>



    <!-- gallery -->


    <!-- <h1 class="text-3xl font-bold text-blue-900 text-center mb-4">Our Collection</h1>
    <p class="text-center text-lg mb-5">
        Discover our latest jewellery collection!.
    </p>
    <div class="max-w-7xl mx-auto p-6 grid grid-cols-2 md:grid-cols-3 gap-4">
        First Image
        <div class="col-span-1">
            <img class="h-auto max-w-full rounded-lg"
                src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/06_june/homepage-our-collection/Legendz-collection-1.jpg"
                alt="Legendz Collection" />
        </div>
        Second Image
        <div class="col-span-1">
            <img class="h-auto max-w-full rounded-lg"
                src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/06_june/homepage-our-collection/Sankha-Pola-1.jpg"
                alt="Sankha Pola" />
        </div>
        Third Image (Full width on small screens)
        <div class="col-span-2 w-full sm:col-span-1 md:col-span-1">
            <img class="h-auto max-w-full rounded-lg"
                src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/06_june/homepage-our-collection/Sankha-Pola-1.jpg"
                alt="Sankha Pola" />
        </div>
    </div> -->




    <!-- carousel2 -->
    <h1 class="text-3xl font-bold text-blue-900 text-center mb-4">Our Special Collections</h1>
    <p class="text-center text-lg mb-5">
        Discover our latest jewellery collection!.
    </p>
    <div id="gallery" class="relative w-full my-5 z-10 " data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden md:h-96">
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/banners-bottom/1.jpg"
                    class="absolute block max-w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="" />
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="assets/banners-bottom/2.jpg"
                    class="absolute block max-w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="" />
            </div>
            <!-- <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/banners-bottom/3.jpg"
                    class="absolute block max-w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="" />
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/banners-bottom/4.jpg"
                    class="absolute block max-w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="" />
            </div> -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/banners-bottom/3.jpg"
                    class="absolute block max-w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="" />
            </div>
            <!-- <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/banners-bottom/6.jpg"
                    class="absolute block max-w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="" />
            </div> -->
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">
                    << /span>
                </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">></span>
            </span>
        </button>
    </div>

    <!-- multi slide carouse -->
    <h1 class="text-3xl font-bold text-blue-900 text-center mb-2">Gemstone Jewellery</h1>
    <p class="text-center text-2xl mb-3">
        Capturing timeless grace in each precious stone
    </p>
    <div class="container mx-auto pb-5">
        <div class="relative overflow-hidden" id="carousel-container">
            <div id="carousel" class="flex transition-transform duration-500 ease-in-out">
                <div class="carousel-item p-4">
                    <img src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/04_april/homepage/Gemstone-ring.jpg"
                        alt="Image 1" class="w-full h-auto rounded-lg">
                </div>
                <div class="carousel-item p-4">
                    <img src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/04_april/homepage/gemstone-earring.jpg"
                        alt="Image 2" class="w-full h-auto rounded-lg">
                </div>
                <div class="carousel-item p-4">
                    <img src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/04_april/homepage/Gemstone-pendant.jpg"
                        alt="Image 3" class="w-full h-auto rounded-lg">
                </div>
                <div class="carousel-item p-4">
                    <img src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/04_april/homepage/Gemstone-bangle.jpg"
                        alt="Image 4" class="w-full h-auto rounded-lg">
                </div>
                <div class="carousel-item p-4">
                    <img src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/04_april/homepage/Gemstone-ring.jpg"
                        alt="Image 5" class="w-full h-auto rounded-lg">
                </div>
                <div class="carousel-item p-4">
                    <img src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/04_april/homepage/Gemstone-pendant.jpg"
                        alt="Image 3" class="w-full h-auto rounded-lg">
                </div>
            </div>
            <button id="prev"
                class="absolute left-0 top-1/2 transform -translate-y-1/2  text-white px-4 py-2 rounded-full"></button>
            <button id="next"
                class="absolute right-0 top-1/2 transform -translate-y-1/2  text-white px-4 py-2 rounded-full"></button>
        </div>
    </div>

    <!-- gallery2 -->
    <div id="gallery" class="max-w-7xl w-full m-auto px-4 py-16">
        <h1 class="text-3xl font-bold text-blue-900 text-center mb-2">Gold Category</h1>
        <p class="text-center text-2xl mb-3">
            Embrace the spirit of this season with our timeless pieces
        </p>
        <div class="grid sm:grid-cols-5 gap-4">
            <div class="sm:col-span-3 col-span-2 row-span-2">
                <img class="w-full h-full object-cover"
                    src="https://cdn.pixabay.com/photo/2024/01/11/14/40/ai-generated-8501940_640.jpg" alt="/" />
            </div>
            <div>
                <img class="w-full h-full object-cover"
                    src="https://images.pexels.com/photos/24012397/pexels-photo-24012397/free-photo-of-close-up-of-a-bracelet-with-bells.jpeg?auto=compress&cs=tinysrgb&w=600"
                    alt="/" />
            </div>
            <div>
                <img class="w-full h-full object-cover"
                    src="https://images.pexels.com/photos/204427/pexels-photo-204427.jpeg?auto=compress&cs=tinysrgb&w=600"
                    alt="/" />
            </div>
            <div>
                <img class="w-full h-full object-cover"
                    src="https://images.pexels.com/photos/2849742/pexels-photo-2849742.jpeg?auto=compress&cs=tinysrgb&w=600"
                    alt="/" />
            </div>
            <div>
                <img class="w-full h-full object-cover"
                    src="https://images.pexels.com/photos/177332/pexels-photo-177332.jpeg?auto=compress&cs=tinysrgb&w=600"
                    alt="/" />
            </div>
        </div>
    </div>

<?php
if (isset($_SESSION['userid'])) {
    $currentDate = date('m-d');
    require_once 'includes/dbconnect.php';
    
    $userid = $_SESSION['userid'];
    $query = "SELECT dob, anniversary FROM users WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $userid);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    
    $showPopup = false;
    $message = '';
    $celebrationType = '';
    
    if ($user) {
        if (!empty($user['dob'])) {
            $dob = date('m-d', strtotime($user['dob']));
            if ($dob === $currentDate) {
                $showPopup = true;
                $celebrationType = 'birthday';
                $message = "It's your special day! Shine bright like our diamonds with exclusive birthday offers!";
            }
        }
        
        if (!$showPopup && !empty($user['anniversary'])) {
            $anniv = date('m-d', strtotime($user['anniversary']));
            if ($anniv === $currentDate) {
                $showPopup = true;
                $celebrationType = 'anniversary';
                $message = "Cheers to your love story! Celebrate this milestone with our anniversary collection!";
            }
        }
    }
    
    if ($showPopup) {
        echo '
        <div id="celebrationPopup" class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-70">
            <div class="relative bg-white rounded-xl shadow-2xl overflow-hidden w-full max-w-md mx-4 border-2 border-gold-500 transform transition-all duration-500 scale-0">

                <!-- Close button -->
                <button onclick="closeCelebration()" class="absolute top-3 right-3 z-50 bg-gold-100 hover:bg-gold-200 rounded-full p-1 transition-all duration-200 shadow-md hover:shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gold-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <div class="absolute top-0 left-0 w-full h-full pointer-events-none overflow-hidden">
                    <div class="confetti"></div>
                    <div class="confetti"></div>
                    <div class="confetti"></div>
                    <div class="confetti"></div>
                    <div class="confetti"></div>
                </div>
                
                <div class="p-8 text-center relative z-10">
                    <div class="text-6xl mb-4 animate-bounce">
                        '.($celebrationType == 'birthday' ? '🎂' : '💍').'
                    </div>
                    
                    <h3 class="text-3xl font-bold text-gold-600 mb-3 bloom-text">
                        '.($celebrationType == 'birthday' ? 'HAPPY BIRTHDAY!' : 'HAPPY ANNIVERSARY!').'
                    </h3>
                    
                    <p class="text-lg text-gray-700 mb-6">'.$message.'</p>
                    
                    <button onclick="redirectToOffers(\''.$celebrationType.'\')" class="relative overflow-hidden px-8 py-3 bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 hover:from-yellow-500 hover:via-yellow-600 hover:to-yellow-700 text-white font-bold rounded-full transition-all duration-500 transform hover:scale-105 shadow-lg group">
                        <span class="relative z-10">SHOW MY SPECIAL OFFERS</span>
                        <span class="absolute top-0 left-0 w-full h-full overflow-hidden">
                            <span class="sparkle-1 absolute bg-white rounded-full"></span>
                            <span class="sparkle-2 absolute bg-white rounded-full"></span>
                            <span class="sparkle-3 absolute bg-white rounded-full"></span>
                        </span>
                        <span class="absolute inset-0 bg-gradient-to-r from-transparent via-white/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 -rotate-45 w-1/2"></span>
                    </button>
                </div>
            </div>
        </div>
        
        <style>
            @keyframes bloom {
                0% { 
                    opacity: 0;
                    text-shadow: 0 0 0px rgba(212, 175, 55, 0);
                    transform: scale(0.5);
                }
                100% {
                    opacity: 1;
                    text-shadow: 0 0 20px rgba(212, 175, 55, 0.8);
                    transform: scale(1);
                }
            }
            
            .bloom-text {
                animation: bloom 1.5s ease-out forwards;
                color: #D4AF37;
                text-transform: uppercase;
                letter-spacing: 2px;
            }
            
            .confetti {
                position: absolute;
                width: 10px;
                height: 10px;
                background-color: #f00;
                opacity: 0;
            }
            
            .confetti:nth-child(1) {
                background-color: #D4AF37;
                animation: confetti 3s ease-in 0.5s infinite;
                left: 10%;
                top: -10px;
            }
            
            .confetti:nth-child(2) {
                background-color: #FFD700;
                animation: confetti 3s ease-in 1s infinite;
                left: 30%;
                top: -10px;
            }
            
            .confetti:nth-child(3) {
                background-color: #FF69B4;
                animation: confetti 3s ease-in 1.5s infinite;
                left: 50%;
                top: -10px;
            }
            
            .confetti:nth-child(4) {
                background-color: #87CEEB;
                animation: confetti 3s ease-in 2s infinite;
                left: 70%;
                top: -10px;
            }
            
            .confetti:nth-child(5) {
                background-color: #7CFC00;
                animation: confetti 3s ease-in 2.5s infinite;
                left: 90%;
                top: -10px;
            }
            
            @keyframes confetti {
                0% {
                    transform: translateY(0) rotate(0deg);
                    opacity: 1;
                }
                100% {
                    transform: translateY(100vh) rotate(360deg);
                    opacity: 0;
                }
            }
            
            /* Sparkle animations */
            .sparkle-1 {
                width: 6px;
                height: 6px;
                top: 20%;
                left: 10%;
                animation: sparkle 3s infinite;
            }
            
            .sparkle-2 {
                width: 4px;
                height: 4px;
                top: 60%;
                left: 30%;
                animation: sparkle 2.5s infinite 0.5s;
            }
            
            .sparkle-3 {
                width: 5px;
                height: 5px;
                top: 40%;
                left: 80%;
                animation: sparkle 3.5s infinite 1s;
            }
            
            @keyframes sparkle {
                0% {
                    transform: translateY(0) scale(0);
                    opacity: 0;
                }
                50% {
                    transform: translateY(-15px) scale(1);
                    opacity: 1;
                }
                100% {
                    transform: translateY(-30px) scale(0);
                    opacity: 0;
                }
            }
            
            button span.relative {
                letter-spacing: 1px;
                text-shadow: 0 1px 2px rgba(0,0,0,0.2);
            }
        </style>
        
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const popup = document.querySelector("#celebrationPopup .scale-0");
                setTimeout(() => {
                    popup.classList.remove("scale-0");
                    popup.classList.add("scale-100");
                }, 100);
            });
            
            function redirectToOffers(celebrationType) {
                window.location.href = `offer?celebration=${celebrationType}`;
            }
            
            function closeCelebration() {
                const popup = document.getElementById("celebrationPopup");
                popup.style.opacity = "0";
                setTimeout(() => {
                    popup.style.display = "none";
                }, 300);
            }
            
            setTimeout(closeCelebration, 15000);
        </script>
        ';
    }
}
?>

<?php include ('includes/footer.php'); ?>

    </body>
</html>

