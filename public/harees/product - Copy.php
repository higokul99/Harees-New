<!DOCTYPE html>
<html lang="en">

<!-- head tag open -->
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

<!-- ###################################--START--########################################## -->
<?php 
    include ('includes/dbconnect.php');
    include ('functionsFE.php');
?>
<?php
    // Get and sanitize parameters
    $type = $_GET['type'];
    $name = $_GET['name'] ;
    
    if ($type == '22k'){
        $table_name = '22kgold_product_'.$name;
        $PageTitle = "22K Gold". ' ' .$name;
    }
    else if ($type == '18k'){
        $table_name = '18kgold_product_'.$name;
        $PageTitle = "18K Gold". ' ' .$name;
    }
    else if ($type == 'silver'){
        $table_name = 'silver_product_'.$name;
        $PageTitle = "Silver". ' ' .$name;
    }
    else if ($type == 'rose_gold'){
        $table_name = 'rosegold_product_'.$name;
        $PageTitle = "RoseGold Silver". ' ' .$name;
    }
    else if ($type == 'diamond'){
        $table_name = '18kdgold_product_'.$name;
        $PageTitle = "18K Gold & Diamonds". ' ' .$name;
    }
    
    // Add error checking for the query
    $table_name = strtolower($table_name);
 
    // Modified query to sort by Is_featured first (featured items first)
    $query = "SELECT * FROM $table_name WHERE CAST(is_featured AS UNSIGNED) != 2 ORDER BY is_featured DESC, id ASC";
    //echo $query;
    $result = $conn->query($query);
    
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
    height: 20px;
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
                    <label for="price1">₹ 0 - ₹ 10,000</label>
                    <!-- <span class="count">(26)</span> -->
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="price2">
                    <label for="price2">₹ 10,000 - ₹ 20,000</label>
                    <!-- <span class="count">(108)</span> -->
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="price3">
                    <label for="price3">₹ 20,000 - ₹ 50,000</label>
                    <!-- <span class="count">(214)</span> -->
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="price4">
                    <label for="price4">₹ 50,000 - ₹ 1,00,000</label>
                    <!-- <span class="count">(217)</span> -->
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="price5">
                    <label for="price5">₹ 1,00,000 and Above</label>
                    <!-- <span class="count">(886)</span> -->
                </div>
            </div>
            
            <!-- Type Filter -->
                <div class="filter-section">
                    <h2 class="text-blue-900 text-lg font-semibold">Gender</h2>
                    <div class="filter-option">
                        <input type="checkbox" id="male">
                        <label for="male">Male</label>
                        <!-- <span class="count">(1460)</span> -->
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" id="female">
                        <label for="female">Female</label>
                        <!-- <span class="count">(1453)</span> -->
                    </div>
                </div>
            
           
            <!-- <div class="bottom-sheet-footer">
                <button class="bottom-sheet-clear">Clear All</button>
                <button class="bottom-sheet-apply">Apply Filters</button>
            </div> -->
        </div>
        
        <!-- Main Content -->
        <div class="main-content">
            <?php $PageTitle = strtoupper($PageTitle); ?>
            <h1 class="page-title"><?php echo $PageTitle; ?></h1>
            
            <!-- Products Grid -->
            <div class="bg-background text-foreground p-4">
                <div class="mb-8">
                    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                    <?php
