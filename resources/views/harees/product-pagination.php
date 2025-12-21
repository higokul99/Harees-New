<!DOCTYPE html>
<html lang="en">

<!-- head tag open mychangestest -->
<?php
session_start();
include('includes/dbconnect.php'); // Move this up here

// Initialize wishlist if not exists
if (!isset($_SESSION['wishlist'])) {
    $_SESSION['wishlist'] = array();
}

// Load wishlist from database for logged-in users
if (isset($_SESSION['userid']) && !isset($_SESSION['wishlist_loaded'])) {
    $userId = $_SESSION['userid'];
    $stmt = $conn->prepare("SELECT product_id, table_name FROM user_wishlist WHERE user_id = ?");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    
    while ($row = $result->fetch_assoc()) {
        $wishlistKey = $row['table_name'] . '_' . $row['product_id'];
        $_SESSION['wishlist'][$wishlistKey] = true;
    }
    $stmt->close();
    
    // Mark wishlist as loaded to prevent reloading
    $_SESSION['wishlist_loaded'] = true;
}

// Handle wishlist actions - SINGLE VERSION (issue #1 fixed)
if (isset($_GET['wishlist_action'])) {
    $productId = intval($_GET['product_id'] ?? 0);
    $tableName = $_GET['table_name'] ?? '';
    $userId = $_SESSION['userid'] ?? null;
    $response = ['success' => false, 'action' => $_GET['wishlist_action']];
    
    // Validate inputs
    if ($productId > 0 && !empty($tableName)) {
        $wishlistKey = $tableName . '_' . $productId;
        
        try {
            if ($_GET['wishlist_action'] === 'add') {
                $_SESSION['wishlist'][$wishlistKey] = true;
                
                // Store in database if user is logged in
                if ($userId) {
                    $stmt = $conn->prepare("INSERT IGNORE INTO user_wishlist (user_id, product_id, table_name) VALUES (?, ?, ?)");
                    $stmt->bind_param("iis", $userId, $productId, $tableName);
                    $stmt->execute();
                    $stmt->close();
                }
                $response['success'] = true;
                $response['message'] = 'Added to wishlist';
                
            } elseif ($_GET['wishlist_action'] === 'remove') {
                unset($_SESSION['wishlist'][$wishlistKey]);
                
                // Remove from database if user is logged in
                if ($userId) {
                    $stmt = $conn->prepare("DELETE FROM user_wishlist WHERE user_id = ? AND product_id = ? AND table_name = ?");
                    $stmt->bind_param("iis", $userId, $productId, $tableName);
                    $stmt->execute();
                    $stmt->close();
                }
                $response['success'] = true;
                $response['message'] = 'Removed from wishlist';
            }
        } catch (Exception $e) {
            error_log("Wishlist error: " . $e->getMessage());
            $response['error'] = "Database error occurred";
        }
    } else {
        $response['error'] = "Invalid parameters";
    }
    
    // ALWAYS return JSON for AJAX requests - don't redirect
    if (isset($_GET['ajax'])) {
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }
    
    // Only redirect for non-AJAX requests
    if (!isset($_GET['ajax'])) {
        header("Location: " . $_SERVER['REQUEST_URI']);
        exit;
    }
}

