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
    <div class="max-w-7xl mx-auto">
        <!-- Page Header -->
        <div class="text-center mb-12 animate-fade-in">
            <h1 class="text-4xl font-bold bg-gradient-to-r from-dark-blue to-navy bg-clip-text text-transparent mb-4">
                Our Prestigious Brands
            </h1>
            <p class="text-gray-600 text-lg">Discover the perfect blend of tradition and versatility across our collections</p>
        </div>

        <!-- Brands Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Harees Jewellery -->
            <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 overflow-hidden transform transition duration-300 hover:scale-[1.02] animate-fade-in">
                <div class="h-48 bg-gradient-to-br from-dark-blue/10 to-navy/10 flex items-center justify-center">
                    <div class="w-24 h-24 rounded-full bg-gradient-to-br from-golden to-amber-500 flex items-center justify-center shadow-lg">
                        <i class="fas fa-crown text-dark-blue text-3xl"></i>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-navy mb-2 text-center">Harees Jewellery</h3>
                    <div class="w-16 h-1 bg-golden mx-auto mb-4"></div>
                    <p class="text-gray-700 mb-4 text-center">Decades of history and tradition. Exquisite craftsmanship meets timeless elegance at Harees Jewellery. Discover a stunning collection of fine jewelry pieces that celebrate special moments and cherished memories.</p>
                    <div class="flex justify-center">
                        <a href="index" class="px-6 py-2 bg-gradient-to-r from-dark-blue to-navy text-white rounded-full text-sm hover:from-darker-blue hover:to-navy transition duration-300 transform hover:scale-105 flex items-center gap-2">
                            <i class="fas fa-history"></i>
                            View Heritage
                        </a>
                    </div>
                </div>
            </div>

            <!-- Azwa Premium -->
            <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 overflow-hidden transform transition duration-300 hover:scale-[1.02] animate-fade-in">
                <div class="h-48 bg-gradient-to-br from-golden/10 to-amber-100/10 flex items-center justify-center">
                    <div class="w-24 h-24 rounded-full bg-gradient-to-br from-golden to-amber-500 flex items-center justify-center shadow-lg">
                        <i class="fas fa-gem text-dark-blue text-3xl"></i>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-navy mb-2 text-center">Azwa Premium</h3>
                    <div class="w-16 h-1 bg-golden mx-auto mb-4"></div>
                    <p class="text-gray-700 mb-4 text-center">A premium lightweight collection featuring exquisite 18K gold and diamond jewelry. Azwa Premium combines sophisticated design with unparalleled craftsmanship for the modern connoisseur.</p>
                    <div class="flex justify-center">
                        <a href="index" class="px-6 py-2 bg-gradient-to-r from-golden to-amber-500 text-dark-blue rounded-full text-sm hover:from-amber-500 hover:to-yellow-600 transition duration-300 transform hover:scale-105 flex items-center gap-2">
                            <i class="fas fa-search"></i>
                            Discover Collection
                        </a>
                    </div>
                </div>
            </div>

            <!-- Harees Gold & Diamonds -->
            <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 overflow-hidden transform transition duration-300 hover:scale-[1.02] animate-fade-in">
                <div class="h-48 bg-gradient-to-br from-navy/10 to-dark-blue/10 flex items-center justify-center">
                    <div class="w-24 h-24 rounded-full bg-gradient-to-br from-golden to-amber-500 flex items-center justify-center shadow-lg">
                        <i class="fas fa-ring text-dark-blue text-3xl"></i>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-navy mb-2 text-center">Harees Gold & Diamonds</h3>
                    <div class="w-16 h-1 bg-golden mx-auto mb-4"></div>
                    <p class="text-gray-700 mb-4 text-center"><span class="font-medium">A New Era of Luxury Begins.</span> Indulge in luxury with our exclusive collection of premium gold jewelry and diamond masterpieces. Each creation is a testament to superior craftsmanship and timeless beauty.</p>
                    <div class="flex justify-center">
                        <a href="index" class="px-6 py-2 bg-gradient-to-r from-navy to-dark-blue text-white rounded-full text-sm hover:from-darker-blue hover:to-navy transition duration-300 transform hover:scale-105 flex items-center gap-2">
                            <i class="fas fa-eye"></i>
                            Explore Luxury
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include ('includes/footer.php'); ?>

</body>
</html>