while ($row = $result->fetch_assoc()) {
    $items[] = $row['name']; // Optional if needed later
    // Add data-gender attribute to the product link
?>
<a href="product-detail.php?id=<?php echo $row['id']; ?>&product_code=<?php echo $row['product_code']; ?>&table=<?php echo $table_name; ?>" 
   data-gender="<?php echo htmlspecialchars($row['gender']); ?>">
    <div class="border border-border p-4 rounded-lg relative">
        <?php if ($row['is_featured'] == 1): ?>
            <div class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded-full font-semibold z-10">
                Featured
            </div>
        <?php endif; ?>
        <?php
        switch ($env) {
            case 'local':
              $loc = "ims/internal/";
              $imagedetails = $loc.$row['img2'];
              break;
            case 'dev':
              $loc = "ims/internal/";
              $imagedetails = $loc.$row['img2'];
              break;
            case 'prod':
              $loc = "ims/internal/";
              $imagedetails = $loc.$row['img2'];
              break; 
            default:
              break;
        } 
        ?>                      
        <img 
            class="lazy-image w-full h-auto mb-2 object-cover" 
            data-src="<?php echo $loc.$row['img2']; ?>?v=<?php echo time(); ?>" 
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
            <button class="bottom-sheet-close" id="closeBottomSheet">×</button>
        </div>
        
        <!-- Price Filter -->
        <div class="filter-section">
            <h2 class="text-blue-900 text-lg font-semibold">Price</h2>
            <div class="filter-option">
                <input type="checkbox" id="m_price1">
                <label for="m_price1">₹0 - ₹ 10,000</label>
                <!-- <span class="count">(26)</span> -->
            </div>
            <div class="filter-option">
                <input type="checkbox" id="m_price2">
                <label for="m_price2">₹ 10,000 - ₹ 20,000</label>
                <!-- <span class="count">(108)</span> -->
            </div>
            <div class="filter-option">
                <input type="checkbox" id="m_price3">
                <label for="m_price3">₹ 20,000 - ₹ 50,000</label>
                <!-- <span class="count">(214)</span> -->
            </div>
            <div class="filter-option">
                <input type="checkbox" id="m_price4">
                <label for="m_price4">₹ 50,000 - ₹ 1,00,000</label>
                <!-- <span class="count">(217)</span> -->
            </div>
            <div class="filter-option">
                <input type="checkbox" id="m_price5">
                <label for="m_price5">₹ 1,00,000 and Above</label>
                <!-- <span class="count">(886)</span> -->
            </div>
        </div>
        
        <!-- Type Filter -->
        <div class="filter-section">
            <h2 class="text-blue-900 text-lg font-semibold">Gender</h2>
            <div class="filter-option">
                <input type="checkbox" id="male">
                <label for="male">Male</label>
                <!-- <span class="count">(1460)</span> -->
            </div>
            <div class="filter-option">
                <input type="checkbox" id="female">
                <label for="female">Female</label>
                <!-- <span class="count">(1453)</span> -->
            </div>
            <!-- <div class="filter-option">
                <input type="checkbox" id="m_type3">
                <label for="m_type3">Pendants</label>
                <span class="count">(586)</span>
            </div>
            <div class="filter-option">
                <input type="checkbox" id="m_type4">
                <label for="m_type4">Necklaces</label>
                <span class="count">(325)</span>
            </div>
            <div class="filter-option">
                <input type="checkbox" id="m_type5">
                <label for="m_type5">Bangles</label>
                <span class="count">(253)</span>
            </div>
            <div class="filter-option">
                <input type="checkbox" id="m_type6">
                <label for="m_type6">Monoplustro</label>
                <span class="count">(170)</span>
            </div> -->
        </div>
        
        <!-- Metal Filter -->
        <!-- <div class="filter-section">
            <h3>Metal</h3>
            <div class="filter-option">
                <input type="checkbox" id="m_metal1">
                <label for="m_metal1">Gold</label>
                <span class="count">(1053)</span>
            </div>
            <div class="filter-option">
                <input type="checkbox" id="m_metal2">
                <label for="m_metal2">Rose Gold</label>
                <span class="count">(199)</span>
            </div>
            <div class="filter-option">
                <input type="checkbox" id="m_metal3">
                <label for="m_metal3">White Gold</label>
                <span class="count">(123)</span>
            </div>
            <div class="filter-option">
                <input type="checkbox" id="m_metal4">
                <label for="m_metal4">Platinum</label>
                <span class="count">(78)</span>
            </div>
        </div> -->
        
        <!-- Discount Banner -->
        <!-- <div class="discount-banner">
            10% OFF ON DIAMOND PRICE
        </div> -->
        
        <div class="bottom-sheet-footer">
            <button class="bottom-sheet-clear">Clear All</button>
            <button class="bottom-sheet-apply">Apply Filters</button>
        </div>
    </div>
    
    <!-- Overlay -->
    <div class="overlay" id="filterOverlay"></div>
</div>

<!-- FIXED: Proper lazy loading JavaScript -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    // Create intersection observer for lazy loading
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                const src = img.getAttribute('data-src');
                const placeholder = img.nextElementSibling;
                
                if (src && !img.classList.contains('loaded')) {
                    // Show loading state
                    img.classList.add('loading');
                    if (placeholder && placeholder.classList.contains('lazy-placeholder')) {
                        placeholder.textContent = '⏳ Loading...';
                    }
                    
                    // Create new image to preload
                    const imageLoader = new Image();
                    
                    imageLoader.onload = function() {
                        // Image loaded successfully
                        img.src = src;
                        img.classList.remove('loading');
                        img.classList.add('loaded');
                        
                        // Hide placeholder
                        if (placeholder && placeholder.classList.contains('lazy-placeholder')) {
                            placeholder.style.display = 'none';
                        }
                        
                        console.log('✅ Image loaded:', src);
                    };
                    
                    imageLoader.onerror = function() {
                        // Handle error
                        img.classList.remove('loading');
                        img.style.background = '#ffebee';
                        
                        if (placeholder && placeholder.classList.contains('lazy-placeholder')) {
                            placeholder.textContent = '❌ Failed to load';
                            placeholder.style.color = '#c62828';
                        }
                        
                        console.error('❌ Failed to load:', src);
                    };
                    
                    // Start loading
                    imageLoader.src = src;
                    
                    // Stop observing this image
                    observer.unobserve(img);
                }
            }
        });
    }, {
        // Start loading when image is 50px away from viewport
        rootMargin: '50px 0px 50px 0px',
        // Trigger when at least 10% of image container is visible
        threshold: 0.1
    });

    // Start observing all lazy images
    const lazyImages = document.querySelectorAll('.lazy-image');
    lazyImages.forEach(img => {
        imageObserver.observe(img);
    });
    
    console.log(`🚀 Lazy loading initialized for ${lazyImages.length} images`);
    
    // Filter chip removal functionality
    document.querySelectorAll('.filter-chip .remove').forEach(removeBtn => {
        removeBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            this.parentElement.remove();
        });
    });
    
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
            closeSheet();
            // Add your filter application logic here
        });
        
        // Clear filters
        clearFiltersBtn.addEventListener('click', function() {
            // Uncheck all checkboxes in the bottom sheet
            const checkboxes = mobileFilterSheet.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(checkbox => {
                checkbox.checked = false;
            });
            // Add your filter clearing logic here
        });
    }
});

