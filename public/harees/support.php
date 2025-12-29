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
                Our Support Team
            </h1>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                We're here to help! Whether you have questions about our products, services, or your order, our dedicated support team is ready to assist you.
            </p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Support Options -->
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Email Support -->
                    <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 p-8 animate-fade-in hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-rose-100 to-pink-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-envelope text-rose-600 text-2xl"></i>
                        </div>
                        <h2 class="text-xl font-bold text-navy text-center mb-3">Email Support</h2>
                        <p class="text-gray-600 text-center mb-6">Drop us an email anytime and we'll get back to you as soon as possible.</p>
                        <div class="text-center">
                            <a href="mailto:hareesjewelleryinfo@gmail.com" class="inline-block px-6 py-3 bg-gradient-to-r from-rose-100 to-pink-100 text-rose-700 font-medium rounded-xl hover:from-pink-100 hover:to-rose-100 transition-all duration-300">
                                <i class="fas fa-paper-plane mr-2"></i>hareesjewelleryinfo@gmail.com
                            </a>
                        </div>
                    </div>

                    <!-- WhatsApp Support -->
                    <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 p-8 animate-fade-in hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-green-100 to-emerald-100 rounded-full flex items-center justify-center">
                            <i class="fab fa-whatsapp text-green-600 text-2xl"></i>
                        </div>
                        <h2 class="text-xl font-bold text-navy text-center mb-3">WhatsApp Support</h2>
                        <p class="text-gray-600 text-center mb-6">Message us for quick assistance. We usually respond within minutes!</p>
                        <div class="text-center">
                            <a href="https://wa.me/+918921387392" target="_blank" class="inline-block px-6 py-3 bg-gradient-to-r from-green-100 to-emerald-100 text-green-700 font-medium rounded-xl hover:from-emerald-100 hover:to-green-100 transition-all duration-300">
                                <i class="fab fa-whatsapp mr-2"></i>+91 89213 87392
                            </a>
                        </div>
                    </div>
                </div>

                <!-- FAQ Section -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 animate-fade-in">
                    <div class="p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-dark-blue to-navy rounded-lg flex items-center justify-center">
                                <i class="fas fa-question-circle text-golden text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-navy">Frequently Asked Questions</h2>
                        </div>

                        <div class="space-y-4">
                            <!-- FAQ Item 1 -->
                            <div class="bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-golden/20">
                                <button class="flex justify-between items-center w-full text-left">
                                    <h3 class="font-semibold text-navy">What are your business hours?</h3>
                                    <i class="fas fa-chevron-down text-golden transition-transform"></i>
                                </button>
                                <div class="mt-3 text-gray-600 hidden">
                                    <p>Our support team is available Monday to Saturday from 10:00 AM to 7:00 PM IST. WhatsApp support may respond outside these hours.</p>
                                </div>
                            </div>

                            <!-- FAQ Item 2 -->
                            <div class="bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-golden/20">
                                <button class="flex justify-between items-center w-full text-left">
                                    <h3 class="font-semibold text-navy">How long does shipping take?</h3>
                                    <i class="fas fa-chevron-down text-golden transition-transform"></i>
                                </button>
                                <div class="mt-3 text-gray-600 hidden">
                                    <p>Standard shipping typically takes 3-5 business days within India. For custom orders, production time varies based on complexity.</p>
                                </div>
                            </div>

                            <!-- FAQ Item 3 -->
                            <div class="bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-golden/20">
                                <button class="flex justify-between items-center w-full text-left">
                                    <h3 class="font-semibold text-navy">Can I modify my order after placing it?</h3>
                                    <i class="fas fa-chevron-down text-golden transition-transform"></i>
                                </button>
                                <div class="mt-3 text-gray-600 hidden">
                                    <p>Order modifications may be possible if the order hasn't entered processing. Please contact us immediately for assistance.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="sticky top-8 space-y-6">
                    <!-- Quick Help Card -->
                    <div class="bg-gradient-to-br from-golden via-amber-500 to-yellow-600 rounded-2xl shadow-2xl p-6 text-dark-blue animate-slide-up border border-golden/20">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-bold text-dark-blue flex items-center gap-2">
                                <i class="fas fa-life-ring"></i>
                                QUICK HELP
                            </h3>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-shipping-fast text-dark-blue text-sm"></i>
                                </div>
                                <p class="text-dark-blue font-medium">Track your order status</p>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-exchange-alt text-dark-blue text-sm"></i>
                                </div>
                                <p class="text-dark-blue font-medium">Returns & exchanges</p>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-gem text-dark-blue text-sm"></i>
                                </div>
                                <p class="text-dark-blue font-medium">Product care guide</p>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-question text-dark-blue text-sm"></i>
                                </div>
                                <p class="text-dark-blue font-medium">General inquiries</p>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Card -->
                    <div class="bg-gradient-to-br from-dark-blue via-navy to-slate-900 rounded-2xl shadow-2xl p-6 text-white animate-slide-up border border-golden/20">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-bold text-golden flex items-center gap-2">
                                <i class="fas fa-phone-alt"></i>
                                CALL US DIRECTLY
                            </h3>
                        </div>

                        <div class="space-y-4 mb-6">
                            <!-- <div class="flex items-center gap-3 bg-navy/50 p-4 rounded-xl">
                                <i class="fas fa-phone text-golden"></i>
                                <div>
                                    <p class="text-sm text-white/80">Customer Care</p>
                                    <p class="font-bold">1800 419 0066</p>
                                </div>
                            </div> -->
                            
                            <div class="flex items-center gap-3 bg-navy/50 p-4 rounded-xl">
                                <i class="fas fa-store text-golden"></i>
                                <div>
                                    <p class="text-sm text-white/80">Store Inquiries</p>
                                    <p class="font-bold">+91 89213 87392</p>
                                </div>
                            </div>
                        </div>

                        <div class="text-center text-white/90 text-sm">
                            <p>Our representatives are available Monday to Saturday, 10 AM to 7 PM IST.</p>
                        </div>
                    </div>

                    <!-- Policies Card -->
                    <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-6 border border-golden/20 animate-slide-up">
                        <h3 class="text-xl font-bold text-navy mb-4 flex items-center gap-2">
                            <i class="fas fa-file-contract text-golden"></i>
                            SUPPORT RESOURCES
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
                            
                            <!-- <a href="shipping-policy" class="block w-full bg-gradient-to-r from-gray-50 to-blue-50/30 text-dark-blue font-medium py-3 px-4 rounded-xl hover:bg-gradient-to-r hover:from-gray-100 hover:to-blue-100/30 transition-all duration-300 flex items-center justify-between group">
                                <span>Shipping Policy</span>
                                <i class="fas fa-chevron-right text-golden group-hover:translate-x-1 transition-transform"></i>
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    // FAQ Accordion functionality
    document.querySelectorAll('.bg-gradient-to-br.from-gray-50 button').forEach(button => {
        button.addEventListener('click', () => {
            const faqItem = button.closest('.bg-gradient-to-br.from-gray-50');
            const content = faqItem.querySelector('div[class*="hidden"]');
            const icon = button.querySelector('i');
            
            // Toggle content visibility
            content.classList.toggle('hidden');
            
            // Rotate icon
            icon.classList.toggle('rotate-180');
        });
    });
</script>

<?php include ('includes/footer.php'); ?>

</body>
</html>