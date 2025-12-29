<?php
session_start();
include('includes/dbconnect.php');

if (isset($_SESSION['userid'])) {
    include('includes/uhead.php');
} else {
    include('includes/head.php');
    include('includes/header.php');
    include('includes/navbar.php');
}

include('functionsFE.php');

// Get order ID from URL
$order_id = $_GET['order_id'] ?? null;

if (!$order_id) {
    header('Location: umyorders');
    exit();
}

// Fetch order details
$orderQuery = "SELECT * FROM orders WHERE id = ? AND userid = ?";
$stmt = $conn->prepare($orderQuery);
$stmt->bind_param("ii", $order_id, $_SESSION['userid']);
$stmt->execute();
$orderResult = $stmt->get_result();
$order = $orderResult->fetch_assoc();
$stmt->close();

if (!$order) {
    header('Location: umyorders');
    exit();
}

// Fetch product details
$productQuery = "SELECT * FROM `{$order['table_name']}` WHERE product_code = ? LIMIT 1";
$productStmt = $conn->prepare($productQuery);
$productStmt->bind_param("s", $order['product_code']);
$productStmt->execute();
$productResult = $productStmt->get_result();
$product = $productResult->fetch_assoc();
$productStmt->close();

// Get product rate
$data = displayRate($conn, $order['product_code'], $order['table_name']);
$product['rate'] = $data[0];

// Determine status
$statusValue = $order['status'] ?? 0;
$orderDate = new DateTime($order['created_at']);
$deliveryDate = clone $orderDate;
$deliveryDate->modify('+3 days');

$statusInfo = [
    0 => ['text' => 'Order Complete Processing', 'class' => 'status-processing', 'color' => 'text-yellow-600'],
    1 => ['text' => 'Order Complete Processing', 'class' => 'status-processing', 'color' => 'text-yellow-600'],
    2 => ['text' => 'Delivered on ' . $deliveryDate->format('M d'), 'class' => 'status-shipped', 'color' => 'text-orange-600'],
    3 => ['text' => 'Delivered on ' . $deliveryDate->format('M d'), 'class' => 'status-delivered', 'color' => 'text-green-600']
];

$currentStatus = $statusInfo[$statusValue] ?? $statusInfo[0];

