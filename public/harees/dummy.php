<!DOCTYPE html>
<html lang="en">

<!-- head tag open -->
<?php
        //include('header.php');
        include('includes/head.php');
?>
<!-- head tag close -->

<body style="background-color: #feffd6;">

<!-- header tag open -->
<?php include('includes/header.php');?>
<!-- header tag close -->

<!-- nav bar open -->
<?php include('includes/navbar.php');?>
<!-- nav bar close -->



<!-- Product Listing Section -->
<div class="max-w-7xl mx-auto p-6 mb-10">
    <h1 class="text-3xl font-bold text-yellow-300 text-center mb-4">Featured Products</h1>
    <p class="text-center text-lg mb-8">
        Explore our exquisite collection of handcrafted jewelry pieces
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Product Card 1 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden border border-yellow-100 hover:shadow-xl transition duration-300">
            <div class="relative">
                <img class="w-full h-64 object-cover" src="assets/product-images/gold-ring.jpg" alt="Gold Ring">
                <div class="absolute top-2 right-2 bg-yellow-500 text-white text-xs font-bold px-2 py-1 rounded">New</div>
            </div>
            <div class="p-4">
                <h3 class="text-lg font-semibold mb-1">Elegant Gold Ring</h3>
                <p class="text-gray-600 text-sm mb-2">Category: Rings</p>
                <div class="flex justify-between items-center mt-3">
                    <span class="text-yellow-500 font-bold">₹45,999</span>
                    <a href="product-details.php?id=1" class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-300">Buy Now</a>
                </div>
            </div>
        </div>

        <!-- Product Card 2 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden border border-yellow-100 hover:shadow-xl transition duration-300">
            <div class="relative">
                <img class="w-full h-64 object-cover" src="assets/product-images/diamond-necklace.jpg" alt="Diamond Necklace">
                <div class="absolute top-2 right-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">Sale</div>
            </div>
            <div class="p-4">
                <h3 class="text-lg font-semibold mb-1">Diamond Necklace</h3>
                <p class="text-gray-600 text-sm mb-2">Category: Necklaces</p>
                <div class="flex justify-between items-center mt-3">
                    <span class="text-yellow-500 font-bold">₹89,999</span>
                    <a href="product-details.php?id=2" class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-300">Buy Now</a>
                </div>
            </div>
        </div>

        <!-- Product Card 3 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden border border-yellow-100 hover:shadow-xl transition duration-300">
            <div class="relative">
                <img class="w-full h-64 object-cover" src="assets/product-images/pearl-earrings.jpg" alt="Pearl Earrings">
            </div>
            <div class="p-4">
                <h3 class="text-lg font-semibold mb-1">Pearl Earrings</h3>
                <p class="text-gray-600 text-sm mb-2">Category: Earrings</p>
                <div class="flex justify-between items-center mt-3">
                    <span class="text-yellow-500 font-bold">₹15,499</span>
                    <a href="product-details.php?id=3" class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-300">Buy Now</a>
                </div>
            </div>
        </div>

        <!-- Product Card 4 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden border border-yellow-100 hover:shadow-xl transition duration-300">
            <div class="relative">
                <img class="w-full h-64 object-cover" src="assets/product-images/gold-bangle.jpg" alt="Gold Bangle">
            </div>
            <div class="p-4">
                <h3 class="text-lg font-semibold mb-1">Traditional Gold Bangle</h3>
                <p class="text-gray-600 text-sm mb-2">Category: Bangles</p>
                <div class="flex justify-between items-center mt-3">
                    <span class="text-yellow-500 font-bold">₹35,999</span>
                    <a href="product-details.php?id=4" class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-300">Buy Now</a>
                </div>
            </div>
        </div>

        <!-- Product Card 5 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden border border-yellow-100 hover:shadow-xl transition duration-300">
            <div class="relative">
                <img class="w-full h-64 object-cover" src="assets/product-images/gemstone-pendant.jpg" alt="Gemstone Pendant">
            </div>
            <div class="p-4">
                <h3 class="text-lg font-semibold mb-1">Ruby Pendant</h3>
                <p class="text-gray-600 text-sm mb-2">Category: Pendants</p>
                <div class="flex justify-between items-center mt-3">
                    <span class="text-yellow-500 font-bold">₹24,999</span>
                    <a href="product-details.php?id=5" class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-300">Buy Now</a>
                </div>
            </div>
        </div>

        <!-- Product Card 6 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden border border-yellow-100 hover:shadow-xl transition duration-300">
            <div class="relative">
                <img class="w-full h-64 object-cover" src="assets/product-images/silver-anklet.jpg" alt="Silver Anklet">
                <div class="absolute top-2 right-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded">Bestseller</div>
            </div>
            <div class="p-4">
                <h3 class="text-lg font-semibold mb-1">Silver Anklet</h3>
                <p class="text-gray-600 text-sm mb-2">Category: Anklets</p>
                <div class="flex justify-between items-center mt-3">
                    <span class="text-yellow-500 font-bold">₹5,999</span>
                    <a href="product-details.php?id=6" class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-300">Buy Now</a>
                </div>
            </div>
        </div>

        <!-- Product Card 7 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden border border-yellow-100 hover:shadow-xl transition duration-300">
            <div class="relative">
                <img class="w-full h-64 object-cover" src="assets/product-images/diamond-ring.jpg" alt="Diamond Ring">
            </div>
            <div class="p-4">
                <h3 class="text-lg font-semibold mb-1">Diamond Engagement Ring</h3>
                <p class="text-gray-600 text-sm mb-2">Category: Rings</p>
                <div class="flex justify-between items-center mt-3">
                    <span class="text-yellow-500 font-bold">₹125,999</span>
                    <a href="product-details.php?id=7" class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-300">Buy Now</a>
                </div>
            </div>
        </div>

        <!-- Product Card 8 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden border border-yellow-100 hover:shadow-xl transition duration-300">
            <div class="relative">
                <img class="w-full h-64 object-cover" src="assets/product-images/gold-nosepin.jpg" alt="Gold Nosepin">
            </div>
            <div class="p-4">
                <h3 class="text-lg font-semibold mb-1">Designer Gold Nosepin</h3>
                <p class="text-gray-600 text-sm mb-2">Category: Nosepins</p>
                <div class="flex justify-between items-center mt-3">
                    <span class="text-yellow-500 font-bold">₹4,999</span>
                    <a href="product-details.php?id=8" class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-300">Buy Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- View All Products Button -->
    <div class="text-center mt-8">
        <a href="all-products.php" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-3 px-8 rounded-full transition duration-300">
            View All Products
        </a>
    </div>
