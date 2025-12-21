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
                Customized Jewellery
            </h1>
            <p class="text-gray-600 text-lg">Create unique pieces crafted exclusively for you</p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Introduction Card -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 animate-fade-in">
                    <div class="p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-golden to-amber-500 rounded-lg flex items-center justify-center">
                                <i class="fas fa-gem text-dark-blue text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-navy">Your Vision, Our Craftsmanship</h2>
                        </div>

                        <div class="space-y-6 text-gray-700">
                            <p>At <strong class="text-dark-blue">Harees Jewellery</strong>, we believe every piece of jewellery should be as unique as the person wearing it. That's why we offer <strong class="text-golden">personalized jewellery customization</strong> services—crafted just the way you imagine, with precision, care, and expert craftsmanship.</p>
                            
                            <p>If you're looking to bring your dream design to life or personalize an existing one, we're here to make that happen. Whether it's a special gift, wedding piece, or a personal treasure, we're happy to work with you from concept to completion.</p>
                            
                            <div class="bg-gradient-to-r from-golden/10 to-amber-100/20 p-6 rounded-xl border border-golden/20">
                                <p class="font-medium text-navy">We're excited to be part of your creative journey—let's craft something beautiful together.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Process Card -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 animate-fade-in">
                    <div class="p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-dark-blue to-navy rounded-lg flex items-center justify-center">
                                <i class="fas fa-cogs text-golden text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-navy">Our Customization Process</h2>
                        </div>

                        <div class="space-y-6">
                            <div class="grid md:grid-cols-3 gap-6">
                                <!-- Step 1 -->
                                <div class="bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-golden/20 group hover:shadow-md transition-all duration-300">
                                    <div class="w-14 h-14 bg-gradient-to-br from-golden to-amber-500 rounded-full flex items-center justify-center text-dark-blue text-xl font-bold mb-4">
                                        1
                                    </div>
                                    <h3 class="text-lg font-semibold text-navy mb-2">Consultation</h3>
                                    <p class="text-gray-600 text-sm">Share your inspirations, ideas or sketches with us</p>
                                </div>
                                
                                <!-- Step 2 -->
                                <div class="bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-golden/20 group hover:shadow-md transition-all duration-300">
                                    <div class="w-14 h-14 bg-gradient-to-br from-golden to-amber-500 rounded-full flex items-center justify-center text-dark-blue text-xl font-bold mb-4">
                                        2
                                    </div>
                                    <h3 class="text-lg font-semibold text-navy mb-2">Material Selection</h3>
                                    <p class="text-gray-600 text-sm">Choose metals, stones, and other specifications</p>
                                </div>
                                
                                <!-- Step 3 -->
                                <div class="bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-golden/20 group hover:shadow-md transition-all duration-300">
                                    <div class="w-14 h-14 bg-gradient-to-br from-golden to-amber-500 rounded-full flex items-center justify-center text-dark-blue text-xl font-bold mb-4">
                                        3
                                    </div>
                                    <h3 class="text-lg font-semibold text-navy mb-2">Final Creation</h3>
                                    <p class="text-gray-600 text-sm">We craft your unique piece with precision</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Important Info Card -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 animate-fade-in">
                    <div class="p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-golden to-amber-500 rounded-lg flex items-center justify-center">
                                <i class="fas fa-info-circle text-dark-blue text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-navy">Important Information</h2>
                        </div>

                        <div class="space-y-6">
                            <ul class="space-y-4">
                                <li class="flex items-start gap-3">
                                    <i class="fas fa-check-circle text-golden mt-1"></i>
                                    <span>Customized orders are made exclusively based on your design requirements and specifications.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <i class="fas fa-check-circle text-golden mt-1"></i>
                                    <span>We collect all details before proceeding—including sketches, material preferences, sizing, and cost approval.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <i class="fas fa-check-circle text-golden mt-1"></i>
                                    <span>Production begins only after final confirmation. Delivery time varies by complexity.</span>
                                </li>
                            </ul>

                            <div class="bg-gradient-to-r from-golden/10 to-amber-100/20 p-4 rounded-xl border border-golden/20">
                                <p class="text-sm text-gray-700">
                                    <strong>Note:</strong> Custom jewellery may not be eligible for refund or standard return/exchange. Review our 
                                    <a href="refund-policy" class="text-dark-blue underline hover:text-navy">Refund Policy</a> and 
                                    <a href="return-or-exchange-policy" class="text-dark-blue underline hover:text-navy">Return Policy</a> 
                                    before proceeding.
                                </p>
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
                                START YOUR DESIGN
                            </h3>
                        </div>

                        <div class="space-y-4 mb-6">
                            <p class="text-white/90">
                                To begin your customization journey, please reach out to us directly. Our team will guide you through every step.
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

                        <div class="text-center text-white/90 text-sm">
                            <p>We'll discuss your design ideas, material preferences, budget, and timeline to create your perfect piece.</p>
                        </div>
                    </div>

                    <!-- Benefits Card -->
                    <div class="bg-gradient-to-br from-golden via-amber-500 to-yellow-600 rounded-2xl shadow-2xl p-6 text-dark-blue animate-slide-up border border-golden/20">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-bold text-dark-blue flex items-center gap-2">
                                <i class="fas fa-medal"></i>
                                WHY CUSTOM JEWELLERY?
                            </h3>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-unique text-dark-blue text-sm"></i>
                                </div>
                                <p class="text-dark-blue font-medium">One-of-a-kind pieces that reflect your personality</p>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-hand-sparkles text-dark-blue text-sm"></i>
                                </div>
                                <p class="text-dark-blue font-medium">Expert craftsmanship with attention to detail</p>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-heart text-dark-blue text-sm"></i>
                                </div>
                                <p class="text-dark-blue font-medium">Perfect for special occasions and sentimental gifts</p>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-gem text-dark-blue text-sm"></i>
                                </div>
                                <p class="text-dark-blue font-medium">Choice of materials to suit your preferences</p>
                            </div>
                        </div>
                    </div>

                    <!-- Policies Card -->
                    <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-6 border border-golden/20 animate-slide-up">
                        <h3 class="text-xl font-bold text-navy mb-4 flex items-center gap-2">
                            <i class="fas fa-file-contract text-golden"></i>
                            IMPORTANT POLICIES
                        </h3>
                        
                        <div class="space-y-4">
                            <a href="refund-policy" class="block w-full bg-gradient-to-r from-gray-50 to-blue-50/30 text-dark-blue font-medium py-3 px-4 rounded-xl hover:bg-gradient-to-r hover:from-gray-100 hover:to-blue-100/30 transition-all duration-300 flex items-center justify-between group">
                                <span>Refund Policy</span>
                                <i class="fas fa-chevron-right text-golden group-hover:translate-x-1 transition-transform"></i>
                            </a>
                            
                            <a href="return-or-exchange-policy" class="block w-full bg-gradient-to-r from-gray-50 to-blue-50/30 text-dark-blue font-medium py-3 px-4 rounded-xl hover:bg-gradient-to-r hover:from-gray-100 hover:to-blue-100/30 transition-all duration-300 flex items-center justify-between group">
                                <span>Return & Exchange Policy</span>
                                <i class="fas fa-chevron-right text-golden group-hover:translate-x-1 transition-transform"></i>
                            </a>
                            
                            <!-- <a href="custom-jewellery-terms" class="block w-full bg-gradient-to-r from-gray-50 to-blue-50/30 text-dark-blue font-medium py-3 px-4 rounded-xl hover:bg-gradient-to-r hover:from-gray-100 hover:to-blue-100/30 transition-all duration-300 flex items-center justify-between group">
                                <span>Custom Jewellery Terms</span>
                                <i class="fas fa-chevron-right text-golden group-hover:translate-x-1 transition-transform"></i>
                            </a> -->
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