// Handle product image
$imagePath = 'placeholder.jpg';
if (!empty($product['img1_webp'])) {
    $imagePath = "ims/internal/" . $product['img1_webp'];
} elseif (!empty($product['img2'])) {
    $imagePath = "ims/internal/" . $product['img2'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Your Order - Your Store</title>
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
    <style>
        .status-badge {
            display: inline-flex;
            align-items: center;
            font-size: 14px;
            font-weight: 600;
            padding: 6px 16px;
            border-radius: 20px;
            letter-spacing: 0.5px;
        }
        .status-delivered {
            background-color: #dcfce7;
            color: #166534;
        }
        .status-shipped {
            background-color: #dbeafe;
            color: #1d4ed8;
        }
        .status-processing {
            background-color: #fef3c7;
            color: #92400e;
        }
        .product-image {
            border-radius: 12px;
            border: 1px solid rgba(251, 191, 36, 0.2);
            width: 140px;
            height: 140px;
            object-fit: cover;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        .tracking-iframe {
            width: 100%;
            height: 600px;
            border: 1px solid rgba(251, 191, 36, 0.2);
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        .progress-step {
            position: relative;
            padding-left: 2rem;
        }
        .progress-step:before {
            content: '';
            position: absolute;
            left: 0.5rem;
            top: 0;
            height: 100%;
            width: 2px;
            background-color: #e2e8f0;
        }
        .progress-step:first-child:before {
            top: 1.5rem;
            height: calc(100% - 1.5rem);
        }
        .progress-step:last-child:before {
            height: 1.5rem;
        }
        .progress-step.completed:before {
            background-color: #10b981;
        }
        .progress-step.active:before {
            background-color: #3b82f6;
        }
        .step-icon {
            position: absolute;
            left: 0;
            top: 0;
            width: 1.5rem;
            height: 1.5rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #e2e8f0;
            color: #64748b;
        }
        .progress-step.completed .step-icon {
            background-color: #10b981;
            color: white;
        }
        .progress-step.active .step-icon {
            background-color: #3b82f6;
            color: white;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 min-h-screen">
    <main class="pt-24 pb-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <!-- Page Header -->
            <div class="text-center mb-12 animate-fade-in">
                <h1 class="text-4xl font-bold bg-gradient-to-r from-dark-blue to-navy bg-clip-text text-transparent mb-4">
                    Track Your Order
                </h1>
                <p class="text-gray-600 text-lg">Check the status of your delivery</p>
            </div>

            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Main Content -->
                <div class="lg:col-span-2 space-y-8">
                    <!-- Order Summary Card -->
                    <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 animate-fade-in">
                        <div class="p-8">
                            <h2 class="text-2xl font-bold text-navy flex items-center gap-3 mb-6">
                                <div class="w-10 h-10 bg-gradient-to-br from-golden to-amber-500 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-box-open text-dark-blue text-lg"></i>
                                </div>
                                Order Summary
                            </h2>

                            <div class="flex flex-col md:flex-row gap-6">
                                <!-- Product Image -->
                                <div class="flex-shrink-0">
                                    <img src="<?php echo htmlspecialchars($imagePath); ?>" 
                                         alt="<?php echo htmlspecialchars($product['name'] ?? 'Product image'); ?>" 
                                         class="product-image"
                                         onerror="this.src='placeholder.jpg'">
                                </div>
                                
                                <!-- Product Details -->
                                <div class="flex-1">
                                    <div class="flex justify-between items-start mb-4">
                                        <div>
                                            <h2 class="text-xl font-semibold text-gray-900 mb-1">
                                                <?php echo htmlspecialchars($product['name'] ?? 'Product'); ?>
                                            </h2>
                                            <!-- <p class="text-sm text-gray-500">Order #<?php echo htmlspecialchars($order_id); ?></p> -->
                                        </div>
                                        <span class="text-xl font-bold text-indigo-600">
                                            ₹<?php echo number_format($product['rate'] ?? 0, 0); ?>
                                        </span>
                                    </div>
                                    
                                    <!-- Order Status -->
                                    <div class="mb-6">
                                        <div class="flex items-center justify-between mb-3">
                                            <span class="text-sm font-medium text-gray-600">Order Status</span>
                                            <span class="<?php echo $currentStatus['class']; ?> status-badge">
                                                <?php if ($statusValue == 3): ?>
                                                    Delivered
                                                <?php elseif ($statusValue == 2): ?>
                                                    Shipped
                                                <?php else: ?>
                                                    Processing
                                                <?php endif; ?>
                                            </span>
                                        </div>
                                        
                                        <!-- Progress Bar -->
                                        <?php
                                                    // Determine width and color
                                                    $progressPercent = 0;
                                                    $progressColor = 'bg-emerald-500';

                                                    if ($statusValue == 2) {
                                                        $progressPercent = 50;
                                                        $progressColor = 'bg-orange-500';
                                                    } elseif ($statusValue == 3) {
                                                        $progressPercent = 100;
                                                        $progressColor = 'bg-green-500';
                                                    } elseif (in_array($statusValue, [0, 1])) {
                                                        $progressPercent = 10;
                                                        $progressColor = 'bg-yellow-500';
                                                    }
                                                ?>
                                                <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-slate-100">
                                                    <div style="width:<?php echo $progressPercent; ?>%" 
                                                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center <?php echo $progressColor; ?>">
                                                    </div>
                                                </div>
                                        <p class="text-sm text-gray-500">
                                            <?php echo $currentStatus['text']; ?>
                                        </p>
                                    </div>
                                    
                                    <!-- Order Dates -->
                                    <!-- <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
                                        <div class="bg-gradient-to-br from-gray-50 to-blue-50/30 p-4 rounded-xl border border-golden/20">
                                            <p class="text-gray-500">Order Placed : <?php echo $orderDate->format('M d, Y'); ?></p>
                                        </div>
                                        <?php if ($statusValue >= 1): ?>
                                        <div class="bg-gradient-to-br from-gray-50 to-blue-50/30 p-4 rounded-xl border border-golden/20">
                                            <p class="text-gray-500">Estimated Delivery</p>
                                            <p class="font-medium text-navy"><?php echo $deliveryDate->format('M d, Y'); ?></p>
                                        </div>
                                        <?php endif; ?>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Delivery Progress -->
                    <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 animate-fade-in">
                        <div class="p-8">
                            <h2 class="text-2xl font-bold text-navy flex items-center gap-3 mb-6">
                                <div class="w-10 h-10 bg-gradient-to-br from-dark-blue to-navy rounded-lg flex items-center justify-center">
                                    <i class="fas fa-truck text-golden text-lg"></i>
                                </div>
                                Delivery Progress
                            </h2>

                            <div class="space-y-6">
                                <!-- Step 1: Order Placed -->
                                <div class="progress-step completed">
                                    <div class="step-icon">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <div class="pl-6">
                                        <h3 class="font-semibold text-gray-800">Order Placed</h3>
                                        <p class="text-sm text-gray-600">Your order has been received</p>
                                        <p class="text-xs text-gray-500 mt-1"><?php echo $orderDate->format('M d, Y h:i A'); ?></p>
                                    </div>
                                </div>

                                <!-- Step 2: Processing -->
                                <div class="progress-step <?php echo $statusValue >= 1 ? 'completed' : ''; ?>">
                                    <div class="step-icon">
                                        <i class="fas <?php echo $statusValue >= 1 ? 'fa-check' : 'fa-circle-notch'; ?> text-xs"></i>
                                    </div>
                                    <div class="pl-6">
                                        <h3 class="font-semibold text-gray-800">Processing</h3>
                                        <p class="text-sm text-gray-600">Your order is being prepared for shipment</p>
                                        <?php if ($statusValue >= 1): ?>
                                            <p class="text-xs text-gray-500 mt-1"><?php echo $orderDate->modify('+1 day')->format('M d, Y h:i A'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <!-- Step 3: Shipped -->
                                <div class="progress-step <?php echo $statusValue >= 2 ? 'completed' : ''; ?>">
                                    <div class="step-icon">
                                        <i class="fas <?php echo $statusValue >= 2 ? 'fa-check' : 'fa-shipping-fast'; ?> text-xs"></i>
                                    </div>
                                    <div class="pl-6">
                                        <h3 class="font-semibold text-gray-800">Shipped</h3>
                                        <p class="text-sm text-gray-600">Your order is on its way to you</p>
                                        <?php if ($statusValue >= 2): ?>
                                            <p class="text-xs text-gray-500 mt-1"><?php echo $orderDate->modify('+1 day')->format('M d, Y h:i A'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <!-- Step 4: Delivered -->
                                <div class="progress-step <?php echo $statusValue == 3 ? 'completed' : ''; ?>">
                                    <div class="step-icon">
                                        <i class="fas <?php echo $statusValue == 3 ? 'fa-check' : 'fa-circle-notch'; ?> text-xs"></i>
                                    </div>
                                    <div class="pl-6">
                                        <h3 class="font-semibold text-gray-800">Delivered</h3>
                                        <p class="text-sm text-gray-600">Your order has been delivered</p>
                                        <?php if ($statusValue == 3): ?>
                                            <p class="text-xs text-gray-500 mt-1"><?php echo $deliveryDate->format('M d, Y h:i A'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- DTDC Tracking Section -->
                    <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 animate-fade-in">
                        <div class="p-8">
                            <h2 class="text-2xl font-bold text-navy flex items-center gap-3 mb-6">
                                <div class="w-10 h-10 bg-gradient-to-br from-rose-500 to-pink-600 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-truck text-white text-lg"></i>
                                </div>
                                DTDC Tracking
                            </h2>
                            
                            <p class="text-gray-600 mb-6">Track your package with DTDC using the tracking number below:</p>
                            
                            <div class="flex gap-2 mb-4">
                                <input type="text" id="dtdcTrackingNumber" 
                                    class="flex-1 px-4 py-3 border-2 border-golden/30 rounded-xl focus:ring-4 focus:ring-golden/20 focus:border-dark-blue transition-all duration-300" 
                                    value="PD985CV41" readonly>
                            </div>
                            
                            <a href="https://www.dtdc.in/trace.asp?strCnno=PD985CV41" 
                            target="_blank"
                            class="inline-block px-6 py-3 bg-gradient-to-r from-dark-blue to-navy text-white font-semibold rounded-xl hover:from-navy hover:to-dark-blue transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                                Track on DTDC Website
                            </a>
                            
                            <p class="text-sm text-gray-500 mt-4">
                                <i class="fas fa-info-circle mr-2"></i>
                                The tracking will open in a new window on DTDC's official website.
                            </p>
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

                        <!-- Quick Actions Card -->
                        <div class="bg-gradient-to-br from-golden via-amber-500 to-yellow-600 rounded-2xl shadow-2xl p-6 text-dark-blue animate-slide-up border border-golden/20">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-xl font-bold text-dark-blue flex items-center gap-2">
                                    <i class="fas fa-bolt"></i>
                                    QUICK ACTIONS
                                </h3>
                            </div>

                            <div class="space-y-4">
                                <a href="umyorders" class="block w-full bg-white/20 backdrop-blur-sm text-dark-blue font-bold py-4 px-6 rounded-xl hover:bg-white/30 transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-between group">
                                    <div class="flex items-center gap-3">
                                        <i class="fas fa-arrow-left text-dark-blue group-hover:scale-110 transition-transform"></i>
                                        <span>BACK TO ORDERS</span>
                                    </div>
                                </a>
                                
                                <a href="contact-us" class="block w-full bg-white/20 backdrop-blur-sm text-dark-blue font-bold py-4 px-6 rounded-xl hover:bg-white/30 transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-between group">
                                    <div class="flex items-center gap-3">
                                        <i class="fas fa-headset text-dark-blue group-hover:scale-110 transition-transform"></i>
                                        <span>CONTACT SUPPORT</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Order Details Card -->
                        <div class="bg-gradient-to-br from-dark-blue via-navy to-slate-900 rounded-2xl shadow-2xl p-6 text-white animate-slide-up border border-golden/20">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-xl font-bold text-golden flex items-center gap-2">
                                    <i class="fas fa-info-circle"></i>
                                    ORDER DETAILS
                                </h3>
                            </div>

                            <div class="space-y-4">
                                <div class="flex justify-between items-center">
                                    <span class="text-white/90 flex items-center gap-2">
                                        <i class="fas fa-hashtag text-golden text-sm"></i>
                                        Order Number
                                    </span>
                                    <span class="text-white font-semibold">#<?php echo htmlspecialchars($order_id); ?></span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-white/90 flex items-center gap-2">
                                        <i class="fas fa-calendar-day text-golden text-sm"></i>
                                        Order Date
                                    </span>
                                    <span class="text-white font-semibold"><?php echo $orderDate->format('M d, Y'); ?></span>
                                </div>
                                <!-- <div class="flex justify-between items-center">
                                    <span class="text-white/90 flex items-center gap-2">
                                        <i class="fas fa-money-bill-wave text-golden text-sm"></i>
                                        Payment Method
                                    </span>
                                    <span class="text-white font-semibold"><?php echo htmlspecialchars($order['payment_method'] ?? 'N/A'); ?></span>
                                </div> -->
                                <div class="flex justify-between items-center">
                                    <span class="text-white/90 flex items-center gap-2">
                                        <i class="fas fa-rupee-sign text-golden text-sm"></i>
                                        Total Amount
                                    </span>
                                    <span class="text-white font-semibold">₹<?php echo number_format($product['rate'] ?? 0, 0); ?></span>
                                </div>
                            </div>
                        </div>

                        <!-- Need Help Card -->
                        <!-- <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-6 border border-golden/20 animate-slide-up">
                            <h3 class="text-xl font-bold text-navy mb-4 flex items-center gap-2">
                                <i class="fas fa-question-circle text-golden"></i>
                                Need Help?
                            </h3>
                            <p class="text-gray-600 mb-4">If you have any questions about your order, our customer service team is happy to help.</p>
                            <div class="space-y-3">
                                <a href="tel:18004190066" class="flex items-center gap-3 text-dark-blue hover:text-navy transition-colors">
                                    <i class="fas fa-phone-alt text-golden"></i>
                                    <span>18004190066</span>
                                </a>
                                <a href="mailto:support@example.com" class="flex items-center gap-3 text-dark-blue hover:text-navy transition-colors">
                                    <i class="fas fa-envelope text-golden"></i>
                                    <span>support@example.com</span>
                                </a>
                                <a href="contact" class="flex items-center gap-3 text-dark-blue hover:text-navy transition-colors">
                                    <i class="fas fa-comments text-golden"></i>
                                    <span>Live Chat</span>
                                </a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const trackingForm = document.getElementById('dtdcTrackingForm');
        const trackingInput = document.getElementById('dtdcTrackingNumber');
        const trackingFrame = document.getElementById('dtdcTrackingFrame');
        
        // Auto-focus the tracking input
        trackingInput.focus();
        
        // Handle form submission
        trackingForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const trackingNumber = trackingInput.value.trim();
            
            if (trackingNumber) {
                // Update the iframe src with the tracking number
                trackingFrame.src = `https://www.dtdc.in/trace.asp?strCnno=${encodeURIComponent(trackingNumber)}`;
            }
        });
    });
    </script>

    <?php include('includes/footer.php'); ?>
</body>
</html>
<?php $conn->close(); ?>