</div>


<!-- Gemstone Product Hover Section -->
<div class="max-w-7xl mx-auto p-6 mb-10">
    <h1 class="text-3xl font-bold text-yellow-300 text-center mb-2">Exquisite Gemstone Collection</h1>
    <p class="text-center text-lg mb-6">
        Discover the beauty and elegance of our handpicked gemstone jewelry pieces
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <!-- Gemstone Product 1 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md group hover:shadow-xl transition duration-300">
            <div class="relative overflow-hidden">
                <img class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500" 
                     src="assets/gemstones/ruby-ring.jpg" alt="Ruby Ring">
                <div class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <div class="text-white text-center p-4">
                        <p class="font-semibold">Natural Ruby</p>
                        <p class="text-sm">2.5 Carats</p>
                    </div>
                </div>
            </div>
            <div class="p-4">
                <h3 class="text-lg font-semibold mb-1">Ruby Engagement Ring</h3>
                <p class="text-gray-600 text-sm mb-2">Category: Gemstone Rings</p>
                <div class="flex justify-between items-center mt-3">
                    <span class="text-yellow-500 font-bold">₹75,999</span>
                    <button class="bg-white text-yellow-500 border border-yellow-500 px-4 py-2 rounded-md text-sm font-medium transition duration-300 hover:bg-yellow-500 hover:text-white">
                        Buy Now
                    </button>
                </div>
            </div>
        </div>

        <!-- Gemstone Product 2 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md group hover:shadow-xl transition duration-300">
            <div class="relative overflow-hidden">
                <img class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500" 
                     src="assets/gemstones/emerald-pendant.jpg" alt="Emerald Pendant">
                <div class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <div class="text-white text-center p-4">
                        <p class="font-semibold">Colombian Emerald</p>
                        <p class="text-sm">1.8 Carats</p>
                    </div>
                </div>
            </div>
            <div class="p-4">
                <h3 class="text-lg font-semibold mb-1">Emerald Drop Pendant</h3>
                <p class="text-gray-600 text-sm mb-2">Category: Gemstone Pendants</p>
                <div class="flex justify-between items-center mt-3">
                    <span class="text-yellow-500 font-bold">₹62,499</span>
                    <button class="bg-white text-yellow-500 border border-yellow-500 px-4 py-2 rounded-md text-sm font-medium transition duration-300 hover:bg-yellow-500 hover:text-white">
                        Buy Now
                    </button>
                </div>
            </div>
        </div>

        <!-- Gemstone Product 3 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md group hover:shadow-xl transition duration-300">
            <div class="relative overflow-hidden">
                <img class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500" 
                     src="assets/gemstones/sapphire-earrings.jpg" alt="Sapphire Earrings">
                <div class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <div class="text-white text-center p-4">
                        <p class="font-semibold">Blue Sapphire</p>
                        <p class="text-sm">3.2 Carats Total</p>
                    </div>
                </div>
            </div>
            <div class="p-4">
                <h3 class="text-lg font-semibold mb-1">Sapphire Drop Earrings</h3>
                <p class="text-gray-600 text-sm mb-2">Category: Gemstone Earrings</p>
                <div class="flex justify-between items-center mt-3">
                    <span class="text-yellow-500 font-bold">₹88,999</span>
                    <button class="bg-white text-yellow-500 border border-yellow-500 px-4 py-2 rounded-md text-sm font-medium transition duration-300 hover:bg-yellow-500 hover:text-white">
                        Buy Now
                    </button>
                </div>
            </div>
        </div>

        <!-- Gemstone Product 4 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md group hover:shadow-xl transition duration-300">
            <div class="relative overflow-hidden">
                <img class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500" 
                     src="assets/gemstones/amethyst-bracelet.jpg" alt="Amethyst Bracelet">
                <div class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <div class="text-white text-center p-4">
                        <p class="font-semibold">Purple Amethyst</p>
                        <p class="text-sm">8.5 Carats Total</p>
                    </div>
                </div>
            </div>
            <div class="p-4">
                <h3 class="text-lg font-semibold mb-1">Amethyst Tennis Bracelet</h3>
                <p class="text-gray-600 text-sm mb-2">Category: Gemstone Bracelets</p>
                <div class="flex justify-between items-center mt-3">
                    <span class="text-yellow-500 font-bold">₹45,999</span>
                    <button class="bg-white text-yellow-500 border border-yellow-500 px-4 py-2 rounded-md text-sm font-medium transition duration-300 hover:bg-yellow-500 hover:text-white">
                        Buy Now
                    </button>
                </div>
            </div>
        </div>

        <!-- Gemstone Product 5 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md group hover:shadow-xl transition duration-300">
            <div class="relative overflow-hidden">
                <img class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500" 
                     src="assets/gemstones/peridot-necklace.jpg" alt="Peridot Necklace">
                <div class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <div class="text-white text-center p-4">
                        <p class="font-semibold">Natural Peridot</p>
                        <p class="text-sm">5.4 Carats Total</p>
                    </div>
                </div>
            </div>
            <div class="p-4">
                <h3 class="text-lg font-semibold mb-1">Peridot Halo Necklace</h3>
                <p class="text-gray-600 text-sm mb-2">Category: Gemstone Necklaces</p>
                <div class="flex justify-between items-center mt-3">
                    <span class="text-yellow-500 font-bold">₹52,499</span>
                    <button class="bg-white text-yellow-500 border border-yellow-500 px-4 py-2 rounded-md text-sm font-medium transition duration-300 hover:bg-yellow-500 hover:text-white">
                        Buy Now
                    </button>
                </div>
            </div>
        </div>

        <!-- Gemstone Product 6 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md group hover:shadow-xl transition duration-300">
            <div class="relative overflow-hidden">
                <img class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500" 
                     src="assets/gemstones/topaz-ring.jpg" alt="Topaz Ring">
                <div class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <div class="text-white text-center p-4">
                        <p class="font-semibold">Swiss Blue Topaz</p>
                        <p class="text-sm">4.1 Carats</p>
                    </div>
                </div>
            </div>
            <div class="p-4">
                <h3 class="text-lg font-semibold mb-1">Blue Topaz Cocktail Ring</h3>
                <p class="text-gray-600 text-sm mb-2">Category: Gemstone Rings</p>
                <div class="flex justify-between items-center mt-3">
                    <span class="text-yellow-500 font-bold">₹38,999</span>
                    <button class="bg-white text-yellow-500 border border-yellow-500 px-4 py-2 rounded-md text-sm font-medium transition duration-300 hover:bg-yellow-500 hover:text-white">
                        Buy Now
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- View All Gemstones Button -->
    <div class="text-center mt-8">
        <a href="gemstone-collection.php" class="inline-block bg-gradient-to-r from-yellow-400 to-yellow-600 text-white font-bold py-3 px-8 rounded-full shadow-md hover:shadow-lg transform hover:-translate-y-1 transition duration-300">
            Explore Full Gemstone Collection
        </a>
    </div>
