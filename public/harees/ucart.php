<!DOCTYPE html>
<html lang="en">
<?php
session_start();

// Initialize variables at the beginning
$couponError = '';
$userid = $_SESSION['userid'] ?? null;
$allProducts = [];
$cartTotal = 0;

if (isset($_SESSION['userid'])) {
    include('includes/uhead.php');
} else {
    include('includes/head.php');
    include('includes/header.php');
    include('includes/navbar.php');
}

include('includes/dbconnect.php');
include('functionsFE.php');

$userid = $_SESSION['userid'] ?? null;
$allProducts = [];
$cartTotal = 0;
$discountAmount = 0;
$finalTotal = 0;

if ($userid) {
    $cartQuery = "SELECT * FROM cart WHERE userid = ?";
    $stmt = $conn->prepare($cartQuery);
    $stmt->bind_param("i", $userid);
    $stmt->execute();
    $cartResult = $stmt->get_result();

    while ($cartRow = $cartResult->fetch_assoc()) {
        $table_name = $cartRow['table_name'];
        $product_code = $cartRow['product_code'];
        $id = $cartRow['productid'];

        $productQuery = "SELECT * FROM `$table_name` WHERE product_code = ?  AND stock_quantity > 0 LIMIT 1";
        $productStmt = $conn->prepare($productQuery);
        $productStmt->bind_param("s", $product_code);
        $productStmt->execute();
        $productResult = $productStmt->get_result();

        while ($productRow = $productResult->fetch_assoc()) {
            $productRow['table_name'] = $table_name;
            $productRow['cart_id'] = $cartRow['id'];
            $productRow['productid'] = $id;

            $data = displayRate($conn, $product_code, $table_name);
            $productRow['rate'] = ceil($data[0]);
            $productRow['name'] = $productRow['name'] ?? 'Unnamed';
            $productRow['quantity'] = 1; // Default quantity, can be modified

            $allProducts[] = $productRow;
            $cartTotal += $productRow['rate'];
        }

        $productStmt->close();
    }

    $stmt->close();
    
    // Calculate discount (example: 10% discount for orders above 150000)
    if ($cartTotal > 150000) {
        $discountAmount = $cartTotal * 0.10;
    }
    $finalTotal = $cartTotal - $discountAmount;
    
    // Store cart data in session for order processing
    $_SESSION['cart'] = $allProducts;
    $_SESSION['cart_total'] = $cartTotal;
    $_SESSION['cart_count'] = count($allProducts);
}   
?>

<head>
    <!-- Tailwind CSS CDN -->
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
                }
            }
        }
    </script>
    <style>
        /* Fix for mobile image spacing */
        @media (max-width: 768px) {
            .mobile-product-card {
                display: flex;
                flex-direction: column;
                gap: 1rem;
            }
            
            .mobile-image-container {
                align-self: flex-start;
                flex-shrink: 0;
            }
            
            .mobile-content-container {
                flex: 1;
                min-height: 0;
            }
            
            /* Remove extra spacing */
            .mobile-product-card .space-y-3 > * + * {
                margin-top: 0.75rem;
            }
            
            /* Ensure proper image sizing */
            .product-image {
                width: 100%;
                max-width: 120px;
                height: 120px;
                object-fit: contain;
                background-color: #f9fafb;
                border-radius: 0.5rem;
            }
        }
        
        @media (min-width: 769px) {
            .desktop-product-card {
                display: flex;
                align-items: flex-start;
                gap: 1rem;
            }
            
            .product-image {
                width: 128px;
                height: 128px;
                object-fit: contain;
                background-color: #f9fafb;
                border-radius: 0.5rem;
                flex-shrink: 0;
            }
        }
    </style>
</head>

