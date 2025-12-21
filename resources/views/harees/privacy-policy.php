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
                Privacy Policy
            </h1>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                We value your trust and are committed to protecting the privacy and security of your personal information.
            </p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 animate-fade-in">
                    <div class="p-8">
                        <!-- Introduction -->
                        <div class="mb-10">
                            <p class="text-gray-700 mb-6">At Harees Jewellery, we value your trust and are committed to protecting the privacy and security of your personal information. This Privacy Policy explains how we collect, use, and safeguard your data when you visit or interact with our website.</p>
                            
                            <div class="bg-gradient-to-r from-golden/10 to-amber-100/20 p-6 rounded-xl border border-golden/20">
                                <p class="text-navy font-medium">Last updated: <?php echo date('F j, Y'); ?></p>
                            </div>
                        </div>

                        <!-- Policy Sections -->
                        <div class="space-y-10">
                            <!-- Changes to Policy -->
                            <div class="border-b border-golden/20 pb-8">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-golden to-amber-500 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-sync-alt text-dark-blue"></i>
                                    </div>
                                    <h2 class="text-2xl font-bold text-navy">Changes to the Privacy Policy</h2>
                                </div>
                                <p class="text-gray-600">This policy may be revised from time to time without prior notice. We recommend reviewing this page periodically to stay informed about how we safeguard your information.</p>
                            </div>

                            <!-- Collection of Information -->
                            <div class="border-b border-golden/20 pb-8">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-dark-blue to-navy rounded-lg flex items-center justify-center">
                                        <i class="fas fa-database text-golden"></i>
                                    </div>
                                    <h2 class="text-2xl font-bold text-navy">Collection of Personal Information</h2>
                                </div>
                                <p class="text-gray-600 mb-4">When you create an account or place an order, we collect personal details such as your name, contact number, email address, and other relevant data—with your consent. This information helps us provide tailored services, streamline order fulfillment, and notify you about exclusive offers that may interest you.</p>
                            </div>

                            <!-- Use of Information -->
                            <div class="border-b border-golden/20 pb-8">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-golden to-amber-500 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-chart-line text-dark-blue"></i>
                                    </div>
                                    <h2 class="text-2xl font-bold text-navy">Use of Information</h2>
                                </div>
                                <p class="text-gray-600 mb-4">We use the collected data to:</p>
                                <ul class="space-y-3 ml-2">
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>Fulfill orders and service requests</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>Resolve issues and troubleshoot errors</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>Conduct surveys and understand preferences</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>Share exclusive promotions and updates</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>Analyze user activity and demographics</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>Diagnose and fix technical issues using IP data</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Disclosure of Data -->
                            <div class="border-b border-golden/20 pb-8">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-dark-blue to-navy rounded-lg flex items-center justify-center">
                                        <i class="fas fa-share-alt text-golden"></i>
                                    </div>
                                    <h2 class="text-2xl font-bold text-navy">Disclosure of Personal Data</h2>
                                </div>
                                <ul class="space-y-4">
                                    <li class="flex items-start gap-2">
                                        <div class="w-6 h-6 bg-gradient-to-br from-golden/20 to-amber-100/20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                            <i class="fas fa-users text-golden text-xs"></i>
                                        </div>
                                        <div>
                                            <p class="font-medium text-gray-800">Third-Party Services:</p>
                                            <p class="text-gray-600">We may engage trusted third parties for services such as marketing, maintenance, analytics, audits, and development. These entities are granted limited access and must comply with strict confidentiality agreements.</p>
                                        </div>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <div class="w-6 h-6 bg-gradient-to-br from-golden/20 to-amber-100/20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                            <i class="fas fa-file-signature text-golden text-xs"></i>
                                        </div>
                                        <div>
                                            <p class="font-medium text-gray-800">User Agreements:</p>
                                            <p class="text-gray-600">By using our app or website, you agree to this policy and the developer's terms.</p>
                                        </div>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <div class="w-6 h-6 bg-gradient-to-br from-golden/20 to-amber-100/20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                            <i class="fas fa-gavel text-golden text-xs"></i>
                                        </div>
                                        <div>
                                            <p class="font-medium text-gray-800">Legal Disclosures:</p>
                                            <p class="text-gray-600">We may disclose personal information to comply with laws, enforce our policies, or protect rights, property, or user safety—only as required by law.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <!-- Security Precautions -->
                            <div class="border-b border-golden/20 pb-8">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-golden to-amber-500 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-lock text-dark-blue"></i>
                                    </div>
                                    <h2 class="text-2xl font-bold text-navy">Security Precautions</h2>
                                </div>
                                <p class="text-gray-600">We employ industry-standard security protocols to protect your information from misuse, unauthorized access, and alteration. Secure servers and strict internal guidelines help us ensure your data is safe.</p>
                            </div>

                            <!-- Opt-Out -->
                            <div class="border-b border-golden/20 pb-8">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-dark-blue to-navy rounded-lg flex items-center justify-center">
                                        <i class="fas fa-toggle-off text-golden"></i>
                                    </div>
                                    <h2 class="text-2xl font-bold text-navy">Choice/Opt-Out</h2>
                                </div>
                                <p class="text-gray-600">You can opt-out of promotional messages and marketing communications at any time by adjusting your account settings or contacting our support team.</p>
                            </div>

                            <!-- External Links -->
                            <div class="border-b border-golden/20 pb-8">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-golden to-amber-500 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-external-link-alt text-dark-blue"></i>
                                    </div>
                                    <h2 class="text-2xl font-bold text-navy">Links to Other Websites</h2>
                                </div>
                                <p class="text-gray-600">Our website may include links to third-party websites. We are not responsible for their privacy practices or content. Please review their privacy policies before sharing any personal information.</p>
                            </div>

                            <!-- Contact Us -->
                            <div class="pt-8">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-dark-blue to-navy rounded-lg flex items-center justify-center">
                                        <i class="fas fa-headset text-golden"></i>
                                    </div>
                                    <h2 class="text-2xl font-bold text-navy">Contact Us</h2>
                                </div>
                                <p class="text-gray-600">If you have questions or concerns about our Privacy Policy or how your data is handled, please reach out to us at <a href="support" class="text-dark-blue underline hover:text-navy font-medium">Our Support team</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="sticky top-8 space-y-6">
                    <!-- Quick Links Card -->
                    <div class="bg-gradient-to-br from-golden via-amber-500 to-yellow-600 rounded-2xl shadow-2xl p-6 text-dark-blue animate-slide-up border border-golden/20">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-bold text-dark-blue flex items-center gap-2">
                                <i class="fas fa-link"></i>
                                QUICK LINKS
                            </h3>
                        </div>

                        <div class="space-y-4">
                            <a href="terms-and-conditions" class="block w-full bg-white/20 text-dark-blue font-medium py-3 px-4 rounded-xl hover:bg-white/30 transition-all duration-300 flex items-center justify-between group">
                                <span>Terms & Conditions</span>
                                <i class="fas fa-chevron-right group-hover:translate-x-1 transition-transform"></i>
                            </a>
                            
                            <a href="refund-policy" class="block w-full bg-white/20 text-dark-blue font-medium py-3 px-4 rounded-xl hover:bg-white/30 transition-all duration-300 flex items-center justify-between group">
                                <span>Refund Policy</span>
                                <i class="fas fa-chevron-right group-hover:translate-x-1 transition-transform"></i>
                            </a>
                            
                            <a href="shipping-policy" class="block w-full bg-white/20 text-dark-blue font-medium py-3 px-4 rounded-xl hover:bg-white/30 transition-all duration-300 flex items-center justify-between group">
                                <span>Shipping Policy</span>
                                <i class="fas fa-chevron-right group-hover:translate-x-1 transition-transform"></i>
                            </a>
                            
                            <a href="return-or-exchange-policy" class="block w-full bg-white/20 text-dark-blue font-medium py-3 px-4 rounded-xl hover:bg-white/30 transition-all duration-300 flex items-center justify-between group">
                                <span>Return Policy</span>
                                <i class="fas fa-chevron-right group-hover:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Data Rights Card -->
                    <div class="bg-gradient-to-br from-dark-blue via-navy to-slate-900 rounded-2xl shadow-2xl p-6 text-white animate-slide-up border border-golden/20">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-bold text-golden flex items-center gap-2">
                                <i class="fas fa-user-shield"></i>
                                YOUR DATA RIGHTS
                            </h3>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-navy/50 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-eye text-golden text-sm"></i>
                                </div>
                                <p class="text-white/90">Right to access your personal data</p>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-navy/50 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-edit text-golden text-sm"></i>
                                </div>
                                <p class="text-white/90">Right to correct inaccurate data</p>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-navy/50 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-trash-alt text-golden text-sm"></i>
                                </div>
                                <p class="text-white/90">Right to request data deletion</p>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-navy/50 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-ban text-golden text-sm"></i>
                                </div>
                                <p class="text-white/90">Right to restrict processing</p>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Card -->
                    <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-6 border border-golden/20 animate-slide-up">
                        <h3 class="text-xl font-bold text-navy mb-4 flex items-center gap-2">
                            <i class="fas fa-headset text-golden"></i>
                            PRIVACY QUESTIONS?
                        </h3>
                        
                        <div class="space-y-4">
                            <a href="https://wa.me/+918921387392" target="_blank" class="block w-full bg-gradient-to-r from-gray-50 to-blue-50/30 text-dark-blue font-medium py-3 px-4 rounded-xl hover:bg-gradient-to-r hover:from-gray-100 hover:to-blue-100/30 transition-all duration-300 flex items-center justify-between group">
                                <span>Chat on WhatsApp</span>
                                <i class="fab fa-whatsapp text-green-500 group-hover:scale-110 transition-transform"></i>
                            </a>
                            
                            <a href="mailto:hareesjewelleryinfo@gmail.com" class="block w-full bg-gradient-to-r from-gray-50 to-blue-50/30 text-dark-blue font-medium py-3 px-4 rounded-xl hover:bg-gradient-to-r hover:from-gray-100 hover:to-blue-100/30 transition-all duration-300 flex items-center justify-between group">
                                <span>Email Us</span>
                                <i class="fas fa-envelope text-rose-500 group-hover:scale-110 transition-transform"></i>
                            </a>
                            
                            <a href="tel:8921387392" class="block w-full bg-gradient-to-r from-gray-50 to-blue-50/30 text-dark-blue font-medium py-3 px-4 rounded-xl hover:bg-gradient-to-r hover:from-gray-100 hover:to-blue-100/30 transition-all duration-300 flex items-center justify-between group">
                                <span>Call Support</span>
                                <i class="fas fa-phone-alt text-blue-500 group-hover:scale-110 transition-transform"></i>
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