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
                Our Golden Legacy
            </h1>
            <p class="text-gray-600 text-lg">35 years of crafting timeless elegance and cherished memories</p>
        </div>

        <!-- Main Content -->
        <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 animate-fade-in overflow-hidden">
            <div class="flex flex-col lg:flex-row">
                <!-- Image Section -->
                <div class="lg:w-1/2">
                    <img src="assets/hareesjewellery2.png" alt="Harees Jewellery Showroom" class="w-full h-full object-cover">
                </div>
                
                <!-- Text Content -->
                <div class="lg:w-1/2 p-8 md:p-10">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-golden to-amber-500 rounded-lg flex items-center justify-center">
                            <i class="fas fa-gem text-dark-blue text-xl"></i>
                        </div>
                        <h2 class="text-2xl font-bold text-navy">Harees Jewellery</h2>
                    </div>

                    <div class="space-y-6 text-gray-700">
                        <p>Since 1983, Harees Jewellery has been the trusted name for exquisite craftsmanship and timeless elegance in Kollam. What began as a modest family enterprise has blossomed into a celebrated legacy spanning three generations.</p>
                        
                        <div class="bg-gradient-to-r from-golden/10 to-amber-100/20 p-6 rounded-xl border border-golden/20">
                            <h3 class="text-xl font-semibold text-navy mb-4 flex items-center gap-2">
                                <i class="fas fa-award text-golden"></i>
                                Our Collections
                            </h3>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-golden mt-1"></i>
                                    <span><strong>22K Gold</strong> - Traditional designs that honor Kerala's rich heritage</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-golden mt-1"></i>
                                    <span><strong>18K Gold & Diamonds</strong> - Contemporary elegance for modern tastes</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-golden mt-1"></i>
                                    <span><strong>Silver Collections</strong> - Affordable luxury for everyday wear</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-golden mt-1"></i>
                                    <span><strong>Bridal Sets</strong> - Heirloom pieces for your special day</span>
                                </li>
                            </ul>
                        </div>

                        <p>Each piece in our collection undergoes rigorous quality checks and carries the BIS hallmark, ensuring you receive only the purest gold and finest diamonds.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Values Section -->
        <div class="mt-12">
            <h2 class="text-3xl font-bold text-center bg-gradient-to-r from-dark-blue to-navy bg-clip-text text-transparent mb-8">
                Our Golden Principles
            </h2>
            
            <div class="grid md:grid-cols-3 gap-6">
                <!-- Craftsmanship -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 p-6 animate-fade-in">
                    <div class="w-14 h-14 bg-gradient-to-br from-golden to-amber-500 rounded-full flex items-center justify-center text-dark-blue text-xl mb-4 mx-auto">
                        <i class="fas fa-hammer"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-navy text-center mb-3">Artisan Craftsmanship</h3>
                    <p class="text-gray-700 text-center">Our skilled artisans combine traditional techniques with modern precision, creating pieces that stand the test of time.</p>
                </div>
                
                <!-- Trust -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 p-6 animate-fade-in">
                    <div class="w-14 h-14 bg-gradient-to-br from-golden to-amber-500 rounded-full flex items-center justify-center text-dark-blue text-xl mb-4 mx-auto">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-navy text-center mb-3">Trust & Transparency</h3>
                    <p class="text-gray-700 text-center">For four decades, we've built relationships based on integrity, fair pricing, and complete transparency.</p>
                </div>
                
                <!-- Service -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 p-6 animate-fade-in">
                    <div class="w-14 h-14 bg-gradient-to-br from-golden to-amber-500 rounded-full flex items-center justify-center text-dark-blue text-xl mb-4 mx-auto">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-navy text-center mb-3">Personalized Service</h3>
                    <p class="text-gray-700 text-center">We listen to your story to help you find or create jewelry that carries special meaning for generations.</p>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="mt-12 text-center animate-fade-in">
            <a href="index" class="inline-block bg-gradient-to-r from-dark-blue to-navy text-white font-bold py-4 px-8 rounded-xl hover:from-darker-blue hover:to-navy transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                Explore Our Collections
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</main>

<?php include ('includes/footer.php'); ?>

</body>
</html>