// NEW: Handle AJAX requests for loading more products
if (isset($_GET['action']) && $_GET['action'] === 'load_more_products') {
    $offset = intval($_GET['offset'] ?? 0);
    $limit = 20; // Products per page
    
    $type = $_GET['type'] ?? '';
    $name = $_GET['name'] ?? '';
    
    // Determine table name based on type
    if ($type == '22k'){
        $table_name = '22kgold_product_'.$name;
    }
    else if ($type == '18k'){
        $table_name = '18kgold_product_'.$name;
    }
    else if ($type == 'silver'){
        $table_name = 'silver_product_'.$name;
    }
    else if ($type == 'rose_gold'){
        $table_name = 'rosegold_product_'.$name;
    }
    else if ($type == 'diamond'){
        $table_name = '18kdgold_product_'.$name;
    }
    
    $table_name = strtolower($table_name);
    
    // Query with LIMIT and OFFSET for pagination
    $query = "SELECT * FROM $table_name 
              WHERE CAST(is_featured AS UNSIGNED) != 2 
                AND delist != 1 
                AND stock_quantity > 0 
              ORDER BY is_featured DESC, id ASC 
              LIMIT $limit OFFSET $offset";
    
    $result = $conn->query($query);
    $products = [];
    
    include('functionsFE.php'); // Include for displayRate function
    
    while ($row = $result->fetch_assoc()) {
        // Check if this product is in wishlist
        $wishlistKey = $table_name . '_' . $row['id'];
        $isInWishlist = isset($_SESSION['wishlist'][$wishlistKey]);
        
        // Get product rate
        $product_code = $row['product_code'];
        $data = displayRate($conn, $product_code, $table_name);
        $Product_Rate = $data[0];
        
        // Determine image path
        switch ($env) {
            case 'local':
                $loc = "ims/internal/";
                $imagedetails = $loc . (!empty($row['img1_webp']) ? $row['img1_webp'] : $row['img2']);
                break;
            case 'dev':
                $loc = "ims/internal/";
                $imagedetails = $loc . (!empty($row['img1_webp']) ? $row['img1_webp'] : $row['img2']);
                break;
            case 'prod':
                $loc = "ims/internal/";
                $imagedetails = $loc . (!empty($row['img1_webp']) ? $row['img1_webp'] : $row['img2']);
                break; 
            default:
                break;
        }
        
        $products[] = [
            'id' => $row['id'],
            'name' => $row['name'],
            'product_code' => $row['product_code'],
            'price' => ceil($Product_Rate),
            'is_featured' => $row['is_featured'],
            'image' => $imagedetails . '?v=' . time(),
            'gender' => $row['gender'] ?? '',
            'size' => $row['size'] ?? '',
            'weight' => $row['net_weight'] ?? '',
            'is_in_wishlist' => $isInWishlist,
            'table_name' => $table_name
        ];
    }
    
    // Also get total count for hasMore flag
    $countQuery = "SELECT COUNT(*) as total FROM $table_name 
                   WHERE CAST(is_featured AS UNSIGNED) != 2 
                     AND delist != 1 
                     AND stock_quantity > 0";
    $countResult = $conn->query($countQuery);
    $totalCount = $countResult->fetch_assoc()['total'];
    $hasMore = ($offset + $limit) < $totalCount;
    
    header('Content-Type: application/json');
    echo json_encode([
        'success' => true,
        'products' => $products,
        'hasMore' => $hasMore,
        'totalCount' => $totalCount,
        'currentOffset' => $offset + count($products)
    ]);
    exit;
}

if (isset($_SESSION['userid'])) {
    include('includes/uhead.php');
} else {
    include('includes/head.php');
    include('includes/header.php');
    include('includes/navbar.php');
}
?>

<!-- ###################################--START--########################################## -->
<?php 
    include('functionsFE.php');
?>
<?php
    // Get and sanitize parameters
    $type = $_GET['type'];
    $name = $_GET['name'] ;
    
    if ($type == '22k'){
        $table_name = '22kgold_product_'.$name;
        $Product_title = "22K Gold".' '.$name;
    }
    else if ($type == '18k'){
        $table_name = '18kgold_product_'.$name;
        $Product_title = "18K Gold".' '.$name;
    }
    else if ($type == 'silver'){
        $table_name = 'silver_product_'.$name;
        $Product_title = "Silver".' '.$name;
    }
    else if ($type == 'rose_gold'){
        $table_name = 'rosegold_product_'.$name;
        $Product_title = "RoseGold".' '.$name;
    }
    else if ($type == 'diamond'){
        $table_name = '18kdgold_product_'.$name;
        $Product_title = "18K Gold and Diamonds".' '.$name;
    }
    
    // Add error checking for the query
    $table_name = strtolower($table_name);
 
    // Modified query to load only first 20 products
    $limit = 20;
    $query = "SELECT * FROM $table_name 
              WHERE CAST(is_featured AS UNSIGNED) != 2 
                AND delist != 1 
                AND stock_quantity > 0 
              ORDER BY is_featured DESC, id ASC 
              LIMIT $limit";
    
    $result = $conn->query($query);
    
    // Get total count for infinite scroll
    $countQuery = "SELECT COUNT(*) as total FROM $table_name 
                   WHERE CAST(is_featured AS UNSIGNED) != 2 
                     AND delist != 1 
                     AND stock_quantity > 0";
    $countResult = $conn->query($countQuery);
    $totalProducts = $countResult->fetch_assoc()['total'];
    
    // Store results
    $items = array();
