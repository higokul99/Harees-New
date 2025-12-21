<?php
    session_start();
    if (isset($_SESSION['userid'])) {
    include('includes/uhead.php');
} else {
    include('includes/head.php');
    include('includes/header.php');
    include('includes/navbar.php');
}
    include('includes/dbconnect.php');
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
                Advance Gold Booking
            </h1>
            <p class="text-gray-600 text-lg">Secure your gold at today's price for future purchases</p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-8">
                <!-- How It Works -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 animate-fade-in">
                    <div class="p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-golden to-amber-500 rounded-lg flex items-center justify-center">
                                <i class="fas fa-coins text-dark-blue text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-navy">How Advance Gold Booking Works</h2>
                        </div>

                        <div class="space-y-6 text-gray-700">
                            <p>Our Advance Gold Booking service allows you to lock in today's gold price for future jewellery purchases, protecting you from price fluctuations in the market.</p>

                            <div class="grid md:grid-cols-3 gap-6">
                                <!-- Step 1 -->
                                <div class="bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-golden/20 group hover:shadow-md transition-all duration-300">
                                    <div class="w-14 h-14 bg-gradient-to-br from-golden to-amber-500 rounded-full flex items-center justify-center text-dark-blue text-xl font-bold mb-4 mx-auto">
                                        1
                                    </div>
                                    <h3 class="text-lg font-semibold text-navy mb-2 text-center">Book & Pay</h3>
                                    <p class="text-gray-600 text-sm text-center">Reserve your gold by paying 20-30% of the current gold price</p>
                                </div>
                                
                                <!-- Step 2 -->
                                <div class="bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-golden/20 group hover:shadow-md transition-all duration-300">
                                    <div class="w-14 h-14 bg-gradient-to-br from-golden to-amber-500 rounded-full flex items-center justify-center text-dark-blue text-xl font-bold mb-4 mx-auto">
                                        2
                                    </div>
                                    <h3 class="text-lg font-semibold text-navy mb-2 text-center">Price Locked</h3>
                                    <p class="text-gray-600 text-sm text-center">Today's gold price is secured for your future purchase</p>
                                </div>
                                
                                <!-- Step 3 -->
                                <div class="bg-gradient-to-br from-gray-50 to-blue-50/30 p-6 rounded-xl border border-golden/20 group hover:shadow-md transition-all duration-300">
                                    <div class="w-14 h-14 bg-gradient-to-br from-golden to-amber-500 rounded-full flex items-center justify-center text-dark-blue text-xl font-bold mb-4 mx-auto">
                                        3
                                    </div>
                                    <h3 class="text-lg font-semibold text-navy mb-2 text-center">Redeem Later</h3>
                                    <p class="text-gray-600 text-sm text-center">Purchase jewellery within 180 days at your locked price</p>
                                </div>
                            </div>

                            <div class="bg-gradient-to-r from-golden/10 to-amber-100/20 p-6 rounded-xl border border-golden/20">
                                <h3 class="text-xl font-semibold text-navy mb-4 flex items-center gap-2">
                                    <i class="fas fa-star text-golden"></i>
                                    Key Benefits
                                </h3>
                                <ul class="space-y-3">
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span><strong>Price Protection:</strong> Safeguard against gold price increases</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span><strong>Flexible Tenure:</strong> 180 days to make your final purchase</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span><strong>No Making Charges:</strong> Pay only for the gold weight at booking</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span><strong>Wide Selection:</strong> Choose from our entire collection when redeeming</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                
                    $query="select 18k_1gm from goldrate";
                    $result = mysqli_query($conn, $query);
                    if ($row = mysqli_fetch_assoc($result)) {
                        $rate_18k = $row['18k_1gm'];
                    }

                ?>

                <!-- Pricing Calculator -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 animate-fade-in">
                    <div class="p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-dark-blue to-navy rounded-lg flex items-center justify-center">
                                <i class="fas fa-calculator text-golden text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-navy">Gold Booking Calculator 18K</h2>
                        </div>

                        <div class="space-y-6">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-gray-700 font-medium mb-2">Today's Gold Price (per gram)</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <span class="text-gray-500">₹</span>
                                        </div>
                                        <input type="number" class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-golden focus:border-golden block w-full pl-10 p-2.5" value="<?php echo $rate_18k ?>" readonly>
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium mb-2">Gold Weight (grams)</label>
                                    <input type="number" id="gold-weight" min="1" value="10" class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-golden focus:border-golden block w-full p-2.5">
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-gray-700 font-medium mb-2">Advance Percentage</label>
                                    <select id="advance-percentage" class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-golden focus:border-golden block w-full p-2.5">
                                        <option value="20">20%</option>
                                        <option value="25">25%</option>
                                        <option value="30" selected>30%</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium mb-2">Advance Amount Payable</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <span class="text-gray-500">₹</span>
                                        </div>
                                        <input type="number" id="advance-amount" class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-golden focus:border-golden block w-full pl-10 p-2.5" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-r from-golden/10 to-amber-100/20 p-4 rounded-xl border border-golden/20">
                                <p class="text-gray-700"><i class="fas fa-info-circle text-golden mr-2"></i> The remaining amount will be payable when you select and purchase your jewellery within 180 days.</p>
                            </div>
                        </div>
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
                                BOOK YOUR GOLD
                            </h3>
                        </div>

                        <div class="space-y-4 mb-6">
                            <p class="text-white/90">
                                Ready to secure your gold at today's price? Contact us to start your advance gold booking.
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

                    <!-- Benefits Card -->
                    <div class="bg-gradient-to-br from-golden via-amber-500 to-yellow-600 rounded-2xl shadow-2xl p-6 text-dark-blue animate-slide-up border border-golden/20">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-dark-blue flex items-center gap-2">
                                <i class="fas fa-medal"></i>
                                WHY BOOK IN ADVANCE?
                            </h3>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-shield-alt text-dark-blue text-sm"></i>
                                </div>
                                <p class="font-medium">Hedge against price volatility</p>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-rupee-sign text-dark-blue text-sm"></i>
                                </div>
                                <p class="font-medium">Better budget planning</p>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-gem text-dark-blue text-sm"></i>
                                </div>
                                <p class="font-medium">Priority access to new collections</p>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-percentage text-dark-blue text-sm"></i>
                                </div>
                                <p class="font-medium">Special discounts on making charges</p>
                            </div>
                        </div>
                    </div>

                    <!-- Policies Card -->
                    <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-6 border border-golden/20 animate-slide-up">
                        <h3 class="text-xl font-bold text-navy mb-4 flex items-center gap-2">
                            <i class="fas fa-file-contract text-golden"></i>
                            TERMS & CONDITIONS
                        </h3>
                        
                        <div class="space-y-3 text-gray-700 text-sm">
                            <p class="flex items-start gap-2">
                                <i class="fas fa-circle text-golden text-xs mt-1.5"></i>
                                <span>Minimum booking amount: ₹5,000</span>
                            </p>
                            <p class="flex items-start gap-2">
                                <i class="fas fa-circle text-golden text-xs mt-1.5"></i>
                                <span>Valid for 180 days from booking date</span>
                            </p>
                            <p class="flex items-start gap-2">
                                <i class="fas fa-circle text-golden text-xs mt-1.5"></i>
                                <span>Making charges applicable at time of purchase</span>
                            </p>
                            <p class="flex items-start gap-2">
                                <i class="fas fa-circle text-golden text-xs mt-1.5"></i>
                                <span>Non-refundable, but transferable to family</span>
                            </p>
                            <p class="flex items-start gap-2">
                                <i class="fas fa-circle text-golden text-xs mt-1.5"></i>
                                <span>Gold price locked at time of advance payment</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    // Simple calculator functionality
    document.addEventListener('DOMContentLoaded', function() {
        const goldPrice = 5850; // Example price, should be fetched from backend in real implementation
        const goldWeightInput = document.getElementById('gold-weight');
        const advancePercentageSelect = document.getElementById('advance-percentage');
        const advanceAmountInput = document.getElementById('advance-amount');
        
        function calculateAdvance() {
            const weight = parseFloat(goldWeightInput.value) || 0;
            const percentage = parseFloat(advancePercentageSelect.value) || 0;
            const totalValue = weight * goldPrice;
            const advanceAmount = totalValue * (percentage / 100);
            advanceAmountInput.value = advanceAmount.toFixed(2);
        }
        
        goldWeightInput.addEventListener('input', calculateAdvance);
        advancePercentageSelect.addEventListener('change', calculateAdvance);
        
        // Initial calculation
        calculateAdvance();
    });
</script>

<?php include ('includes/footer.php'); ?>

</body>
</html>