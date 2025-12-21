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
                Contact Us
            </h1>
            <p class="text-gray-600 text-lg">We'd love to hear from you. Visit any of our branches or reach out to us directly.</p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Paravur Location -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 animate-fade-in">
                    <div class="p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-golden to-amber-500 rounded-lg flex items-center justify-center">
                                <i class="fas fa-store text-dark-blue text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-navy">Harees Jewellery – Paravur, Kollam</h2>
                        </div>

                        <div class="space-y-4 text-gray-700">
                            <div class="flex items-start gap-3">
                                <i class="fas fa-map-marker-alt text-golden mt-1"></i>
                                <div>
                                    <p class="font-medium">Address:</p>
                                    <p class="mt-1">
                                        Harees Jewellery<br>
                                        Thekkumbhagam Road, Paravur<br>
                                        Kollam, Kerala
                                    </p>
                                    <a href="https://maps.app.goo.gl/Stf7o19wp6fP2Ly7A" target="blank" class="text-dark-blue hover:underline mt-2 inline-block">View on Google Maps</a>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <i class="fas fa-phone-alt text-golden mt-1"></i>
                                <div>
                                    <p class="font-medium">Contact:</p>
                                    <p class="mt-1">
                                        0474 251 3485<br>
                                        +91 98474 73431<br>
                                        +91 89213 87392 <span class="text-sm">(WhatsApp)</span>
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <i class="fas fa-clock text-golden mt-1"></i>
                                <div>
                                    <p class="font-medium">Hours:</p>
                                    <p class="mt-1">
                                        Monday - Saturday: 10:00 AM - 8:00 PM<br>
                                        Sunday: Holiday
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chinnakada Location -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 animate-fade-in">
                    <div class="p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-dark-blue to-navy rounded-lg flex items-center justify-center">
                                <i class="fas fa-gem text-golden text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-navy">Harees Gold & Diamonds – Chinnakada, Kollam</h2>
                        </div>

                        <div class="space-y-4 text-gray-700">
                            <div class="flex items-start gap-3">
                                <i class="fas fa-map-marker-alt text-golden mt-1"></i>
                                <div>
                                    <p class="font-medium">Address:</p>
                                    <p class="mt-1">
                                        Harees Gold & Diamonds<br>
                                        Vadayattukota Road, Chinnakada<br>
                                        Kollam, Kerala - 691010
                                    </p>
                                    <a href="https://maps.app.goo.gl/x5osJoQdeurrpnS3A" target="blank" class="text-dark-blue hover:underline mt-2 inline-block">View on Google Maps</a>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <i class="fas fa-phone-alt text-golden mt-1"></i>
                                <div>
                                    <p class="font-medium">Contact:</p>
                                    <p class="mt-1">
                                        +91 80865 94491<br>
                                        +91 89213 87392<br>
                                        +91 89213 87392 <span class="text-sm">(WhatsApp)</span>
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <i class="fas fa-clock text-golden mt-1"></i>
                                <div>
                                    <p class="font-medium">Hours:</p>
                                    <p class="mt-1">
                                        Monday - Saturday: 10:00 AM - 8:00 PM<br>
                                        Sunday: Holiday
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Koottikkada Location -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 animate-fade-in">
                    <div class="p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-golden to-amber-500 rounded-lg flex items-center justify-center">
                                <i class="fas fa-ring text-dark-blue text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-navy">Harees Jewellery – Koottikkada, Kollam</h2>
                        </div>

                        <div class="space-y-4 text-gray-700">
                            <div class="flex items-start gap-3">
                                <i class="fas fa-map-marker-alt text-golden mt-1"></i>
                                <div>
                                    <p class="font-medium">Address:</p>
                                    <p class="mt-1">
                                        Harees Jewellery<br>
                                        Koottikkada Road, Koottikkada<br>
                                        Kollam, Kerala
                                    </p>
                                    <a href="https://maps.app.goo.gl/XQRF4VqnKn4RbNB2A" target="blank" class="text-dark-blue hover:underline mt-2 inline-block">View on Google Maps</a>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <i class="fas fa-phone-alt text-golden mt-1"></i>
                                <div>
                                    <p class="font-medium">Contact:</p>
                                    <p class="mt-1">
                                        0474 272 9767<br>
                                        +91 94469 09960<br>
                                        +91 89213 87392 <span class="text-sm">(WhatsApp)</span>
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <i class="fas fa-clock text-golden mt-1"></i>
                                <div>
                                    <p class="font-medium">Hours:</p>
                                    <p class="mt-1">
                                        Monday - Saturday: 10:00 AM - 8:00 PM<br>
                                        Sunday: Holiday
                                    </p>
                                </div>
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
                                QUICK CONTACT
                            </h3>
                        </div>

                        <div class="space-y-4 mb-6">
                            <p class="text-white/90">
                                For immediate assistance, contact us through these channels:
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
                            
                            <a href="mailto:hareesjewelleryinfo@gmail.com" class="block w-full bg-gradient-to-r from-rose-500 to-pink-600 text-white font-bold py-4 px-6 rounded-xl hover:from-rose-600 hover:to-pink-500 transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-between group">
                                <div class="flex items-center gap-3">
                                    <i class="fas fa-envelope text-white text-xl group-hover:scale-110 transition-transform"></i>
                                    <span>EMAIL US</span>
                                </div>
                                <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Business Hours Card -->
                    <div class="bg-gradient-to-br from-golden via-amber-500 to-yellow-600 rounded-2xl shadow-2xl p-6 text-dark-blue animate-slide-up border border-golden/20">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-dark-blue flex items-center gap-2">
                                <i class="fas fa-clock"></i>
                                BUSINESS HOURS
                            </h3>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-calendar-day text-dark-blue text-sm"></i>
                                </div>
                                <p class="font-medium">Monday - Saturday</p>
                            </div>
                            <p class="ml-11">10:00 AM - 8:00 PM</p>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-calendar-times text-dark-blue text-sm"></i>
                                </div>
                                <p class="font-medium">Sunday</p> - Closed
                            </div>
                            <!-- <p class="ml-11">Closed</p> -->
                        </div>
                    </div>

                    <!-- Visit Us Card -->
                    <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-6 border border-golden/20 animate-slide-up">
                        <h3 class="text-xl font-bold text-navy mb-4 flex items-center gap-2">
                            <i class="fas fa-map-marked-alt text-golden"></i>
                            FIND OUR STORES
                        </h3>
                        
                        <div class="space-y-3 text-gray-700">
                            <div class="flex items-start gap-2">
                                <i class="fas fa-map-pin text-golden mt-1"></i>
                                <a href="https://maps.app.goo.gl/Stf7o19wp6fP2Ly7A" target="blank" class="hover:underline">Paravur Location</a>
                            </div>
                            <div class="flex items-start gap-2">
                                <i class="fas fa-map-pin text-golden mt-1"></i>
                                <a href="https://maps.app.goo.gl/x5osJoQdeurrpnS3A" target="blank" class="hover:underline">Chinnakada Location</a>
                            </div>
                            <div class="flex items-start gap-2">
                                <i class="fas fa-map-pin text-golden mt-1"></i>
                                <a href="https://maps.app.goo.gl/XQRF4VqnKn4RbNB2A" target="blank" class="hover:underline">Koottikkada Location</a>
                            </div>
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