<?php
session_start();
if (isset($_SESSION['userid'])) {
    include('includes/uhead.php');
} else {
    include('includes/head.php');
    include('includes/header.php');
    include('includes/navbar.php');
}

// Get celebration type from URL
$celebration = isset($_GET['celebration']) ? $_GET['celebration'] : '';

// Set page variables based on celebration type
if ($celebration === 'birthday') {
    $pageTitle = "Birthday Special Offers";
    $greeting = "Happy Birthday!";
    $subtitle = "Celebrate your special day with these exclusive offers!";
    $icon = "🎂";
    $collectionType = "Birthday";
    $themeColor = "#F59E0B"; // Amber 500
    $secondaryColor = "#D97706"; // Amber 600
} elseif ($celebration === 'anniversary') {
    $pageTitle = "Anniversary Special Offers";
    $greeting = "Happy Anniversary!";
    $subtitle = "Make your celebration even more memorable!";
    $icon = "💍";
    $collectionType = "Anniversary";
    $themeColor = "#D4AF37"; // Gold
    $secondaryColor = "#B7950B"; // Darker Gold
} else {
    header("Location: index.php");
    exit;
}
?>

<style>
    :root {
        --theme-color: <?php echo $themeColor; ?>;
        --secondary-color: <?php echo $secondaryColor; ?>;
    }

    /* Celebration Header */
    .celebration-header {
        background: linear-gradient(135deg, rgba(245, 158, 11, 0.1) 0%, rgba(245, 158, 11, 0.05) 100%);
        padding: 4rem 0 3rem;
        text-align: center;
        position: relative;
        overflow: hidden;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }

    .celebration-header::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--theme-color), var(--secondary-color));
    }

    .celebration-icon {
        font-size: 5rem;
        margin-bottom: 1.5rem;
        display: inline-block;
        animation: bounce 2s infinite;
        filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.1));
    }

    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-15px); }
    }

    /* Product Grid */
    .products-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
        gap: 25px;
        padding: 20px 0;
    }

    @media (max-width: 640px) {
        .products-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }
    }

    @media (min-width: 641px) and (max-width: 768px) {
        .products-grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }
    }

    @media (min-width: 769px) and (max-width: 1024px) {
        .products-grid {
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }
    }

    /* Product Card */
    .product-card {
        border: 1px solid #e5e7eb;
        border-radius: 12px;
        padding: 15px;
        background: white;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.03);
    }

    .product-card:hover {
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        transform: translateY(-5px);
        border-color: var(--theme-color);
    }

    .product-image-container {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        aspect-ratio: 1/1;
        background: #f8f9fa;
    }

    .product-info {
        padding: 15px 5px 5px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .product-name {
        font-size: 15px;
        font-weight: 600;
        color: #374151;
        line-height: 1.4;
        margin-bottom: 8px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        min-height: 42px;
    }

    .product-price-container {
        margin-top: auto;
    }

    .product-price {
        font-size: 18px;
        font-weight: 700;
        color: #082f49;
    }

    .original-price {
        font-size: 14px;
        text-decoration: line-through;
        color: #9ca3af;
        margin-left: 6px;
    }

    .discount-badge {
        position: absolute;
        top: 15px;
        left: 15px;
        background-color: var(--theme-color);
        color: white;
        font-size: 13px;
        padding: 4px 12px;
        border-radius: 20px;
        font-weight: 600;
        z-index: 10;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .product-actions {
        display: flex;
        justify-content: space-between;
        margin-top: 12px;
    }

    .add-to-cart, .view-details {
        padding: 8px 12px;
        border-radius: 6px;
        font-size: 13px;
        font-weight: 600;
        transition: all 0.2s;
    }

    .add-to-cart {
        background-color: var(--theme-color);
        color: white;
        border: none;
        flex-grow: 1;
        margin-right: 5px;
    }

    .add-to-cart:hover {
        background-color: var(--secondary-color);
        transform: translateY(-2px);
    }

    .view-details {
        background-color: white;
        color: var(--theme-color);
        border: 1px solid var(--theme-color);
    }

    .view-details:hover {
        background-color: rgba(245, 158, 11, 0.05);
    }

    /* Special Offer Banner */
    .special-offer-container {
        max-width: 1200px;
        margin: 30px auto;
        padding: 0 20px;
    }

    .special-offer-banner {
        background: linear-gradient(135deg, var(--theme-color) 0%, var(--secondary-color) 100%);
        border-radius: 12px;
        padding: 25px;
        text-align: center;
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 0 8px 20px rgba(245, 158, 11, 0.2);
        position: relative;
        overflow: hidden;
    }

    .special-offer-banner::before {
        content: "";
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, rgba(255,255,255,0) 70%);
        transform: rotate(30deg);
        animation: shine 3s infinite;
    }

    @keyframes shine {
        0% { transform: translateX(-100%) rotate(30deg); }
        100% { transform: translateX(100%) rotate(30deg); }
    }

    .coupon-code {
        display: inline-block;
        background: #082f49;
        color: white;
        padding: 12px 30px;
        border-radius: 30px;
        font-family: 'Courier New', monospace;
        font-size: 1.3rem;
        margin: 15px 0;
        letter-spacing: 1px;
        font-weight: bold;
        border: 2px dashed rgba(255,255,255,0.3);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Confetti Effect */
    .confetti-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: -1;
        pointer-events: none;
    }

    .confetti {
        position: absolute;
        width: 12px;
        height: 12px;
        opacity: 0;
        pointer-events: none;
        animation: confetti 5s linear infinite;
    }

    @keyframes confetti {
        0% {
            transform: translateY(-10px) rotate(0deg);
            opacity: 1;
        }
        100% {
            transform: translateY(100vh) rotate(720deg);
            opacity: 0;
        }
    }

    /* Category Tabs */
    .category-tabs-container {
        max-width: 1200px;
        margin: 0 auto 30px;
        padding: 0 20px;
    }

    .category-tabs {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 10px;
    }

    .category-tab {
        padding: 10px 25px;
        border-radius: 25px;
        background: #f3f4f6;
        color: #4b5563;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        border: 1px solid #e5e7eb;
    }

    .category-tab.active {
        background: var(--theme-color);
        color: white;
        border-color: var(--theme-color);
        box-shadow: 0 4px 8px rgba(245, 158, 11, 0.2);
    }

    .category-tab:hover {
        background: #e5e7eb;
    }

    /* Section Title */
    .section-title {
        text-align: center;
        margin: 50px 0 30px;
        position: relative;
    }

    .section-title h2 {
        display: inline-block;
        font-size: 32px;
        font-weight: 700;
        color: #082f49;
        padding-bottom: 10px;
        position: relative;
    }

    .section-title h2::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 4px;
        background: linear-gradient(90deg, var(--theme-color), var(--secondary-color));
        border-radius: 2px;
    }

    /* View All Button */
    .view-all-container {
        text-align: center;
        margin: 40px 0;
    }

    .view-all-btn {
        display: inline-block;
        padding: 14px 35px;
        background: linear-gradient(135deg, var(--theme-color) 0%, var(--secondary-color) 100%);
        color: white;
        font-weight: 600;
        border-radius: 30px;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(245, 158, 11, 0.3);
        font-size: 16px;
    }

    .view-all-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(245, 158, 11, 0.4);
    }

    /* Personalized Message */
    .personalized-message {
        background: linear-gradient(135deg, rgba(245, 158, 11, 0.03) 0%, rgba(245, 158, 11, 0.01) 100%);
        padding: 60px 0;
        border-top: 1px solid rgba(0, 0, 0, 0.05);
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }

    .message-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 0 20px;
        text-align: center;
    }

    /* Loading Animation */
    .lazy-image {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }

    .lazy-image.loading {
        background: linear-gradient(90deg, #f0f0f0 25%, #f8f8f8 50%, #f0f0f0 75%);
        background-size: 200% 100%;
        animation: shimmer 1.5s infinite;
    }

    .lazy-placeholder {
        color: #9ca3af;
        font-size: 14px;
    }

    @keyframes shimmer {
        0% { background-position: 200% 0; }
        100% { background-position: -200% 0; }
    }

    /* Floating CTA */
    .floating-cta {
        position: fixed;
        bottom: 30px;
        right: 30px;
        background: var(--theme-color);
        color: white;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        z-index: 100;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .floating-cta:hover {
        transform: scale(1.1);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }

    .floating-cta i {
        font-size: 24px;
    }
</style>

<!-- Confetti Elements -->
<div class="confetti-container">
    <?php for($i=0; $i<50; $i++): ?>
        <div class="confetti" style="
            left: <?php echo rand(0, 100); ?>%;
            background-color: <?php echo ['#D4AF37','#FFD700','#FF69B4','#82E0AA','#5DADE2','#F59E0B'][rand(0,5)]; ?>;
            animation-delay: <?php echo rand(0, 5000)/1000; ?>s;
            animation-duration: <?php echo rand(30, 100)/10; ?>s;
            width: <?php echo rand(8, 15); ?>px;
            height: <?php echo rand(8, 15); ?>px;
        "></div>
    <?php endfor; ?>
</div>

<!-- Celebration Header -->
<div class="celebration-header">
    <div class="celebration-icon"><?php echo $icon; ?></div>
    <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-3"><?php echo $greeting; ?></h1>
    <p class="text-xl md:text-2xl text-gray-600 max-w-2xl mx-auto"><?php echo $subtitle; ?></p>
</div>

<!-- Special Offer Banner -->
<div class="special-offer-container">
    <div class="special-offer-banner">
        <h3 class="text-xl font-bold text-white mb-3">EXCLUSIVE <?php echo strtoupper($celebration); ?> OFFER!</h3>
        <p class="text-white text-lg mb-2">Use this code at checkout for extra 15% off</p>
        <div class="coupon-code">HAPPY<?php echo strtoupper(substr($celebration, 0, 3)); ?>15</div>
        <p class="text-sm text-white opacity-90">Valid until <?php echo date('F jS', strtotime('+7 days')); ?></p>
    </div>
</div>

<!-- Category Tabs -->
<div class="category-tabs-container">
    <div class="category-tabs">
        <div class="category-tab active">All</div>
        <div class="category-tab">Rings</div>
        <div class="category-tab">Necklaces</div>
        <div class="category-tab">Bracelets</div>
        <div class="category-tab">Earrings</div>
        <div class="category-tab">Pendants</div>
        <div class="category-tab">Sets</div>
    </div>
</div>

<!-- Special Offers Grid -->
<div class="products-container">
    <div class="section-title">
        <h2><?php echo $collectionType; ?> Collection</h2>
    </div>
    
    <div class="products-grid">
        <?php 
        // Product data arrays
        $productTypes = ['Ring', 'Necklace', 'Bracelet', 'Earrings', 'Pendant', 'Bangle', 'Chain'];
        $materials = ['Gold', 'Silver', 'Platinum', 'Rose Gold', 'White Gold'];
        $gems = ['Ruby', 'Sapphire', 'Emerald', 'Pearl', 'Diamond', 'Topaz', 'Amethyst', 'None'];
        $styles = ['Vintage', 'Modern', 'Minimalist', 'Statement', 'Classic', 'Bohemian'];
        $finishes = ['Polished', 'Brushed', 'Matte', 'Hammered', 'Textured'];
        
        // Generate 25 products
        for ($i = 1; $i <= 25; $i++): 
            $discount = rand(15, 30);
            $originalPrice = rand(5000, 80000);
            $discountedPrice = round($originalPrice - ($originalPrice * $discount / 100));
            $productType = $productTypes[array_rand($productTypes)];
            $material = $materials[array_rand($materials)];
            $gem = $gems[array_rand($gems)];
            $style = $styles[array_rand($styles)];
            $finish = $finishes[array_rand($finishes)];
            
            // Generate product name based on celebration type
            if ($celebration === 'birthday') {
                $nameParts = [
                    "Birthday $productType",
                    "Personalized $productType",
                    "$material $productType",
                    "$style $productType",
                    "$gem $productType",
                    "Special Day $productType"
                ];
                
                $descriptors = [
                    "with Birthstone",
                    "with Engraving",
                    "for Celebrations",
                    "Gift Edition",
                    "Limited Edition",
                    "with $gem Accents"
                ];
                
                $productName = $nameParts[array_rand($nameParts)] . " " . $descriptors[array_rand($descriptors)];
            } else {
                $nameParts = [
                    "Anniversary $productType",
                    "Couple's $productType",
                    "Matching $productType Set",
                    "Eternity $productType",
                    "$material $productType",
                    "Romantic $productType"
                ];
                
                $descriptors = [
                    "with Diamond Accents",
                    "for Two",
                    "with Engraving",
                    "Limited Edition",
                    "in $finish Finish",
                    "with $gem Details"
                ];
                
                $productName = $nameParts[array_rand($nameParts)] . " " . $descriptors[array_rand($descriptors)];
            }
            
            // Generate realistic image URL based on product type
            $imageSearchTerms = [
                'jewelry',
                strtolower($productType),
                strtolower($material),
                $gem !== 'None' ? strtolower($gem) : '',
                'luxury',
                'elegant'
            ];
            
            $searchQuery = implode(',', array_filter($imageSearchTerms));
            $imageUrl = "https://source.unsplash.com/random/600x600/?$searchQuery&sig=$i";
        ?>
            <div class="product-card">
                <div class="discount-badge"><?php echo $discount; ?>% OFF</div>
                <div class="product-image-container">
                    <div class="lazy-image" data-src="<?php echo $imageUrl; ?>">
                        <div class="lazy-placeholder">📸 Loading...</div>
                    </div>
                </div>
                <div class="product-info">
                    <p class="product-name"><?php echo $productName; ?></p>
                    <div class="product-price-container">
                        <span class="product-price">₹<?php echo number_format($discountedPrice); ?></span>
                        <span class="original-price">₹<?php echo number_format($originalPrice); ?></span>
                    </div>
                    <div class="product-actions">
                        <button class="add-to-cart">Add to Cart</button>
                        <a href="product-detail?id=<?php echo $i; ?>&product_code=<?php echo strtoupper(substr($celebration, 0, 3)); ?>-<?php echo strtoupper(substr($productType, 0, 3)); ?>-<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>&table=special_offers" class="view-details">View</a>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
    
    <!-- <div class="view-all-container">
        <button class="view-all-btn">View All <?php echo $collectionType; ?> Products</button>
    </div> -->
</div>

<!-- Personalized Message -->
<div class="personalized-message">
    <div class="message-container">
        <h3 class="text-2xl font-bold text-gray-800 mb-6">Why Choose Our <?php echo $collectionType; ?> Collection?</h3>
        <p class="text-gray-600 mb-6 text-lg leading-relaxed">
            Each piece in our <?php echo $celebration; ?> collection is meticulously crafted by skilled artisans using 
            the finest materials. Our jewelry is designed to commemorate life's most precious moments 
            and create lasting memories. From elegant everyday pieces to stunning statement designs, 
            we offer something special for every style and occasion.
        </p>
        <!-- <a href="product-all?type=<?php echo $celebration; ?>" 
           class="view-all-btn">
            Explore More <?php echo $collectionType; ?> Jewelry
        </a> -->
    </div>
</div>

<!-- Floating CTA -->
<div class="floating-cta" onclick="window.location.href='#special-offer-banner'">
    <i>🎁</i>
</div>

<?php include('includes/footer.php'); ?>

<!-- Enhanced JavaScript -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Lazy loading with Intersection Observer
    const lazyLoadImages = () => {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const container = entry.target;
                    const src = container.getAttribute('data-src');
                    
                    if (src && !container.classList.contains('loaded') && !container.classList.contains('loading')) {
                        container.classList.add('loading');
                        
                        const img = new Image();
                        img.onload = function() {
                            container.innerHTML = '';
                            container.style.backgroundImage = `url(${src})`;
                            container.style.backgroundSize = 'cover';
                            container.style.backgroundPosition = 'center';
                            container.classList.remove('loading');
                            container.classList.add('loaded');
                        };
                        
                        img.onerror = function() {
                            container.classList.remove('loading');
                            container.classList.add('error');
                            container.innerHTML = '<div class="lazy-placeholder">Image not available</div>';
                        };
                        
                        img.src = src;
                        observer.unobserve(container);
                    }
                }
            });
        }, { rootMargin: '200px 0px', threshold: 0.1 });
        
        document.querySelectorAll('.lazy-image').forEach(container => {
            imageObserver.observe(container);
        });
    };
    
    // Initialize lazy loading
    lazyLoadImages();
    
    // Category tabs functionality
    const setupCategoryTabs = () => {
        const tabs = document.querySelectorAll('.category-tab');
        
        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                tabs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                
                // In a real implementation, you would filter products here
                // For now, we'll just scroll to the products section
                document.querySelector('.products-grid').scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    };
    
    // Initialize category tabs
    setupCategoryTabs();
    
    // View all button
    const setupViewAllButton = () => {
        document.querySelector('.view-all-btn').addEventListener('click', function() {
            window.location.href = `product-all?type=<?php echo $celebration; ?>`;
        });
    };
    
    // Initialize view all button
    setupViewAllButton();
    
    // Add to cart functionality
    const setupAddToCartButtons = () => {
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Get product details from the card
                const card = this.closest('.product-card');
                const productName = card.querySelector('.product-name').textContent;
                const productPrice = card.querySelector('.product-price').textContent;
                
                // Show a temporary notification
                const notification = document.createElement('div');
                notification.style.position = 'fixed';
                notification.style.bottom = '20px';
                notification.style.left = '50%';
                notification.style.transform = 'translateX(-50%)';
                notification.style.backgroundColor = 'var(--theme-color)';
                notification.style.color = 'white';
                notification.style.padding = '12px 24px';
                notification.style.borderRadius = '30px';
                notification.style.boxShadow = '0 4px 12px rgba(0,0,0,0.15)';
                notification.style.zIndex = '1000';
                notification.style.transition = 'all 0.3s ease';
                notification.style.opacity = '0';
                notification.textContent = `Added ${productName} to cart (${productPrice})`;
                
                document.body.appendChild(notification);
                
                // Animate the notification
                setTimeout(() => {
                    notification.style.opacity = '1';
                    notification.style.bottom = '30px';
                }, 10);
                
                setTimeout(() => {
                    notification.style.opacity = '0';
                    notification.style.bottom = '20px';
                    setTimeout(() => {
                        document.body.removeChild(notification);
                    }, 300);
                }, 3000);
            });
        });
    };
    
    // Initialize add to cart buttons
    setupAddToCartButtons();
    
    // Floating CTA animation
    const animateFloatingCTA = () => {
        const cta = document.querySelector('.floating-cta');
        if (cta) {
            setInterval(() => {
                cta.style.transform = 'translateY(-5px)';
                setTimeout(() => {
                    cta.style.transform = 'translateY(0)';
                }, 1000);
            }, 2000);
        }
    };
    
    // Initialize floating CTA animation
    animateFloatingCTA();
});
</script>