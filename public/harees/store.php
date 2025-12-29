<!DOCTYPE html>
<html lang="en">
  <head>
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
    </head>
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

<body class="bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 min-h-screen">
<!-- ###################################--START--########################################## -->

<div class="relative w-full">
    <div class="relative overflow-hidden pt-24 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center animate-fade-in">
            <h1 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-[#1e3a8a] to-[#0f172a] mb-4">
                Our Store Locations
            </h1>
            <p class="text-gray-600 text-lg">Visit us to experience our exquisite jewelry collections in person</p>
        </div>
    </div>
</div>

<div class="py-8">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Store 1 -->
      <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl overflow-hidden border border-golden/20 animate-fade-in">
        <div class="h-64 relative">
          <img src="assets/store.jpg" alt="Paravur Showroom" class="w-full h-full object-cover">
          <div class="absolute top-4 left-4 bg-gradient-to-r from-golden to-amber-500 text-dark-blue px-4 py-2 font-bold rounded-lg shadow-lg">Popular Store</div>
        </div>
        <div class="p-8">
          <h3 class="text-2xl font-bold text-navy mb-3">Paravur, Kollam</h3>
          <p class="text-gray-600 mb-6">Our premier location featuring our complete collection of fine jewelry and gemstones.</p>
          
          <div class="mb-6">
            <h4 class="font-semibold text-gray-800 mb-3 flex items-center gap-2">
              <div class="w-8 h-8 bg-gradient-to-br from-dark-blue to-navy rounded-full flex items-center justify-center">
                <i class="fas fa-map-marker-alt text-golden text-sm"></i>
              </div>
              Address:
            </h4>
            <p class="text-gray-600 pl-10">
              Harees Jewellery<br>
              Thekkumbhagam Road, Paravur<br>
              Kollam, Kerala
            </p>
            <a href="https://maps.app.goo.gl/dPXSgTkQgz1by4m87" target="_blank" class="inline-flex items-center text-golden hover:text-amber-600 mt-3 pl-10">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              View on Google Maps
            </a>
          </div>
          
          <div class="mb-6">
            <h4 class="font-semibold text-gray-800 mb-3 flex items-center gap-2">
              <div class="w-8 h-8 bg-gradient-to-br from-dark-blue to-navy rounded-full flex items-center justify-center">
                <i class="fas fa-phone-alt text-golden text-sm"></i>
              </div>
              Contact:
            </h4>
            <div class="flex items-center mb-2 pl-10">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              <a href="tel:+911140556677" class="text-gray-600 hover:text-golden">0474 251 3485</a>
            </div>
            <div class="flex items-center mb-2 pl-10">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              <a href="tel:+911140556688" class="text-gray-600 hover:text-golden">+91 98474 73431</a>
            </div>
            <div class="flex items-center pl-10">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
              </svg>
              <a href="https://wa.me/918921387392" class="text-gray-600 hover:text-green-600">+91 89213 87392 (WhatsApp)</a>
            </div>
          </div>
          
          <div>
            <h4 class="font-semibold text-gray-800 mb-3 flex items-center gap-2">
              <div class="w-8 h-8 bg-gradient-to-br from-dark-blue to-navy rounded-full flex items-center justify-center">
                <i class="fas fa-clock text-golden text-sm"></i>
              </div>
              Hours:
            </h4>
            <p class="text-gray-600 pl-10">
              Monday - Saturday: 10:00 AM - 8:00 PM<br>
              Sunday: Holiday
            </p>
          </div>
        </div>
      </div>
      
      <!-- Store 2 -->
      <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl overflow-hidden border border-golden/20 animate-fade-in">
        <div class="h-64 relative">
          <img src="assets/store.jpg" alt="Koottikkada Boutique" class="w-full h-full object-cover">
        </div>
        <div class="p-8">
          <h3 class="text-2xl font-bold text-navy mb-3">Koottikkada, Kollam</h3>
          <p class="text-gray-600 mb-6">Our exclusive location specializing in diamond and precious gemstone jewelry.</p>
          
          <div class="mb-6">
            <h4 class="font-semibold text-gray-800 mb-3 flex items-center gap-2">
              <div class="w-8 h-8 bg-gradient-to-br from-dark-blue to-navy rounded-full flex items-center justify-center">
                <i class="fas fa-map-marker-alt text-golden text-sm"></i>
              </div>
              Address:
            </h4>
            <p class="text-gray-600 pl-10">
              Harees Jewellery<br>
              Koottikkada Road, Koottikada<br>
              Kollam, Kerala
            </p>
            <a href="https://maps.app.goo.gl/nUFDVb8QqBWRu3X58" target="_blank" class="inline-flex items-center text-golden hover:text-amber-600 mt-3 pl-10">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              View on Google Maps
            </a>
          </div>
          
          <div class="mb-6">
            <h4 class="font-semibold text-gray-800 mb-3 flex items-center gap-2">
              <div class="w-8 h-8 bg-gradient-to-br from-dark-blue to-navy rounded-full flex items-center justify-center">
                <i class="fas fa-phone-alt text-golden text-sm"></i>
              </div>
              Contact:
            </h4>
            <div class="flex items-center mb-2 pl-10">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              <a href="tel:+912240556677" class="text-gray-600 hover:text-golden">0474 272 9767</a>
            </div>
            <div class="flex items-center mb-2 pl-10">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              <a href="tel:+912240556688" class="text-gray-600 hover:text-golden">+91 94469 09960</a>
            </div>
            <div class="flex items-center pl-10">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
              </svg>
              <a href="https://wa.me/918921387392" class="text-gray-600 hover:text-green-600">+91 89213 87392 (WhatsApp)</a>
            </div>
          </div>
          
          <div>
            <h4 class="font-semibold text-gray-800 mb-3 flex items-center gap-2">
              <div class="w-8 h-8 bg-gradient-to-br from-dark-blue to-navy rounded-full flex items-center justify-center">
                <i class="fas fa-clock text-golden text-sm"></i>
              </div>
              Hours:
            </h4>
            <p class="text-gray-600 pl-10">
              Monday - Saturday: 10:00 AM - 8:00 PM<br>
              Sunday: Holiday
            </p>
          </div>
        </div>
      </div>
      
      <!-- Store 3 -->
      <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl overflow-hidden border border-golden/20 animate-fade-in">
        <div class="h-64 relative">
          <img src="assets/store.jpg" alt="Chinnakada Gallery" class="w-full h-full object-cover">
          <div class="absolute top-4 left-4 bg-gradient-to-r from-dark-blue to-navy text-golden px-4 py-2 font-bold rounded-lg shadow-lg">New Location</div>
        </div>
        <div class="p-8">
          <h3 class="text-2xl font-bold text-navy mb-3">Chinnakada, Kollam</h3>
          <p class="text-gray-600 mb-6">Our newest location showcasing contemporary designs and custom jewelry services.</p>
          
          <div class="mb-6">
            <h4 class="font-semibold text-gray-800 mb-3 flex items-center gap-2">
              <div class="w-8 h-8 bg-gradient-to-br from-dark-blue to-navy rounded-full flex items-center justify-center">
                <i class="fas fa-map-marker-alt text-golden text-sm"></i>
              </div>
              Address:
            </h4>
            <p class="text-gray-600 pl-10">
              Harees Gold & Diamonds<br>
              Vadayattukota Road, Chinnakada<br>
              Kollam, Kerala - 691010
            </p>
            <a href="https://maps.google.com/?q=Indiranagar+Bangalore" target="_blank" class="inline-flex items-center text-golden hover:text-amber-600 mt-3 pl-10">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              View on Google Maps
            </a>
          </div>
          
          <div class="mb-6">
            <h4 class="font-semibold text-gray-800 mb-3 flex items-center gap-2">
              <div class="w-8 h-8 bg-gradient-to-br from-dark-blue to-navy rounded-full flex items-center justify-center">
                <i class="fas fa-phone-alt text-golden text-sm"></i>
              </div>
              Contact:
            </h4>
            <div class="flex items-center mb-2 pl-10">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              <a href="tel:+918040556677" class="text-gray-600 hover:text-golden">+91 80865 94491</a>
            </div>
            <div class="flex items-center mb-2 pl-10">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              <a href="tel:+918040556688" class="text-gray-600 hover:text-golden">+91 89213 87392</a>
            </div>
            <div class="flex items-center pl-10">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
              </svg>
              <a href="https://wa.me/918921387392" class="text-gray-600 hover:text-green-600">+91 95671 02422 (WhatsApp)</a>
            </div>
          </div>
          
          <div>
            <h4 class="font-semibold text-gray-800 mb-3 flex items-center gap-2">
              <div class="w-8 h-8 bg-gradient-to-br from-dark-blue to-navy rounded-full flex items-center justify-center">
                <i class="fas fa-clock text-golden text-sm"></i>
              </div>
              Hours:
            </h4>
            <p class="text-gray-600 pl-10">
              Monday - Saturday: 10:00 AM - 8:00 PM<br>
              Sunday: Holiday
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ###################################--END--########################################## -->

<?php include ('includes/footer.php'); ?>

</body>
</html>