?>

<!-- Add CSS for lazy loading and sidebar -->
<style>
.lazy-image {
    transition: opacity 0.3s ease;
    opacity: 0;
    background: #f0f0f0;
    min-height: 200px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.lazy-image.loading {
    background: linear-gradient(90deg, #f0f0f0 25%, #f8f8f8 50%, #f0f0f0 75%);
    background-size: 200% 100%;
    animation: shimmer 1.5s infinite;
}

.lazy-image.loaded {
    opacity: 1;
    background: none;
}

@keyframes shimmer {
    0% { background-position: 200% 0; }
    100% { background-position: -200% 0; }
}

.lazy-placeholder {
    color: #999;
    font-size: 12px;
    text-align: center;
}

/* Desktop Sidebar styles */
.filter-sidebar {
    width: 250px;
    padding: 1rem;
    background: white;
    border-right: 1px solid #e5e7eb;
    position: sticky;
    top: 80px;
    height: calc(100vh - 80px);
    overflow-y: auto;
}

.filter-section {
    margin-bottom: 1.5rem;
}

.filter-section h3 {
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 0.75rem;
    color: #333;
}

.filter-option {
    display: flex;
    align-items: center;
    margin-bottom: 0.5rem;
    cursor: pointer;
}

.filter-option input {
    margin-right: 0.5rem;
}

.filter-option label {
    font-size: 0.875rem;
    color: #555;
    cursor: pointer;
}

.filter-option .count {
    margin-left: auto;
    color: #999;
    font-size: 0.75rem;
}

.main-content {
    flex: 1;
    padding: 1rem;
}

.page-container {
    display: flex;
}

.page-title {
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

.active-filters {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    margin-bottom: 1rem;
}

.filter-chip {
    background: #f3f4f6;
    padding: 0.25rem 0.5rem;
    border-radius: 9999px;
    font-size: 0.75rem;
    display: flex;
    align-items: center;
}

.filter-chip .remove {
    margin-left: 0.25rem;
    cursor: pointer;
}

.discount-banner {
    background: #fef2f2;
    color: #dc2626;
    padding: 0.5rem;
    text-align: center;
    margin-bottom: 1rem;
    border-radius: 0.25rem;
    font-weight: 500;
}

/* Mobile Bottom Sheet */
.mobile-filter-btn {
    display: none;
    position: fixed;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    background: #3b82f6;
    color: white;
    padding: 12px 24px;
    border-radius: 30px;
    font-weight: 600;
    cursor: pointer;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    z-index: 30;
    border: none;
    outline: none;
    background: #082f49 !important;
    color: white !important;
}

.mobile-filter-bottom-sheet {
    position: fixed;
    bottom: -100%;
    left: 0;
    right: 0;
    background: white;
    border-radius: 20px 20px 0 0;
    padding: 20px;
    box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.15);
    transition: bottom 0.3s ease;
    z-index: 40;
    max-height: 80vh;
    overflow-y: auto;
}

.mobile-filter-bottom-sheet.active {
    bottom: 0;
}

.bottom-sheet-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid #e5e7eb;
}

.bottom-sheet-header h2 {
    font-size: 1.25rem;
    font-weight: 600;
    margin: 0;
}

.bottom-sheet-close {
    background: none;
    border: none;
    font-size: 1.5rem;
    cursor: pointer;
    color: #6b7280;
}

.bottom-sheet-footer {
    display: flex;
    gap: 1rem;
    padding-top: 1rem;
    border-top: 1px solid #e5e7eb;
    margin-top: 1rem;
}

.bottom-sheet-footer button {
    flex: 1;
    padding: 12px;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
}

.bottom-sheet-clear {
    background: #f3f4f6;
    color: #6b7280;
    border: none;
    background: #082f49 !important;
    color: white !important;
}

.bottom-sheet-apply {
    background: #3b82f6;
    color: white;
    border: none;
    background: #082f49 !important;
    color: white !important;
}

.overlay {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    z-index: 30;
    display: none;
}

.mobile-filter-btn:hover {
    background: #1e40af !important;
}

.bottom-sheet-apply:hover {
    background: #1e40af !important;
}

.bottom-sheet-clear:hover {
    background: #e5e7eb !important;
}

/* Update featured tag color */
.bg-red-500 {
    background-color: #082f49 !important;
}

/* Responsive styles */
@media (max-width: 1023px) {
    .filter-sidebar {
        display: none;
    }
    
    .main-content {
        width: 100%;
        margin-left: 0;
    }
    
    .mobile-filter-btn {
        display: block;
    }
    
    .page-container {
        display: block;
    }
}

/* Wishlist Button Styles */
.wishlist-btn {
    transition: all 0.3s ease;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    display: flex;
    align-items: center;
    justify-content: center;
}

.wishlist-btn:hover {
    transform: scale(1.1);
    box-shadow: 0 2px 8px rgba(0,0,0,0.15);
    color: #ef4444;
}

.wishlist-btn.active svg {
    color: #ef4444;
    fill: #ef4444;
}

.wishlist-btn svg {
    width: 20px;
    height: 20px;
}

/* NEW: Infinite Scroll Loading Styles */
.loading-spinner {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 2rem;
    display: none;
}

.loading-spinner.active {
    display: flex;
}

.spinner {
    width: 40px;
    height: 40px;
    border: 4px solid #f3f3f3;
    border-top: 4px solid #082f49;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.load-more-info {
    text-align: center;
    padding: 1rem;
    color: #666;
    font-size: 0.9rem;
}

.products-count {
    text-align: center;
    color: #666;
    font-size: 0.85rem;
    margin-bottom: 1rem;
}
</style>

<div class="w-full pt-16">
    <div class="page-container">
        <!-- Desktop Sidebar -->
        <div class="filter-sidebar">
            <h2 class="text-lg font-bold mb-4 text-blue-900">FILTERS</h2>
            
            <!-- Price Filter -->
            <div class="filter-section">
                <h2 class="text-blue-900 text-lg font-semibold">Price</h2>
                <div class="filter-option">
                    <input type="checkbox" id="price1">
                    <label for="price1">₹ 0 - ₹ 5,000</label>
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="price2">
                    <label for="price2">₹ 5,000 - ₹ 10,000</label>
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="price3">
                    <label for="price3">₹ 10,000 - ₹ 20,000</label>
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="price4">
                    <label for="price4">₹ 20,000 - ₹ 30,000</label>
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="price5">
                    <label for="price5">₹ 30,000 - ₹ 50,000</label>
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="price6">
                    <label for="price6">₹ 50,000 - ₹ 1,00,000</label>
                </div>  
                <div class="filter-option">
                    <input type="checkbox" id="price7">
                    <label for="price7">₹ 1,00,000 and Above</label>
                </div>
            </div>
            
            <!-- Gender Filter -->
            <div class="filter-section">
                <h2 class="text-blue-900 text-lg font-semibold">Gender</h2>
                <div class="filter-option">
                    <input type="checkbox" id="male">
                    <label for="male">Male</label>
                        &nbsp;&nbsp;&nbsp;
                    <input type="checkbox" id="female">
                    <label for="female">Female</label>
                </div>
            </div>

            <!-- Weight Filter -->
            <div class="filter-section">
                <h2 class="text-blue-900 text-lg font-semibold">Weight</h2>
                <div class="filter-option">
                    <input type="checkbox" id="gm1">
                    <label for="gm1">1-2 gms</label>
                        &nbsp;&nbsp;&nbsp;  
                    <input type="checkbox" id="gm2">
                    <label for="gm2">2-4 gms</label>
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="gm3">
                    <label for="gm3">4-8 gms</label>
                        &nbsp;&nbsp;&nbsp;
                    <input type="checkbox" id="gm4">
                    <label for="gm4">8-12 gms</label>
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="gm5">
                    <label for="gm5">12 gms +</label>
                </div>
            </div>

            <!-- Size Filter -->
            <div class="filter-section">
                <h2 class="text-blue-900 text-lg font-semibold">Size</h2>
                <div class="filter-option">
                    <input type="checkbox" id="adult">
                    <label for="adult">Adult</label>
                        &nbsp;&nbsp;&nbsp;
                    <input type="checkbox" id="kids">
                    <label for="kids">Kids</label>
                        &nbsp;&nbsp;&nbsp;
                    <input type="checkbox" id="baby">
                    <label for="baby">Baby</label>
                </div>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="main-content">
            <h1 class="page-title"><?php echo $Product_title; ?></h1>
            
            <!-- Products Count -->
            <div class="products-count">
                Showing <span id="current-count">0</span> of <span id="total-count"><?php echo $totalProducts; ?></span> products
            </div>
            
            <!-- Products Grid -->
            <div class="bg-background text-foreground p-4">
                <div class="mb-8">
                    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4" id="products-grid">
                    <?php
                    $currentCount = 0;
                    while ($row = $result->fetch_assoc()) {
                        $currentCount++;
                        $items[] = $row['name']; // Optional if needed later
                        // Check if this product is in wishlist
                        $wishlistKey = $table_name . '_' . $row['id'];
                        $isInWishlist = isset($_SESSION['wishlist'][$wishlistKey]);
                    ?>
                        <a href="product-detail?id=<?php echo $row['id']; ?>&product_code=<?php echo $row['product_code']; ?>&table=<?php echo $table_name; ?>" 
                           data-gender="<?php echo htmlspecialchars($row['gender'] ?? ''); ?>" 
                           data-size="<?php echo htmlspecialchars($row['size'] ?? ''); ?>" 
                           data-weight="<?php echo htmlspecialchars($row['net_weight'] ?? ''); ?>"
                           class="product-item">
                            <div class="border border-border p-4 rounded-lg relative">
                                <?php if ($row['is_featured'] == 1): ?>
                                    <div class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded-full font-semibold z-10">
                                        Featured
                                    </div>
                                <?php endif; ?>
                                <!-- Wishlist Heart Icon -->
                                <div class="absolute top-2 right-2 z-10">
                                    <button class="wishlist-btn bg-white/80 hover:bg-white rounded-full p-2 transition-all duration-300 <?php echo $isInWishlist ? 'active' : ''; ?>"
                                        data-product-id="<?php echo $row['id']; ?>"
                                        data-table-name="<?php echo $table_name; ?>"
                                        data-in-wishlist="<?php echo $isInWishlist ? 'true' : 'false'; ?>"
                                        aria-label="<?php echo $isInWishlist ? 'Remove from wishlist' : 'Add to wishlist'; ?>">
                                        
                                        <?php if ($isInWishlist): ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                            </svg>
                                        <?php else: ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600 hover:text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>
                                        <?php endif; ?>
                                    </button>
                                </div>
                                <?php
                                switch ($env) {
                                    case 'local':
                                        $loc = "ims/internal/";
                                        $imagedetails = $loc . (!empty($row['img1_webp']) ? $row['img1_webp'] : $row['img2']);
                                        break;
                                    case 'dev':
                                        $loc = "ims/internal/";
                                        $imagedetails = $loc . (!empty($row['img1_webp']) ? $row['img1_webp'] : $row['img2']);
                                        break;
                                    case 'prod':
                                        $loc = "ims/internal/";
                                        $imagedetails = $loc . (!empty($row['img1_webp']) ? $row['img1_webp'] : $row['img2']);
                                        break; 
                                    default:
                                        break;
                                }
                                ?>                      
                                <img 
                                    class="lazy-image w-full h-auto mb-2 object-cover" 
                                    data-src="<?php echo $imagedetails; ?>?v=<?php echo time(); ?>" 
                                    alt="<?php echo $name; ?>"
                                    loading="lazy"
                                >
                                <div class="lazy-placeholder">📸 Loading...</div>
                                
                                <p class="text-sm font-bold text-[rgb(60,60,60)]"><?php echo $row['name']; ?></p>
                                <?php 
                                $product_code = $row['product_code'];
                                $data = displayRate($conn,$product_code,$table_name); 
                                $Product_Rate = $data[0];
                                ?>
                                <p class="text-lg font-semibold">₹ <?php echo ceil($Product_Rate); ?></p>
                                <small class="text-[10px] text-muted-foreground">(Inclusive of all taxes)</small>
                            </div>
                        </a>
                    <?php
                    }
                    ?>      
                    </div>
                    
                    <!-- Loading Spinner -->
                    <div class="loading-spinner" id="loading-spinner">
                        <div class="spinner"></div>
                    </div>
                    
                    <!-- Load More Info -->
                    <div class="load-more-info" id="load-more-info" style="display: none;">
                        <p>All products loaded!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Mobile Filter Button -->
    <button class="mobile-filter-btn" id="mobileFilterBtn">
        ☰ Filters
    </button>
    
    <!-- Mobile Bottom Sheet -->
    <div class="mobile-filter-bottom-sheet" id="mobileFilterSheet">
        <div class="bottom-sheet-header">
            <h2 class="text-blue-900 text-lg font-semibold">FILTERS</h2>
        </div>
        
        <!-- Mobile Filter Content (same as desktop) -->
        <div class="filter-section">
            <h3 class="text-blue-900 text-lg font-semibold">Price</h3>
            <div class="filter-option">
                <input type="checkbox" id="mobile-price1">
                <label for="mobile-price1">₹ 0 - ₹ 5,000</label>
            </div>
            <div class="filter-option">
                <input type="checkbox" id="mobile-price2">
                <label for="mobile-price2">₹ 5,000 - ₹ 10,000</label>
            </div>
            <div class="filter-option">
                <input type="checkbox" id="mobile-price3">
                <label for="mobile-price3">₹ 10,000 - ₹ 20,000</label>
            </div>
            <div class="filter-option">
                <input type="checkbox" id="mobile-price4">
                <label for="mobile-price4">₹ 20,000 - ₹ 30,000</label>
            </div>
            <div class="filter-option">
                <input type="checkbox" id="mobile-price5">
                <label for="mobile-price5">₹ 30,000 - ₹ 50,000</label>
            </div>
            <div class="filter-option">
                <input type="checkbox" id="mobile-price6">
                <label for="mobile-price6">₹ 50,000 - ₹ 1,00,000</label>
            </div>
            <div class="filter-option">
                <input type="checkbox" id="mobile-price7">
                <label for="mobile-price7">₹ 1,00,000 and Above</label>
            </div>
        </div>
        
        <div class="filter-section">
            <h3 class="text-blue-900 text-lg font-semibold">Gender</h3>
            <div class="filter-option">
                <input type="checkbox" id="mobile-male">
                <label for="mobile-male">Male</label>
                &nbsp;&nbsp;&nbsp;
                <input type="checkbox" id="mobile-female">
                <label for="mobile-female">Female</label>
            </div>
        </div>
        
        <div class="filter-section">
            <h3 class="text-blue-900 text-lg font-semibold">Weight</h3>
            <div class="filter-option">
                <input type="checkbox" id="mobile-gm1">
                <label for="mobile-gm1">1-2 gms</label>
                &nbsp;&nbsp;&nbsp;
                <input type="checkbox" id="mobile-gm2">
                <label for="mobile-gm2">2-4 gms</label>
            </div>
            <div class="filter-option">
                <input type="checkbox" id="mobile-gm3">
                <label for="mobile-gm3">4-8 gms</label>
                &nbsp;&nbsp;&nbsp;
                <input type="checkbox" id="mobile-gm4">
                <label for="mobile-gm4">8-12 gms</label>
            </div>
            <div class="filter-option">
                <input type="checkbox" id="mobile-gm5">
                <label for="mobile-gm5">12 gms +</label>
            </div>
        </div>
        
        <div class="filter-section">
            <h3 class="text-blue-900 text-lg font-semibold">Size</h3>
            <div class="filter-option">
                <input type="checkbox" id="mobile-adult">
                <label for="mobile-adult">Adult</label>
                &nbsp;&nbsp;&nbsp;
                <input type="checkbox" id="mobile-kids">
                <label for="mobile-kids">Kids</label>
                &nbsp;&nbsp;&nbsp;
                <input type="checkbox" id="mobile-baby">
                <label for="mobile-baby">Baby</label>
            </div>
        </div>
        
        <div class="bottom-sheet-footer">
            <button class="bottom-sheet-clear">Clear All</button>
            <button class="bottom-sheet-apply">Apply Filters</button>
        </div>
    </div>
    
    <!-- Overlay -->
    <div class="overlay" id="overlay"></div>
</div>

<script>
// Infinite Scroll Implementation
let currentOffset = <?php echo $currentCount; ?>;
let totalProducts = <?php echo $totalProducts; ?>;
let isLoading = false;
let hasMoreProducts = currentOffset < totalProducts;

// Update initial count
document.getElementById('current-count').textContent = currentOffset;

// Lazy Loading for Images
function setupLazyLoading() {
    const lazyImages = document.querySelectorAll('.lazy-image:not(.loaded)');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                const src = img.getAttribute('data-src');
                
                if (src) {
                    img.classList.add('loading');
                    img.src = src;
                    
                    img.onload = function() {
                        img.classList.remove('loading');
                        img.classList.add('loaded');
                        const placeholder = img.nextElementSibling;
                        if (placeholder && placeholder.classList.contains('lazy-placeholder')) {
                            placeholder.style.display = 'none';
                        }
                    };
                    
                    img.onerror = function() {
                        img.classList.remove('loading');
                        const placeholder = img.nextElementSibling;
                        if (placeholder && placeholder.classList.contains('lazy-placeholder')) {
                            placeholder.textContent = '❌ Failed to load';
                        }
                    };
                }
                
                observer.unobserve(img);
            }
        });
    }, {
        rootMargin: '50px'
    });
    
    lazyImages.forEach(img => imageObserver.observe(img));
}

