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
$name = $_GET['name'];

if ($type == '22k') {
    $table_name = '22kgold_product_' . $name;
    $Product_title = "22K Gold" . ' ' . $name;
} else if ($type == '18k') {
    $table_name = '18kgold_product_' . $name;
    $Product_title = "18K Gold" . ' ' . $name;
} else if ($type == 'silver') {
    $table_name = 'silver_product_' . $name;
    $Product_title = "Silver" . ' ' . $name;
} else if ($type == 'rose_gold') {
    $table_name = 'rosegold_product_' . $name;
    $Product_title = "RoseGold" . ' ' . $name;
} else if ($type == 'diamond') {
    $table_name = '18kdgold_product_' . $name;
    $Product_title = "18K Gold and Diamonds" . ' ' . $name;
}

// Add error checking for the query
$table_name = strtolower($table_name);

// Modified query to sort by Is_featured first (featured items first)
$query = "SELECT * FROM $table_name 
        WHERE CAST(is_featured AS UNSIGNED) != 2 
        AND delist != 1 
        AND stock_quantity > 0 
        ORDER BY is_featured DESC, id ASC;";
//echo $query;
$result = $conn->query($query);

// Store results
$items = array();

?>

<!-- Add CSS for lazy loading and sidebar -->
<style>
    .lazy-image {
        background: #f8f9fa;
        min-height: 180px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        border-radius: 8px;
    }

    .lazy-image.loading {
        background: linear-gradient(90deg, #f0f0f0 25%, #f8f8f8 50%, #f0f0f0 75%);
        background-size: 200% 100%;
        animation: shimmer 1.5s infinite;
    }

    .lazy-image.loaded {
        background: none;
        min-height: auto;
    }

    .lazy-image.error {
        background: #ffebee;
        color: #c62828;
        font-size: 12px;
        text-align: center;
    }

    @keyframes shimmer {
        0% {
            background-position: 200% 0;
        }

        100% {
            background-position: -200% 0;
        }
    }

    .lazy-placeholder {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #999;
        font-size: 14px;
        text-align: center;
        pointer-events: none;
    }

    /* Improved Product Grid Styles */
    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 12px;
        padding: 0;
    }

    @media (max-width: 640px) {
        .products-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 8px;
        }
    }

    @media (min-width: 641px) and (max-width: 768px) {
        .products-grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }
    }

    @media (min-width: 769px) and (max-width: 1024px) {
        .products-grid {
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
        }
    }

    @media (min-width: 1025px) {
        .products-grid {
            grid-template-columns: repeat(5, 1fr);
            gap: 14px;
        }
    }

    /* Product Card Improvements */
    .product-card {
        border: 1px solid #e5e7eb;
        border-radius: 12px;
        padding: 8px;
        background: white;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        height: fit-content;
    }

    .product-card:hover {
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        transform: translateY(-2px);
        border-color: #082f49;
    }

    .product-info {
        padding: 8px 4px 4px 4px;
    }

    .product-name {
        font-size: 13px;
        font-weight: 600;
        color: #374151;
        line-height: 1.3;
        margin-bottom: 4px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        min-height: 32px;
    }

    .product-price {
        font-size: 16px;
        font-weight: 700;
        color: #082f49;
        margin-bottom: 2px;
    }

    .product-tax-info {
        font-size: 9px;
        color: #6b7280;
        line-height: 1.2;
    }

    /* Filter sidebar styles */
    .filter-sidebar {
        width: 250px;
        padding: 1rem;
        /* background: white; */
        background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
        /* background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 50%, #facc15 100%); */
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

    /* Mobile Filter Styles */
    .mobile-filter-btn {
        display: none;
        position: fixed;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        background: #082f49;
        color: white;
        padding: 12px 24px;
        border-radius: 30px;
        font-weight: 600;
        cursor: pointer;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        z-index: 30;
        border: none;
        outline: none;
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
        background: #082f49;
        color: white;
        border: none;
    }

    .bottom-sheet-apply {
        background: #082f49;
        color: white;
        border: none;
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

    /* Featured tag */
    .featured-badge {
        background-color: #082f49 !important;
        color: white;
        font-size: 10px;
        padding: 4px 8px;
        border-radius: 12px;
        font-weight: 600;
        position: absolute;
        top: 8px;
        left: 8px;
        z-index: 10;
    }

    /* Wishlist Button Styles */
    .wishlist-btn {
        transition: all 0.3s ease;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: 8px;
        right: 8px;
        z-index: 10;
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(4px);
        border-radius: 50%;
        width: 32px;
        height: 32px;
        border: none;
        cursor: pointer;
    }

    .wishlist-btn:hover {
        transform: scale(1.1);
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        background: white;
    }

    .wishlist-btn.active svg {
        color: #ef4444;
        fill: #ef4444;
    }

    .wishlist-btn svg {
        width: 18px;
        height: 18px;
    }

    /* Filter chips */
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

    /* No products message */
    .no-products {
        text-align: center;
        padding: 2rem;
        color: #6b7280;
        grid-column: 1 / -1;
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
</style>


<div class="w-full">
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
                    <input type="checkbox" id="gm0">
                    <label for="gm0">0-1 gms</label>
                    &nbsp;&nbsp;&nbsp;
                    <input type="checkbox" id="gm1">
                    <label for="gm1">1-2 gms</label>
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="gm2">
                    <label for="gm2">2-4 gms</label>
                    &nbsp;&nbsp;&nbsp;
                    <input type="checkbox" id="gm3">
                    <label for="gm3">4-8 gms</label>
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="gm4">
                    <label for="gm4">8-12 gms</label>
                    &nbsp;&nbsp;&nbsp;
                    <input type="checkbox" id="gm5">
                    <label for="gm5">12 gms +</label>
                </div>
                <div class="filter-option">

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

            <!-- Active Filters -->
            <div class="active-filters" id="activeFilters"></div>

            <!-- Products Grid -->
            <div class="bg-background text-foreground">
                <?php if ($result && $result->num_rows > 0): ?>
                    <div class="products-grid" id="productsGrid">
                        <?php
                        while ($row = $result->fetch_assoc()) {
                            $items[] = $row['name']; // Optional if needed later
                            // Check if this product is in wishlist
                            $wishlistKey = $table_name . '_' . $row['id'];
                            $isInWishlist = isset($_SESSION['wishlist'][$wishlistKey]);
                        ?>
                            <a href="product-detail?id=<?php echo $row['id']; ?>&product_code=<?php echo $row['product_code']; ?>&table=<?php echo $table_name; ?>"
                                data-gender="<?php echo htmlspecialchars($row['gender'] ?? ''); ?>"
                                data-size="<?php echo htmlspecialchars($row['size'] ?? ''); ?>"
                                data-weight="<?php echo htmlspecialchars($row['net_weight'] ?? ''); ?>"
                                data-price="<?php
                                            $product_code = $row['product_code'];
                                            $data = displayRate($conn, $product_code, $table_name);
                                            echo ceil($data[0]);
                                            ?>">
                                <div class="product-card">
                                    <?php if ($row['is_featured'] == 1): ?>
                                        <div class="featured-badge">
                                            Featured
                                        </div>
                                    <?php endif; ?>

                                    <!-- Wishlist Button -->
                                    <button class="wishlist-btn <?php echo $isInWishlist ? 'active' : ''; ?>"
                                        data-product-id="<?php echo $row['id']; ?>"
                                        data-table-name="<?php echo $table_name; ?>"
                                        data-in-wishlist="<?php echo $isInWishlist ? 'true' : 'false'; ?>"
                                        aria-label="<?php echo $isInWishlist ? 'Remove from wishlist' : 'Add to wishlist'; ?>">

                                        <?php if ($isInWishlist): ?>
                                            <!-- Filled heart for items in wishlist -->
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                            </svg>
                                        <?php else: ?>
                                            <!-- Empty heart for items not in wishlist -->
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>
                                        <?php endif; ?>
                                    </button>

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

                                    <div class="lazy-image"
                                        data-src="<?php echo $imagedetails; ?>?v=<?php echo time(); ?>"
                                        data-alt="<?php echo htmlspecialchars($row['name']); ?>">
                                        <div class="lazy-placeholder">📸 Loading...</div>
                                    </div>

                                    <div class="product-info">
                                        <p class="product-name"><?php echo htmlspecialchars($row['name']); ?></p>
                                        <p class="product-price">₹ <?php echo ceil($data[0]); ?></p>
                                        <small class="product-tax-info">(Inclusive of all taxes)</small>
                                    </div>
                                </div>
                            </a>
                        <?php
                        }
                        ?>
                    </div>
                <?php else: ?>
                    <div class="no-products">
                        <p class="text-lg text-gray-600">No products found in this category.</p>
                    </div>
                <?php endif; ?>
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
            <button class="bottom-sheet-close" id="closeBottomSheet">×</button>
        </div>

        <!-- Price Filter -->
        <div class="filter-section">
            <h2 class="text-blue-900 text-lg font-semibold">Price</h2>
            <div class="filter-option">
                <input type="checkbox" id="m_price1">
                <label for="m_price1">₹ 0 - ₹ 5,000</label>
            </div>
            <div class="filter-option">
                <input type="checkbox" id="m_price2">
                <label for="m_price2">₹ 5,000 - ₹ 10,000</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <!-- </div>
            <div class="filter-option"> -->
                <input type="checkbox" id="m_price3">
                <label for="m_price3">₹ 10,000 - ₹ 20,000</label>
            </div>
            <div class="filter-option">
                <input type="checkbox" id="m_price4">
                <label for="m_price4">₹ 20,000 - ₹ 30,000</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <!-- </div>
            <div class="filter-option"> -->
                <input type="checkbox" id="m_price5">
                <label for="m_price5">₹ 30,000 - ₹ 50,000</label>
            </div>
            <div class="filter-option">
                <input type="checkbox" id="m_price6">
                <label for="m_price6">₹ 50,000 - ₹ 100,000</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <!-- </div>
            <div class="filter-option"> -->
                <input type="checkbox" id="m_price7">
                <label for="m_price7">₹ 1,00,000 and Above</label>
            </div>
        </div>

        <!-- Gender Filter -->
        <div class="filter-section">
            <h2 class="text-blue-900 text-lg font-semibold">Gender</h2>
            <div class="filter-option">
                <input type="checkbox" id="m_male">
                <label for="m_male">Male</label>
                &nbsp;&nbsp;&nbsp;
                <input type="checkbox" id="m_female">
                <label for="m_female">Female</label>
            </div>
        </div>

        <!-- Weight Filter -->
        <div class="filter-section">
            <h2 class="text-blue-900 text-lg font-semibold">Weight</h2>
            <div class="filter-option">
                <input type="checkbox" id="m_gm0">
                <label for="m_gm0">0-1 gms</label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" id="m_gm1">
                <label for="m_gm1">1-2 gms</label>
            </div>
            <div class="filter-option">
                <input type="checkbox" id="m_gm2">
                <label for="m_gm2">2-4 gms</label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" id="m_gm3">
                <label for="m_gm3">4-8 gms</label>
            </div>
            <div class="filter-option">
                <input type="checkbox" id="m_gm4">
                <label for="m_gm4">8-12 gms</label>
                &nbsp;&nbsp;&nbsp;
                <input type="checkbox" id="m_gm5">
                <label for="m_gm5">12 gms +</label>
            </div>
        </div>

        <!-- Size Filter -->
        <div class="filter-section">
            <h2 class="text-blue-900 text-lg font-semibold">Size</h2>
            <div class="filter-option">
                <input type="checkbox" id="m_adult">
                <label for="m_adult">Adult</label>
                &nbsp;&nbsp;&nbsp;
                <input type="checkbox" id="m_kids">
                <label for="m_kids">Kids</label>
                &nbsp;&nbsp;&nbsp;
                <input type="checkbox" id="m_baby">
                <label for="m_baby">Baby</label>
            </div>
        </div>

        <div class="bottom-sheet-footer">
            <button class="bottom-sheet-clear">Clear All</button>
            <button class="bottom-sheet-apply">Apply Filters</button>
        </div>
    </div>

    <!-- Overlay -->
    <div class="overlay" id="filterOverlay"></div>
</div>

<!-- JavaScript for filters and lazy loading -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Lazy loading functionality
        let loadedCount = 0;
        const totalImages = document.querySelectorAll('.lazy-image').length;

        // Create intersection observer for lazy loading
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const container = entry.target;
                    const src = container.getAttribute('data-src');
                    const alt = container.getAttribute('data-alt') || 'Product image';
                    const placeholder = container.querySelector('.lazy-placeholder');

                    if (src && !container.classList.contains('loaded') && !container.classList.contains('loading')) {
                        // Show loading state
                        container.classList.add('loading');
                        if (placeholder) {
                            placeholder.textContent = '⏳ Loading...';
                        }

                        // Create new image to preload
                        const img = new Image();

                        img.onload = function() {
                            // Create actual image element
                            const imageElement = document.createElement('img');
                            imageElement.src = src;
                            imageElement.alt = alt;
                            imageElement.className = 'w-full h-auto object-cover rounded';
                            imageElement.style.opacity = '0';
                            imageElement.style.transition = 'opacity 0.3s ease';

                            // Replace container content
                            container.innerHTML = '';
                            container.appendChild(imageElement);

                            // Fade in the image
                            setTimeout(() => {
                                imageElement.style.opacity = '1';
                            }, 50);

                            // Update states
                            container.classList.remove('loading');
                            container.classList.add('loaded');

                            // Update counter
                            loadedCount++;

                            console.log('✅ Image loaded:', src);
                        };

                        img.onerror = function() {
                            // Handle error
                            container.classList.remove('loading');
                            container.classList.add('error');

                            if (placeholder) {
                                placeholder.textContent = '❌ Image failed to load';
                            } else {
                                container.innerHTML = '<div class="lazy-placeholder">❌ Image failed to load</div>';
                            }

                            console.error('❌ Failed to load:', src);
                        };

                        // Start loading
                        img.src = src;

                        // Stop observing this container
                        observer.unobserve(container);
                    }
                }
            });
        }, {
            // Start loading when image is 100px away from viewport
            rootMargin: '100px 0px 100px 0px',
            // Trigger when at least 10% of container is visible
            threshold: 0.1
        });

        // Start observing all lazy image containers
        const lazyContainers = document.querySelectorAll('.lazy-image');
        lazyContainers.forEach(container => {
            imageObserver.observe(container);
        });

        console.log(`🚀 Lazy loading initialized for ${totalImages} images`);

        // Filter functionality
        const priceFilters = {
            'price1': {
                min: 0,
                max: 5000
            },
            'price2': {
                min: 5000,
                max: 10000
            },
            'price3': {
                min: 10000,
                max: 20000
            },
            'price4': {
                min: 20000,
                max: 30000
            },
            'price5': {
                min: 30000,
                max: 50000
            },
            'price6': {
                min: 50000,
                max: 100000
            },
            'price7': {
                min: 100000,
                max: Infinity
            }
        };

        const weightFilters = {
            'gm0': {
                min: 0,
                max: 1
            },
            'gm1': {
                min: 1,
                max: 2
            },
            'gm2': {
                min: 2,
                max: 4
            },
            'gm3': {
                min: 4,
                max: 8
            },
            'gm4': {
                min: 8,
                max: 12
            },
            'gm5': {
                min: 12,
                max: Infinity
            }
        };

        const sizeMapping = {
            'adult': 'Adult Size',
            'kids': 'Kids Size',
            'baby': 'Baby Size'
        };

        // Mobile bottom sheet functionality
        const mobileFilterBtn = document.getElementById('mobileFilterBtn');
        const mobileFilterSheet = document.getElementById('mobileFilterSheet');
        const closeBottomSheet = document.getElementById('closeBottomSheet');
        const filterOverlay = document.getElementById('filterOverlay');
        const applyFiltersBtn = document.querySelector('.bottom-sheet-apply');
        const clearFiltersBtn = document.querySelector('.bottom-sheet-clear');

        if (mobileFilterBtn && mobileFilterSheet) {
            // Open bottom sheet
            mobileFilterBtn.addEventListener('click', function() {
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

            closeBottomSheet.addEventListener('click', closeSheet);
            filterOverlay.addEventListener('click', closeSheet);

            // Apply filters
            applyFiltersBtn.addEventListener('click', function() {
                applyFilters();
                closeSheet();
            });

            // Clear filters
            clearFiltersBtn.addEventListener('click', function() {
                // Uncheck all checkboxes in the bottom sheet
                const checkboxes = mobileFilterSheet.querySelectorAll('input[type="checkbox"]');
                checkboxes.forEach(checkbox => {
                    checkbox.checked = false;
                });

                // Also uncheck desktop filters
                document.querySelectorAll('.filter-sidebar input[type="checkbox"]').forEach(checkbox => {
                    checkbox.checked = false;
                });

                applyFilters();
            });
        }

        // Function to update active filters display
        function updateActiveFilters() {
            const activeFiltersContainer = document.getElementById('activeFilters');
            activeFiltersContainer.innerHTML = '';

            // Price filters
            document.querySelectorAll('.filter-sidebar input[type="checkbox"]:checked, .mobile-filter-bottom-sheet input[type="checkbox"]:checked').forEach(checkbox => {
                if (checkbox.id in priceFilters || checkbox.id.startsWith('m_') && checkbox.id.substring(2) in priceFilters) {
                    const filterId = checkbox.id.startsWith('m_') ? checkbox.id.substring(2) : checkbox.id;
                    const filter = priceFilters[filterId];
                    const chip = document.createElement('div');
                    chip.className = 'filter-chip';
                    chip.innerHTML = `Price: ₹${filter.min.toLocaleString()} - ${filter.max === Infinity ? '∞' : '₹' + filter.max.toLocaleString()}<span class="remove">×</span>`;
                    activeFiltersContainer.appendChild(chip);

                    chip.querySelector('.remove').addEventListener('click', function() {
                        // Uncheck the corresponding checkbox
                        document.getElementById(checkbox.id).checked = false;
                        applyFilters();
                    });
                }

                // Gender filters
                if (checkbox.id === 'male' || checkbox.id === 'female' ||
                    checkbox.id === 'm_male' || checkbox.id === 'm_female') {
                    const gender = checkbox.id.endsWith('male') ? 'Male' : 'Female';
                    const chip = document.createElement('div');
                    chip.className = 'filter-chip';
                    chip.innerHTML = `Gender: ${gender}<span class="remove">×</span>`;
                    activeFiltersContainer.appendChild(chip);

                    chip.querySelector('.remove').addEventListener('click', function() {
                        document.getElementById(checkbox.id).checked = false;
                        applyFilters();
                    });
                }

                // Weight filters
                if (checkbox.id in weightFilters || checkbox.id.startsWith('m_') && checkbox.id.substring(2) in weightFilters) {
                    const filterId = checkbox.id.startsWith('m_') ? checkbox.id.substring(2) : checkbox.id;
                    const filter = weightFilters[filterId];
                    const chip = document.createElement('div');
                    chip.className = 'filter-chip';
                    chip.innerHTML = `Weight: ${filter.min}-${filter.max === Infinity ? '∞' : filter.max} gms<span class="remove">×</span>`;
                    activeFiltersContainer.appendChild(chip);

                    chip.querySelector('.remove').addEventListener('click', function() {
                        document.getElementById(checkbox.id).checked = false;
                        applyFilters();
                    });
                }

                // Size filters
                if (checkbox.id in sizeMapping || checkbox.id.startsWith('m_') && checkbox.id.substring(2) in sizeMapping) {
                    const filterId = checkbox.id.startsWith('m_') ? checkbox.id.substring(2) : checkbox.id;
                    const size = sizeMapping[filterId];
                    const chip = document.createElement('div');
                    chip.className = 'filter-chip';
                    chip.innerHTML = `Size: ${size}<span class="remove">×</span>`;
                    activeFiltersContainer.appendChild(chip);

                    chip.querySelector('.remove').addEventListener('click', function() {
                        document.getElementById(checkbox.id).checked = false;
                        applyFilters();
                    });
                }
            });
        }

        // Main filter function
        function applyFilters() {
            // Get active filters
            const activePriceFilters = [];
            const activeGenderFilters = [];
            const activeSizeFilters = [];
            const activeWeightFilters = [];

            // Check desktop filters
            document.querySelectorAll('.filter-sidebar input[type="checkbox"]:checked').forEach(checkbox => {
                if (checkbox.id in priceFilters) {
                    activePriceFilters.push(priceFilters[checkbox.id]);
                }
                if (checkbox.id in weightFilters) {
                    activeWeightFilters.push(weightFilters[checkbox.id]);
                }
                if (checkbox.id === 'male' || checkbox.id === 'female') {
                    activeGenderFilters.push(checkbox.id.charAt(0).toUpperCase() + checkbox.id.slice(1));
                }
                if (checkbox.id in sizeMapping) {
                    activeSizeFilters.push(sizeMapping[checkbox.id]);
                }
            });

            // Check mobile filters
            document.querySelectorAll('.mobile-filter-bottom-sheet input[type="checkbox"]:checked').forEach(checkbox => {
                if (checkbox.id.startsWith('m_') && checkbox.id.substring(2) in priceFilters) {
                    activePriceFilters.push(priceFilters[checkbox.id.substring(2)]);
                }
                if (checkbox.id.startsWith('m_') && checkbox.id.substring(2) in weightFilters) {
                    activeWeightFilters.push(weightFilters[checkbox.id.substring(2)]);
                }
                if (checkbox.id === 'm_male' || checkbox.id === 'm_female') {
                    activeGenderFilters.push(checkbox.id.substring(2).charAt(0).toUpperCase() + checkbox.id.substring(2).slice(1));
                }
                if (checkbox.id.startsWith('m_') && checkbox.id.substring(2) in sizeMapping) {
                    activeSizeFilters.push(sizeMapping[checkbox.id.substring(2)]);
                }
            });

            // Filter products
            const productItems = document.querySelectorAll('#productsGrid a');
            let visibleCount = 0;

            productItems.forEach(item => {
                const price = parseFloat(item.dataset.price) || 0;
                const productGender = item.dataset.gender;
                const productSize = item.dataset.size;
                const productWeight = parseFloat(item.dataset.weight) || 0;

                let priceMatch = activePriceFilters.length === 0;
                let genderMatch = activeGenderFilters.length === 0;
                let sizeMatch = activeSizeFilters.length === 0;
                let weightMatch = activeWeightFilters.length === 0;

                // Check price filters
                for (const filter of activePriceFilters) {
                    if (price >= filter.min && price <= filter.max) {
                        priceMatch = true;
                        break;
                    }
                }

                // Check weight filters
                for (const filter of activeWeightFilters) {
                    if (productWeight >= filter.min && productWeight <= filter.max) {
                        weightMatch = true;
                        break;
                    }
                }

                // Check gender filters
                for (const filter of activeGenderFilters) {
                    if (productGender && productGender.toLowerCase() === filter.toLowerCase()) {
                        genderMatch = true;
                        break;
                    }
                }

                // Check size filters
                for (const filter of activeSizeFilters) {
                    if (productSize && productSize.toLowerCase() === filter.toLowerCase()) {
                        sizeMatch = true;
                        break;
                    }
                }

                // Show/hide based on filters
                if (priceMatch && genderMatch && sizeMatch && weightMatch) {
                    item.style.display = 'block';
                    visibleCount++;
                } else {
                    item.style.display = 'none';
                }
            });

            // Update active filters display
            updateActiveFilters();

            console.log(`Applied filters: ${visibleCount} products visible`);
        }

        // Connect filter checkboxes to applyFilters function
        document.querySelectorAll('.filter-sidebar input[type="checkbox"], .mobile-filter-bottom-sheet input[type="checkbox"]').forEach(checkbox => {
            checkbox.addEventListener('change', applyFilters);
        });

        // Wishlist functionality
        // ===== WISHLIST FUNCTIONALITY =====

        // Function to show wishlist messages
        function showWishlistMessage(message, type = 'info') {
            // Remove existing message if any
            const existingMessage = document.querySelector('.wishlist-message');
            if (existingMessage) {
                existingMessage.remove();
            }

            // Create message element
            const messageDiv = document.createElement('div');
            messageDiv.className = `wishlist-message fixed top-20 right-4 px-4 py-2 rounded-lg text-white z-50 transition-all duration-300 text-sm font-medium shadow-lg`;

            // Set background color based on type
            switch (type) {
                case 'success':
                    messageDiv.style.backgroundColor = '#10b981';
                    break;
                case 'error':
                    messageDiv.style.backgroundColor = '#ef4444';
                    break;
                case 'info':
                    messageDiv.style.backgroundColor = '#3b82f6';
                    break;
            }

            messageDiv.textContent = message;
            messageDiv.style.transform = 'translateX(100%)';
            messageDiv.style.opacity = '0';

            document.body.appendChild(messageDiv);

            // Animate in
            requestAnimationFrame(() => {
                messageDiv.style.transform = 'translateX(0)';
                messageDiv.style.opacity = '1';
            });

            // Remove after 3 seconds
            setTimeout(() => {
                messageDiv.style.transform = 'translateX(100%)';
                messageDiv.style.opacity = '0';
                setTimeout(() => {
                    if (messageDiv.parentNode) {
                        messageDiv.parentNode.removeChild(messageDiv);
                    }
                }, 300);
            }, 3000);
        }

        // Helper function to update wishlist button appearance
        function updateWishlistButton(button, isInWishlist) {
            if (isInWishlist) {
                // Show filled heart for items in wishlist
                button.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                </svg>`;
                button.classList.add('active');
                button.dataset.inWishlist = 'true';
                button.setAttribute('aria-label', 'Remove from wishlist');
            } else {
                // Show empty heart for items not in wishlist
                button.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600 hover:text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>`;
                button.classList.remove('active');
                button.dataset.inWishlist = 'false';
                button.setAttribute('aria-label', 'Add to wishlist');
            }
        }

        // Initialize wishlist buttons
        document.querySelectorAll('.wishlist-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();

                const productId = this.dataset.productId;
                const tableName = this.dataset.tableName;
                const isInWishlist = this.dataset.inWishlist === 'true';
                const action = isInWishlist ? 'remove' : 'add';

                // Enhanced validation
                if (!productId || isNaN(productId)) {
                    console.error('Invalid product ID:', productId);
                    showWishlistMessage('Error: Invalid product ID', 'error');
                    return;
                }

                // Disable button to prevent double clicks
                this.style.pointerEvents = 'none';
                this.style.opacity = '0.6';

                console.log('Wishlist action:', {
                    action,
                    productId,
                    tableName,
                    isInWishlist
                });

                // Build URL with proper encoding
                const params = new URLSearchParams({
                    wishlist_action: action,
                    product_id: productId,
                    table_name: tableName,
                    ajax: '1'
                });

                const url = `${window.location.pathname}?${params.toString()}`;
                console.log('Making request to:', url);

                // Make AJAX call to update wishlist
                fetch(url, {
                        method: 'GET',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Cache-Control': 'no-cache'
                        },
                        credentials: 'same-origin'
                    })
                    .then(response => {
                        console.log('Response status:', response.status);
                        console.log('Response headers:', Object.fromEntries(response.headers.entries()));

                        if (!response.ok) {
                            throw new Error(`HTTP error! status: ${response.status}`);
                        }

                        const contentType = response.headers.get('content-type');
                        if (!contentType || !contentType.includes('application/json')) {
                            return response.text().then(text => {
                                console.error('Non-JSON response:', text.substring(0, 200));
                                throw new Error('Response is not JSON. Got: ' + (contentType || 'unknown'));
                            });
                        }

                        return response.json();
                    })
                    .then(data => {
                        console.log('Wishlist response:', data);

                        if (data.success) {
                            // Update button state immediately
                            const newWishlistState = action === 'add';
                            updateWishlistButton(this, newWishlistState);

                            // Show success message
                            const message = action === 'add' ? 'Added to wishlist!' : 'Removed from wishlist!';
                            const messageType = action === 'add' ? 'success' : 'info';
                            showWishlistMessage(message, messageType);

                        } else {
                            // Handle error from server
                            console.error('Wishlist server error:', data.error || 'Unknown error');
                            showWishlistMessage(data.error || 'Something went wrong', 'error');
                        }
                    })
                    .catch(error => {
                        console.error('Wishlist fetch error:', error);
                        // showWishlistMessage('Connection error. Please try again.', 'error');
                        location.reload();
                    })
                    .finally(() => {
                        // Re-enable button and remove loading state
                        this.style.pointerEvents = 'auto';
                        this.style.opacity = '1';
                    });
            });
        });

        // ===== FILTER CHIP REMOVAL =====
        document.querySelectorAll('.filter-chip .remove').forEach(removeBtn => {
            removeBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                this.parentElement.remove();
            });
        });

        console.log("🚀 All functionality initialized successfully");
    });
</script>

<!-- ###################################--END--########################################## -->

<?php include('includes/footer.php'); ?>
</body>

</html>