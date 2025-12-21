<?php

session_start();
$UserID = $_SESSION['userid'];
if (isset($_SESSION['userid']) == NULL) {
  echo 'not accessed';
    header("Location: index");
    exit();
}
else{
?>


<!DOCTYPE html>
<html lang="en">

<?php include('includes/uhead.php'); ?>

    <!-- carousel1 -->

    <div id="gallery" class="relative w-full  " data-carousel="slide" data-carousel-item="active">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden mt-14  md:h-96 ">
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

    <!-- images row -->

    <!-- <div class="p-5 mx-auto">
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4">
            <div class="flex flex-col items-center justify-center">
                <img class="w-[200px] h-[200px] object-cover rounded-full border-4 border-yellow-300 border-double"
                    src="https://img.freepik.com/premium-photo/diamond-ring-with-diamond-diamonds-it_711323-196012.jpg?size=626&ext=jpg&ga=GA1.1.1525510322.1722501185&semt=ais_hybrid" alt="Ring" />
                <h1 class="mt-2 text-center">Ring</h1>
            </div>
            <div class="flex flex-col items-center justify-center">
                <img class="w-[200px] h-[200px] object-cover rounded-full border-4 border-yellow-300 border-double"
                    src="./assets/jwel5.jpeg" alt="Anklet" />
                <h1 class="mt-2 text-center">Anklet</h1>
            </div>
            <div class="flex flex-col items-center justify-center">
                <img class="w-[200px] h-[200px] object-cover rounded-full border-4 border-yellow-300 border-double"
                    src="https://images.unsplash.com/photo-1690175867343-2af70ea57537?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Z29sZCUyMGJhbmdsZXN8ZW58MHx8MHx8fDA%3D"
                    alt="Bangle" />
                <h1 class="mt-2 text-center">Bangle</h1>
            </div>
            <div class="flex flex-col items-center justify-center">
                <img class="w-[200px] h-[200px] object-cover rounded-full border-4 border-yellow-300 border-double"
                    src="https://plus.unsplash.com/premium_photo-1680181362119-5c9bf196805f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDF8fGVhcnJpbmd8ZW58MHx8MHx8fDA%3D"
                    alt="Earring" />
                <h1 class="mt-2 text-center">Earring</h1>
            </div>
            <div class="flex flex-col items-center justify-center">
                <img class="w-[200px] h-[200px] object-cover rounded-full border-4 border-yellow-300 border-double"
                    src="https://img.freepik.com/premium-photo/diamond-ring-with-diamond-it_1028782-510026.jpg?size=626&ext=jpg"
                    alt="Platinum" />
                <h1 class="mt-2 text-center">Platinum</h1>
            </div>
            <div class="flex flex-col items-center justify-center">
                <img class="w-[200px] h-[200px] object-cover rounded-full border-4 border-yellow-300 border-double sm:w-[200px] h-[200px]"
                    src="./assets/jwel3.jpeg" alt="GoldChain" />
                <h1 class="mt-2 text-center">GoldChain</h1>
            </div>-->
            <!-- <div class="flex flex-col items-center justify-center">
                <img class="w-full h-[230px] object-cover rounded-full border-4 border-yellow-300 border-double"
                    src="./assets/jwel7.jpeg" alt="CoupleBand" />
                <h1 class="mt-2 text-center">CoupleBand</h1>
            </div> -->

    <!-- </div>
    </div>  -->





    <div class="p-5 mx-auto">
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4">
            <a href="uproduct-all?type=rings">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[150px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="assets/harees-jewellery-rings.png"
                        alt="Ring" />
                    <h1 class="mt-2 text-center">Ring</h1>
                </div>
            </a>
            <a href="uproduct-all?type=anklets">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[150px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="assets/harees-jewellery-anklets.png" alt="Anklets" />
                    <h1 class="mt-2 text-center">Anklet</h1>
                </div>
            </a>
            <a href="uproduct-all.php?type=bangles">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[150px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="assets/harees-jewellery-bangles.png"
                        alt="Bangle" />
                    <h1 class="mt-2 text-center">Bangle</h1>
                </div>
            </a>
            <a href="uproduct-all.php?type=earrings">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[150px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="assets/harees-jewellery-earrings.png"
                        alt="Earring" />
                    <h1 class="mt-2 text-center">Earring</h1>
                </div>
            </a>
            <a href="uproduct-all.php?type=nosepins">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[150px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="assets/harees-jewellery-nosepins.png"
                        alt="Platinum" />
                    <h1 class="mt-2 text-center">Nosepins</h1>
                </div>
            </a>
            <a href="uproduct-all.php?type=necklace">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-[150px] object-cover rounded-full border-4 border-yellow-300 border-double"
                        src="assets/harees-jewellery-necklace.png" alt="GoldChain" />
                    <h1 class="mt-2 text-center">Necklaces</h1>
                </div>
            </a>
            <!-- Uncomment if needed
            <div class="flex flex-col items-center justify-center">
                <img class="w-full h-[200px] object-cover rounded-full border-4 border-yellow-300 border-double"
                    src="./assets/jwel7.jpeg" alt="CoupleBand" />
                <h1 class="mt-2 text-center">CoupleBand</h1>
            </div>
            -->
        </div>
    </div>





    <!-- grid section 1-->
<div class="max-w-7xl mx-auto p-6 mb-5">
        <h1 class="text-3xl font-bold text-yellow-300 text-center mb-8">Wedding Gold Booking</h1>
        <p class="text-center text-lg mb-12">
            Discover the perfect blend of tradition and versatility with our
            exclusive Gold wedding collection.
        </p>

        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="assets/advance-gold-booking.png"
                    alt="" />
            </div>
            <!-- <div class="grid grid-cols-5 gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="assets/advance-gold-booking.png"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/07_july/rakshabandhan/alpha-rakhinew.jpg"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/07_july/rakshabandhan/Trendy-rakhi.jpg"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/07_july/rakshabandhan/gift-for-sis.jpg"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/07_july/rakshabandhan/spiritual-rakhi.jpg"
                        alt="" />
                </div>
            </div> -->
        </div>
    </div>
    
    <!-- grid section 2 -->

   <div class="max-w-7xl mx-auto p-6">
        <h1 class="text-3xl font-semibold text-yellow-300 text-center mb-8">Diamond Jewellery</h1>
        <p class="text-center text-2xl mb-12">
            Discover the beauty of diamond with our timeless diamond collection
        </p>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="grid gap-4">
                <div class="object-contain">
                    <img class="h-auto max-w-full rounded-lg object-contain"
                        src="https://images.pexels.com/photos/6394590/pexels-photo-6394590.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://t3.ftcdn.net/jpg/08/81/51/34/240_F_881513494_d26mopTFoO6NQWipKkWhEeS2CZKCGnrD.jpg"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://t4.ftcdn.net/jpg/07/83/05/63/240_F_783056339_TH1PtXMWpk3yDtWi1CKmSgIChfrWCoAg.jpg"
                        alt="" />
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://images.pexels.com/photos/10983780/pexels-photo-10983780.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://images.pexels.com/photos/10983783/pexels-photo-10983783.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://t4.ftcdn.net/jpg/07/83/05/63/240_F_783056339_TH1PtXMWpk3yDtWi1CKmSgIChfrWCoAg.jpg"
                        alt="" />
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://images.pexels.com/photos/2849742/pexels-photo-2849742.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://t3.ftcdn.net/jpg/08/81/51/34/240_F_881513494_d26mopTFoO6NQWipKkWhEeS2CZKCGnrD.jpg"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://t3.ftcdn.net/jpg/07/64/16/96/240_F_764169685_gWkcpjjGavzUF15GwsIMujsSGfDXwAMM.jpg"
                        alt="" />
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://t4.ftcdn.net/jpg/07/37/25/79/240_F_737257935_wG84rP5tBdRSetVsJzGqrxuvhfcAPchm.jpg"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://images.pexels.com/photos/177332/pexels-photo-177332.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://t3.ftcdn.net/jpg/07/49/72/26/240_F_749722660_PZ6jwQ0sH9CmJAdjUSXPQYJ7BRF376Ol.jpg"
                        alt="" />
                </div>
            </div>
        </div>
    </div>

    <!-- gallery -->

    <!-- <h1 class="text-3xl font-bold text-yellow-300 text-center mb-4">Our Collection</h1>
    <p class="text-center text-lg mb-5">
        Discover our latest jewellery collection!.
    </p>
    <div class="max-w-7xl mx-auto p-6 grid grid-cols-2 md:grid-cols-3 gap-4">
        <div>
            <img class="h-auto max-w-full rounded-lg"
                src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/06_june/homepage-our-collection/Legendz-collection-1.jpg"
                alt="" />
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg"
                src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/06_june/homepage-our-collection/Sankha-Pola-1.jpg"
                alt="" />
        </div>

        <div class="">
            <img class="h-auto max-w-full rounded-lg"
                src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/06_june/homepage-our-collection/Sankha-Pola-1.jpg"
                alt="" />
        </div>
    </div> -->


    <h1 class="text-3xl font-bold text-yellow-300 text-center mb-4">Our Collection</h1>
    <p class="text-center text-lg mb-5">
        Discover our latest jewellery collection!.
    </p>
    <div class="max-w-7xl mx-auto p-6 grid grid-cols-2 md:grid-cols-3 gap-4">
        <!-- First Image -->
        <div class="col-span-1">
            <img class="h-auto max-w-full rounded-lg"
                src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/06_june/homepage-our-collection/Legendz-collection-1.jpg"
                alt="Legendz Collection" />
        </div>
        <!-- Second Image -->
        <div class="col-span-1">
            <img class="h-auto max-w-full rounded-lg"
                src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/06_june/homepage-our-collection/Sankha-Pola-1.jpg"
                alt="Sankha Pola" />
        </div>
        <!-- Third Image (Full width on small screens) -->
        <div class="col-span-2 w-full sm:col-span-1 md:col-span-1">
            <img class="h-auto max-w-full rounded-lg"
                src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/06_june/homepage-our-collection/Sankha-Pola-1.jpg"
                alt="Sankha Pola" />
        </div>
    </div>




    <!-- carousel2 -->
    <div id="gallery" class="relative w-full my-5 z-10 " data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://static.malabargoldanddiamonds.com/media/bsimages/Caliesta-web1-14052024.jpg"
                    class="absolute block max-w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="" />
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="https://static.malabargoldanddiamonds.com/media/bsimages/Diamond-Lightweight-web-in.jpg"
                    class="absolute block max-w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="" />
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://static.malabargoldanddiamonds.com/media/bsimages/Men_Gold_Kada_NTR_web_01032024.jpg"
                    class="absolute block max-w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="" />
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://static.malabargoldanddiamonds.com/media/bsimages/Gold-chain-banner-web1.jpg"
                    class="absolute block max-w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="" />
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://static.malabargoldanddiamonds.com/media/bsimages/Nuwa-web-17072024.jpg"
                    class="absolute block max-w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="" />
            </div>
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
    <h1 class="text-3xl font-bold text-yellow-300 text-center mb-2">Gemstone Jewellery</h1>
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
    <!-- <div id="gallery" class="max-w-7xl w-full m-auto px-4 py-16">
        <h1 class="text-3xl font-bold text-yellow-300 text-center mb-2">Gold Category</h1>
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
    </div> -->

<?php include ('includes/footer.php'); ?>

<!-- </span>
</button>
</div> -->
    </body>
</html>


<?php
}
?>