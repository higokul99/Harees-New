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
                Gold Saving Scheme
            </h1>
            <p class="text-gray-600 text-lg">Invest smartly and fulfill your golden dreams with our exclusive scheme</p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Scheme Overview Card -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 animate-fade-in">
                    <div class="p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-golden to-amber-500 rounded-lg flex items-center justify-center">
                                <i class="fas fa-coins text-dark-blue text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-navy">About Our Gold Scheme</h2>
                        </div>

                        <div class="space-y-6 text-gray-700">
                            <p><strong>Harees Jewellery</strong> introduces a customer-friendly <strong class="text-golden">Gold Saving Scheme</strong> to help you invest smartly and fulfill your future jewellery aspirations with ease. Our monthly installment-based plan is tailored to make gold purchases more affordable and rewarding for you.</p>

                            <div class="bg-gradient-to-r from-golden/10 to-amber-100/20 p-6 rounded-xl border border-golden/20">
                                <h3 class="text-xl font-semibold text-navy mb-4 flex items-center gap-2">
                                    <i class="fas fa-star text-golden"></i>
                                    Why Join Our Gold Scheme?
                                </h3>
                                <ul class="space-y-3">
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>Easy monthly contributions starting from a minimal amount</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>Flexible tenure options (e.g., 11-month schemes)</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>Exclusive discounts or bonus installment on maturity</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>Secure and transparent process with regular updates</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>Redemption available for wide range of jewellery collections</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- How It Works Card -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 animate-fade-in">
                    <div class="p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-dark-blue to-navy rounded-lg flex items-center justify-center">
                                <i class="fas fa-cogs text-golden text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-navy">How It Works</h2>
                        </div>

                        <div class="space-y-6">
                            <div class="grid md:grid-cols-3 gap-6">
                                <!-- Step 1 -->
                                <div class="bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-golden/20 group hover:shadow-md transition-all duration-300">
                                    <div class="w-14 h-14 bg-gradient-to-br from-golden to-amber-500 rounded-full flex items-center justify-center text-dark-blue text-xl font-bold mb-4">
                                        1
                                    </div>
                                    <h3 class="text-lg font-semibold text-navy mb-2">Choose Your Plan</h3>
                                    <p class="text-gray-600 text-sm">Select your preferred monthly amount and scheme duration</p>
                                </div>
                                
                                <!-- Step 2 -->
                                <div class="bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-golden/20 group hover:shadow-md transition-all duration-300">
                                    <div class="w-14 h-14 bg-gradient-to-br from-golden to-amber-500 rounded-full flex items-center justify-center text-dark-blue text-xl font-bold mb-4">
                                        2
                                    </div>
                                    <h3 class="text-lg font-semibold text-navy mb-2">Monthly Payments</h3>
                                    <p class="text-gray-600 text-sm">Make regular contributions as per your selected plan</p>
                                </div>
                                
                                <!-- Step 3 -->
                                <div class="bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-golden/20 group hover:shadow-md transition-all duration-300">
                                    <div class="w-14 h-14 bg-gradient-to-br from-golden to-amber-500 rounded-full flex items-center justify-center text-dark-blue text-xl font-bold mb-4">
                                        3
                                    </div>
                                    <h3 class="text-lg font-semibold text-navy mb-2">Redeem & Enjoy</h3>
                                    <p class="text-gray-600 text-sm">Purchase beautiful jewellery with your accumulated amount</p>
                                </div>
                            </div>

                            <div class="bg-gradient-to-r from-golden/10 to-amber-100/20 p-6 rounded-xl border border-golden/20">
                                <p class="text-gray-700">
                                    You choose a comfortable monthly installment amount. Contribute the same amount each month for a fixed period. Upon completion of the scheme, the accumulated amount (plus benefits, if applicable) can be used to purchase gold jewellery of your choice.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Current Schemes Card -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 animate-fade-in">
                    <div class="p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-golden to-amber-500 rounded-lg flex items-center justify-center">
                                <i class="fas fa-calendar-alt text-dark-blue text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-navy">Available Schemes</h2>
                        </div>

                        <h2>VIEW ALL SCHEMES - <a href="ugoldscheme" style="color:blue">Click here</a></h2>

                        
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="sticky top-8 space-y-6">
                    <!-- Enquiry Card -->
                    <div class="bg-gradient-to-br from-dark-blue via-navy to-slate-900 rounded-2xl shadow-2xl p-6 text-white animate-slide-up border border-golden/20">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-bold text-golden flex items-center gap-2">
                                <i class="fas fa-headset"></i>
                                CONTACT TO ENROLL
                            </h3>
                        </div>

                        <div class="space-y-4 mb-6">
                            <p class="text-white/90">
                                Interested in joining our Gold Saving Scheme? Contact us to get full details, documentation, and assistance with enrollment.
                            </p>

                            <a href="ugoldscheme" class="block w-full bg-gradient-to-r from-yellow-500 to-yellow-600 text-white font-bold py-4 px-6 rounded-xl hover:from-yellow-600 hover:to-yellow-500 transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-between group">
                                <div class="flex items-center gap-3">
                                    <i class="fas fa-book text-white text-xl group-hover:scale-110 transition-transform"></i>
                                    <span>VIEW ALL SCHEMES</span>
                                </div>
                                <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                            </a>
                            
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
                            <p class="mb-2">Our team will collect necessary KYC information and scheme preferences before initiating your membership.</p>
                            <p>We are happy to guide you through every step.</p>
                        </div>
                    </div>

                    <!-- Benefits Card -->
                    <div class="bg-gradient-to-br from-golden via-amber-500 to-yellow-600 rounded-2xl shadow-2xl p-6 text-dark-blue animate-slide-up border border-golden/20">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-bold text-dark-blue flex items-center gap-2">
                                <i class="fas fa-medal"></i>
                                SCHEME BENEFITS
                            </h3>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-lock text-dark-blue text-sm"></i>
                                </div>
                                <p class="text-dark-blue font-medium">Secure investment with transparent tracking</p>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-percentage text-dark-blue text-sm"></i>
                                </div>
                                <p class="text-dark-blue font-medium">Bonus amounts on scheme completion</p>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-gem text-dark-blue text-sm"></i>
                                </div>
                                <p class="text-dark-blue font-medium">Exclusive access to premium collections</p>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-tag text-dark-blue text-sm"></i>
                                </div>
                                <p class="text-dark-blue font-medium">Special discounts for scheme members</p>
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
                            
                            <!-- <a href="scheme-terms" class="block w-full bg-gradient-to-r from-gray-50 to-blue-50/30 text-dark-blue font-medium py-3 px-4 rounded-xl hover:bg-gradient-to-r hover:from-gray-100 hover:to-blue-100/30 transition-all duration-300 flex items-center justify-between group">
                                <span>Scheme Terms & Conditions</span>
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