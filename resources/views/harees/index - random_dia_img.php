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

<!-- nav bar close -->

<!-- carousel1 open -->
<?php include_once("index-carousel1.php"); ?>
<!-- carousel1 close -->
 

<!-- Round Products - Open -->
<style>
  /* Add this to your CSS */
.story-item img {
  transition: transform 0.3s ease; /* Smooth zoom animation */
}

.story-item:hover img {
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

/* Mobile size reduction */
@media (max-width: 767px) {
    .story-item img {
        width: 56px !important; /* 75% of 75px */
    }
}
</style>

    <div class="p-5 mx-auto overflow-hidden">
        <div class="relative">
            <div class="flex space-x-4 pb-2 scrollbar-hide" id="productsContainer">
             <style>
                .scrollbar-hide::-webkit-scrollbar { display: none; }
                .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
                .story-item { flex: 0 0 auto; min-width: 120px; }
                
                @media (max-width: 767px) {
                    .story-item { min-width: 90px; }
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
            </style>
            <a href="product-all?type=rings" class="story-item">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[122px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="assets/harees-jewellery-rings.webp"
                        alt="Ring" />
                    <h1 class="mt-2 text-center text-sm">Rings</h1>
                </div>
            </a>
            <a href="product-all?type=anklets" class="story-item">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[122px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="assets/harees-jewellery-anklets.webp" alt="Anklets" />
                    <h1 class="mt-2 text-center text-sm">Anklets</h1>
                </div>
            </a>
            <a href="product-all?type=bangles" class="story-item">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[122px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="assets/harees-jewellery-bangles.webp"
                        alt="Bangle" />
                    <h1 class="mt-2 text-center text-sm">Bangles</h1>
                </div>
            </a>
            <a href="product-all?type=earrings" class="story-item">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[122px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="assets/harees-jewellery-earrings.webp"
                        alt="Earring" />
                    <h1 class="mt-2 text-center text-sm">Earrings</h1>
                </div>
            </a>
            <a href="product-all?type=nosepins" class="story-item">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[122px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="assets/harees-jewellery-nosepins.webp"
                        alt="Platinum" />
                    <h1 class="mt-2 text-center text-sm">Nosepins</h1>
                </div>
            </a>
            <a href="product-all?type=necklaces" class="story-item">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[122px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="assets/harees-jewellery-necklace.webp" alt="GoldChain" />
                    <h1 class="mt-2 text-center text-sm">Necklaces</h1>
                </div>
            </a>
            <a href="product-all?type=fancychains" class="story-item">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[122px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="assets/harees-jewellery-chains.webp" alt="GoldChain" />
                    <h1 class="mt-2 text-center text-sm">Fancy chains</h1>
                </div>
            </a>
            <a href="product-all?type=studs" class="story-item">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[122px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="assets/harees-jewellery-studs.webp" alt="GoldChain" />
                    <h1 class="mt-2 text-center text-sm">Studs</h1>
                </div>
            </a>
            <a href="product-all?type=bracelets" class="story-item">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[122px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="assets/harees-jewellery-bracelets.webp" alt="GoldChain" />
                    <h1 class="mt-2 text-center text-sm">Bracelets</h1>
                </div>
            </a>
            <a href="product-all?type=bracelets" class="story-item">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[122px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="assets/harees-jewellery-pendants.webp" alt="GoldChain" />
                    <h1 class="mt-2 text-center text-sm">Pendants</h1>
                </div>
            </a>
            <a href="product-all?type=kadas" class="story-item">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[122px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="assets/harees-jewellery-kadas.webp" alt="Kada" />
                    <h1 class="mt-2 text-center text-sm">Kada</h1>
                </div>
            </a>

        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('productsContainer');
            const items = container.innerHTML;
            container.innerHTML = items + items; // Duplicate content
            
            let scrollPosition = 0;
            const scrollSpeed = 1; // pixels per frame
            
            function animate() {
                scrollPosition += scrollSpeed;
                if (scrollPosition >= container.scrollWidth / 2) {
                    scrollPosition = 0;
                }
                container.scrollLeft = scrollPosition;
                requestAnimationFrame(animate);
            }
            
            animate();
            
            container.addEventListener('mouseenter', () => {
                scrollSpeed = 0;
            });
            
            container.addEventListener('mouseleave', () => {
                scrollSpeed = 1;
            });
        });
    </script>
    <!-- Round Products - Close -->

    <!-- grid section 1-->
    <div class="max-w-7xl mx-auto p-3 mb-3">
        <h1 class="text-2xl font-bold text-blue-900 text-center mb-4">Wedding Gold Booking</h1>
        <p class="text-center text-base mb-6">
            Discover the perfect blend of tradition and versatility with our
            exclusive Gold wedding collection.
        </p>

        <div class="grid gap-2">
            <div>
                <!-- <img class="h-auto max-w-full rounded-lg" src="assets/advance-gold-booking_1.png" alt="" /> -->
                <img class="h-auto max-w-full rounded-lg" src="assets/1.png" alt="" />
            </div>
            <div class="grid grid-cols-5 gap-2">
                <!-- Item 1 -->
                <div>
                    <a href="custom-jewellery" class="block overflow-hidden rounded-lg transition-all duration-300 hover:scale-105 hover:shadow-lg">
                        <img class="h-auto max-w-full rounded-lg hover:brightness-110"
                            src="assets/gold-booking-section/s-1.png"
                            alt="" />
                    </a>
                </div>
                
                <!-- Item 2 -->
                <div>
                    <a href="custom-jewellery" class="block overflow-hidden rounded-lg transition-all duration-300 hover:scale-105 hover:shadow-lg">
                        <img class="h-auto max-w-full rounded-lg hover:brightness-110"
                            src="assets/gold-booking-section/s-1.png"
                            alt="" />
                    </a>
                </div>
                
                <!-- Item 3 -->
                <div>
                    <a href="custom-jewellery" class="block overflow-hidden rounded-lg transition-all duration-300 hover:scale-105 hover:shadow-lg">
                        <img class="h-auto max-w-full rounded-lg hover:brightness-110"
                            src="assets/gold-booking-section/s-1.png"
                            alt="" />
                    </a>
                </div>
                
                <!-- Item 4 -->
                <div>
                    <a href="custom-jewellery" class="block overflow-hidden rounded-lg transition-all duration-300 hover:scale-105 hover:shadow-lg">
                        <img class="h-auto max-w-full rounded-lg hover:brightness-110"
                            src="assets/gold-booking-section/s-1.png"
                            alt="" />
                    </a>
                </div>
                
                <!-- Item 5 -->
                <div>
                    <a href="custom-jewellery" class="block overflow-hidden rounded-lg transition-all duration-300 hover:scale-105 hover:shadow-lg">
                        <img class="h-auto max-w-full rounded-lg hover:brightness-110"
                            src="assets/gold-booking-section/s-1.png"
                            alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- grid section 2 -->
    <?php include('diamond_grids.php'); ?>

<!-- multi slide carouse -->
    <h1 class="text-2xl font-bold text-blue-900 text-center mb-2">Gemstone Jewellery</h1>
    <p class="text-center text-base mb-3">
        Capturing timeless grace in each precious stone
    </p>
    <div class="container mx-auto pb-3">
        <div class="relative overflow-hidden" id="carousel-container">
            <div id="carousel" class="flex transition-transform duration-500 ease-in-out">
                <div class="carousel-item p-2">
                    <img src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/04_april/homepage/Gemstone-ring.jpg"
                        alt="Image 1" class="w-full h-auto rounded-lg">
                </div>
                <div class="carousel-item p-2">
                    <img src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/04_april/homepage/gemstone-earring.jpg"
                        alt="Image 2" class="w-full h-auto rounded-lg">
                </div>
                <div class="carousel-item p-2">
                    <img src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/04_april/homepage/Gemstone-pendant.jpg"
                        alt="Image 3" class="w-full h-auto rounded-lg">
                </div>
                <div class="carousel-item p-2">
                    <img src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/04_april/homepage/Gemstone-bangle.jpg"
                        alt="Image 4" class="w-full h-auto rounded-lg">
                </div>
                <div class="carousel-item p-2">
                    <img src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/04_april/homepage/Gemstone-ring.jpg"
                        alt="Image 5" class="w-full h-auto rounded-lg">
                </div>
                <div class="carousel-item p-2">
                    <img src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/04_april/homepage/Gemstone-pendant.jpg"
                        alt="Image 3" class="w-full h-auto rounded-lg">
                </div>
                <div class="carousel-item p-2">
                    <img src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/04_april/homepage/Gemstone-ring.jpg"
                        alt="Image 1" class="w-full h-auto rounded-lg">
                </div>
                <div class="carousel-item p-2">
                    <img src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/04_april/homepage/gemstone-earring.jpg"
                        alt="Image 2" class="w-full h-auto rounded-lg">
                </div>
                <div class="carousel-item p-2">
                    <img src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/04_april/homepage/Gemstone-pendant.jpg"
                        alt="Image 3" class="w-full h-auto rounded-lg">
                </div>
                <div class="carousel-item p-2">
                    <img src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/04_april/homepage/Gemstone-bangle.jpg"
                        alt="Image 4" class="w-full h-auto rounded-lg">
                </div>
                <div class="carousel-item p-2">
                    <img src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/04_april/homepage/Gemstone-ring.jpg"
                        alt="Image 5" class="w-full h-auto rounded-lg">
                </div>
                <div class="carousel-item p-2">
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

<!-- carousel2 open -->
<?php //include_once("index-carousel2.php"); ?>
<!-- carousel2 close -->

<!-- Minimal space before footer -->
<div class="mt-2"></div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Only initialize on mobile
        if (window.innerWidth <= 767) {
            const container = document.getElementById('productsContainer');
            const scrollSpeed = 1; // pixels per frame
            let scrollPosition = 0;
            let isScrolling = true;
            
            // Clone all items to create infinite loop effect
            const items = container.querySelectorAll('.story-item');
            items.forEach(item => {
                container.appendChild(item.cloneNode(true));
            });
            
            function animate() {
                if (isScrolling) {
                    scrollPosition += scrollSpeed;
                    
                    // Reset scroll position when we've scrolled all items
                    if (scrollPosition >= container.scrollWidth / 2) {
                        scrollPosition = 0;
                    }
                    
                    container.scrollLeft = scrollPosition;
                }
                requestAnimationFrame(animate);
            }
            
            // Pause on hover
            container.addEventListener('mouseenter', () => isScrolling = false);
            container.addEventListener('mouseleave', () => isScrolling = true);
            
            animate();
            
            // Handle window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth > 767) {
                    // Stop scrolling when viewport is larger than mobile
                    isScrolling = false;
                    container.scrollLeft = 0;
                    // Remove cloned items
                    const items = container.querySelectorAll('.story-item');
                    const originalCount = items.length / 2;
                    for (let i = originalCount; i < items.length; i++) {
                        container.removeChild(items[i]);
                    }
                } else if (items.length <= originalCount) {
                    // Re-add cloned items if needed
                    const items = container.querySelectorAll('.story-item');
                    items.forEach(item => {
                        container.appendChild(item.cloneNode(true));
                    });
                    isScrolling = true;
                }
            });
        }
    });
</script>

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

</div>

<?php include ('includes/footer.php'); ?>

    </body>
</html>