// Initialize lazy loading
setupLazyLoading();

// Infinite Scroll Function
function loadMoreProducts() {
    if (isLoading || !hasMoreProducts) return;
    
    isLoading = true;
    document.getElementById('loading-spinner').classList.add('active');
    
    const urlParams = new URLSearchParams(window.location.search);
    const type = urlParams.get('type');
    const name = urlParams.get('name');
    
    fetch(`?action=load_more_products&offset=${currentOffset}&type=${type}&name=${name}`)
        .then(response => response.json())
        .then(data => {
            if (data.success && data.products.length > 0) {
                const productsGrid = document.getElementById('products-grid');
                
                data.products.forEach(product => {
                    const productHTML = createProductHTML(product);
                    productsGrid.insertAdjacentHTML('beforeend', productHTML);
                });
                
                currentOffset = data.currentOffset;
                hasMoreProducts = data.hasMore;
                
                // Update count
                document.getElementById('current-count').textContent = currentOffset;
                
                // Setup lazy loading for new images
                setupLazyLoading();
                
                // Setup wishlist functionality for new products
                setupWishlistButtons();
                
                if (!hasMoreProducts) {
                    document.getElementById('load-more-info').style.display = 'block';
                }
            } else {
                hasMoreProducts = false;
                document.getElementById('load-more-info').style.display = 'block';
            }
        })
        .catch(error => {
            console.error('Error loading more products:', error);
            hasMoreProducts = false;
        })
        .finally(() => {
            isLoading = false;
            document.getElementById('loading-spinner').classList.remove('active');
        });
}

