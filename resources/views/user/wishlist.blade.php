@extends('layouts.app')

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<style>
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
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
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
    box-shadow: 0 2px 8px rgba(0,0,0,0.15);
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

/* Lazy loading styles */
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
    0% { background-position: 200% 0; }
    100% { background-position: -200% 0; }
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

/* No products message */
.no-products {
    text-align: center;
    padding: 2rem;
    color: #6b7280;
    grid-column: 1 / -1;
}

/* Filter sidebar styles (same as product.php) */
.filter-sidebar {
    width: 250px;
    padding: 1rem;
    background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
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

.filter-chip {
    display: inline-flex;
    align-items: center;
    background: #e0f2fe;
    color: #0369a1;
    padding: 4px 12px;
    border-radius: 20px;
    margin-right: 8px;
    margin-bottom: 8px;
    font-size: 0.875rem;
    font-weight: 500;
}

.filter-chip .remove {
    margin-left: 6px;
    cursor: pointer;
    font-size: 1.2rem;
    line-height: 1;
    color: #0c4a6e;
}

.filter-chip .remove:hover {
    color: #dc2626;
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
@endpush

@section('content')
<div class="w-full">
    <div class="page-container">
        <!-- Desktop Sidebar -->
        <div class="filter-sidebar">
            <h2 class="text-lg font-bold mb-4 text-blue-900">FILTERS</h2>
            
            <!-- Price Filter -->
            <div class="filter-section">
                <h2 class="text-blue-900 text-lg font-semibold">Price</h2>
                <div class="filter-option"><input type="checkbox" id="price1"><label for="price1">₹ 0 - ₹ 5,000</label></div>
                <div class="filter-option"><input type="checkbox" id="price2"><label for="price2">₹ 5,000 - ₹ 10,000</label></div>
                <div class="filter-option"><input type="checkbox" id="price3"><label for="price3">₹ 10,000 - ₹ 20,000</label></div>
                <div class="filter-option"><input type="checkbox" id="price4"><label for="price4">₹ 20,000 - ₹ 30,000</label></div>
                <div class="filter-option"><input type="checkbox" id="price5"><label for="price5">₹ 30,000 - ₹ 50,000</label></div>
                <div class="filter-option"><input type="checkbox" id="price6"><label for="price6">₹ 50,000 - ₹ 1,00,000</label></div>  
                <div class="filter-option"><input type="checkbox" id="price7"><label for="price7">₹ 1,00,000 and Above</label></div>
            </div>
            
            <!-- Gender Filter -->
            <div class="filter-section">
                <h2 class="text-blue-900 text-lg font-semibold">Gender</h2>
                <div class="filter-option">
                    <input type="checkbox" id="male"><label for="male">Male</label>
                    &nbsp;&nbsp;&nbsp;
                    <input type="checkbox" id="female"><label for="female">Female</label>
                </div>
            </div>

            <!-- Weight Filter -->
            <div class="filter-section">
                <h2 class="text-blue-900 text-lg font-semibold">Weight</h2>
                <div class="filter-option"><input type="checkbox" id="gm1"><label for="gm1">1-2 gms</label>&nbsp;&nbsp;&nbsp;<input type="checkbox" id="gm2"><label for="gm2">2-4 gms</label></div>
                <div class="filter-option"><input type="checkbox" id="gm3"><label for="gm3">4-8 gms</label>&nbsp;&nbsp;&nbsp;<input type="checkbox" id="gm4"><label for="gm4">8-12 gms</label></div>
                <div class="filter-option"><input type="checkbox" id="gm5"><label for="gm5">12 gms +</label></div>
            </div>

            <!-- Size Filter -->
            <div class="filter-section">
                <h2 class="text-blue-900 text-lg font-semibold">Size</h2>
                <div class="filter-option">
                    <input type="checkbox" id="adult"><label for="adult">Adult</label>&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" id="kids"><label for="kids">Kids</label>&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" id="baby"><label for="baby">Baby</label>
                </div>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="main-content">
            <h1 class="page-title">Your Wishlist</h1>
            
            <!-- Active Filters -->
            <div class="active-filters" id="activeFilters"></div>
            
            <!-- Products Grid -->
            <div class="bg-background text-foreground">
                @if($products->isNotEmpty())
                    <div class="products-grid" id="productsGrid">
                    @foreach($products as $product)
                        @php
                            $isInWishlist = true; // Since it's the wishlist page, all items are in wishlist!
                        @endphp
                        <a href="{{ route('product.show', ['id' => $product->id, 'table' => $product->table_name, 'product_code' => $product->product_code]) }}" 
                           data-gender="{{ $product->gender ?? '' }}" 
                           data-size="{{ $product->size ?? '' }}"
                           data-weight="{{ $product->net_weight ?? '' }}"
                           data-price="{{ $product->calculated_price }}">
                            <div class="product-card">
                                @if(($product->is_featured ?? 0) == 1)
                                    <div class="featured-badge">
                                        Featured
                                    </div>
                                @endif
                                
                                <!-- Wishlist Button (Removes from wishlist) -->
                                <button class="wishlist-btn active"
                                    data-product-id="{{ $product->id }}"
                                    data-table-name="{{ $product->table_name }}"
                                    data-in-wishlist="true"
                                    aria-label="Remove from wishlist">
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                                
                                @php
                                    $img1 = $product->img1_webp ?? null;
                                    $img2 = $product->img2 ?? null;
                                    $imageName = $img1 ?: ($img2 ?: 'default-product.png'); 
                                    $imagePath = asset('ims/internal/' . $imageName);
                                @endphp
                                
                                <div class="lazy-image" 
                                     data-src="{{ $imagePath }}" 
                                     data-alt="{{ $product->name }}">
                                    <div class="lazy-placeholder">📸 Loading...</div>
                                </div>
                                
                                <div class="product-info">
                                    <p class="product-name">{{ $product->name }}</p>
                                    <p class="product-price">₹ {{ ceil($product->calculated_price) }}</p>
                                    <small class="product-tax-info">(Inclusive of all taxes)</small>
                                </div>
                            </div>
                        </a>
                    @endforeach                          
                    </div>
                @else
                    <div class="no-products text-center py-12">
                        <p class="text-lg text-gray-600 mb-6">Your wishlist is empty</p>
                        <button onclick="window.location.href='{{ route('products') }}'" 
                            class="group bg-gradient-to-r from-dark-blue to-navy text-white px-6 py-3 rounded-xl 
                                hover:from-navy hover:to-dark-blue transition-all duration-300 
                                transform hover:scale-105 hover:shadow-lg inline-flex items-center gap-2">
                            <i class="fas fa-heart group-hover:rotate-12 transition-transform"></i>
                            ADD ITEMS TO WISHLIST
                        </button>
                    </div>
                @endif
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
        
        <!-- Mobile Filters (Same structure as desktop but with m_ prefix ID) -->
        <div class="filter-section">
            <h2 class="text-blue-900 text-lg font-semibold">Price</h2>
            <div class="filter-option"><input type="checkbox" id="m_price1"><label for="m_price1">₹ 0 - ₹ 5,000</label></div>
            <div class="filter-option"><input type="checkbox" id="m_price2"><label for="m_price2">₹ 5,000 - ₹ 10,000</label></div>
            <div class="filter-option"><input type="checkbox" id="m_price3"><label for="m_price3">₹ 10,000 - ₹ 20,000</label></div>
            <div class="filter-option"><input type="checkbox" id="m_price4"><label for="m_price4">₹ 20,000 - ₹ 30,000</label></div>
            <div class="filter-option"><input type="checkbox" id="m_price5"><label for="m_price5">₹ 30,000 - ₹ 50,000</label></div>
            <div class="filter-option"><input type="checkbox" id="m_price6"><label for="m_price6">₹ 50,000 - ₹ 100,000</label></div>
            <div class="filter-option"><input type="checkbox" id="m_price7"><label for="m_price7">₹ 1,00,000 and Above</label></div>
        </div>
        
        <div class="filter-section">
            <h2 class="text-blue-900 text-lg font-semibold">Gender</h2>
            <div class="filter-option"><input type="checkbox" id="m_male"><label for="m_male">Male</label>&nbsp;&nbsp;&nbsp;<input type="checkbox" id="m_female"><label for="m_female">Female</label></div>
        </div>

        <div class="filter-section">
            <h2 class="text-blue-900 text-lg font-semibold">Weight</h2>
            <div class="filter-option"><input type="checkbox" id="m_gm1"><label for="m_gm1">1-2 gms</label>&nbsp;&nbsp;&nbsp;<input type="checkbox" id="m_gm2"><label for="m_gm2">2-4 gms</label></div>
            <div class="filter-option"><input type="checkbox" id="m_gm3"><label for="m_gm3">4-8 gms</label>&nbsp;&nbsp;&nbsp;<input type="checkbox" id="m_gm4"><label for="m_gm4">8-12 gms</label></div>
            <div class="filter-option"><input type="checkbox" id="m_gm5"><label for="m_gm5">12 gms +</label></div>
        </div>

        <div class="filter-section">
            <h2 class="text-blue-900 text-lg font-semibold">Size</h2>
            <div class="filter-option"><input type="checkbox" id="m_adult"><label for="m_adult">Adult</label>&nbsp;&nbsp;&nbsp;<input type="checkbox" id="m_kids"><label for="m_kids">Kids</label>&nbsp;&nbsp;&nbsp;<input type="checkbox" id="m_baby"><label for="m_baby">Baby</label></div>
        </div>
        
        <div class="bottom-sheet-footer">
            <button class="bottom-sheet-clear">Clear All</button>
            <button class="bottom-sheet-apply">Apply Filters</button>
        </div>
    </div>
    
    <!-- Overlay -->
    <div class="overlay" id="filterOverlay"></div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {
    // Lazy loading functionality
    let loadedCount = 0;
    
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
                    };
                    
                    img.onerror = function() {
                        container.classList.remove('loading');
                        container.classList.add('error');
                        if (placeholder) {
                            placeholder.textContent = '❌ Fail';
                        }
                    };
                    
                    // Start loading
                    img.src = src;
                    observer.unobserve(container);
                }
            }
        });
    }, {
        rootMargin: '100px 0px 100px 0px',
        threshold: 0.1
    });

    // Start observing
    document.querySelectorAll('.lazy-image').forEach(container => {
        imageObserver.observe(container);
    });
    
    // Filter functionality
    const priceFilters = {
        'price1': { min: 0, max: 5000 },
        'price2': { min: 5000, max: 10000 },
        'price3': { min: 10000, max: 20000 },
        'price4': { min: 20000, max: 30000 },
        'price5': { min: 30000, max: 50000 },
        'price6': { min: 50000, max: 100000 },
        'price7': { min: 100000, max: Infinity }
    };

    const weightFilters = {
        'gm1': { min: 1, max: 2 },
        'gm2': { min: 2, max: 4 },
        'gm3': { min: 4, max: 8 },
        'gm4': { min: 8, max: 12 },
        'gm5': { min: 12, max: Infinity }
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
        mobileFilterBtn.addEventListener('click', function() {
            mobileFilterSheet.classList.add('active');
            filterOverlay.style.display = 'block';
            document.body.style.overflow = 'hidden';
        });
        
        function closeSheet() {
            mobileFilterSheet.classList.remove('active');
            filterOverlay.style.display = 'none';
            document.body.style.overflow = '';
        }
        
        closeBottomSheet.addEventListener('click', closeSheet);
        filterOverlay.addEventListener('click', closeSheet);
        
        applyFiltersBtn.addEventListener('click', function() {
            applyFilters();
            closeSheet();
        });
        
        clearFiltersBtn.addEventListener('click', function() {
            const checkboxes = mobileFilterSheet.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(checkbox => checkbox.checked = false);
            
            document.querySelectorAll('.filter-sidebar input[type="checkbox"]').forEach(checkbox => {
                checkbox.checked = false;
            });
            
            applyFilters();
        });
    }
    
    function updateActiveFilters() {
        const activeFiltersContainer = document.getElementById('activeFilters');
        activeFiltersContainer.innerHTML = '';
        
        document.querySelectorAll('.filter-sidebar input[type="checkbox"]:checked, .mobile-filter-bottom-sheet input[type="checkbox"]:checked').forEach(checkbox => {
            let label = '';
            // Determine filter label based on ID logic
             if (checkbox.id in priceFilters || (checkbox.id.startsWith('m_') && checkbox.id.substring(2) in priceFilters)) {
                label = "Price Filter";
            } else if (checkbox.id.includes('male')) {
                label = "Gender";
            } else if (checkbox.id.includes('gm')) {
                 label = "Weight";
            } else {
                 label = "Size";
            }
            // Simplified active filter chip
            const chip = document.createElement('div');
            chip.className = 'filter-chip';
            chip.innerHTML = `${label} <span class="remove">×</span>`;
            activeFiltersContainer.appendChild(chip);
            
            chip.querySelector('.remove').addEventListener('click', function() {
                document.getElementById(checkbox.id).checked = false;
                applyFilters();
            });
        });
    }
    
    function applyFilters() {
        const activePriceFilters = [];
        const activeGenderFilters = [];
        const activeSizeFilters = [];
        const activeWeightFilters = [];
        
        // Collect active filters
         document.querySelectorAll('input[type="checkbox"]:checked').forEach(checkbox => {
             const id = checkbox.id.startsWith('m_') ? checkbox.id.substring(2) : checkbox.id;
             
            if (id in priceFilters) activePriceFilters.push(priceFilters[id]);
            if (id in weightFilters) activeWeightFilters.push(weightFilters[id]);
            if (id === 'male' || id === 'female') activeGenderFilters.push(id);
            if (id in sizeMapping) activeSizeFilters.push(sizeMapping[id]);
        });
        
        const productItems = document.querySelectorAll('#productsGrid a');
        
        productItems.forEach(item => {
            const price = parseFloat(item.dataset.price) || 0;
            const productGender = item.dataset.gender ? item.dataset.gender.toLowerCase() : '';
            const productSize = item.dataset.size ? item.dataset.size.toLowerCase() : '';
            const productWeight = parseFloat(item.dataset.weight) || 0;
            
            let priceMatch = activePriceFilters.length === 0;
            let genderMatch = activeGenderFilters.length === 0;
            let sizeMatch = activeSizeFilters.length === 0;
            let weightMatch = activeWeightFilters.length === 0;
            
            if (activePriceFilters.some(f => price >= f.min && price <= f.max)) priceMatch = true;
            if (activeWeightFilters.some(f => productWeight >= f.min && productWeight <= f.max)) weightMatch = true;
            if (activeGenderFilters.some(f => productGender === f)) genderMatch = true;
            if (activeSizeFilters.some(f => productSize === f.toLowerCase())) sizeMatch = true;
            
            item.style.display = (priceMatch && genderMatch && sizeMatch && weightMatch) ? 'block' : 'none';
        });
        
        updateActiveFilters();
    }
    
    document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
        checkbox.addEventListener('change', applyFilters);
    });
    
    // Wishlist Functionality (AJAX POST)
    function showWishlistMessage(message, type = 'info') {
        const messageDiv = document.createElement('div');
        messageDiv.className = `fixed top-20 right-4 px-4 py-2 rounded-lg text-white z-50 transition-all duration-300 shadow-lg`;
        messageDiv.style.backgroundColor = type === 'success' ? '#10b981' : '#ef4444';
        messageDiv.textContent = message;
        document.body.appendChild(messageDiv);
        setTimeout(() => messageDiv.remove(), 3000);
    }

    document.querySelectorAll('.wishlist-btn').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const productId = this.dataset.productId;
            const tableName = this.dataset.tableName;
            // On wishlist page, we typically only remove. But let's keep it robust.
            
            // POST to /wishlist/toggle
            fetch('{{ route("wishlist.toggle") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ product_id: productId, table_name: tableName })
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    if (data.action === 'removed') {
                         showWishlistMessage('Removed from wishlist', 'success');
                         // Remove the card visually
                         this.closest('a').remove();
                         // Logic to show "empty" if no items left could be added here
                    }
                } else {
                     showWishlistMessage('Error processing request', 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showWishlistMessage('Network error', 'error');
            });
        });
    });
});
</script>
@endpush