</div>

<!-- Gemstone Products Horizontal Carousel -->
<div class="container mx-auto pb-10">
    <h1 class="text-3xl font-bold text-yellow-300 text-center mb-2">Premium Gemstone Collection</h1>
    <p class="text-center text-lg mb-5">
        Elegant gemstone jewelry pieces for every occasion
    </p>

    <!-- Carousel Container -->
    <div class="relative overflow-hidden" id="gemstone-products-carousel">
        <div id="gemstone-products" class="flex transition-transform duration-500 ease-in-out">
            <!-- Product 1 -->
            <div class="carousel-product min-w-full sm:min-w-[50%] md:min-w-[33.333%] lg:min-w-[25%] p-4">
                <div class="bg-white rounded-lg shadow-md overflow-hidden h-full">
                    <img src="assets/gemstones/ruby-ring.jpg" alt="Ruby Ring" class="w-full h-48 object-cover">
                    <div class="p-4 flex flex-col h-[calc(100%-12rem)]">
                        <h3 class="text-lg font-semibold mb-1">Ruby Engagement Ring</h3>
                        <p class="text-gray-600 text-sm mb-2">Category: Rings</p>
                        <div class="flex justify-between items-center mt-auto">
                            <span class="text-yellow-500 font-bold">₹75,999</span>
                            <a href="product-details.php?id=101" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded-md text-sm font-medium">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="carousel-product min-w-full sm:min-w-[50%] md:min-w-[33.333%] lg:min-w-[25%] p-4">
                <div class="bg-white rounded-lg shadow-md overflow-hidden h-full">
                    <img src="assets/gemstones/emerald-pendant.jpg" alt="Emerald Pendant" class="w-full h-48 object-cover">
                    <div class="p-4 flex flex-col h-[calc(100%-12rem)]">
                        <h3 class="text-lg font-semibold mb-1">Emerald Drop Pendant</h3>
                        <p class="text-gray-600 text-sm mb-2">Category: Pendants</p>
                        <div class="flex justify-between items-center mt-auto">
                            <span class="text-yellow-500 font-bold">₹62,499</span>
                            <a href="product-details.php?id=102" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded-md text-sm font-medium">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="carousel-product min-w-full sm:min-w-[50%] md:min-w-[33.333%] lg:min-w-[25%] p-4">
                <div class="bg-white rounded-lg shadow-md overflow-hidden h-full">
                    <img src="assets/gemstones/sapphire-earrings.jpg" alt="Sapphire Earrings" class="w-full h-48 object-cover">
                    <div class="p-4 flex flex-col h-[calc(100%-12rem)]">
                        <h3 class="text-lg font-semibold mb-1">Sapphire Earrings</h3>
                        <p class="text-gray-600 text-sm mb-2">Category: Earrings</p>
                        <div class="flex justify-between items-center mt-auto">
                            <span class="text-yellow-500 font-bold">₹88,999</span>
                            <a href="product-details.php?id=103" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded-md text-sm font-medium">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="carousel-product min-w-full sm:min-w-[50%] md:min-w-[33.333%] lg:min-w-[25%] p-4">
                <div class="bg-white rounded-lg shadow-md overflow-hidden h-full">
                    <img src="assets/gemstones/amethyst-bracelet.jpg" alt="Amethyst Bracelet" class="w-full h-48 object-cover">
                    <div class="p-4 flex flex-col h-[calc(100%-12rem)]">
                        <h3 class="text-lg font-semibold mb-1">Amethyst Bracelet</h3>
                        <p class="text-gray-600 text-sm mb-2">Category: Bracelets</p>
                        <div class="flex justify-between items-center mt-auto">
                            <span class="text-yellow-500 font-bold">₹45,999</span>
                            <a href="product-details.php?id=104" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded-md text-sm font-medium">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="carousel-product min-w-full sm:min-w-[50%] md:min-w-[33.333%] lg:min-w-[25%] p-4">
                <div class="bg-white rounded-lg shadow-md overflow-hidden h-full">
                    <img src="assets/gemstones/peridot-necklace.jpg" alt="Peridot Necklace" class="w-full h-48 object-cover">
                    <div class="p-4 flex flex-col h-[calc(100%-12rem)]">
                        <h3 class="text-lg font-semibold mb-1">Peridot Necklace</h3>
                        <p class="text-gray-600 text-sm mb-2">Category: Necklaces</p>
                        <div class="flex justify-between items-center mt-auto">
                            <span class="text-yellow-500 font-bold">₹52,499</span>
                            <a href="product-details.php?id=105" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded-md text-sm font-medium">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 6 -->
            <div class="carousel-product min-w-full sm:min-w-[50%] md:min-w-[33.333%] lg:min-w-[25%] p-4">
                <div class="bg-white rounded-lg shadow-md overflow-hidden h-full">
                    <img src="assets/gemstones/topaz-ring.jpg" alt="Topaz Ring" class="w-full h-48 object-cover">
                    <div class="p-4 flex flex-col h-[calc(100%-12rem)]">
                        <h3 class="text-lg font-semibold mb-1">Blue Topaz Ring</h3>
                        <p class="text-gray-600 text-sm mb-2">Category: Rings</p>
                        <div class="flex justify-between items-center mt-auto">
                            <span class="text-yellow-500 font-bold">₹38,999</span>
                            <a href="product-details.php?id=106" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded-md text-sm font-medium">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Products (duplicates for continuous scrolling effect) -->
            <div class="carousel-product min-w-full sm:min-w-[50%] md:min-w-[33.333%] lg:min-w-[25%] p-4">
                <div class="bg-white rounded-lg shadow-md overflow-hidden h-full">
                    <img src="assets/gemstones/ruby-ring.jpg" alt="Ruby Ring" class="w-full h-48 object-cover">
                    <div class="p-4 flex flex-col h-[calc(100%-12rem)]">
                        <h3 class="text-lg font-semibold mb-1">Ruby Engagement Ring</h3>
                        <p class="text-gray-600 text-sm mb-2">Category: Rings</p>
                        <div class="flex justify-between items-center mt-auto">
                            <span class="text-yellow-500 font-bold">₹75,999</span>
                            <a href="product-details.php?id=101" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded-md text-sm font-medium">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Buttons -->
        <button id="gemstone-prev" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-50 hover:bg-opacity-75 text-yellow-600 p-2 rounded-full shadow-md z-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <button id="gemstone-next" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-50 hover:bg-opacity-75 text-yellow-600 p-2 rounded-full shadow-md z-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>

    <!-- JavaScript for the carousel -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.getElementById('gemstone-products');
            const carouselContainer = document.getElementById('gemstone-products-carousel');
            const prevButton = document.getElementById('gemstone-prev');
            const nextButton = document.getElementById('gemstone-next');
            const products = document.querySelectorAll('.carousel-product');
            let position = 0;
            
            // Get the actual width of a carousel item based on viewport
            function getItemWidth() {
                // Get the first product's actual width including padding
                const productElement = products[0];
                const computedStyle = window.getComputedStyle(productElement);
                
                // Get the actual width including padding
                return productElement.offsetWidth;
            }
            
            // Number of items visible depends on viewport width
            function getVisibleItems() {
                if (window.innerWidth < 640) return 1;
                if (window.innerWidth < 768) return 2;
                if (window.innerWidth < 1024) return 3;
                return 4;
            }
            
            function updateCarousel() {
                carousel.style.transform = `translateX(${position}px)`;
            }
            
            nextButton.addEventListener('click', function() {
                const itemWidth = getItemWidth();
                const visibleItems = getVisibleItems();
                const maxPosition = -(products.length - visibleItems) * itemWidth;
                position = Math.max(position - itemWidth, maxPosition);
                updateCarousel();
            });
            
            prevButton.addEventListener('click', function() {
                const itemWidth = getItemWidth();
                position = Math.min(position + itemWidth, 0);
                updateCarousel();
            });
            
            // Auto scroll
            let autoScroll = setInterval(function() {
                const itemWidth = getItemWidth();
                const visibleItems = getVisibleItems();
                const maxPosition = -(products.length - visibleItems) * itemWidth;
                position = Math.max(position - itemWidth, maxPosition);
                
                // Reset to beginning when reaching the end
                if (position <= maxPosition) {
                    position = 0;
                }
                
                updateCarousel();
            }, 5000);
            
            // Pause auto scroll when hovering
            carouselContainer.addEventListener('mouseenter', function() {
                clearInterval(autoScroll);
            });
            
            // Resume auto scroll when mouse leaves
            carouselContainer.addEventListener('mouseleave', function() {
                clearInterval(autoScroll); // Clear any existing interval first
                autoScroll = setInterval(function() {
                    const itemWidth = getItemWidth();
                    const visibleItems = getVisibleItems();
                    const maxPosition = -(products.length - visibleItems) * itemWidth;
                    position = Math.max(position - itemWidth, maxPosition);
                    
                    // Reset to beginning when reaching the end
                    if (position <= maxPosition) {
                        position = 0;
                    }
                    
                    updateCarousel();
                }, 5000);
            });
            
            // Handle touch events for mobile
            let touchStartX = 0;
            let touchEndX = 0;
            
            carouselContainer.addEventListener('touchstart', function(event) {
                touchStartX = event.changedTouches[0].screenX;
            }, false);
            
            carouselContainer.addEventListener('touchend', function(event) {
                touchEndX = event.changedTouches[0].screenX;
                handleSwipe();
            }, false);
            
            function handleSwipe() {
                const itemWidth = getItemWidth();
                const visibleItems = getVisibleItems();
                const maxPosition = -(products.length - visibleItems) * itemWidth;
                
                if (touchEndX < touchStartX - 50) {
                    // Swipe left
                    position = Math.max(position - itemWidth, maxPosition);
                }
                
                if (touchEndX > touchStartX + 50) {
                    // Swipe right
                    position = Math.min(position + itemWidth, 0);
                }
                
                updateCarousel();
            }
            
            // Normalize product box heights
            function normalizeProductHeights() {
                // Reset heights first
                products.forEach(product => {
                    const productCard = product.querySelector('.bg-white');
                    productCard.style.height = 'auto';
                });
                
                // Get tallest product card height
                let maxHeight = 0;
                products.forEach(product => {
                    const productCard = product.querySelector('.bg-white');
                    maxHeight = Math.max(maxHeight, productCard.offsetHeight);
                });
                
                // Set all cards to the same height
                products.forEach(product => {
                    const productCard = product.querySelector('.bg-white');
                    productCard.style.height = `${maxHeight}px`;
                });
            }
            
            // Run once on page load
            setTimeout(normalizeProductHeights, 100);
            
            // Adjust on window resize
            window.addEventListener('resize', function() {
                // Reset position on resize to prevent weird offsets
                position = 0;
                updateCarousel();
                // Re-normalize heights after resize
                setTimeout(normalizeProductHeights, 100);
            });
        });
    </script>
