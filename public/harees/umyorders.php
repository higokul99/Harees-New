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

$userid = $_SESSION['userid'] ?? null;
$allProducts = [];

if ($userid) {
    $orderQuery = "SELECT * FROM orders WHERE userid = ? ORDER BY status ASC";
    $stmt = $conn->prepare($orderQuery);
    $stmt->bind_param("i", $userid);
    $stmt->execute();
    $orderResult = $stmt->get_result();

    while ($orderRow = $orderResult->fetch_assoc()) {
        $table_name = $orderRow['table_name'];
        $product_code = $orderRow['product_code'];
        $id = $orderRow['productid'];
        $price = $product['rate'] ?? 0;

        // $productQuery = "SELECT * FROM `$table_name` WHERE product_code = ? LIMIT 1";
        $productQuery = "SELECT * FROM orders o
            JOIN `$table_name` g ON o.product_code = g.product_code 
            WHERE g.product_code = ? LIMIT 1";
        // echo $productQuery;
        $productStmt = $conn->prepare($productQuery);
        $productStmt->bind_param("s", $product_code);
        $productStmt->execute();
        $productResult = $productStmt->get_result();

        while ($productRow = $productResult->fetch_assoc()) {
            $productRow['table_name'] = $table_name;
            $productRow['order_id'] = $orderRow['id'];
            $productRow['productid'] = $id;
            $productRow['order_status'] = $orderRow['status'] ?? 0;
            $productRow['order_date'] = $orderRow['created_at'] ?? date('Y-m-d H:i:s');

            // $data = displayRate($conn, $product_code, $table_name);
            // $productRow['rate'] = $data[0];
            $productRow['quantity'] = 1;

            $allProducts[] = $productRow;
        }

        $productStmt->close();
    }

    $stmt->close();
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders - Your Store</title>
    <meta name="description" content="View your order history and track current orders">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#4f46e5',
                        'primary-light': '#6366f1',
                        'primary-dark': '#4338ca',
                        'secondary': '#10b981',
                        'accent': '#f59e0b',
                        'dark': '#1e293b',
                        'light': '#f8fafc'
                    },
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        
        .filter-sidebar {
            width: 280px;
            /* background: white; */
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
            border-right: 1px solid #e2e8f0;
            position: sticky;
            top: 80px;
            height: calc(100vh - 80px);
            overflow-y: auto;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        
        .filter-sidebar h2 {
            position: relative;
            padding-bottom: 12px;
            color: #082f49;
        }
        
        .filter-sidebar h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 3px;
            /* background: linear-gradient(90deg, #4f46e5, #6366f1); */
            background: linear-gradient(to bottom right, #00008b, #000080, #0f172a);
            border-radius: 3px;
        }

        .order-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            overflow: hidden;
            background: white;
        }

        .order-card:hover {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            transform: translateY(-3px);
            border-color: #c7d2fe;
        }
        
        .order-card-header {
            background: linear-gradient(90deg, #f8fafc, #f1f5f9);
            padding: 12px 16px;
            border-bottom: 1px solid #e2e8f0;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            font-size: 12px;
            font-weight: 600;
            padding: 4px 12px;
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
            border-radius: 8px;
            transition: transform 0.3s ease;
            border: 1px solid #e2e8f0;
        }
        
        .product-image:hover {
            transform: scale(1.03);
        }

        .mobile-filter-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: linear-gradient(135deg, #4f46e5, #6366f1);
            color: white;
            padding: 12px 20px;
            border-radius: 50px;
            font-weight: 600;
            box-shadow: 0 10px 15px -3px rgba(79, 70, 229, 0.3), 0 4px 6px -2px rgba(79, 70, 229, 0.1);
            z-index: 30;
            display: none;
            transition: all 0.3s ease;
            border: none;
            outline: none;
        }

        .mobile-filter-btn:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 20px 25px -5px rgba(79, 70, 229, 0.3), 0 10px 10px -5px rgba(79, 70, 229, 0.1);
        }

        .mobile-filter-bottom-sheet {
            position: fixed;
            bottom: -100%;
            left: 0;
            right: 0;
            background: white;
            border-radius: 20px 20px 0 0;
            padding: 20px;
            box-shadow: 0 -10px 25px -5px rgba(0, 0, 0, 0.1), 0 -10px 10px -5px rgba(0, 0, 0, 0.04);
            transition: bottom 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 40;
            max-height: 80vh;
            overflow-y: auto;
        }

        .mobile-filter-bottom-sheet.active {
            bottom: 0;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(15, 23, 42, 0.7);
            z-index: 30;
            display: none;
            backdrop-filter: blur(5px);
        }

        .filter-chip {
            display: inline-flex;
            align-items: center;
            background: #e0e7ff;
            color: #4f46e5;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 13px;
            margin: 4px;
            transition: all 0.2s ease;
            font-weight: 500;
        }

        .filter-chip:hover {
            background: #c7d2fe;
        }

        .filter-chip .remove {
            margin-left: 8px;
            cursor: pointer;
            font-weight: bold;
            transition: color 0.2s ease;
            color: #6366f1;
        }

        .filter-chip .remove:hover {
            color: #ef4444;
        }

        .empty-state {
            animation: fadeIn 0.5s ease;
            background: white;
            border-radius: 16px;
            padding: 60px 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            max-width: 600px;
            margin: 0 auto;
        }
        
        .price-tag {
            background: linear-gradient(135deg, #4f46e5, #6366f1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 700;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .checkbox-label {
            transition: all 0.2s ease;
            border-radius: 8px;
        }
        
        .checkbox-label:hover {
            background: #f1f5f9;
        }
        
        .checkbox-label input:checked ~ span {
            color: #4f46e5;
            font-weight: 600;
        }
        
        .checkbox-label input:checked ~ .checkmark {
            background-color: #4f46e5;
            border-color: #4f46e5;
        }
        
        .checkmark {
            display: inline-block;
            width: 18px;
            height: 18px;
            border: 2px solid #cbd5e1;
            border-radius: 4px;
            transition: all 0.2s ease;
            position: relative;
        }
        
        .checkmark::after {
            content: '';
            position: absolute;
            display: none;
            left: 5px;
            top: 2px;
            width: 4px;
            height: 8px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }
        
        .checkbox-label input:checked ~ .checkmark::after {
            display: block;
        }

        @media (max-width: 1023px) {
            .filter-sidebar {
                display: none;
            }
            
            .mobile-filter-btn {
                display: flex;
                align-items: center;
            }
        }

        /* New styles for improved layout */
        .main-content-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .orders-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .order-card-content {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .order-details {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .order-meta {
            margin-top: auto;
        }

        @media (min-width: 768px) {
            .orders-grid {
                grid-template-columns: repeat(1, 1fr);
            }
        }

        @media (min-width: 1024px) {
            .main-content-area {
                padding-left: 2rem;
                padding-right: 2rem;
            }
        }

        /* Progress bar animation */
        .progress-bar {
            transition: width 0.6s ease;
        }

        /* Enhanced order card styling */
        .order-card {
            position: relative;
        }

        .order-card:not(:last-child)::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 1.25rem;
            right: 1.25rem;
            height: 1px;
            background-color: #f1f5f9;
        }

        .order-card-header {
            padding: 0.75rem 1.25rem;
        }

        .order-meta {
            font-size: 0.75rem;
        }

        .price-tag {
            font-size: 1.125rem;
        }

        /* Responsive adjustments */
        @media (min-width: 768px) {
            .order-card {
                padding: 1.5rem;
            }
            
            .product-image {
                width: 6rem;
                height: 6rem;
            }
        }
    </style>
</head>

<body class="bg-gray-50">
    <div class="min-h-screen">
        <div class="flex">
            <!-- Desktop Sidebar -->
            <div class="filter-sidebar hidden lg:block">
                <div class="p-6"><br><br>
                    <h2 class="text-xl font-bold mb-6 text-dark">Order Filters</h2>
                    
                    <!-- Order Status Filter -->
                    <div class="mb-8">
                        <h3 class="text-sm font-semibold text-slate-600 mb-3 uppercase tracking-wider">Order Status</h3>
                        <div class="space-y-2">
                            <label class="checkbox-label flex items-center cursor-pointer p-2 rounded">
                                <input type="checkbox" id="status-processing" value="0" class="sr-only">
                                <span class="checkmark mr-3"></span>
                                <span class="text-sm text-slate-700">Processing</span>
                            </label>
                            <label class="checkbox-label flex items-center cursor-pointer p-2 rounded">
                                <input type="checkbox" id="status-shipped" value="1" class="sr-only">
                                <span class="checkmark mr-3"></span>
                                <span class="text-sm text-slate-700">On the way</span>
                            </label>
                            <label class="checkbox-label flex items-center cursor-pointer p-2 rounded">
                                <input type="checkbox" id="status-delivered" value="2" class="sr-only">
                                <span class="checkmark mr-3"></span>
                                <span class="text-sm text-slate-700">Delivered</span>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Order Time Filter -->
                    <div class="mb-8">
                        <h3 class="text-sm font-semibold text-slate-600 mb-3 uppercase tracking-wider">Order Time</h3>
                        <div class="space-y-2">
                            <label class="checkbox-label flex items-center cursor-pointer p-2 rounded">
                                <input type="checkbox" id="time-30days" class="sr-only">
                                <span class="checkmark mr-3"></span>
                                <span class="text-sm text-slate-700">Last 30 days</span>
                            </label>
                            <label class="checkbox-label flex items-center cursor-pointer p-2 rounded">
                                <input type="checkbox" id="time-2025" class="sr-only">
                                <span class="checkmark mr-3"></span>
                                <span class="text-sm text-slate-700">2025</span>
                            </label>
                            <label class="checkbox-label flex items-center cursor-pointer p-2 rounded">
                                <input type="checkbox" id="time-2024" class="sr-only">
                                <span class="checkmark mr-3"></span>
                                <span class="text-sm text-slate-700">2024</span>
                            </label>
                            <label class="checkbox-label flex items-center cursor-pointer p-2 rounded">
                                <input type="checkbox" id="time-2023" class="sr-only">
                                <span class="checkmark mr-3"></span>
                                <span class="text-sm text-slate-700">2023</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="flex-1 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <div class="mb-8">
                    <div class="flex justify-between items-start">
                        <div><br><br>
                            <h1 class="text-3xl font-bold text-dark mb-2">My Orders</h1>
                            <p class="text-slate-500">Track and manage your purchases</p>
                        </div>
                        <div class="flex items-center">
                            <span class="text-sm text-slate-500 mr-2 hidden sm:inline">Filtered by:</span>
                            <div class="flex flex-wrap gap-1" id="activeFilters"></div>
                        </div>
                    </div>
                </div>
                
                <?php if (count($allProducts) == 0): ?>
                    <!-- Empty Orders State -->
                    <div class="empty-state">
                        <div class="flex justify-center">
                            <div class="w-32 h-32 bg-indigo-50 rounded-full flex items-center justify-center mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                        </div>
                        <h2 class="text-2xl font-semibold text-center text-dark mb-3">Your Order History is Empty</h2>
                        <p class="text-center text-slate-500 max-w-md mx-auto mb-8">Looks like you haven't placed any orders yet. Start shopping to fill your order history!</p>
                        <div class="text-center">
                            <button onclick="window.location.href='index'" class="bg-gradient-to-r from-primary to-primary-light hover:from-primary-dark hover:to-primary text-white px-8 py-3 rounded-lg font-medium transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Start Shopping
                            </button>
                        </div>
                    </div>
                <?php else: ?>
                    <!-- Orders List -->
                    <div id="ordersGrid" class="space-y-5">
                        <?php foreach ($allProducts as $product): 
                            $statusValue = $product['order_status'] ?? 0;
                            $orderDate = new DateTime($product['order_date']);
                            $deliveryDate = clone $orderDate;
                            $deliveryDate->modify('+3 days');
                            
                            // Determine status
                            $statusInfo = [
                                0 => [
                                    'text' => 'Order Processing',
                                    'class' => 'status-processing',
                                    'color' => 'text-amber-600'
                                ],
                                1 => [
                                    'text' => 'Order Processing',
                                    'class' => 'status-processing',
                                    'color' => 'text-amber-600'
                                ],
                                2 => [
                                    'text' => 'Shipped',
                                    'class' => 'status-shipped',
                                    'color' => 'text-orange-600'
                                ],
                                3 => [
                                    'text' => 'Item Delivered',
                                    'class' => 'status-delivered',
                                    'color' => 'text-green-600'
                                ],
                                4 => [
                                    'text' => 'Cancelled',
                                    'class' => 'status-cancelled',
                                    'color' => 'text-red-600'
                                ]
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
                        <div class="order-card cursor-pointer" onclick="window.location.href='product-detail?id=<?php echo htmlspecialchars($product['productid']); ?>&product_code=<?php echo htmlspecialchars($product['product_code']); ?>&table=<?php echo htmlspecialchars($product['table_name']); ?>'"
                            data-status="<?php echo htmlspecialchars($statusValue); ?>"
                            data-year="<?php echo htmlspecialchars($orderDate->format('Y')); ?>"
                            data-date="<?php echo htmlspecialchars($orderDate->format('Y-m-d')); ?>">
                            
                            <div class="order-card-header flex justify-between items-center">
                                <div class="flex items-center space-x-4">
                                    <!-- <span class="text-sm font-medium text-slate-600">Order #<?php echo htmlspecialchars($product['order_id'] ?? 'N/A'); ?></span> -->
                                    <!-- <span class="text-xs text-slate-400">|</span> -->
                                    <span class="text-xs text-slate-500">
                                        <?php echo $orderDate->format('M d, Y'); ?>
                                    </span>
                                </div>
                                <span class="<?php echo $currentStatus['class']; ?> status-badge">
                                    <?php if ($statusValue == 2): ?>
                                        Shipped
                                    <?php elseif ($statusValue == 3): ?>
                                        Delivered
                                    <?php else: ?>
                                        Processing
                                    <?php endif; ?>
                                </span>
                            </div>
                            
                            <div class="p-5">
                                <div class="flex items-start gap-5">
                                    <!-- Product Image -->
                                    <div class="flex-shrink-0 relative">
                                        <div class="product-image w-24 h-24 overflow-hidden">
                                            <img src="<?php echo htmlspecialchars($imagePath); ?>" 
                                                alt="<?php echo htmlspecialchars($product['name'] ?? 'Product image'); ?>" 
                                                class="w-full h-full object-cover"
                                                onerror="this.src='placeholder.jpg'">
                                        </div>
                                        <?php if ($statusValue == 3): ?>
                                            <div class="absolute -top-2 -right-2 bg-emerald-100 text-emerald-800 text-xs font-bold px-2 py-1 rounded-full">
                                                ✓
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    
                                    <!-- Product Details -->
                                    <div class="flex-1 min-w-0">
                                        <div class="flex justify-between items-start mb-2">
                                            <div>
                                                <h3 class="font-semibold text-dark mb-1">
                                                    <?php echo htmlspecialchars($product['name'] ?? 'Product'); ?>
                                                </h3>
                                                <?php if (!empty($product['color']) || !empty($product['size'])): ?>
                                                <p class="text-sm text-slate-500">
                                                    <?php 
                                                    $details = [];
                                                    if (!empty($product['color'])) $details[] = 'Color: '.htmlspecialchars($product['color']);
                                                    if (!empty($product['size'])) $details[] = 'Size: '.htmlspecialchars($product['size']);
                                                    echo implode(' • ', $details);
                                                    ?>
                                                </p>
                                                <?php endif; ?>
                                            </div>
                                            <span class="text-lg font-bold price-tag ml-4 whitespace-nowrap">
                                                ₹<?php echo $product['price']; ?>
                                            </span>
                                        </div>
                                        
                                        <!-- Progress Bar -->
                                        <div class="mb-4">
                                            <div class="relative pt-1">
                                                <div class="flex mb-2 items-center justify-between">
                                                    <div class="text-right">
                                                        <span class="text-xs font-semibold inline-block <?php echo $currentStatus['color']; ?>">
                                                            <?php echo $currentStatus['text']; ?>
                                                        </span>
                                                    </div>
                                                </div>
                                                
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


                                            </div>
                                        </div>
                                        
                                        <div class="flex items-center justify-between pt-2 border-t border-slate-100">
                                            <!-- Order Meta -->
                                            <div class="flex space-x-4">
                                                <span class="text-xs text-slate-500">
                                                    <span class="font-medium">Qty:</span> 1
                                                </span>
                                                <?php if ($statusValue == 1): ?>
                                                    <span class="text-xs text-slate-500">
                                                        <!-- <span class="font-medium">Est. Delivery:</span> <?php echo $deliveryDate->format('M d'); ?> -->
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                            
                                            <!-- Action Buttons -->
                                            <div class="flex space-x-3">
                                                <button class="text-primary hover:text-primary-dark font-medium text-sm flex items-center gap-1 transition-colors group" onclick="event.stopPropagation(); window.location.href='track?order_id=<?php echo htmlspecialchars($product['order_id']); ?>'">
                                                Track Order
                                                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                </svg>
                                            </button>
                                                <button class="text-slate-500 hover:text-slate-700 font-medium text-sm flex items-center gap-1 transition-colors">
                                                    Buy Again
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        
        <!-- Mobile Filter Button -->
        <button class="mobile-filter-btn" id="mobileFilterBtn">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.707A1 1 0 013 7V4z"></path>
            </svg>
            Filters
        </button>
        
        <!-- Mobile Bottom Sheet -->
        <div class="mobile-filter-bottom-sheet" id="mobileFilterSheet">
            <div class="flex justify-between items-center mb-4 pb-4 border-b border-slate-200">
                <h2 class="text-xl font-bold text-dark">Filters</h2>
                <button class="text-slate-400 hover:text-slate-600 text-2xl transition-colors" id="closeBottomSheet">×</button>
            </div>
            
            <!-- Order Status Filter -->
            <div class="mb-8">
                <h3 class="text-sm font-semibold text-slate-600 mb-3 uppercase tracking-wider">Order Status</h3>
                <div class="space-y-2">
                    <label class="checkbox-label flex items-center cursor-pointer p-2 rounded">
                        <input type="checkbox" id="m_status-processing" value="0" class="sr-only">
                        <span class="checkmark mr-3"></span>
                        <span class="text-sm text-slate-700">Processing</span>
                    </label>
                    <label class="checkbox-label flex items-center cursor-pointer p-2 rounded">
                        <input type="checkbox" id="m_status-shipped" value="1" class="sr-only">
                        <span class="checkmark mr-3"></span>
                        <span class="text-sm text-slate-700">On the way</span>
                    </label>
                    <label class="checkbox-label flex items-center cursor-pointer p-2 rounded">
                        <input type="checkbox" id="m_status-delivered" value="2" class="sr-only">
                        <span class="checkmark mr-3"></span>
                        <span class="text-sm text-slate-700">Delivered</span>
                    </label>
                </div>
            </div>
            
            <!-- Order Time Filter -->
            <div class="mb-8">
                <h3 class="text-sm font-semibold text-slate-600 mb-3 uppercase tracking-wider">Order Time</h3>
                <div class="space-y-2">
                    <label class="checkbox-label flex items-center cursor-pointer p-2 rounded">
                        <input type="checkbox" id="m_time-30days" class="sr-only">
                        <span class="checkmark mr-3"></span>
                        <span class="text-sm text-slate-700">Last 30 days</span>
                    </label>
                    <label class="checkbox-label flex items-center cursor-pointer p-2 rounded">
                        <input type="checkbox" id="m_time-2025" class="sr-only">
                        <span class="checkmark mr-3"></span>
                        <span class="text-sm text-slate-700">2025</span>
                    </label>
                    <label class="checkbox-label flex items-center cursor-pointer p-2 rounded">
                        <input type="checkbox" id="m_time-2024" class="sr-only">
                        <span class="checkmark mr-3"></span>
                        <span class="text-sm text-slate-700">2024</span>
                    </label>
                    <label class="checkbox-label flex items-center cursor-pointer p-2 rounded">
                        <input type="checkbox" id="m_time-2023" class="sr-only">
                        <span class="checkmark mr-3"></span>
                        <span class="text-sm text-slate-700">2023</span>
                    </label>
                </div>
            </div>
            
            <div class="flex gap-3 pt-4 border-t border-slate-200">
                <button class="flex-1 py-3 px-4 bg-slate-100 text-slate-700 rounded-lg font-medium hover:bg-slate-200 transition-colors" id="clearFilters">Clear All</button>
                <button class="flex-1 py-3 px-4 bg-gradient-to-r from-primary to-primary-light text-white rounded-lg font-medium hover:from-primary-dark hover:to-primary transition-colors" id="applyFilters">Apply Filters</button>
            </div>
        </div>
        
        <!-- Overlay -->
        <div class="overlay" id="filterOverlay"></div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Mobile filter functionality
        const mobileFilterBtn = document.getElementById('mobileFilterBtn');
        const mobileFilterSheet = document.getElementById('mobileFilterSheet');
        const closeBottomSheet = document.getElementById('closeBottomSheet');
        const filterOverlay = document.getElementById('filterOverlay');
        const applyFiltersBtn = document.getElementById('applyFilters');
        const clearFiltersBtn = document.getElementById('clearFilters');
        
        // Open bottom sheet
        mobileFilterBtn?.addEventListener('click', function() {
            mobileFilterSheet.classList.add('active');
            filterOverlay.style.display = 'block';
            document.body.style.overflow = 'hidden';
        });
        
        // Close bottom sheet
        function closeSheet() {
            mobileFilterSheet.classList.remove('active');
            filterOverlay.style.display = 'none';
            document.body.style.overflow = '';
        }
        
        closeBottomSheet?.addEventListener('click', closeSheet);
        filterOverlay?.addEventListener('click', closeSheet);
        
        // Apply filters
        applyFiltersBtn?.addEventListener('click', function() {
            syncFilters();
            applyFilters();
            closeSheet();
        });
        
        // Clear filters
        clearFiltersBtn?.addEventListener('click', function() {
            document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
                checkbox.checked = false;
            });
            applyFilters();
        });
        
        // Sync filters between desktop and mobile
        function syncFilters() {
            // Sync mobile to desktop
            document.querySelectorAll('.mobile-filter-bottom-sheet input[type="checkbox"]').forEach(mobileCheckbox => {
                const desktopId = mobileCheckbox.id.replace('m_', '');
                const desktopCheckbox = document.getElementById(desktopId);
                if (desktopCheckbox) {
                    desktopCheckbox.checked = mobileCheckbox.checked;
                }
            });
        }
        
        // Update active filters display
        function updateActiveFilters() {
            const activeFiltersContainer = document.getElementById('activeFilters');
            activeFiltersContainer.innerHTML = '';
            
            document.querySelectorAll('input[type="checkbox"]:checked').forEach(checkbox => {
                const filterId = checkbox.id.replace('m_', '');
                let filterText = '';
                
                if (filterId.includes('status-')) {
                    const statusMap = {
                        'status-processing': 'Processing',
                        'status-shipped': 'On the way',
                        'status-delivered': 'Delivered'
                    };
                    filterText = statusMap[filterId] || filterId;
                } else if (filterId.includes('time-')) {
                    const timeMap = {
                        'time-30days': 'Last 30 days',
                        'time-2025': '2025',
                        'time-2024': '2024',
                        'time-2023': '2023'
                    };
                    filterText = timeMap[filterId] || filterId;
                }
                
                if (filterText) {
                    const chip = document.createElement('div');
                    chip.className = 'filter-chip';
                    chip.innerHTML = `${filterText}<span class="remove">×</span>`;
                    activeFiltersContainer.appendChild(chip);
                    
                    chip.querySelector('.remove').addEventListener('click', function() {
                        checkbox.checked = false;
                        // Also uncheck mobile version
                        const mobileCheckbox = document.getElementById('m_' + filterId);
                        if (mobileCheckbox) mobileCheckbox.checked = false;
                        applyFilters();
                    });
                }
            });
        }
        
        // Main filter function
        function applyFilters() {
            const activeStatusFilters = [];
            const activeTimeFilters = [];
            
            // Get active filters
            document.querySelectorAll('input[type="checkbox"]:checked').forEach(checkbox => {
                const filterId = checkbox.id.replace('m_', '');
                if (filterId.includes('status-')) {
                    activeStatusFilters.push(checkbox.value);
                } else if (filterId.includes('time-')) {
                    const timeValue = filterId.replace('time-', '');
                    activeTimeFilters.push(timeValue);
                }
            });
            
            // Filter orders
            const orderItems = document.querySelectorAll('#ordersGrid .order-card');
            let visibleCount = 0;
            
            orderItems.forEach(item => {
                const orderStatus = item.dataset.status;
                const orderYear = item.dataset.year;
                
                let statusMatch = activeStatusFilters.length === 0 || activeStatusFilters.includes(orderStatus);
                let timeMatch = activeTimeFilters.length === 0;
                
                // Check time filters
                if (activeTimeFilters.length > 0) {
                    for (const filter of activeTimeFilters) {
                        if (filter === '30days') {
                            // Check if order is within last 30 days
                            const orderDate = new Date(item.dataset.year + '-01-01');
                            const thirtyDaysAgo = new Date();
                            thirtyDaysAgo.setDate(thirtyDaysAgo.getDate() - 30);
                            timeMatch = orderDate >= thirtyDaysAgo;
                        } else if (filter === orderYear) {
                            timeMatch = true;
                        }
                        if (timeMatch) break;
                    }
                }
                
                // Show/hide based on filters
                if (statusMatch && timeMatch) {
                    item.style.display = 'block';
                    visibleCount++;
                } else {
                    item.style.display = 'none';
                }
            });
            
            updateActiveFilters();
        }
        
        // Connect filter checkboxes to applyFilters function
        document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
            checkbox.addEventListener('change', applyFilters);
        });
        
        // Initialize
        applyFilters();
    });
    </script>
<?php 
$conn->close();
include('includes/footer.php'); 
?>  