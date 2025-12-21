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
                Shipping Policy
            </h1>
            <p class="text-gray-600 text-lg">How we deliver your precious jewellery safely</p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Policy Content Card -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 animate-fade-in">
                    <div class="p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-dark-blue to-navy rounded-lg flex items-center justify-center">
                                <i class="fas fa-truck text-golden text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-navy">Our Shipping Process</h2>
                        </div>

                        <div class="space-y-6 text-gray-700">
                            <p>We take utmost care in delivering your jewellery safely and on time. Please read our shipping policy carefully:</p>

                            <div class="bg-gradient-to-r from-golden/10 to-amber-100/20 p-6 rounded-xl border border-golden/20">
                                <h3 class="text-xl font-semibold text-navy mb-4 flex items-center gap-2">
                                    <i class="fas fa-exclamation-circle text-golden"></i>
                                    Important Shipping Notes
                                </h3>
                                <ul class="space-y-3">
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>Always record video while unboxing for any future claims</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>PAN Card required for orders above ₹2,00,000</span>
                                    </li>
                                    <!-- <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>Only 3 delivery attempts will be made</span>
                                    </li> -->
                                </ul>
                            </div>

                            <ol class="space-y-6 list-decimal ml-6 marker:font-semibold marker:text-golden">
                                <li class="pl-2">
                                    <p>Customers must provide accurate recipient details including full name, complete address, nearby landmark, pin code, and an active contact number for hassle-free delivery.</p>
                                </li>
                                
                                <li class="pl-2">
                                    <p>Customers are expected to coordinate with the courier agent to ensure smooth and safe delivery.</p>
                                </li>
                                
                                <li class="pl-2">
                                    <p>At the time of delivery, the recipient may be required to present one of the following ID proofs if requested by the courier agent:</p>
                                    <ul class="mt-3 ml-6 space-y-2">
                                        <li class="flex items-start gap-2">
                                            <i class="fas fa-id-card text-golden mt-1 text-sm"></i>
                                            <span>Passport</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <i class="fas fa-id-card text-golden mt-1 text-sm"></i>
                                            <span>PAN Card</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <i class="fas fa-id-card text-golden mt-1 text-sm"></i>
                                            <span>Driving License</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <i class="fas fa-id-card text-golden mt-1 text-sm"></i>
                                            <span>Voter ID</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <i class="fas fa-id-card text-golden mt-1 text-sm"></i>
                                            <span>Aadhaar Card</span>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li class="pl-2">
                                    <p>If the package appears tampered with or damaged, customers must reject the package immediately and notify us via phone or email.</p>
                                </li>
                                
                                <li class="pl-2">
                                    <p>Customers must record a video of the unboxing process for any future claims or quality issues.</p>
                                </li>
                                
                                <li class="pl-2">
                                    <p>Our logistics partner will make a total of 3 delivery attempts. If the recipient is not available or unreachable during all 3 attempts, the package will be returned to us.</p>
                                </li>
                                
                                <li class="pl-2">
                                    <p>A PAN Card is mandatory if the invoice value exceeds ₹2,00,000, in compliance with government regulations.</p>
                                </li>
                                
                                <li class="pl-2">
                                    <p><strong class="text-dark-blue">Domestic Orders:</strong> Once your order is confirmed, it will be processed and shipped within 3-5 business days.</p>
                                </li>
                            </ol>
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
                                SHIPPING SUPPORT
                            </h3>
                        </div>

                        <div class="space-y-4 mb-6">
                            <p class="text-white/90">
                                Need help with your order delivery? Contact our shipping support team.
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

                    <!-- Shipping Benefits Card -->
                    <div class="bg-gradient-to-br from-golden via-amber-500 to-yellow-600 rounded-2xl shadow-2xl p-6 text-dark-blue animate-slide-up border border-golden/20">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-dark-blue flex items-center gap-2">
                                <i class="fas fa-shield-alt"></i>
                                SAFE SHIPPING
                            </h3>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-lock text-dark-blue text-sm"></i>
                                </div>
                                <p class="font-medium">Fully insured shipments</p>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-box-open text-dark-blue text-sm"></i>
                                </div>
                                <p class="font-medium">Discreet packaging</p>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-check-circle text-dark-blue text-sm"></i>
                                </div>
                                <p class="font-medium">Quality check before dispatch</p>
                            </div>
                        </div>
                    </div>

                    <!-- Related Policies Card -->
                    <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-6 border border-golden/20 animate-slide-up">
                        <h3 class="text-xl font-bold text-navy mb-4 flex items-center gap-2">
                            <i class="fas fa-file-contract text-golden"></i>
                            RELATED POLICIES
                        </h3>
                        
                        <div class="space-y-4">
                            <a href="return-or-exchange-policy" class="block w-full bg-gradient-to-r from-gray-50 to-blue-50/30 text-dark-blue font-medium py-3 px-4 rounded-xl hover:bg-gradient-to-r hover:from-gray-100 hover:to-blue-100/30 transition-all duration-300 flex items-center justify-between group">
                                <span>Return & Exchange Policy</span>
                                <i class="fas fa-chevron-right text-golden group-hover:translate-x-1 transition-transform"></i>
                            </a>
                            
                            <a href="cancellation-policy" class="block w-full bg-gradient-to-r from-gray-50 to-blue-50/30 text-dark-blue font-medium py-3 px-4 rounded-xl hover:bg-gradient-to-r hover:from-gray-100 hover:to-blue-100/30 transition-all duration-300 flex items-center justify-between group">
                                <span>Cancellation Policy</span>
                                <i class="fas fa-chevron-right text-golden group-hover:translate-x-1 transition-transform"></i>
                            </a>
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