</div>

<!-- Carousel Slides Container -->
<div class="flex overflow-x-hidden w-full" id="carousel-container">
  <!-- Slide 1 -->
  <div class="spotlight-slide w-full flex-shrink-0 flex flex-col md:flex-row">
    <div class="w-full md:w-1/2">
      <div class="relative pt-[75%] md:pt-0 md:h-full">
        <img src="assets/gemstones/ruby-ring.jpg" alt="Ruby Ring" class="absolute inset-0 w-full h-full object-cover">
      </div>
    </div>
    <div class="w-full md:w-1/2 p-6 md:p-10 flex flex-col justify-center">
      <h3 class="text-2xl md:text-3xl font-bold mb-2">Ruby Engagement Ring</h3>
      <div class="flex items-center mb-3">
        <div class="flex text-yellow-500">
          <!-- Stars SVG omitted for brevity -->
        </div>
        <span class="text-gray-600 ml-2">(24 reviews)</span>
      </div>
      <p class="text-gray-600 mb-4">Exquisite 18K gold engagement ring featuring a brilliant-cut 1.5 carat ruby center stone surrounded by pavé diamonds.</p>
      <div class="mb-6">
        <div class="flex items-center mb-2">
          <span class="w-20 text-gray-500">Stone:</span>
          <span class="font-medium">Natural Ruby</span>
        </div>
        <div class="flex items-center mb-2">
          <span class="w-20 text-gray-500">Metal:</span>
          <span class="font-medium">18K Gold</span>
        </div>
        <div class="flex items-center">
          <span class="w-20 text-gray-500">Weight:</span>
          <span class="font-medium">4.8g</span>
        </div>
      </div>
      <div class="flex items-center justify-between">
        <span class="text-3xl font-bold text-yellow-600">₹75,999</span>
        <a href="product-details.php?id=101" class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-3 rounded-lg font-medium transition">View Details</a>
      </div>
    </div>
  </div>
  
  <!-- Slide 2 and 3 structure is similar -->
