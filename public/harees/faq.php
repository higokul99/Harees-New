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
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'dark-blue': '#1e3a8a',
                        'darker-blue': '#1e40af',
                        'navy': '#0f172a',
                        'golden': '#fbbf24',
                        'light-golden': '#fcd34d',
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-up': 'slideUp 0.3s ease-out',
                        'pulse-slow': 'pulse 3s infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(10px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(10px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' }
                        }
                    }
                }
            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

<body class="bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 min-h-screen">



<main class="pt-24 pb-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto">
        <!-- Page Header -->
        <div class="text-center mb-12 animate-fade-in">
            <h1 class="text-4xl font-bold bg-gradient-to-r from-dark-blue to-navy bg-clip-text text-transparent mb-4">
                Frequently Asked Questions
            </h1>
            <p class="text-gray-600 text-lg">Find answers to common questions about our jewellery and services</p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-6">
                <!-- FAQ Items -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 animate-fade-in p-8">
                    <div class="space-y-6">
                        <!-- Question 1 -->
                        <div class="group">
                            <div class="bg-gradient-to-r from-golden/5 to-amber-100/10 p-6 rounded-xl border border-golden/20 hover:border-golden/40 transition-all duration-300">
                                <h2 class="text-xl font-semibold text-navy flex items-center gap-3">
                                    <div class="w-8 h-8 bg-gradient-to-br from-golden to-amber-500 rounded-full flex items-center justify-center text-dark-blue text-sm font-bold">
                                        1
                                    </div>
                                    What types of jewelry do you offer?
                                </h2>
                                <p class="mt-3 ml-11 text-gray-700">We offer a wide range of jewelry including 18K gold, 22K gold, diamonds, silver, and gemstone collections. Our designs blend tradition with modern elegance.</p>
                            </div>
                        </div>

                        <!-- Question 2 -->
                        <div class="group">
                            <div class="bg-gradient-to-r from-golden/5 to-amber-100/10 p-6 rounded-xl border border-golden/20 hover:border-golden/40 transition-all duration-300">
                                <h2 class="text-xl font-semibold text-navy flex items-center gap-3">
                                    <div class="w-8 h-8 bg-gradient-to-br from-golden to-amber-500 rounded-full flex items-center justify-center text-dark-blue text-sm font-bold">
                                        2
                                    </div>
                                    Do you offer custom jewelry design?
                                </h2>
                                <p class="mt-3 ml-11 text-gray-700">Yes! Our in-house designers can work with you to create custom pieces that reflect your vision and style. Visit our Chinnakada showroom to begin your custom journey.</p>
                            </div>
                        </div>

                        <!-- Question 3 -->
                        <div class="group">
                            <div class="bg-gradient-to-r from-golden/5 to-amber-100/10 p-6 rounded-xl border border-golden/20 hover:border-golden/40 transition-all duration-300">
                                <h2 class="text-xl font-semibold text-navy flex items-center gap-3">
                                    <div class="w-8 h-8 bg-gradient-to-br from-golden to-amber-500 rounded-full flex items-center justify-center text-dark-blue text-sm font-bold">
                                        3
                                    </div>
                                    Is your jewelry certified?
                                </h2>
                                <p class="mt-3 ml-11 text-gray-700">Absolutely. All our gold and diamond products are hallmarked and certified to ensure authenticity and purity.</p>
                            </div>
                        </div>

                        <!-- Question 4 -->
                        <div class="group">
                            <div class="bg-gradient-to-r from-golden/5 to-amber-100/10 p-6 rounded-xl border border-golden/20 hover:border-golden/40 transition-all duration-300">
                                <h2 class="text-xl font-semibold text-navy flex items-center gap-3">
                                    <div class="w-8 h-8 bg-gradient-to-br from-golden to-amber-500 rounded-full flex items-center justify-center text-dark-blue text-sm font-bold">
                                        4
                                    </div>
                                    Do you offer exchange or buy-back?
                                </h2>
                                <p class="mt-3 ml-11 text-gray-700">Yes, we provide both exchange and buy-back options for gold and diamond jewelry, subject to our terms and conditions. Please contact our support team for more details.</p>
                            </div>
                        </div>

                        <!-- Question 5 -->
                        <div class="group">
                            <div class="bg-gradient-to-r from-golden/5 to-amber-100/10 p-6 rounded-xl border border-golden/20 hover:border-golden/40 transition-all duration-300">
                                <h2 class="text-xl font-semibold text-navy flex items-center gap-3">
                                    <div class="w-8 h-8 bg-gradient-to-br from-golden to-amber-500 rounded-full flex items-center justify-center text-dark-blue text-sm font-bold">
                                        5
                                    </div>
                                    How can I reach customer support?
                                </h2>
                                <p class="mt-3 ml-11 text-gray-700">You can email us at <strong class="text-dark-blue">hareesjewelleryinfo@gmail.com</strong> or WhatsApp us at <strong class="text-dark-blue">+91 89213 87392</strong>. We're happy to assist you Monday to Saturday, 10 AM – 8 PM.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="sticky top-8 space-y-6">
                    <!-- Contact Card -->
                    <div class="bg-gradient-to-br from-dark-blue via-navy to-slate-900 rounded-2xl shadow-2xl p-6 text-white animate-slide-up border border-golden/20">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-bold text-golden flex items-center gap-2">
                                <i class="fas fa-headset"></i>
                                NEED HELP?
                            </h3>
                        </div>

                        <div class="space-y-4 mb-6">
                            <p class="text-white/90">
                                Didn't find your answer? Contact our support team for personalized assistance.
                            </p>

                            <a href="https://wa.me/+918921387392" target="_blank" class="block w-full bg-gradient-to-r from-green-500 to-green-600 text-white font-bold py-4 px-6 rounded-xl hover:from-green-600 hover:to-green-500 transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-between group">
                                <div class="flex items-center gap-3">
                                    <i class="fab fa-whatsapp text-white text-xl group-hover:scale-110 transition-transform"></i>
                                    <span>WHATSAPP US</span>
                                </div>
                                <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                            </a>
                            
                            <a href="tel:8921387392" class="block w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white font-bold py-4 px-6 rounded-xl hover:from-blue-600 hover:to-blue-500 transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-between group">
                                <div class="flex items-center gap-3">
                                    <i class="fas fa-phone-alt text-white text-xl group-hover:scale-110 transition-transform"></i>
                                    <span>CALL US</span>
                                </div>
                                <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Quick Links Card -->
                    <div class="bg-gradient-to-br from-golden via-amber-500 to-yellow-600 rounded-2xl shadow-2xl p-6 text-dark-blue animate-slide-up border border-golden/20">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-dark-blue flex items-center gap-2">
                                <i class="fas fa-link"></i>
                                QUICK LINKS
                            </h3>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-shipping-fast text-dark-blue text-sm"></i>
                                </div>
                                <a href="shipping-policy" class="font-medium hover:underline">Shipping Information</a>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-exchange-alt text-dark-blue text-sm"></i>
                                </div>
                                <a href="return-or-exchange-policy" class="font-medium hover:underline">Returns & Exchanges</a>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-file-invoice-dollar text-dark-blue text-sm"></i>
                                </div>
                                <a href="refund-policy" class="font-medium hover:underline">Refund Policy</a>
                            </div>
                        </div>
                    </div>

                    <!-- Visit Us Card -->
                    <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-6 border border-golden/20 animate-slide-up">
                        <h3 class="text-xl font-bold text-navy mb-4 flex items-center gap-2">
                            <i class="fas fa-store text-golden"></i>
                            VISIT OUR STORE
                        </h3>
                        
                        <div class="space-y-3 text-gray-700">
                            <!-- <p class="flex items-start gap-2">
                                <i class="fas fa-map-marker-alt text-golden mt-1"></i>
                                <span>Chinnakada, Kollam, Kerala</span>
                            </p> -->
                            <p class="flex items-start gap-2">
                                <i class="fas fa-clock text-golden mt-1"></i>
                                <span>Open: 10 AM - 8 PM (Mon-Sat)</span>
                            </p>
                            <p class="flex items-start gap-2">
                                <i class="fas fa-phone text-golden mt-1"></i>
                                <span>+91 89213 87392</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include ('includes/footer.php'); ?>

</body>
</html>