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
                Cancellation Policy
            </h1>
            <p class="text-gray-600 text-lg">Our policies for order cancellations and refunds</p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Policy Content Card -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 animate-fade-in">
                    <div class="p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-dark-blue to-navy rounded-lg flex items-center justify-center">
                                <i class="fas fa-file-contract text-golden text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-navy">Cancellation Policy Details</h2>
                        </div>

                        <div class="space-y-8">
                            <!-- Cancellation by Harees Jewellery -->
                            <div class="bg-gradient-to-r from-golden/10 to-amber-100/20 p-6 rounded-xl border border-golden/20">
                                <h3 class="text-xl font-semibold text-navy mb-4 flex items-center gap-2">
                                    <i class="fas fa-store text-golden"></i>
                                    Cancellation by Harees Jewellery
                                </h3>
                                <p class="mb-4 text-gray-700">We reserve the right to cancel any order in the event of a discrepancy. The common causes for cancellation from our end include, but are not limited to:</p>
                                <ul class="space-y-3 text-gray-700">
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>Limited inventory of the product</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>Pricing errors or product information errors</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>Quality rejection during inspection</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>Insufficient customer information or unsuccessful verification</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>Suspicious orders or fraudulent activities</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>Natural calamities or unforeseen circumstances</span>
                                    </li>
                                </ul>
                                <p class="mt-4 text-gray-700">We may also request additional details from the customer either during or before accepting an order to ensure accuracy and security.</p>
                            </div>

                            <!-- Ready-to-Ship Orders -->
                            <div class="bg-gradient-to-r from-golden/10 to-amber-100/20 p-6 rounded-xl border border-golden/20">
                                <h3 class="text-xl font-semibold text-navy mb-4 flex items-center gap-2">
                                    <i class="fas fa-shipping-fast text-golden"></i>
                                    Ready-to-Ship Orders
                                </h3>
                                <p class="text-gray-700">Customers can cancel a ready-to-ship order before it is shipped. If a cancellation request is received for such an order, we will refund the amount using the original payment method within 10 business days. Please note that a pre-dispatch cancellation fee of 2% will be applied, and the remaining 98% will be credited back to the customer's account (To the same source of account from which payment was made by customer to purchase the product). It's important to note that gold & silver coins, bars, silver articles, Rakhi, and solitaire orders cannot be cancelled under any circumstances.</p>
                            </div>

                            <!-- Make-to-Order -->
                            <div class="bg-gradient-to-r from-golden/10 to-amber-100/20 p-6 rounded-xl border border-golden/20">
                                <h3 class="text-xl font-semibold text-navy mb-4 flex items-center gap-2">
                                    <i class="fas fa-cogs text-golden"></i>
                                    Make-to-Order
                                </h3>
                                <p class="text-gray-700">Smart Buy (custom-made), personalized, or customized jewelry items undergo a specialized manufacturing process and are created only upon customer orders. If a customer decides to cancel their order within 2 days of purchase, the entire order value will be refunded to the customer's account in accordance with our refund policy terms (To the same source of account from which payment was made by customer to purchase the product). However, if a customer chooses to cancel the order after 2 days from the date of purchase, whether before or after dispatch, the refund for the cancellation of Smart Buy (custom-made), personalized, or customized jewelry will be processed after deducting the making charges and stone charges associated with the canceled jewelry. The remaining amount will be refunded to the customer's account (To the same source of account from which payment was made by customer to purchase the product) within 10 business days or can be adjusted towards an exchanged product(s).</p>
                            </div>

                            <!-- Failed Transactions -->
                            <div class="bg-gradient-to-r from-golden/10 to-amber-100/20 p-6 rounded-xl border border-golden/20">
                                <h3 class="text-xl font-semibold text-navy mb-4 flex items-center gap-2">
                                    <i class="fas fa-exclamation-triangle text-golden"></i>
                                    Failed Transactions
                                </h3>
                                <p class="text-gray-700">If a transaction fails and the amount is debited from the customer's account, it will be returned to the respective account within 72 hours by the payment gateway used.</p>
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
                                Have questions about our cancellation policy? Contact our support team for assistance.
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

                    <!-- Important Notes Card -->
                    <div class="bg-gradient-to-br from-golden via-amber-500 to-yellow-600 rounded-2xl shadow-2xl p-6 text-dark-blue animate-slide-up border border-golden/20">
                        <h3 class="text-xl font-bold text-dark-blue flex items-center gap-2">
                            <i class="fas fa-info-circle"></i>
                            IMPORTANT NOTES
                        </h3>
                        <div class="space-y-4 mt-4 font-medium">
                            <div class="flex items-start gap-3">
                                <div class="w-6 h-6 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-exclamation text-dark-blue text-xs"></i>
                                </div>
                                <p>Policy may vary for specific products or promotions</p>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-6 h-6 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-exclamation text-dark-blue text-xs"></i>
                                </div>
                                <p>Terms subject to change by Harees Jewellery</p>
                            </div>
                        </div>
                    </div>

                    <!-- Related Policies Card -->
                    <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-6 border border-golden/20 animate-slide-up">
                        <h3 class="text-xl font-bold text-navy mb-4 flex items-center gap-2">
                            <i class="fas fa-file-alt text-golden"></i>
                            RELATED POLICIES
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