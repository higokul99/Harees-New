





<!-- OLD OG CODE -->
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
<div id="gallery" class="relative" data-carousel="slide" data-carousel-item="active">
    
    <div class="relative h-auto overflow-hidden mt-12 mx-0 md:mx-32" style="aspect-ratio: 1920/700;">
        
        
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="assets/banners-main/new/1.png"
                class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover" alt="" />
        </div>
        
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="assets/banners-main/new/2.png"
                class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover" alt="" />
        </div>
       
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="assets/banners-main/new/3.png"
                class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover" alt="" />
        </div>
        
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="assets/banners-main/new/4.png"
                class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover" alt="" />
        </div>
        
    </div>
    
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