// Add this to your existing JavaScript code
document.addEventListener("DOMContentLoaded", function () {
    // ... existing code ...
    
    // Filter functionality
    // Replace your existing applyFilters function with this updated version
function applyFilters() {
    const priceFilters = {
        'price1': { min: 0, max: 10000 },
        'price2': { min: 10000, max: 20000 },
        'price3': { min: 20000, max: 50000 },
        'price4': { min: 50000, max: 100000 },
        'price5': { min: 1000000, max: Infinity }
    };
    
    // Get active filters
    const activePriceFilters = [];
    const activeGenderFilters = [];
    
    // Check desktop filters
    document.querySelectorAll('.filter-sidebar input[type="checkbox"]:checked').forEach(checkbox => {
        if (checkbox.id in priceFilters) {
            activePriceFilters.push(priceFilters[checkbox.id]);
        }
        if (checkbox.id === 'male' || checkbox.id === 'female') {
            activeGenderFilters.push(checkbox.id.charAt(0).toUpperCase() + checkbox.id.slice(1)); // Capitalize first letter
        }
    });
    
    // Check mobile filters
    document.querySelectorAll('.mobile-filter-bottom-sheet input[type="checkbox"]:checked').forEach(checkbox => {
        if (checkbox.id.startsWith('m_') && checkbox.id.substring(2) in priceFilters) {
            activePriceFilters.push(priceFilters[checkbox.id.substring(2)]);
        }
        if (checkbox.id === 'male' || checkbox.id === 'female') {
            activeGenderFilters.push(checkbox.id.charAt(0).toUpperCase() + checkbox.id.slice(1)); // Capitalize first letter
        }
    });
    
    // Filter products
    const productItems = document.querySelectorAll('.main-content a');
    let visibleCount = 0;
    
    productItems.forEach(item => {
        const priceText = item.querySelector('p.text-lg').textContent;
        const price = parseInt(priceText.replace(/[^0-9]/g, ''));
        const productId = item.getAttribute('href').split('id=')[1].split('&')[0];
        
        // We'll need to get the gender from the data attribute we'll add
        const productGender = item.dataset.gender;
        
        let priceMatch = activePriceFilters.length === 0;
        let genderMatch = activeGenderFilters.length === 0;
        
        // Check price filters
        for (const filter of activePriceFilters) {
            if (price >= filter.min && price <= filter.max) {
                priceMatch = true;
                break;
            }
        }
        
        // Check gender filters
        for (const filter of activeGenderFilters) {
            if (productGender === filter) {
                genderMatch = true;
                break;
            }
        }
        
        // Show/hide based on filters
        if (priceMatch && genderMatch) {
            item.style.display = 'block';
            visibleCount++;
        } else {
            item.style.display = 'none';
        }
    });
    
    console.log(`Applied filters: ${visibleCount} products visible`);
}
    
    // Connect filter checkboxes to applyFilters function
    document.querySelectorAll('.filter-sidebar input[type="checkbox"], .mobile-filter-bottom-sheet input[type="checkbox"]').forEach(checkbox => {
        checkbox.addEventListener('change', applyFilters);
    });
    
    // Connect apply buttons to applyFilters function
    document.querySelectorAll('.bottom-sheet-apply').forEach(button => {
        button.addEventListener('click', function() {
            applyFilters();
            // Close mobile sheet if open
            if (mobileFilterSheet) {
                mobileFilterSheet.classList.remove('active');
                filterOverlay.style.display = 'none';
                document.body.style.overflow = '';
            }
        });
    });
    
    // Connect clear buttons
    document.querySelectorAll('.bottom-sheet-clear').forEach(button => {
        button.addEventListener('click', function() {
            // Uncheck all checkboxes
            document.querySelectorAll('.filter-sidebar input[type="checkbox"], .mobile-filter-bottom-sheet input[type="checkbox"]').forEach(checkbox => {
                checkbox.checked = false;
            });
            applyFilters();
        });
    });
    
    // ... rest of your existing code ...
});
</script>

<!-- ###################################--END--########################################## -->

<?php include ('includes/footer.php'); ?>

<!-- </span> </button> </div> -->
    </body>
</html>