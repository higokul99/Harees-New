<?php
    include('header.php')
?>

   <br><br><br>

   <style>
        .carousel-item {
            min-width: calc(100% / 4);
        }
    </style>


    <div class="p-5 mx-auto">
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4">
            <div class="flex flex-col items-center justify-center">
                <img class="w-[150px] object-cover rounded-full border-4 border-yellow-300 border-double"
                    src="https://img.freepik.com/premium-photo/diamond-ring-with-diamond-diamonds-it_711323-196012.jpg?size=626&ext=jpg&ga=GA1.1.1525510322.1722501185&semt=ais_hybrid"
                    alt="Ring" />
                <h1 class="mt-2 text-center">Ring</h1>
            </div>
            <div class="flex flex-col items-center justify-center">
                <img class="w-[150px] object-cover rounded-full border-4 border-yellow-300 border-double"
                    src="./assets/jwel5.jpeg" alt="Anklet" />
                <h1 class="mt-2 text-center">Anklet</h1>
            </div>
            <div class="flex flex-col items-center justify-center">
                <img class="w-[150px] object-cover rounded-full border-4 border-yellow-300 border-double"
                    src="https://images.unsplash.com/photo-1690175867343-2af70ea57537?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Z29sZCUyMGJhbmdsZXN8ZW58MHx8MHx8fDA%3D"
                    alt="Bangle" />
                <h1 class="mt-2 text-center">Bangle</h1>
            </div>
            <div class="flex flex-col items-center justify-center">
                <img class="w-[150px] object-cover rounded-full border-4 border-yellow-300 border-double"
                    src="https://plus.unsplash.com/premium_photo-1680181362119-5c9bf196805f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDF8fGVhcnJpbmd8ZW58MHx8MHx8fDA%3D"
                    alt="Earring" />
                <h1 class="mt-2 text-center">Earring</h1>
            </div>
            <div class="flex flex-col items-center justify-center">
                <img class="w-[150px] object-cover rounded-full border-4 border-yellow-300 border-double"
                    src="https://img.freepik.com/premium-photo/diamond-ring-with-diamond-it_1028782-510026.jpg?size=626&ext=jpg"
                    alt="Platinum" />
                <h1 class="mt-2 text-center">Platinum</h1>
            </div>
            <div class="flex flex-col items-center justify-center">
                <img class="w-[150px] object-cover rounded-full border-4 border-yellow-300 border-double"
                    src="./assets/jwel3.jpeg" alt="GoldChain" />
                <h1 class="mt-2 text-center">GoldChain</h1>
            </div>
            <!-- Uncomment if needed
            <div class="flex flex-col items-center justify-center">
                <img class="w-full h-[200px] object-cover rounded-full border-4 border-yellow-300 border-double"
                    src="./assets/jwel7.jpeg" alt="CoupleBand" />
                <h1 class="mt-2 text-center">CoupleBand</h1>
            </div>
            -->
        </div>
    </div>


    <h1 class="text-3xl font-bold text-yellow-300 text-center mb-2">Our Diamond Collections</h1>
    <p class="text-center text-2xl mb-3">
        Capturing timeless grace in each precious stone
    </p>
        <div class="container mx-auto pb-5">
            <div class="relative overflow-hidden" id="carousel-container">
                <div id="carousel" class="flex transition-transform duration-500 ease-in-out">
                <div class="carousel-item p-4">
                        <img src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/04_april/homepage/Gemstone-bangle.jpg"
                            alt="Image 4" class="w-full h-auto rounded-lg max-w-[300px] max-h-[300px] sm:max-w-[250px] sm:max-h-[250px] md:max-w-[300px] md:max-h-[300px]">
                    </div>
                    <div class="carousel-item p-4">
                        <img src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/04_april/homepage/Gemstone-ring.jpg"
                            alt="Image 5" class="w-full h-auto rounded-lg max-w-[200px] max-h-[200px] sm:max-w-[250px] sm:max-h-[250px] md:max-w-[300px] md:max-h-[300px]">
                    </div>
                    <div class="carousel-item p-4">
                        <img src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/04_april/homepage/Gemstone-pendant.jpg"
                            alt="Image 3" class="w-full h-auto rounded-lg max-w-[200px] max-h-[200px] sm:max-w-[250px] sm:max-h-[250px] md:max-w-[300px] md:max-h-[300px]">
                    </div>
                    <div class="carousel-item p-4">
                        <img src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/04_april/homepage/Gemstone-ring.jpg"
                            alt="Image 1" class="w-full h-auto rounded-lg max-w-[200px] max-h-[200px] sm:max-w-[250px] sm:max-h-[250px] md:max-w-[300px] md:max-h-[300px]">
                    </div>
                    <div class="carousel-item p-4">
                        <img src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/04_april/homepage/gemstone-earring.jpg"
                            alt="Image 2" class="w-full h-auto rounded-lg max-w-[300px] max-h-[300px]">
                    </div>
                    <div class="carousel-item p-4">
                        <img src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/04_april/homepage/Gemstone-pendant.jpg"
                            alt="Image 3" class="w-full h-auto rounded-lg max-w-[300px] max-h-[300px]">
                    </div>
                    <div class="carousel-item p-4">
                        <img src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/04_april/homepage/Gemstone-bangle.jpg"
                            alt="Image 4" class="w-full h-auto rounded-lg max-w-[300px] max-h-[300px]">
                    </div>
                    <div class="carousel-item p-4">
                        <img src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/04_april/homepage/Gemstone-ring.jpg"
                            alt="Image 5" class="w-full h-auto rounded-lg max-w-[300px] max-h-[300px]">
                    </div>
                    <div class="carousel-item p-4">
                        <img src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/04_april/homepage/Gemstone-pendant.jpg"
                            alt="Image 3" class="w-full h-auto rounded-lg max-w-[300px] max-h-[300px]">
                    </div>
                </div>
                <button id="prev"
                    class="absolute left-0 top-1/2 transform -translate-y-1/2  text-white px-4 py-2 rounded-full"></button>
                <button id="next"
                    class="absolute right-0 top-1/2 transform -translate-y-1/2  text-white px-4 py-2 rounded-full"></button>
            </div>
        </div>


    <!-- grid section 1-->

   

  

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
   

   
<?php
include ('footer.php');
?>