<body class="bg-gray-50 font-sans">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-8">
        <?php if (count($allProducts) == 0): ?>
            <!-- Empty Cart State -->
            <div class="bg-white rounded-lg shadow-sm p-12 text-center">
                <div class="text-6xl mb-4">🛒</div>
                <h2 class="text-2xl font-semibold text-gray-700 mb-2">Your cart is empty</h2>
                <p class="text-gray-500">Add some items to get started</p>
                <button onclick="window.location.href='index'" class="mt-6 bg-yellow-400 hover:bg-yellow-600 text-white px-6 py-3 rounded-lg font-medium transition-colors">
                    Continue Shopping
                </button>
            </div>
        <?php else: ?>
            <!-- Cart with Items -->
            <div class="lg:grid lg:grid-cols-12 lg:gap-8 relative">
                <!-- Cart Items Section -->
                <div class="lg:col-span-8">
                    <div class="bg-white rounded-lg shadow-sm">
                        <!-- Cart Header -->
                        <div class="px-6 py-4 border-b border-gray-200">
                            <h1 class="text-xl font-semibold text-gray-900">
                                My Cart (<?php echo count($allProducts); ?> items)
                            </h1>
                        </div>

                        <!-- Cart Items -->
                        <div class="divide-y divide-gray-200">
                            <?php foreach ($allProducts as $index => $product): ?>
                                <div class="p-4 md:p-6">
                                    <!-- Mobile Layout -->
                                    <div class="md:hidden">
                                        <!-- Top Row: Image + Basic Info -->
                                        <div class="flex gap-3 mb-4">
                                            <!-- Product Image -->
                                            <div class="flex-shrink-0">
                                                <a href="product-detail?id=<?php echo $product['productid']; ?>&product_code=<?php echo $product['product_code']; ?>&table=<?php echo $product['table_name']; ?>">
                                                    <img src="ims/internal/<?php echo $product['img2']; ?>" 
                                                        alt="<?php echo htmlspecialchars($product['name']); ?>" 
                                                        class="w-24 h-24 object-contain bg-gray-50 rounded-lg">
                                                </a>
                                            </div>

                                            <!-- Basic Product Info -->
                                            <div class="flex-1 min-w-0">
                                                <h3 class="text-base font-medium text-gray-900 mb-1 line-clamp-2">
                                                    <a href="product-detail?id=<?php echo $product['productid']; ?>&product_code=<?php echo $product['product_code']; ?>&table=<?php echo $product['table_name']; ?>" class="hover:text-blue-900">
                                                        <?php echo htmlspecialchars($product['name']); ?>
                                                    </a>
                                                </h3>
                                                
                                                <p class="text-xs text-gray-500 mb-2">
                                                    Code: <?php echo htmlspecialchars($product['product_code']); ?>
                                                </p>

                                                <!-- Price -->
                                                <div class="text-lg font-bold text-gray-900 mb-2">
                                                    ₹ <?php echo number_format(ceil($product['rate'])); ?>
                                                </div>

                                                <!-- Product Specifications -->
                                                <div class="space-y-1 text-xs">
                                                    <?php if (isset($product['metal_id'])): ?>
                                                        <div class="flex justify-between">
                                                            <span class="text-gray-600 capitalize">Metal:</span>
                                                            <span class="font-medium text-gray-900 capitalize">
                                                                <?php
                                                                $metalId = $product['metal_id'];
                                                                $metalStmt = $conn->prepare("SELECT name FROM metals WHERE metal_id = ?");
                                                                $metalStmt->bind_param("i", $metalId);
                                                                $metalStmt->execute();
                                                                $metalStmt->bind_result($metalName);
                                                                if ($metalStmt->fetch()) {
                                                                    echo htmlspecialchars($metalName);
                                                                } else {
                                                                    echo "Unknown";
                                                                }
                                                                $metalStmt->close();
                                                                ?>
                                                            </span>
                                                        </div>
                                                    <?php endif; ?>
                                                    
                                                    <?php if (isset($product['stone_desc'])): ?>
                                                        <div class="flex justify-between">
                                                            <span class="text-gray-600">Stone:</span>
                                                            <span class="font-medium text-gray-900"><?php echo htmlspecialchars($product['stone_desc']); ?></span>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Discount Banner -->
                                        <?php if ($cartTotal > 150000): ?>
                                            <div class="inline-flex items-center bg-red-50 text-red-700 px-3 py-1 rounded-full text-xs font-medium mb-3">
                                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                </svg>
                                                Upto 10% off on Making Charges above Rs. 1,50,000 order value
                                            </div>
                                        <?php endif; ?>

                                        <!-- Product Features -->
                                        <div class="bg-gray-50 rounded-lg p-3 mb-3">
                                            <div class="grid grid-cols-1 gap-2">
                                                <div class="flex items-center text-xs text-gray-600">
                                                    <div class="w-4 h-4 bg-green-500 rounded-full flex items-center justify-center mr-2 flex-shrink-0">
                                                        <svg class="w-2.5 h-2.5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </div>
                                                    Insured Delivery
                                                </div>
                                                <div class="flex items-center text-xs text-gray-600">
                                                    <div class="w-4 h-4 bg-green-500 rounded-full flex items-center justify-center mr-2 flex-shrink-0">
                                                        <svg class="w-2.5 h-2.5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </div>
                                                    Online & Offline support.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Remove Button -->
                                        <form method="POST" action="remove_cart_item.php" onsubmit="return confirm('Remove this item from cart?');">
                                            <input type="hidden" name="cart_id" value="<?php echo $product['cart_id']; ?>">
                                            <button type="submit" class="w-full px-4 py-2 border border-red-300 text-red-600 rounded-md text-sm font-medium hover:bg-red-50 transition-colors">
                                                REMOVE
                                            </button>
                                        </form>
                                    </div>

                                    <!-- Desktop Layout -->
                                    <div class="hidden md:flex desktop-product-card">
                                        <!-- Product Image -->
                                        <a href="product-detail?id=<?php echo $product['productid']; ?>&product_code=<?php echo $product['product_code']; ?>&table=<?php echo $product['table_name']; ?>">
                                            <div class="flex-shrink-0">
                                                <img src="ims/internal/<?php echo $product['img2']; ?>" 
                                                    alt="<?php echo htmlspecialchars($product['name']); ?>" 
                                                    class="product-image">
                                            </div>
                                        </a>

                                        <!-- Product Details -->
                                        <div class="flex-1 min-w-0">
                                            <h3 class="text-lg font-medium text-gray-900 mb-1">
                                                <a href="product-detail?id=<?php echo $product['productid']; ?>&product_code=<?php echo $product['product_code']; ?>&table=<?php echo $product['table_name']; ?>" class="hover:text-blue-900">
                                                    <?php echo htmlspecialchars($product['name']); ?>
                                                </a>
                                            </h3>
                                            
                                            <p class="text-sm text-gray-500 mb-3">
                                                Product Code: <?php echo htmlspecialchars($product['product_code']); ?>
                                            </p>

                                            <!-- Discount Banner -->
                                            <?php if ($cartTotal > 150000): ?>
                                                <div class="inline-flex items-center bg-red-50 text-red-700 px-3 py-1 rounded-full text-xs font-medium mb-3">
                                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    Upto 10% off on Making Charges above Rs. 1,50,000 order value
                                                </div>
                                            <?php endif; ?>

                                            <!-- Price -->
                                            <div class="text-2xl font-bold text-gray-900 mb-4">
                                                ₹ <?php echo number_format(ceil($product['rate'])); ?>
                                            </div>

                                            <!-- Product Specifications -->
                                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-4">
                                                <?php if (isset($product['metal_id'])): ?>
                                                    <div class="flex justify-between">
                                                        <span class="text-sm text-gray-600 capitalize">Metal</span>
                                                        <span class="text-sm font-medium text-gray-900 capitalize">
                                                            <?php
                                                            $metalId = $product['metal_id'];
                                                            $metalStmt = $conn->prepare("SELECT name FROM metals WHERE metal_id = ?");
                                                            $metalStmt->bind_param("i", $metalId);
                                                            $metalStmt->execute();
                                                            $metalStmt->bind_result($metalName);
                                                            if ($metalStmt->fetch()) {
                                                                echo htmlspecialchars($metalName);
                                                            } else {
                                                                echo "Unknown";
                                                            }
                                                            $metalStmt->close();
                                                            ?>
                                                        </span>
                                                    </div>
                                                <?php endif; ?>
                                                
                                                <?php if (isset($product['stone_desc'])): ?>
                                                    <div class="flex justify-between">
                                                        <span class="text-sm text-gray-600">Stone</span>
                                                        <span class="text-sm font-medium text-gray-900"><?php echo htmlspecialchars($product['stone_desc']); ?></span>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <!-- Right Side Column - Features + Remove Button (Desktop Only) -->
                                        <div class="flex flex-col w-64 flex-shrink-0 gap-4">
                                            <!-- Product Features -->
                                            <div class="bg-gray-50 rounded-lg p-4">
                                                <div class="space-y-3">
                                                    <div class="flex items-center text-sm text-gray-600">
                                                        <div class="w-5 h-5 bg-green-500 rounded-full flex items-center justify-center mr-2">
                                                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                            </svg>
                                                        </div>
                                                        Insured Delivery
                                                    </div>
                                                    <div class="flex items-center text-sm text-gray-600">
                                                        <div class="w-5 h-5 bg-green-500 rounded-full flex items-center justify-center mr-2">
                                                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                            </svg>
                                                        </div>
                                                        Online & Offline support.
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Remove Button -->
                                            <form method="POST" action="remove_cart_item.php" onsubmit="return confirm('Remove this item from cart?');" class="w-full">
                                                <input type="hidden" name="cart_id" value="<?php echo $product['cart_id']; ?>">
                                                <button type="submit" class="w-full px-4 py-2 border border-red-300 text-red-600 rounded-md text-sm font-medium hover:bg-red-50 transition-colors">
                                                    REMOVE
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- Order Summary Sidebar - Fixed Position -->
                <div class="lg:col-span-4 mt-8 lg:mt-0">
                    <div class="bg-gradient-to-br from-dark-blue via-navy to-slate-900 rounded-2xl shadow-2xl p-6 text-white border border-golden/20 lg:sticky lg:top-8 lg:max-h-screen lg:overflow-y-auto">
                        <div class="border-b border-yellow-400 pb-4 mb-4">
                            <h2 class="text-xl font-bold text-yellow-400">ORDER SUMMARY</h2>
                        </div>

                        <div class="space-y-4">
                            <div class="flex justify-between text-sm">
                                <span class="text-white/80">Total (<?php echo count($allProducts); ?> Items)</span>
                                <span class="font-semibold text-yellow-300">₹ <?php echo number_format(ceil($cartTotal)); ?></span>
                            </div>

                            <div class="border-t border-yellow-400 pt-4">
                                <div class="flex justify-between text-lg font-semibold">
                                    <span class="text-white">Total Payable</span>
                                    <span class="text-xl font-bold text-yellow-300">₹ <?php echo number_format(ceil($cartTotal)); ?></span>
                                </div>
                            </div>

                            <div class="text-sm text-white/80">
                                <div class="flex items-center mb-1">
                                    <svg class="w-4 h-4 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                    </svg>
                                    Delivery expected between <?php echo date('D, M j', strtotime('+3 days')); ?> - <?php echo date('D, M j', strtotime('+5 days')); ?>
                                </div>
                            </div>

                            <form action="uplaceorder" method="post">
                                <button type="submit" name="proceed_order" class="w-full bg-gradient-to-r from-yellow-400 to-amber-500 text-blue-900 font-bold py-3 px-4 rounded-xl hover:from-amber-400 hover:to-yellow-400 transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                                    PLACE ORDER
                                </button>
                            </form>

                            <div class="border-t border-yellow-400 pt-4 text-sm">
                                <p class="font-medium text-white mb-2">Payment Options:</p>
                                <div class="flex flex-wrap gap-2 text-white/90">
                                    <span class="bg-white/10 px-2 py-1 rounded text-sm">Credit Card</span>
                                    <span class="bg-white/10 px-2 py-1 rounded text-sm">Debit Card</span>
                                    <span class="bg-white/10 px-2 py-1 rounded text-sm">Net Banking</span>
                                    <span class="bg-white/10 px-2 py-1 rounded text-sm">UPI</span>
                                </div>
                            </div>

                            <div class="border-t border-yellow-400 pt-4 text-sm text-white/80">
                                <p class="mb-2">Any Questions?</p>
                                <p>Please call us at <span class="font-semibold text-white">+91 8921 - 387 - 392</span> or 
                                    <a href="https://wa.me/918921387392" class="text-blue-400 hover:text-blue-300 font-medium">Chat with us on WhatsApp</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <?php include('includes/footer.php'); ?>

    <script>
    // Show coupon form when button is clicked
    document.getElementById('showCouponBtn')?.addEventListener('click', function() {
        const couponForm = document.getElementById('couponForm');
        couponForm.classList.toggle('hidden');
    });

    // Handle coupon form submission
    document.getElementById('couponApplyForm')?.addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent page reload
        
        const errorElement = document.getElementById('couponError');
        errorElement.textContent = "Invalid coupon code"; // Always show this message
        errorElement.classList.remove('hidden');
        
        // Optional: Hide after 3 seconds
        setTimeout(() => {
            errorElement.classList.add('hidden');
        }, 3000);
    });
    </script>
</body>
</html>