// Create Product HTML
function createProductHTML(product) {
    const featuredBadge = product.is_featured == 1 ? 
        '<div class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded-full font-semibold z-10">Featured</div>' : '';
    
    const heartIcon = product.is_in_wishlist ? 
        '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" /></svg>' :
        '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600 hover:text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>';
    
    return `
        <a href="product-detail?id=${product.id}&product_code=${product.product_code}&table=${product.table_name}" 
           data-gender="${product.gender}" 
           data-size="${product.size}" 
           data-weight="${product.weight}"
           class="product-item">
            <div class="border border-border p-4 rounded-lg relative">
                ${featuredBadge}
                <div class="absolute top-2 right-2 z-10">
                    <button class="wishlist-btn bg-white/80 hover:bg-white rounded-full p-2 transition-all duration-300 ${product.is_in_wishlist ? 'active' : ''}"
                        data-product-id="${product.id}"
                        data-table-name="${product.table_name}"
                        data-in-wishlist="${product.is_in_wishlist ? 'true' : 'false'}"
                        aria-label="${product.is_in_wishlist ? 'Remove from wishlist' : 'Add to wishlist'}">
                        ${heartIcon}
                    </button>
                </div>
                <img 
                    class="lazy-image w-full h-auto mb-2 object-cover" 
                    data-src="${product.image}" 
                    alt="${product.name}"
                    loading="lazy"
                >
                <div class="lazy-placeholder">📸 Loading...</div>
                <p class="text-sm font-bold text-[rgb(60,60,60)]">${product.name}</p>
                <p class="text-lg font-semibold">₹ ${product.price}</p>
                <small class="text-[10px] text-muted-foreground">(Inclusive of all taxes)</small>
            </div>
        </a>
    `;
}

