@extends('layouts.app')

@section('content')
<div class="w-full">
    <div class="page-container flex flex-col lg:flex-row">
        <!-- Desktop Sidebar -->
        <div class="filter-sidebar w-full lg:w-[250px] p-4 bg-gradient-to-br from-amber-400 to-amber-500 border-r border-gray-200 hidden lg:block sticky top-[80px] h-[calc(100vh-80px)] overflow-y-auto">
            <h2 class="text-lg font-bold mb-4 text-blue-900">FILTERS</h2>

            <!-- Price Filter -->
            <div class="filter-section mb-6">
                <h2 class="text-blue-900 text-lg font-semibold mb-3">Price</h2>
                @foreach([
                'price1' => [0, 5000, '₹ 0 - ₹ 5,000'],
                'price2' => [5000, 10000, '₹ 5,000 - ₹ 10,000'],
                'price3' => [10000, 20000, '₹ 10,000 - ₹ 20,000'],
                'price4' => [20000, 30000, '₹ 20,000 - ₹ 30,000'],
                'price5' => [30000, 50000, '₹ 30,000 - ₹ 50,000'],
                'price6' => [50000, 100000, '₹ 50,000 - ₹ 1,00,000'],
                'price7' => [100000, 'Infinity', '₹ 1,00,000 and Above']
                ] as $id => $filter)
                <div class="filter-option flex items-center mb-2 cursor-pointer">
                    <input type="checkbox" id="{{ $id }}" class="mr-2">
                    <label for="{{ $id }}" class="text-sm text-gray-800 cursor-pointer">{{ $filter[2] }}</label>
                </div>
                @endforeach
            </div>

            <!-- Gender Filter -->
            <div class="filter-section mb-6">
                <h2 class="text-blue-900 text-lg font-semibold mb-3">Gender</h2>
                <div class="filter-option flex items-center mb-2 cursor-pointer">
                    <input type="checkbox" id="male" class="mr-2">
                    <label for="male" class="text-sm text-gray-800 cursor-pointer">Male</label>
                    <span class="mx-2"></span>
                    <input type="checkbox" id="female" class="mr-2">
                    <label for="female" class="text-sm text-gray-800 cursor-pointer">Female</label>
                </div>
            </div>

            <!-- Weight Filter -->
            <div class="filter-section mb-6">
                <h2 class="text-blue-900 text-lg font-semibold mb-3">Weight</h2>
                @foreach([
                'gm0' => [0, 1, '0-1 gms'],
                'gm1' => [1, 2, '1-2 gms'],
                'gm2' => [2, 4, '2-4 gms'],
                'gm3' => [4, 8, '4-8 gms'],
                'gm4' => [8, 12, '8-12 gms'],
                'gm5' => [12, 'Infinity', '12 gms +']
                ] as $id => $filter)
                <div class="filter-option flex items-center mb-2 cursor-pointer">
                    <input type="checkbox" id="{{ $id }}" class="mr-2">
                    <label for="{{ $id }}" class="text-sm text-gray-800 cursor-pointer">{{ $filter[2] }}</label>
                </div>
                @endforeach
            </div>

            <!-- Size Filter -->
            <div class="filter-section mb-6">
                <h2 class="text-blue-900 text-lg font-semibold mb-3">Size</h2>
                <div class="filter-option flex items-center mb-2 cursor-pointer">
                    @foreach(['adult' => 'Adult', 'kids' => 'Kids', 'baby' => 'Baby'] as $id => $label)
                    <input type="checkbox" id="{{ $id }}" class="mr-2">
                    <label for="{{ $id }}" class="text-sm text-gray-800 cursor-pointer mr-3">{{ $label }}</label>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content flex-1 p-4">
            <h1 class="page-title text-2xl font-bold mb-4">{{ $title }}</h1>

            <!-- Active Filters -->
            <div class="active-filters flex flex-wrap gap-2 mb-4" id="activeFilters"></div>

            <!-- Products Grid -->
            <div class="bg-background text-foreground">
                @if(count($products) > 0)
                <div class="products-grid grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3 sm:gap-4 lg:gap-5" id="productsGrid">
                    @foreach($products as $product)
                    @php
                    // Wishlist check not fully implemented yet in blade logic, need to fetch from Session?
                    // Or pass from Controller.
                    // For now, I will skip the PHP session check in Blade and implement JS based on a future fix or check session if available.
                    // Actually I can check the wishlist table if I pass the data.
                    // But for now, let's keep the button logic ready for JS.
                    // $wishlistKey = $tableName . '_' . $product->id;
                    // Use Laravel Auth/Session if possible or just render.
                    // The controller didn't pass wishlist data.
                    // I'll render the button and let JS (which I'll copy) handle the state if possible or default to unchecked.
                    $isInWishlist = false; // Placeholder
                    if(Auth::check()) {
                    $isInWishlist = DB::table('user_wishlist')
                    ->where('user_id', Auth::id())
                    ->where('product_id', $product->id)
                    ->where('table_name', $tableName)
                    ->exists();
                    }
                    // Construct Image URL
                    // Image path: public/harees/ims/internal/ + path from DB
                    $imageUrl = asset('harees/ims/internal/' . ($product->img2 ?? 'placeholder.jpg'));
                    @endphp
                    <a href="{{ route('product.show', ['id' => $product->id, 'table' => $tableName, 'product_code' => $product->product_code]) }}"
                        class="product-item block"
                        data-gender="{{ $product->gender ?? '' }}"
                        data-size="{{ $product->size ?? '' }}"
                        data-weight="{{ $product->net_weight ?? 0 }}"
                        data-price="{{ $product->calculated_price }}">
                        <div class="product-card border border-gray-200 rounded-xl p-2 bg-white transition-all duration-300 hover:shadow-lg hover:-translate-y-1 hover:border-sky-900 relative overflow-hidden h-full">
                            @if(($product->is_featured ?? 0) == 1)
                            <div class="featured-badge bg-sky-900 text-white text-[10px] px-2 py-1 rounded-xl font-semibold absolute top-2 left-2 z-10">
                                Featured
                            </div>
                            @endif

                            <!-- Wishlist Button -->
                            <button class="wishlist-btn {{ $isInWishlist ? 'active' : '' }} transition-all duration-300 shadow-sm flex items-center justify-center absolute top-2 right-2 z-10 bg-white/90 backdrop-blur-sm rounded-full w-8 h-8 border-none cursor-pointer hover:scale-110 hover:shadow-md hover:bg-white"
                                data-product-id="{{ $product->id }}"
                                data-table-name="{{ $tableName }}"
                                data-in-wishlist="{{ $isInWishlist ? 'true' : 'false' }}"
                                aria-label="{{ $isInWishlist ? 'Remove from wishlist' : 'Add to wishlist' }}">
                                @if($isInWishlist)
                                <i class="fas fa-heart text-red-500"></i>
                                @else
                                <i class="far fa-heart text-gray-600 hover:text-red-500"></i>
                                @endif
                            </button>

                            <div class="lazy-image bg-gray-50 min-h-[180px] flex items-center justify-center transition-all duration-300 relative overflow-hidden rounded-lg aspect-square"
                                data-src="{{ $imageUrl }}">
                                <div class="lazy-placeholder text-gray-400 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-sm pointer-events-none">📸 Loading...</div>
                            </div>

                            <div class="product-info p-2">
                                <p class="product-name text-[13px] font-semibold text-gray-700 leading-tight mb-1 line-clamp-2 min-h-[32px]">{{ $product->name }}</p>
                                @if(!$hideRates)
                                <p class="product-price text-base font-bold text-sky-900 mb-0.5">₹ {{ $product->calculated_price }}</p>
                                <small class="product-tax-info text-[9px] text-gray-500 leading-tight">(Inclusive of all taxes)</small>
                                @else
                                <p class="text-amber-600 font-semibold text-xs">Contact for Price</p>
                                <small class="text-[9px] text-gray-500">Call us for pricing</small>
                                @endif
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
                @else
                <div class="no-products text-center py-12 text-gray-600">
                    <p class="text-lg">No products found in this category.</p>
                </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Mobile Filter Button -->
    <button class="mobile-filter-btn hidden lg:hidden fixed bottom-5 left-1/2 -translate-x-1/2 bg-sky-900 text-white px-6 py-3 rounded-full font-semibold cursor-pointer shadow-lg z-30 border-none outline-none" id="mobileFilterBtn">
        ☰ Filters
    </button>

    <!-- Mobile Bottom Sheet -->
    <div class="mobile-filter-bottom-sheet fixed bottom-[-100%] left-0 right-0 bg-white rounded-t-[20px] p-5 shadow-[0_-4px_20px_rgba(0,0,0,0.15)] transition-[bottom] duration-300 z-40 max-h-[80vh] overflow-y-auto" id="mobileFilterSheet">
        <div class="bottom-sheet-header flex justify-between items-center mb-4 pb-4 border-b border-gray-200">
            <h2 class="text-blue-900 text-xl font-semibold m-0">FILTERS</h2>
            <button class="bottom-sheet-close bg-transparent border-none text-2xl cursor-pointer text-gray-500" id="closeBottomSheet">×</button>
        </div>

        <!-- Mobile Filters (Mirrors Desktop) -->
        <!-- Price -->
        <div class="filter-section mb-6">
            <h2 class="text-blue-900 text-lg font-semibold mb-3">Price</h2>
            @foreach([
            'm_price1' => [0, 5000, '₹ 0 - ₹ 5,000'],
            'm_price2' => [5000, 10000, '₹ 5,000 - ₹ 10,000'],
            'm_price3' => [10000, 20000, '₹ 10,000 - ₹ 20,000'],
            'm_price4' => [20000, 30000, '₹ 20,000 - ₹ 30,000'],
            'm_price5' => [30000, 50000, '₹ 30,000 - ₹ 50,000'],
            'm_price6' => [50000, 100000, '₹ 50,000 - ₹ 1,00,000'],
            'm_price7' => [100000, 'Infinity', '₹ 1,00,000 and Above']
            ] as $id => $filter)
            <div class="filter-option flex items-center mb-2">
                <input type="checkbox" id="{{ $id }}" class="mr-2">
                <label for="{{ $id }}" class="text-sm text-gray-800">{{ $filter[2] }}</label>
            </div>
            @endforeach
        </div>

        <!-- Mobile Gender -->
        <div class="filter-section mb-6">
            <h2 class="text-blue-900 text-lg font-semibold mb-3">Gender</h2>
            <div class="filter-option flex items-center mb-2">
                <input type="checkbox" id="m_male" class="mr-2">
                <label for="m_male" class="text-sm text-gray-800">Male</label>
                <span class="mx-3"></span>
                <input type="checkbox" id="m_female" class="mr-2">
                <label for="m_female" class="text-sm text-gray-800">Female</label>
            </div>
        </div>

        <!-- Mobile Weight/Size sections omitted for brevity but logic handles them if IDs match schema -->
        <!-- Adding Weight filters for completeness -->
        <div class="filter-section mb-6">
            <h2 class="text-blue-900 text-lg font-semibold mb-3">Weight</h2>
            @foreach([
            'm_gm0' => [0, 1, '0-1 gms'],
            'm_gm1' => [1, 2, '1-2 gms'],
            'm_gm2' => [2, 4, '2-4 gms'],
            'm_gm3' => [4, 8, '4-8 gms'],
            'm_gm4' => [8, 12, '8-12 gms'],
            'm_gm5' => [12, 'Infinity', '12 gms +']
            ] as $id => $filter)
            <div class="filter-option flex items-center mb-2">
                <input type="checkbox" id="{{ $id }}" class="mr-2">
                <label for="{{ $id }}" class="text-sm text-gray-800">{{ $filter[2] }}</label>
            </div>
            @endforeach
        </div>

        <div class="filter-section mb-6">
            <h2 class="text-blue-900 text-lg font-semibold mb-3">Size</h2>
            <div class="filter-option flex items-center mb-2">
                @foreach(['m_adult' => 'Adult', 'm_kids' => 'Kids', 'm_baby' => 'Baby'] as $id => $label)
                <input type="checkbox" id="{{ $id }}" class="mr-2">
                <label for="{{ $id }}" class="text-sm text-gray-800 mr-3">{{ $label }}</label>
                @endforeach
            </div>
        </div>

        <div class="bottom-sheet-footer flex gap-4 pt-4 border-t border-gray-200 mt-4">
            <button class="bottom-sheet-clear flex-1 p-3 rounded-lg font-semibold cursor-pointer border-none bg-sky-900 text-white">Clear All</button>
            <button class="bottom-sheet-apply flex-1 p-3 rounded-lg font-semibold cursor-pointer border-none bg-sky-900 text-white">Apply Filters</button>
        </div>
    </div>

    <!-- Overlay -->
    <div class="overlay fixed inset-0 bg-black/50 z-30 hidden" id="filterOverlay"></div>
    <!-- Wishlist Message Toast -->
    <div id="wishlistMessage" class="fixed top-24 right-5 bg-blue-500 text-white px-4 py-2 rounded shadow-lg transition-opacity duration-300 opacity-0 z-50 pointer-events-none"></div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // === LAZY LOADING ===
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const container = entry.target;
                    const src = container.getAttribute('data-src');
                    const placeholder = container.querySelector('.lazy-placeholder');

                    if (src && !container.classList.contains('loaded')) {
                        const img = new Image();
                        img.onload = function() {
                            const imageElement = document.createElement('img');
                            imageElement.src = src;
                            imageElement.className = 'w-full h-full object-cover transition-opacity duration-300 opacity-0';

                            container.innerHTML = '';
                            container.appendChild(imageElement);

                            // Small delay to allow DOM paint before fading in
                            requestAnimationFrame(() => {
                                imageElement.classList.remove('opacity-0');
                            });

                            container.classList.add('loaded');
                        };
                        img.src = src;
                        observer.unobserve(container);
                    }
                }
            });
        }, {
            rootMargin: '100px',
            threshold: 0.1
        });

        document.querySelectorAll('.lazy-image').forEach(el => imageObserver.observe(el));

        // === FILTER FUNCTIONALITY ===
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

        function applyFilters() {
            const activePrice = [],
                activeWeight = [],
                activeGender = [],
                activeSize = [];

            // Collect checked filters (Desktop & Mobile)
            document.querySelectorAll('input[type="checkbox"]:checked').forEach(cb => {
                let id = cb.id.replace(/^m_/, ''); // Normalize mobile IDs
                if (priceFilters[id]) activePrice.push(priceFilters[id]);
                if (weightFilters[id]) activeWeight.push(weightFilters[id]);
                if (id === 'male' || id === 'female') activeGender.push(id);
                if (sizeMapping[id]) activeSize.push(sizeMapping[id]); // Legacy usage checked exact string matching?
                // "Adult" checkbox matches "Adult" logic? Legacy JS mapped 'adult' key to 'Adult Size' string?
                // Legacy JS: const sizeMapping = { 'adult': 'Adult Size'... }
                // Item dataset: data-size="<?php echo htmlspecialchars($row['size'] ?? ''); ?>"
                // Check legacy again: for (const filter of activeSizeFilters) { if (productSize && productSize.toLowerCase() === filter.toLowerCase()) ... }
                // So if View outputs "Adult Size", filter should match.
            });

            const items = document.querySelectorAll('#productsGrid a.product-item');
            let visibleCount = 0;

            items.forEach(item => {
                const price = parseFloat(item.dataset.price) || 0;
                const weight = parseFloat(item.dataset.weight) || 0;
                const gender = (item.dataset.gender || '').toLowerCase();
                const size = (item.dataset.size || '').toLowerCase(); // "Adult Size" -> "adult size"

                let show = true;

                if (activePrice.length > 0) {
                    show = activePrice.some(p => price >= p.min && price <= p.max) && show;
                }
                if (activeWeight.length > 0) {
                    show = activeWeight.some(w => weight >= w.min && weight <= w.max) && show;
                }
                if (activeGender.length > 0) {
                    show = activeGender.some(g => gender.includes(g)) && show;
                }
                if (activeSize.length > 0) {
                    // Check if any active size filter matches the product size string
                    show = activeSize.some(s => size.includes(s.toLowerCase())) && show;
                }

                item.style.display = show ? 'block' : 'none';
                if (show) visibleCount++;
            });

            // Render Active Chips
            renderActiveChips();
        }

        // Attach listeners
        document.querySelectorAll('input[type="checkbox"]').forEach(cb => cb.addEventListener('change', applyFilters));

        // Mobile Sheet Logic
        const sheet = document.getElementById('mobileFilterSheet');
        const overlay = document.getElementById('filterOverlay');

        document.getElementById('mobileFilterBtn')?.addEventListener('click', () => {
            sheet.style.bottom = '0';
            overlay.style.display = 'block';
            document.body.style.overflow = 'hidden';
        });

        const closeSheet = () => {
            sheet.style.bottom = '-100%';
            overlay.style.display = 'none';
            document.body.style.overflow = '';
        };

        document.getElementById('closeBottomSheet')?.addEventListener('click', closeSheet);
        overlay?.addEventListener('click', closeSheet);
        document.querySelector('.bottom-sheet-apply')?.addEventListener('click', () => {
            applyFilters();
            closeSheet();
        });
        document.querySelector('.bottom-sheet-clear')?.addEventListener('click', () => {
            document.querySelectorAll('input[type="checkbox"]').forEach(cb => cb.checked = false);
            applyFilters();
        });

        // Wishlist Logic placeholder (Use standard Fetch if endpoint exists, else alert)
        // Note: User hasn't requested wishlist controller yet, so the button is visual or needs a placeholder.
        // I will add a simple functionality that hits the route if implementation plan says "Create WishlistController" later.
        // For now, let's just leave the visual toggle or error.
        // Live Wishlist Logic
        document.querySelectorAll('.wishlist-btn').forEach(btn => {
            btn.addEventListener('click', async (e) => {
                e.preventDefault();
                e.stopPropagation();

                const productId = btn.dataset.productId;
                const tableName = btn.dataset.tableName;
                const icon = btn.querySelector('i');
                const token = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

                if (!token) {
                    console.error('CSRF token not found');
                    return;
                }

                try {
                    const response = await fetch("{{ route('wishlist.toggle') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': token
                        },
                        body: JSON.stringify({
                            product_id: productId,
                            table_name: tableName
                        })
                    });

                    const data = await response.json();

                    if (data.status === 'success') {
                        if (data.action === 'added') {
                            icon.classList.remove('far', 'text-gray-600');
                            icon.classList.add('fas', 'text-red-500');
                            btn.classList.add('active');
                            btn.setAttribute('aria-label', 'Remove from wishlist');
                            showToast('Added to Wishlist');
                        } else {
                            icon.classList.remove('fas', 'text-red-500');
                            icon.classList.add('far', 'text-gray-600');
                            btn.classList.remove('active');
                            btn.setAttribute('aria-label', 'Add to wishlist');
                            showToast('Removed from Wishlist');
                        }

                        // Optional: Update header count if we had a live count element accessible
                    } else {
                        console.error('Wishlist error:', data.message);
                    }
                } catch (error) {
                    console.error('Wishlist request failed', error);
                    showToast('Error updating wishlist');
                }
            });
        });

        function showToast(message) {
            const toast = document.getElementById('wishlistMessage');
            if (toast) {
                toast.textContent = message;
                toast.classList.remove('opacity-0', 'pointer-events-none');
                setTimeout(() => {
                    toast.classList.add('opacity-0', 'pointer-events-none');
                }, 3000);
            }
        }

        function renderActiveChips() {
            const container = document.getElementById('activeFilters');
            container.innerHTML = '';
            // Logic to recreate chips based on checked boxes, similar to legacy JS
            // Simplified for now.
        }
    });
</script>
@endpush