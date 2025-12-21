<?php
// maintenance.php
session_start();
include('includes/head.php');
// Set timezone to Indian Standard Time
date_default_timezone_set('Asia/Kolkata');

// Calculate estimated completion time (2 hours from now in IST)
$currentTime = time();
$estimatedCompletion = $currentTime + (2 * 60 * 60); // 2 hours in seconds
$formattedTime = date('j M, Y - g:i A', $estimatedCompletion);
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
                        'pulse-slow': 'pulse 3s infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(10px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        }
                    }
                }
            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 min-h-screen flex items-center justify-center p-4">
    <div class="max-w-md mx-auto w-full">
        <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-2xl overflow-hidden border-2 border-golden/30 animate-fade-in">
            <div class="p-8 text-center">
                <!-- Maintenance Icon -->
                <div class="mx-auto mb-6 w-20 h-20 bg-gradient-to-br from-golden to-amber-500 rounded-full flex items-center justify-center shadow-lg">
                    <i class="fas fa-tools text-dark-blue text-3xl"></i>
                </div>
                
                <!-- Heading -->
                <h1 class="text-2xl font-bold bg-gradient-to-r from-dark-blue to-navy bg-clip-text text-transparent mb-4">
                    Under Maintenance
                </h1>
                
                <!-- Subheading -->
                <p class="text-gray-600 mb-6">
                    We're upgrading our system to serve you better. Please check back soon.
                </p>
                
                <!-- Progress/Status -->
                <div class="mb-6">
                    <div class="flex justify-between items-center mb-2 text-sm">
                        <span class="font-medium text-dark-blue">Maintenance Progress</span>
                        <span class="font-semibold text-golden">65%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-gradient-to-r from-golden to-amber-500 h-2 rounded-full" style="width: 65%"></div>
                    </div>
                </div>
                
                <!-- Estimated Time -->
                <div class="bg-gradient-to-r from-golden/10 to-amber-100/20 rounded-lg p-4 mb-6">
                    <div class="flex items-center justify-center gap-2">
                        <i class="fas fa-clock text-dark-blue"></i>
                        <div>
                            <p class="text-xs text-gray-600">Estimated completion</p>
                            <p class="font-bold text-dark-blue text-sm"><?php echo $formattedTime; ?> (IST)</p>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Info -->
                <div class="pt-4 border-t border-golden/20">
                    <p class="text-xs text-gray-600 mb-3">Need urgent help? Contact our support team</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-3">
                        <a href="tel:8921387392" class="px-4 py-2 bg-gradient-to-r from-dark-blue to-navy text-white rounded-lg hover:from-navy hover:to-dark-blue transition-all flex items-center justify-center gap-2 text-sm">
                            <i class="fas fa-phone"></i>
                            Call Us
                        </a>
                        <a href="mailto:hareesjewelleryinfo@gmail.com" class="px-4 py-2 bg-gradient-to-r from-golden to-amber-500 text-dark-blue rounded-lg hover:from-amber-400 hover:to-golden transition-all flex items-center justify-center gap-2 text-sm">
                            <i class="fas fa-envelope"></i>
                            Email Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Update progress bar animation
        document.addEventListener('DOMContentLoaded', function() {
            const progressBar = document.querySelector('.bg-gradient-to-r.from-golden.to-amber-500');
            let width = 0;
            const targetWidth = 65;
            const interval = setInterval(() => {
                if (width >= targetWidth) {
                    clearInterval(interval);
                } else {
                    width++;
                    progressBar.style.width = width + '%';
                    document.querySelector('.text-golden').textContent = width + '%';
                }
            }, 50);
        });
    </script>
</body>
</html>