</div>

<!-- Thumbnail Navigation -->
<div class="absolute bottom-4 left-0 right-0 flex justify-center gap-2">
  <button class="spotlight-dot w-4 h-4 rounded-full bg-yellow-500 opacity-100" data-index="0"></button>
  <button class="spotlight-dot w-4 h-4 rounded-full bg-yellow-500 opacity-50" data-index="1"></button>
  <button class="spotlight-dot w-4 h-4 rounded-full bg-yellow-500 opacity-50" data-index="2"></button>
</div>

<!-- Navigation Controls -->
<div class="absolute top-1/2 left-4 right-4 flex justify-between items-center -translate-y-1/2">
  <button id="spotlight-prev" class="flex items-center justify-center w-12 h-12 rounded-full bg-white border border-yellow-300 text-yellow-600 hover:bg-yellow-50 transition shadow-md">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
    </svg>
  </button>
  <button id="spotlight-next" class="flex items-center justify-center w-12 h-12 rounded-full bg-white border border-yellow-300 text-yellow-600 hover:bg-yellow-50 transition shadow-md">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
    </svg>
  </button>
</div>

<!-- Thumbnails for quick navigation -->
<div class="flex justify-center -mx-2 mt-6 overflow-x-auto pb-2" id="spotlight-thumbnails">
  <div class="spotlight-thumb px-2 min-w-[120px] cursor-pointer" data-index="0">
    <div class="border-2 border-yellow-500 rounded-lg overflow-hidden">
      <img src="assets/gemstones/ruby-ring.jpg" alt="Ruby Ring Thumbnail" class="w-full h-20 object-cover">
    </div>
  </div>
  <div class="spotlight-thumb px-2 min-w-[120px] cursor-pointer" data-index="1">
    <div class="border-2 border-gray-200 rounded-lg overflow-hidden">
      <img src="assets/gemstones/emerald-pendant.jpg" alt="Emerald Pendant Thumbnail" class="w-full h-20 object-cover">
    </div>
  </div>
  <div class="spotlight-thumb px-2 min-w-[120px] cursor-pointer" data-index="2">
    <div class="border-2 border-gray-200 rounded-lg overflow-hidden">
      <img src="assets/gemstones/sapphire-earrings.jpg" alt="Sapphire Earrings Thumbnail" class="w-full h-20 object-cover">
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const carouselContainer = document.getElementById('carousel-container');
    const slides = document.querySelectorAll('.spotlight-slide');
    const dots = document.querySelectorAll('.spotlight-dot');
    const thumbs = document.querySelectorAll('.spotlight-thumb');
    const prevButton = document.getElementById('spotlight-prev');
    const nextButton = document.getElementById('spotlight-next');
    
    let currentIndex = 0;
    const totalSlides = slides.length;
    
    // Function to update carousel to show the selected slide
    function updateCarousel(index) {
      // Slide the carousel
      carouselContainer.style.transition = 'transform 0.5s ease-in-out';
      carouselContainer.style.transform = `translateX(-${index * 100}%)`;
      
      // Update dots
      dots.forEach((dot, i) => {
        dot.style.opacity = i === index ? '1' : '0.5';
      });
      
      // Update thumbnails
      thumbs.forEach((thumb, i) => {
        const border = thumb.querySelector('div');
        if (i === index) {
          border.classList.remove('border-gray-200');
          border.classList.add('border-yellow-500');
        } else {
          border.classList.add('border-gray-200');
          border.classList.remove('border-yellow-500');
        }
      });
      
      currentIndex = index;
    }
    
    // Initialize carousel
    updateCarousel(0);
    
    // Handle dot navigation
    dots.forEach((dot, index) => {
      dot.addEventListener('click', () => {
        updateCarousel(index);
      });
    });
    
    // Handle thumbnail navigation
    thumbs.forEach((thumb, index) => {
      thumb.addEventListener('click', () => {
        updateCarousel(index);
      });
    });
    
    // Handle previous button
    prevButton.addEventListener('click', () => {
      const newIndex = (currentIndex - 1 + totalSlides) % totalSlides;
      updateCarousel(newIndex);
    });
    
    // Handle next button
    nextButton.addEventListener('click', () => {
      const newIndex = (currentIndex + 1) % totalSlides;
      updateCarousel(newIndex);
    });
    
    // Auto rotate
    let autoRotate = setInterval(() => {
      const newIndex = (currentIndex + 1) % totalSlides;
      updateCarousel(newIndex);
    }, 5000);
    
    // Pause auto rotate when hovering
    document.getElementById('product-spotlight').addEventListener('mouseenter', () => {
      clearInterval(autoRotate);
    });
    
    // Resume auto rotate when not hovering
    document.getElementById('product-spotlight').addEventListener('mouseleave', () => {
      autoRotate = setInterval(() => {
        const newIndex = (currentIndex + 1) % totalSlides;
        updateCarousel(newIndex);
      }, 5000);
    });
    
    // Add keyboard navigation
    document.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowLeft') {
        const newIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        updateCarousel(newIndex);
      } else if (e.key === 'ArrowRight') {
        const newIndex = (currentIndex + 1) % totalSlides;
        updateCarousel(newIndex);
      }
    });
    
    // Add swipe support for mobile
    let touchStartX = 0;
    let touchEndX = 0;
    
    carouselContainer.addEventListener('touchstart', (e) => {
      touchStartX = e.changedTouches[0].screenX;
    });
    
    carouselContainer.addEventListener('touchend', (e) => {
      touchEndX = e.changedTouches[0].screenX;
      handleSwipe();
    });
    
    function handleSwipe() {
      const swipeThreshold = 50;
      if (touchEndX < touchStartX - swipeThreshold) {
        // Swipe left
        const newIndex = (currentIndex + 1) % totalSlides;
        updateCarousel(newIndex);
      }
      if (touchEndX > touchStartX + swipeThreshold) {
        // Swipe right
        const newIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        updateCarousel(newIndex);
      }
    }
  });
</script>


<?php include ('includes/footer.php'); ?>

<!-- </span>
</button>
</div> -->
    </body>
</html>