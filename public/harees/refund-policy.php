<!DOCTYPE html>
<html lang="en">

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
                Refund Policy
            </h1>
            <p class="text-gray-600 text-lg">Our policies for returns and refunds</p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Policy Content Card -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 animate-fade-in">
                    <div class="p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-golden to-amber-500 rounded-lg flex items-center justify-center">
                                <i class="fas fa-hand-holding-usd text-dark-blue text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-navy">Refund Policy Details</h2>
                        </div>

                        <div class="space-y-8 text-gray-700">
                            <p>At Harees Jewellery, we strive to ensure customer satisfaction with our products. If for any reason you are not completely satisfied with your purchase made on our website, we offer a refund policy.</p>

                            <div class="bg-gradient-to-r from-golden/10 to-amber-100/20 p-6 rounded-xl border border-golden/20">
                                <p class="font-semibold"><i class="fas fa-exclamation-circle text-golden mr-2"></i> This refund policy is not applicable for purchases made at any of our retail stores or any other online marketplaces.</p>
                            </div>

                            <!-- Return Period -->
                            <div>
                                <h3 class="text-xl font-semibold text-navy mb-4 flex items-center gap-2">
                                    <i class="fas fa-calendar-day text-golden"></i>
                                    Return Period
                                </h3>
                                <p>Customers have a period of <strong>14 days from the date of delivery</strong> to initiate a return. During this period, you can decide whether to keep the product or return it for a refund.</p>
                            </div>

                            <!-- Refund Conditions -->
                            <div>
                                <h3 class="text-xl font-semibold text-navy mb-4 flex items-center gap-2">
                                    <i class="fas fa-clipboard-check text-golden"></i>
                                    Refund Conditions
                                </h3>
                                <ul class="space-y-3">
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>The return request must be made within 14 days of delivery.</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>The product must be returned in its original condition, along with all accompanying documents including the insurance certificate, invoice, and product certificate.</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>This refund policy does not apply to:
                                            <ul class="ml-6 mt-2 space-y-2">
                                                <li class="flex items-start gap-2">
                                                    <i class="fas fa-minus text-golden mt-1.5 text-xs"></i>
                                                    <span>Gold coins</span>
                                                </li>
                                                <li class="flex items-start gap-2">
                                                    <i class="fas fa-minus text-golden mt-1.5 text-xs"></i>
                                                    <span>Silver articles</span>
                                                </li>
                                                <li class="flex items-start gap-2">
                                                    <i class="fas fa-minus text-golden mt-1.5 text-xs"></i>
                                                    <span>Gold Rakhi</span>
                                                </li>
                                                <li class="flex items-start gap-2">
                                                    <i class="fas fa-minus text-golden mt-1.5 text-xs"></i>
                                                    <span>Watches</span>
                                                </li>
                                                <li class="flex items-start gap-2">
                                                    <i class="fas fa-minus text-golden mt-1.5 text-xs"></i>
                                                    <span>Products marked as Smart Buy (Make to Order), customized or engraved items, personalized products, and gift cards</span>
                                                </li>
                                                <li class="flex items-start gap-2">
                                                    <i class="fas fa-minus text-golden mt-1.5 text-xs"></i>
                                                    <span>Items purchased with promotion codes or discount coupons</span>
                                                </li>
                                            </ul>
                                        </span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>This refund facility is valid only for purchases made on our website.</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Return Process -->
                            <div>
                                <h3 class="text-xl font-semibold text-navy mb-4 flex items-center gap-2">
                                    <i class="fas fa-exchange-alt text-golden"></i>
                                    Return Process
                                </h3>
                                <p>To initiate a return, please email us at <strong>support@hareesjewellery.com</strong>. Our customer support team will guide you through the steps.</p>
                                <p class="mt-3">We will send you a "Return Packaging Kit" to help you pack the item securely. Please make a video while packing the product and share it via WhatsApp with your order number at <strong>+91 8921387392</strong>. This video acts as proof of the product's condition before return.</p>
                                <p class="mt-3">After packing, we will arrange a pickup through our courier partner. Make sure to note the airway bill number for tracking.</p>
                                
                                <div class="bg-gradient-to-r from-golden/10 to-amber-100/20 p-4 rounded-xl border border-golden/20 mt-4">
                                    <p class="font-medium"><i class="fas fa-info-circle text-golden mr-2"></i> The entire return process can take 7–10 business days.</p>
                                </div>
                                
                                <p class="mt-4">If we are unable to assign a courier partner, the customer must return the product using their own insured courier service at their own cost. After a quality check (QC), a refund will be issued along with the courier charges. If the product fails QC, we will notify the customer to raise a claim with their courier partner.</p>
                            </div>

                            <!-- Refund Processing -->
                            <div>
                                <h3 class="text-xl font-semibold text-navy mb-4 flex items-center gap-2">
                                    <i class="fas fa-money-bill-wave text-golden"></i>
                                    Refund Processing
                                </h3>
                                <p>Once the returned item passes quality inspection, the refund will be initiated to the original source of payment within <strong>10 business days</strong>.</p>
                                
                                <div class="bg-gradient-to-r from-golden/10 to-amber-100/20 p-4 rounded-xl border border-golden/20 mt-4">
                                    <p class="font-medium"><i class="fas fa-exclamation-circle text-golden mr-2"></i> Refunds cannot be issued to any other bank account apart from the one used for the transaction.</p>
                                </div>
                                
                                <p class="mt-4">Customized or damaged jewellery due to customer mishandling can only be repaired. <strong>No cash refund is applicable</strong> for such cases.</p>
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
                                NEED ASSISTANCE?
                            </h3>
                        </div>

                        <div class="space-y-4 mb-6">
                            <p class="text-white/90">
                                Have questions about our refund policy? Contact our support team for help.
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
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-dark-blue flex items-center gap-2">
                                <i class="fas fa-exclamation-circle"></i>
                                IMPORTANT NOTES
                            </h3>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-info text-dark-blue text-sm"></i>
                                </div>
                                <p class="font-medium">Customized items can only be repaired, not refunded</p>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-info text-dark-blue text-sm"></i>
                                </div>
                                <p class="font-medium">Refunds processed to original payment method only</p>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-info text-dark-blue text-sm"></i>
                                </div>
                                <p class="font-medium">Policy varies for different product categories</p>
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
                            <a href="cancellation-policy" class="block w-full bg-gradient-to-r from-gray-50 to-blue-50/30 text-dark-blue font-medium py-3 px-4 rounded-xl hover:bg-gradient-to-r hover:from-gray-100 hover:to-blue-100/30 transition-all duration-300 flex items-center justify-between group">
                                <span>Cancellation Policy</span>
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