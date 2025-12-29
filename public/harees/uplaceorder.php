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

// Check if cart exists
if (!isset($_SESSION['cart'])) {
    header('Location: ucart');
    exit();
}

// Get cart data from session
$cartItems = $_SESSION['cart'];
$cartTotal = $_SESSION['cart_total'];
$cartCount = $_SESSION['cart_count'];
$discountAmount = $_SESSION['discount_amount'] ?? 0;

// echo $cartItems . ' ,' . $cartTotal . ' ,' . $cartCount . ' ,' . $discountAmount; 

include('includes/dbconnect.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Your Details</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head><br> <br>


<?php
// Assuming session already started, and $conn is your database connection
$userid = $_SESSION['userid'];
$fullname = $pincode = $address1 = $city = $state = $email = $phone = '';

if ($userid) {
    $stmt = $conn->prepare("SELECT email, phone, fullname, pincode, address1, city, state FROM users WHERE id = ?");
    $stmt->bind_param("i", $userid);
    $stmt->execute();
    $stmt->bind_result($email, $phone, $fullname, $pincode, $address1, $city, $state);
    $stmt->fetch();
    $stmt->close();
}
?>



<div class="container mx-auto px-4 py-8">
    <div class="grid lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
        <!-- Main Content -->
        <div class="lg:col-span-2">
            <form id="checkoutForm" class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-8 border border-golden/20 animate-fade-in" action="process_order.php" method="POST">
                <!-- Header -->
                <div class="mb-8">
                    <h1 class="text-3xl font-bold bg-gradient-to-r from-dark-blue to-navy bg-clip-text text-transparent mb-2">
                        Your Details
                    </h1>
                    <p class="text-gray-600">Required to Save Cart and Send Order Updates</p>
                </div>

                <!-- Contact Information -->
                <div class="mb-8">
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Email -->
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-dark-blue group-focus-within:text-navy transition-colors"></i>
                            </div>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                required
                                class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-golden/30 rounded-xl focus:border-dark-blue focus:ring-4 focus:ring-golden/20 transition-all duration-300 hover:shadow-md focus:outline-none"
                                value="<?php echo $email; ?>" />
                            <label for="email" class="absolute -top-2 left-3 px-2 bg-white text-xs text-dark-blue font-medium">
                                Email Address *
                            </label>
                        </div>

                        <!-- Mobile -->
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-mobile-alt text-dark-blue group-focus-within:text-navy transition-colors"></i>
                            </div>
                            <input
                                type="tel"
                                id="mobile"
                                name="mobile"
                                required
                                pattern="[0-9]{10}"
                                class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-golden/30 rounded-xl focus:border-dark-blue focus:ring-4 focus:ring-golden/20 transition-all duration-300 hover:shadow-md focus:outline-none"
                                value="<?php echo $phone; ?>" />
                            <label for="mobile" class="absolute -top-2 left-3 px-2 bg-white text-xs text-dark-blue font-medium">
                                Mobile Number *
                            </label>
                        </div>
                    </div>
                </div>

                <!-- WhatsApp Section -->
                <!-- <div class="mb-8">
                        <div class="bg-gradient-to-r from-golden to-amber-500 rounded-xl p-6 text-dark-blue shadow-lg border border-golden/30">
                            <div class="flex items-center gap-3 mb-4">
                                <i class="fab fa-whatsapp text-2xl text-green-600"></i>
                                <span class="font-semibold text-navy">Would you like to receive notifications on WhatsApp? (Optional)</span>
                            </div>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fab fa-whatsapp text-green-600"></i>
                                </div>
                                <input 
                                    type="tel" 
                                    id="whatsapp"   
                                    name="whatsapp"
                                    value="<?php echo $phone; ?>"
                                    pattern="[0-9]{10}"
                                    class="w-full pl-12 pr-4 py-3 bg-white/80 border-2 border-white/50 rounded-lg focus:border-dark-blue focus:ring-4 focus:ring-dark-blue/20 transition-all duration-300 text-navy placeholder-gray-500 focus:outline-none"
                                    placeholder="WhatsApp Number (Optional)"
                                />
                            </div>
                        </div>
                    </div> -->

                <!-- Delivery Type -->
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-navy mb-2">Delivery Type</h2>
                    <p class="text-gray-600 mb-6">Please choose preferred type of delivery.</p>

                    <div class="space-y-4">
                        <!-- Home Delivery -->
                        <label class="block cursor-pointer group">
                            <div class="flex items-center justify-between p-6 bg-white/80 border-2 border-golden/30 rounded-xl hover:border-dark-blue hover:shadow-lg transition-all duration-300 group-hover:bg-white delivery-option">
                                <div class="flex items-center gap-4">
                                    <div class="p-3 bg-golden/20 rounded-lg group-hover:bg-golden/30 transition-colors">
                                        <i class="fas fa-home text-dark-blue text-xl"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-navy group-hover:text-dark-blue transition-colors">
                                            Home Delivery
                                        </h3>
                                        <p class="text-sm text-gray-600">Get your order delivered to your doorstep</p>
                                    </div>
                                </div>
                                <input
                                    type="radio"
                                    id="delivery-home"
                                    name="delivery"
                                    value="home"
                                    checked
                                    required
                                    class="w-5 h-5 text-dark-blue border-2 border-golden focus:ring-golden focus:ring-2" />
                            </div>
                        </label>

                        <!-- Store Pickup -->
                        <label class="block cursor-pointer group">
                            <div class="flex items-center justify-between p-6 bg-white/80 border-2 border-golden/30 rounded-xl hover:border-dark-blue hover:shadow-lg transition-all duration-300 group-hover:bg-white delivery-option">
                                <div class="flex items-center gap-4">
                                    <div class="p-3 bg-dark-blue/10 rounded-lg group-hover:bg-dark-blue/20 transition-colors">
                                        <i class="fas fa-store text-dark-blue text-xl"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-navy group-hover:text-dark-blue transition-colors">
                                            Pick up from store
                                        </h3>
                                        <p class="text-sm text-gray-600">Buy now, pick up from our store at your convenience.</p>
                                    </div>
                                </div>
                                <input
                                    type="radio"
                                    id="delivery-pickup"
                                    name="delivery"
                                    value="pickup"
                                    required
                                    class="w-5 h-5 text-dark-blue border-2 border-golden focus:ring-golden focus:ring-2" />
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Address Section (Shows when Home Delivery is selected) -->
                <div id="address-section" class="mb-8">
                    <h2 class="text-2xl font-bold text-navy mb-2">Delivery Address</h2>
                    <p class="text-gray-600 mb-6">Please provide your delivery address.</p>

                    <div class="grid md:grid-cols-2 gap-6 mb-4">
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-user text-dark-blue group-focus-within:text-navy transition-colors"></i>
                            </div>
                            <input
                                type="text"
                                id="fullname"
                                name="fullname"
                                required
                                value="<?php echo htmlspecialchars($fullname); ?>"
                                class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-golden/30 rounded-xl focus:border-dark-blue focus:ring-4 focus:ring-golden/20 transition-all duration-300 hover:shadow-md focus:outline-none capitalize"
                                placeholder="Enter your full name" />
                            <label for="fullname" class="absolute -top-2 left-3 px-2 bg-white text-xs text-dark-blue font-medium">
                                Full Name *
                            </label>
                        </div>

                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-map-pin text-dark-blue group-focus-within:text-navy transition-colors"></i>
                            </div>
                            <input
                                type="text"
                                id="pincode"
                                name="pincode"
                                required
                                pattern="[0-9]{6}"
                                value="<?php echo htmlspecialchars($pincode); ?>"
                                class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-golden/30 rounded-xl focus:border-yellow-400 focus:ring-4 focus:ring-yellow-200 transition-all duration-300 hover:shadow-md focus:outline-none"
                                placeholder="Enter pincode" />

                            <label for="pincode" class="absolute -top-2 left-3 px-2 bg-white text-xs text-dark-blue font-medium">
                                Pincode *
                            </label>
                        </div>
                    </div>

                    <div class="relative group mb-4">
                        <div class="absolute top-4 left-0 pl-4 pointer-events-none">
                            <i class="fas fa-home text-dark-blue group-focus-within:text-navy transition-colors"></i>
                        </div>
                        <textarea
                            id="address"
                            name="address"
                            required
                            rows="3"
                            class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-golden/30 rounded-xl focus:border-dark-blue focus:ring-4 focus:ring-golden/20 transition-all duration-300 hover:shadow-md focus:outline-none resize-none capitalize"
                            placeholder="Enter your complete address"><?php echo htmlspecialchars($address1); ?></textarea>
                        <label for="address" class="absolute -top-2 left-3 px-2 bg-white text-xs text-dark-blue font-medium">
                            Complete Address *
                        </label>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-city text-dark-blue group-focus-within:text-navy transition-colors"></i>
                            </div>
                            <input
                                type="text"
                                id="city"
                                name="city"
                                required
                                value="<?php echo htmlspecialchars($city); ?>"
                                class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-golden/30 rounded-xl focus:border-dark-blue focus:ring-4 focus:ring-golden/20 transition-all duration-300 hover:shadow-md focus:outline-none capitalize"
                                placeholder="Enter city" />
                            <label for="city" class="absolute -top-2 left-3 px-2 bg-white text-xs text-dark-blue font-medium">
                                City *
                            </label>
                        </div>

                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-map text-dark-blue group-focus-within:text-navy transition-colors"></i>
                            </div>
                            <input
                                type="text"
                                id="state"
                                name="state"
                                required
                                value="<?php echo htmlspecialchars($state); ?>"
                                class="w-full pl-12 pr-4 py-4 bg-white/70 border-2 border-golden/30 rounded-xl focus:border-dark-blue focus:ring-4 focus:ring-golden/20 transition-all duration-300 hover:shadow-md focus:outline-none capitalize"
                                placeholder="Enter state" />
                            <label for="state" class="absolute -top-2 left-3 px-2 bg-white text-xs text-dark-blue font-medium">
                                State *
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Trust Indicators -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 pt-8 border-t border-golden/20">
                    <div class="text-center group">
                        <div class="w-16 h-16 mx-auto mb-3 bg-gradient-to-br from-golden to-amber-500 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <i class="fas fa-gem text-dark-blue text-2xl"></i>
                        </div>
                        <p class="text-xs font-semibold text-navy leading-tight">INDIA'S Customer friendly<br>ONLINE JEWELLERY STORE</p>
                    </div>
                    <div class="text-center group">
                        <div class="w-16 h-16 mx-auto mb-3 bg-gradient-to-br from-dark-blue to-navy rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <i class="fas fa-handshake text-golden text-2xl"></i>
                        </div>
                        <p class="text-xs font-semibold text-navy leading-tight">TRUSTED BY REPUTED<br>INVESTORS</p>
                    </div>
                    <div class="text-center group">
                        <div class="w-16 h-16 mx-auto mb-3 bg-gradient-to-br from-golden to-yellow-500 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <i class="fas fa-rupee-sign text-dark-blue text-2xl"></i>
                        </div>
                        <p class="text-xs font-semibold text-navy leading-tight">TRANSPARENT<br>PRICING</p>
                    </div>
                    <div class="text-center group">
                        <div class="w-16 h-16 mx-auto mb-3 bg-gradient-to-br from-dark-blue to-darker-blue rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <i class="fas fa-certificate text-golden text-2xl"></i>
                        </div>
                        <p class="text-xs font-semibold text-navy leading-tight">100% CERTIFIED<br>JEWELLERY</p>
                    </div>
                </div>
            </form>
        </div>

        <!-- Sidebar -->
        <div class="lg:col-span-1">
            <div class="sticky top-8">
                <!-- Delivery Check -->
                <!-- <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-6 mb-6 border border-golden/20 animate-slide-up">
                        <div class="flex justify-between items-center mb-4">
                            <span class="bg-golden/20 text-dark-blue px-3 py-1 rounded-full text-sm font-medium border border-golden/30">Delivery check</span>
                            <button type="button" id="pincode-btn" class="text-amber-600 hover:text-amber-700 font-medium text-sm transition-colors">
                                Enter pincode
                            </button>
                        </div>
                        <div id="pincode-input" class="hidden">
                            <input 
                                type="text" 
                                placeholder="Enter pincode"
                                class="w-full px-3 py-2 border border-golden/30 rounded-lg focus:border-dark-blue focus:outline-none"
                            />
                        </div>
                    </div> -->

                <!-- Order Summary -->
                <div class="bg-gradient-to-br from-dark-blue via-navy to-slate-900 rounded-2xl shadow-2xl p-6 text-white animate-slide-up border border-golden/20">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-xl font-bold text-golden">ORDER SUMMARY</h3>
                        <button type="button" class="text-golden/80 hover:text-golden transition-colors">
                            <span class="text-sm">View Details</span>
                            <i class="fas fa-chevron-down ml-2"></i>
                        </button>
                    </div>

                    <!-- <div class="space-y-4 mb-6">
                            <div class="flex justify-between items-center">
                                <span class="text-white/90">Total (<?php echo $cartCount ?>)</span>
                                <span class="font-semibold text-golden">₹ <?php echo number_format(ceil($cartTotal)); ?></span>
                            </div>
                        </div> -->
                    <div class="mt-4">
                        <!-- <h3 class="text-lg font-semibold mb-2">Items in your Cart:</h3> -->
                        <ul class="space-y-1 text-sm text-gray-700 text-white !text-white">
                            <?php foreach ($cartItems as $item): ?>
                                <li class="flex justify-between border-b py-1">
                                    <span><?php echo htmlspecialchars($item['name'] ?? 'Unnamed Product'); ?></span>
                                    <span>&#8377; <?php echo number_format(ceil($item['rate']), 2); ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="border-t border-golden/20 pt-4 mb-6">
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-semibold">Total Payable (<?php echo $cartCount ?> Items)</span>
                            <span class="text-xl font-bold text-golden">₹ <?php echo number_format(ceil($cartTotal)); ?></span>
                        </div>
                    </div>

                    <button type="submit" form="checkoutForm" class="w-full bg-gradient-to-r from-golden to-amber-500 text-dark-blue font-bold py-4 rounded-xl hover:from-amber-400 hover:to-golden transition-all duration-300 transform hover:scale-105 hover:shadow-lg mb-6">
                        PROCEED TO PAYMENT
                    </button>

                    <!-- Contact Info -->
                    <div class="text-center text-white/90 text-sm">
                        <p class="mb-2">Any Questions?</p>
                        <p>Please call us at <span class="font-semibold text-white-900">+91 8921 - 387 - 392</span> or
                            <a href="https://wa.me/918921387392" class="text-blue-600 hover:text-blue-700 font-medium">Chat with us on WhatsApp</a>
                    </div>

                    <!-- Payment Methods -->
                    <div class="mt-6 pt-6 border-t border-golden/20">
                        <div class="flex justify-center items-center space-x-3 text-golden/80">
                            <!-- <div class="bg-golden/20 px-2 py-1 rounded text-xs text-golden font-medium">CASH ON DELIVERY</div> -->
                            <i class="fab fa-cc-visa text-2xl"></i>
                            <i class="fab fa-cc-mastercard text-2xl"></i>
                            <i class="fab fa-cc-amex text-2xl"></i>
                            <span class="text-xs bg-golden/20 px-2 py-1 rounded text-golden font-medium">RuPay</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chat Widget -->
<!-- <div class="fixed bottom-6 right-6 z-50">
        <button type="button" class="w-14 h-14 bg-gradient-to-br from-golden to-amber-500 hover:from-amber-400 hover:to-golden text-dark-blue rounded-full shadow-2xl hover:shadow-3xl transition-all duration-300 transform hover:scale-110 animate-pulse-slow border-2 border-dark-blue/20">
            <i class="fas fa-comments text-xl"></i>
        </button>
    </div> -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Form validation
        const form = document.getElementById('checkoutForm');
        const addressSection = document.getElementById('address-section');
        const deliveryRadios = document.querySelectorAll('input[name="delivery"]');

        // Toggle address section based on delivery type
        function toggleAddressSection() {
            const homeDelivery = document.getElementById('delivery-home').checked;
            if (homeDelivery) {
                addressSection.style.display = 'block';
                // Make address fields required
                document.querySelectorAll('#address-section input, #address-section textarea').forEach(field => {
                    field.required = true;
                });
            } else {
                addressSection.style.display = 'none';
                // Remove required from address fields
                document.querySelectorAll('#address-section input, #address-section textarea').forEach(field => {
                    field.required = false;
                });
            }
        }

        // Initial toggle
        toggleAddressSection();

        // Listen for delivery type changes
        deliveryRadios.forEach(radio => {
            radio.addEventListener('change', toggleAddressSection);
        });

        // Radio button interactions
        deliveryRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                // Remove active state from all options
                document.querySelectorAll('.delivery-option').forEach(option => {
                    option.classList.remove('border-dark-blue', 'bg-golden/10', 'shadow-lg');
                });

                // Add active state to selected option
                if (this.checked) {
                    const container = this.closest('label').querySelector('.delivery-option');
                    container.classList.add('border-dark-blue', 'bg-golden/10', 'shadow-lg');
                }
            });
        });

        // Set initial active state
        const checkedRadio = document.querySelector('input[name="delivery"]:checked');
        if (checkedRadio) {
            const container = checkedRadio.closest('label').querySelector('.delivery-option');
            container.classList.add('border-dark-blue', 'bg-golden/10', 'shadow-lg');
        }

        // Pincode toggle
        const pincodeBtn = document.getElementById('pincode-btn');
        const pincodeInput = document.getElementById('pincode-input');

        pincodeBtn.addEventListener('click', function() {
            pincodeInput.classList.toggle('hidden');
            this.textContent = pincodeInput.classList.contains('hidden') ? 'Enter pincode' : 'Hide';
        });

        // Form submission
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            // Basic validation
            const requiredFields = form.querySelectorAll('input[required], textarea[required]');
            let isValid = true;

            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('border-red-500');
                    isValid = false;
                } else {
                    field.classList.remove('border-red-500');
                }
            });

            if (!isValid) {
                e.preventDefault();
                alert('Please fill in all required fields');
                return false;
            }
            // else {
            //     alert('Please fill in all required fields');
            // }
            return true;
        });

        // Input validation on type
        document.getElementById('email').addEventListener('input', function() {
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (emailPattern.test(this.value)) {
                this.classList.remove('border-red-500');
                this.classList.add('border-green-500');
            } else {
                this.classList.remove('border-green-500');
                this.classList.add('border-red-500');
            }
        });

        // Mobile number formatting
        document.getElementById('mobile').addEventListener('input', function() {
            let value = this.value.replace(/[^\d+]/g, '');
            if (!value.startsWith('+')) {
                value = '+' + value;
            }
            this.value = value;
        });

        // WhatsApp number formatting
        document.getElementById('whatsapp').addEventListener('input', function() {
            let value = this.value.replace(/[^\d+]/g, '');
            if (!value.startsWith('+')) {
                value = '+' + value;
            }
            this.value = value;
        });

        // Pincode validation
        document.getElementById('pincode').addEventListener('input', function() {
            this.value = this.value.replace(/[^\d]/g, '').slice(0, 6);
        });

        // Animate elements on scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        });

        // Add hover effects to trust indicators
        const trustIndicators = document.querySelectorAll('.group');
        trustIndicators.forEach(indicator => {
            indicator.addEventListener('mouseenter', function() {
                const icon = this.querySelector('i');
                if (icon) {
                    icon.style.transform = 'rotate(5deg)';
                    icon.style.transition = 'transform 0.3s ease';
                }
            });

            indicator.addEventListener('mouseleave', function() {
                const icon = this.querySelector('i');
                if (icon) {
                    icon.style.transform = 'rotate(0deg)';
                }
            });
        });
    });
</script>


<!-- ###################################--END--########################################## -->

<?php include('includes/footer.php'); ?>
</body>

</html>