// Scroll Event Listener
let scrollTimeout;
window.addEventListener('scroll', () => {
    clearTimeout(scrollTimeout);
    scrollTimeout = setTimeout(() => {
        const scrollPosition = window.innerHeight + window.scrollY;
        const documentHeight = document.documentElement.scrollHeight;
        
        // Load more when user is 200px from bottom
        if (scrollPosition >= documentHeight - 200) {
            loadMoreProducts();
        }
    }, 100);
});

// Wishlist Functionality
function setupWishlistButtons() {
    const wishlistButtons = document.querySelectorAll('.wishlist-btn:not([data-initialized])');
    
    wishlistButtons.forEach(button => {
        button.setAttribute('data-initialized', 'true');
        button.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const productId = this.getAttribute('data-product-id');
            const tableName = this.getAttribute('data-table-name');
            const isInWishlist = this.getAttribute('data-in-wishlist') === 'true';
            const action = isInWishlist ? 'remove' : 'add';
            
            // Optimistic UI update
            this.classList.toggle('active');
            const svg = this.querySelector('svg');
            
            if (isInWishlist) {
                // Change to empty heart
                svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />';
                svg.setAttribute('fill', 'none');
                svg.classList.remove('text-red-500');
                svg.classList.add('text-gray-600', 'hover:text-red-500');
                this.setAttribute('data-in-wishlist', 'false');
                this.setAttribute('aria-label', 'Add to wishlist');
            } else {
                // Change to filled heart
                svg.innerHTML = '<path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />';
                svg.setAttribute('fill', 'currentColor');
                svg.classList.add('text-red-500');
                svg.classList.remove('text-gray-600', 'hover:text-red-500');
                this.setAttribute('data-in-wishlist', 'true');
                this.setAttribute('aria-label', 'Remove from wishlist');
            }
            
            // Make AJAX request
            fetch(`?wishlist_action=${action}&product_id=${productId}&table_name=${tableName}&ajax=1`)
                .then(response => response.json())
                .then(data => {
                    if (!data.success) {
                        // Revert UI changes if failed
                        this.classList.toggle('active');
                        this.setAttribute('data-in-wishlist', isInWishlist ? 'true' : 'false');
                        // Revert icon changes
                        console.error('Wishlist action failed:', data.error);
                    }
                })
                .catch(error => {
                    // Revert UI changes if failed
                    this.classList.toggle('active');
                    this.setAttribute('data-in-wishlist', isInWishlist ? 'true' : 'false');
                    console.error('Wishlist error:', error);
                });
        });
    });
}

