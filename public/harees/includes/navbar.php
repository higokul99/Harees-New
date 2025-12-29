<nav class="fixed z-50 top-15 w-full border-gray-200 flex justify-center" style="background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 50%, #fbbf24 100%);">
    <!-- background: linear-gradient(135deg, #192f6e 0%, #0f172a 50%, #192f6e 100%); -->
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-2 md:p-4">
        <div class="flex items-center md:order-2 space-x-1 md:space-x-2 rtl:space-x-reverse ml-auto">
            <button data-collapse-toggle="mega-menu-icons" type="button"
                    class="inline-flex items-center p-1 w-8 h-8 justify-center text-sm text-yellow-600 rounded-lg md:hidden hover:bg-yellow-400 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" 
                    aria-controls="mega-menu-icons" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" 
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>

        <!-- Rest of your mega menu sections remain the same -->
        <!-- First Mega Menu Section -->
        <div id="mega-menu-icons-1"
                class="items-center justify-center hidden w-full mx-10 md:flex md:w-auto md:order-1">
            <ul class="flex flex-col items-center justify-center mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                <li>
                    <button id="mega-menu-icons-dropdown-button-1" data-dropdown-toggle="mega-menu-icons-dropdown-1"
                    class="flex items-center justify-between w-full py-2 px-3 font-medium text-blue-900 border-b border-yellow-600 md:w-auto hover:bg-yellow-500 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-blue-900 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                        <a href="#">Diamond</a>
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                    <div id="mega-menu-icons-dropdown-1" class="absolute z-20 grid hidden w-auto grid-cols-2 text-sm bg-yellow-400 border border-yellow-600 rounded-lg shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700">
                        <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="product?type=diamond&name=necklaces"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Consulting</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Necklaces
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product?type=diamond&name=pendants"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Development</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                            <path
                                                d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                            <path
                                                d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                        </svg>
                                            Pendants
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product?type=diamond&name=Bracelets"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Design</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Bracelets
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product?type=diamond&name=bangles"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Marketing</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Bangles
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="product?type=diamond&name=anklets"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Consulting</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Anklets
                                        </a>
                                    </li>
                                    <!-- <li>
                                        <a href="product?type=diamond&name=kadas"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Development</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                            <path
                                                d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                            <path
                                                d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                        </svg>
                                            kada
                                        </a>
                                    </li>   -->
                                    <li>
                                        <a href="product?type=diamond&name=earrings"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Earrings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product?type=diamond&name=studs"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Studs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product?type=diamond&name=rings"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Rings
                                        </a>
                                    </li> 
                                </ul>
                            </div>
                            <div class="p-4 text-gray-900 dark:text-white">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="product?type=diamond&name=nosepins"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Nose Pins
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product?type=diamond&name=chains"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Chains
                                        </a>
                                    </li>
                                    <!-- <li>
                                        <a href="product?type=diamond&name=fancy_chain"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Fancy Chain
                                        </a>
                                    </li> -->
                                    <li>
                                        <a href="product?type=diamond&name=secondstuds"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Second Studs
                                        </a>
                                    </li>
                                </ul>
                            </div>
                    </div>
                    </li>
                </ul>
            </div>

            <!-- Second Mega Menu Section -->
            <div id="mega-menu-icons-2"
                class="items-center justify-between hidden w-full mx-10 md:flex md:w-auto md:order-1">
                <ul class="flex flex-col items-center justify-center mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                    <li>
                        <button id="mega-menu-icons-dropdown-button-2" data-dropdown-toggle="mega-menu-icons-dropdown-2"
                            class="flex items-center justify-between w-full py-2 px-3 font-medium text-blue-900 border-b border-yellow-600 md:w-auto hover:bg-yellow-500 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-blue-900 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                            18K Gold 
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="mega-menu-icons-dropdown-2"
                            class="absolute z-20 grid hidden w-auto grid-cols-2 text-sm bg-yellow-400 border border-yellow-600 rounded-lg shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700">
                            <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="product?type=18k&name=necklaces"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Consulting</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Necklaces
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product?type=18k&name=pendants"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Development</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                            <path
                                                d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                            <path
                                                d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                        </svg>
                                            Pendants
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product?type=18k&name=Bracelets"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Design</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Bracelets
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product?type=18k&name=bangles"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Marketing</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Bangles
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="product?type=18k&name=anklets"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Consulting</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Anklets
                                        </a>
                                    </li>
                                    <!-- <li>
                                        <a href="product?type=18k&name=kadas"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Development</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                            <path
                                                d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                            <path
                                                d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                        </svg>
                                            kada
                                        </a>
                                    </li>   -->
                                    <li>
                                        <a href="product?type=18k&name=earrings"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Earrings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product?type=18k&name=studs"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Studs
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="product?type=18k&name=rings"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Rings
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4 text-gray-900 dark:text-white">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="product?type=18k&name=nosepins"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Nose Pins
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product?type=18k&name=chains"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Chains
                                        </a>
                                    </li>
                                    <!-- <li>
                                        <a href="product?type=18k&name=fancy_chain"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Fancy Chain
                                        </a>
                                    </li> -->
                                    <li>
                                        <a href="product?type=18k&name=secondstuds"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Second Studs
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- third menu link -->
            <div id="mega-menu-icons-3"
                class="items-center justify-between hidden w-full mx-10 md:flex md:w-auto md:order-1">
                <ul class="flex flex-col items-center justify-center mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                    <li>
                        <button id="mega-menu-icons-dropdown-button-3" data-dropdown-toggle="mega-menu-icons-dropdown-3"
                            class="flex items-center justify-between w-full py-2 px-3 font-medium text-blue-900 border-b border-yellow-600 md:w-auto hover:bg-yellow-500 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-blue-900 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                            22K (916) GOLD
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="mega-menu-icons-dropdown-3"
                            class="absolute z-20 grid hidden w-auto grid-cols-2 text-sm bg-yellow-400 border border-yellow-600 rounded-lg shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700">
                            <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="product?type=22k&name=necklaces"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Consulting</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Necklaces
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product?type=22k&name=pendants"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Development</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                            <path
                                                d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                            <path
                                                d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                        </svg>
                                            Pendants
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product?type=22k&name=Bracelets"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Design</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Bracelets
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product?type=22k&name=bangles"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Marketing</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Bangles
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="product?type=22k&name=anklets"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Consulting</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Anklets
                                        </a>
                                    </li>
                                    <!-- <li>
                                        <a href="product?type=22k&name=kadas"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Development</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                            <path
                                                d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                            <path
                                                d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                        </svg>
                                            kada
                                        </a>
                                    </li>   -->
                                    <li>
                                        <a href="product?type=22k&name=earrings"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Earrings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product?type=22k&name=studs"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Studs
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="product?type=22k&name=rings"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Rings
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4 text-gray-900 dark:text-white">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="product?type=22k&name=nosepins"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Nose Pins
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product?type=22k&name=chains"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Chains
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product?type=22k&name=fancychains"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Fancy Chain
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product?type=22k&name=secondstuds"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Second Studs
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- forth menu link -->
            <div id="mega-menu-icons-4"
                class="items-center justify-between hidden w-full mx-10 md:flex md:w-auto md:order-1">
                <ul class="flex flex-col items-center justify-center mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                    <li>
                        <button id="mega-menu-icons-dropdown-button-4" data-dropdown-toggle="mega-menu-icons-dropdown-4"
                            class="flex items-center justify-between w-full py-2 px-3 font-medium text-blue-900 border-b border-yellow-600 md:w-auto hover:bg-yellow-500 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-blue-900 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                            Silver Jewelry
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="mega-menu-icons-dropdown-4"
                            class="absolute z-20 grid hidden w-auto grid-cols-2 text-sm bg-yellow-400 border border-yellow-600 rounded-lg shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700">
                            <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="product?type=silver&name=necklaces"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Consulting</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Necklaces
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product?type=silver&name=pendants"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Development</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                            <path
                                                d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                            <path
                                                d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                        </svg>
                                            Pendants
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product?type=silver&name=Bracelets"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Design</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Bracelets
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product?type=silver&name=bangles"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Marketing</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Bangles
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="product?type=silver&name=anklets"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Consulting</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Anklets
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product?type=silver&name=kadas"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Development</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                            <path
                                                d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                            <path
                                                d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                        </svg>
                                            kada
                                        </a>
                                    </li>  
                                    <li>
                                        <a href="product?type=silver&name=earrings"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Earrings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product?type=silver&name=studs"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Studs
                                        </a>
                                    </li> 
                                </ul>
                            </div>
                            <div class="p-4 text-gray-900 dark:text-white">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="product?type=silver&name=nosepins"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Nose Pins
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product?type=silver&name=chains"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Chains
                                        </a>
                                    </li>
                                    <!-- <li>
                                        <a href="product?type=silver&name=fancy_chain"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Fancy Chain
                                        </a>
                                    </li> -->
                                    <li>
                                        <a href="product?type=silver&name=secondstuds"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Second Studs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product?type=silver&name=rings"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Rings
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

        

            <!-- 6th menu link -->
            <div id="mega-menu-icons-5"
                class="items-center justify-between hidden w-full mx-10 md:flex md:w-auto md:order-1">
                <ul class="flex flex-col items-center justify-center mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                    <li>
                        <button id="mega-menu-icons-dropdown-button-5" data-dropdown-toggle="mega-menu-icons-dropdown-5"
                            class="flex items-center justify-between w-full py-2 px-3 font-medium text-blue-900 border-b border-yellow-600 md:w-auto hover:bg-yellow-500 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-blue-900 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                            Rose Gold Silver 
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="mega-menu-icons-dropdown-5"
                            class="absolute z-20 grid hidden w-auto grid-cols-2 text-sm bg-yellow-400 border border-yellow-600 rounded-lg shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700">
                            <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="product?type=rose_gold&name=necklaces"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Consulting</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Necklaces
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product?type=rose_gold&name=pendants"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Development</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                            <path
                                                d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                            <path
                                                d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                        </svg>
                                            Pendants
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product?type=rose_gold&name=Bracelets"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Design</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Bracelets
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product?type=rose_gold&name=bangles"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Marketing</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Bangles
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="product?type=rose_gold&name=anklets"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Consulting</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Anklets
                                        </a>
                                    </li>
                                    <!-- <li>
                                        <a href="product?type=rose_gold&name=kadas"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Development</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                            <path
                                                d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                            <path
                                                d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                        </svg>
                                            kada
                                        </a>
                                    </li>   -->
                                    <li>
                                        <a href="product?type=rose_gold&name=earrings"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Earrings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product?type=rose_gold&name=studs"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Studs
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="product?type=rose_gold&name=rings"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Rings
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4 text-gray-900 dark:text-white">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="product?type=rose_gold&name=nosepins"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Nose Pins
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product?type=rose_gold&name=chains"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Chains
                                        </a>
                                    </li>
                                    <!-- <li>
                                        <a href="product?type=rose_gold&name=fancy_chain"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Fancy Chain
                                        </a>
                                    </li> -->
                                    <li>
                                        <a href="product?type=rose_gold&name=secondstuds"
                                            class="flex items-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support</span>
                                            <svg class="w-3 h-3 me-2 text-black dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Second Studs
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </nav>