// Initialize wishlist buttons for initial products
setupWishlistButtons();

// Mobile Filter Functionality
const mobileFilterBtn = document.getElementById('mobileFilterBtn');
const mobileFilterSheet = document.getElementById('mobileFilterSheet');
const overlay = document.getElementById('overlay');

mobileFilterBtn.addEventListener('click', () => {
    mobileFilterSheet.classList.add('active');
    overlay.style.display = 'block';
    document.body.style.overflow = 'hidden';
});

const closeSheet = () => {
    mobileFilterSheet.classList.remove('active');
    overlay.style.display = 'none';
    document.body.style.overflow = 'auto';
};

// Close sheet when clicking overlay
overlay.addEventListener('click', closeSheet);

// Close sheet with close button
const closeButton = document.querySelector('.bottom-sheet-close');
if (closeButton) {
    closeButton.addEventListener('click', closeSheet);
}

// Clear filters
const clearButton = document.querySelector('.bottom-sheet-clear');
if (clearButton) {
    clearButton.addEventListener('click', () => {
        const checkboxes = mobileFilterSheet.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach(checkbox => checkbox.checked = false);
    });
}

// Apply filters (you can implement filtering logic here)
const applyButton = document.querySelector('.bottom-sheet-apply');
if (applyButton) {
    applyButton.addEventListener('click', () => {
        // Implement filter application logic here
        closeSheet();
    });
}

console.log('Infinite scroll initialized. Current products:', currentOffset, 'Total:', totalProducts);
</script>

<?php
    include('includes/footer.php');
?>

</html>