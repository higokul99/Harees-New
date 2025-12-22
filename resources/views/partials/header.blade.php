<header class="site-header" style="background: linear-gradient(135deg, #192f6e 0%, #0f172a 50%, #192f6e 100%);">
    <div class="container">
        {{-- Logo & Brand --}}
        <div class="brand">
            <a href="{{ route('home') }}" title="Go to Homepage" class="flex items-center">
                <img src="{{ asset('assets/harees-jewellery-logo.png') }}" alt="Harees Gold & Diamonds" class="logo" />
                <div class="brand-text">
                    <h1>HAREES JEWELLERY</h1>
                    <p class="tagline">GOLD | DIAMONDS | SILVER - (beta version)</p>
                </div>
            </a>
        </div>

        {{-- Search Bar --}}
        <div class="search-bar" id="searchBar">
            <form class="search-form" action="{{ route('search') }}" method="GET">
                <input type="search" name="query" placeholder="Search for products..." id="searchInput" />
                <button type="submit" class="search-btn"><i class="fas fa-search"></i></button>
            </form>
        </div>

        {{-- Navigation --}}
        <nav class="nav-icons">
            <a href="#" class="mobile-search-toggle" onclick="toggleSearch(event)">
                <i class="fas fa-search"></i><span></span>
            </a>
            <a href="{{ route('stores') }}"><i class="fas fa-store"></i><span>Stores</span></a>
            <a href="{{ route('gold-rate') }}"><i class="fas fa-coins"></i><span>Gold Rate</span></a>
            <a href="{{ route('wishlist') }}">
                <i class="fas fa-heart">
                    @auth
                        @if(isset($wishlistCount) && $wishlistCount > 0)
                            <sup>{{ $wishlistCount }}</sup>
                        @endif
                    @endauth
                </i>
                <span>Wishlist</span>
            </a>
            @auth
                <a href="{{ route('cart') }}" class="cart-icon-link">
                    <i class="fas fa-shopping-cart">
                        @if(isset($cartCount) && $cartCount > 0)
                            <sup>{{ $cartCount }}</sup>
                        @endif
                    </i>
                </a>
                <a href="{{ route('profile') }}"><i class="fas fa-user"></i></a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            @else
                <a href="{{ route('login') }}"><i class="fas fa-user"></i><span>Login</span></a>
            @endauth
        </nav>
    </div>
    <style>
        .fas.fa-shopping-cart, .fas.fa-heart {
            position: relative;
        }
        .fas.fa-shopping-cart sup, .fas.fa-heart sup {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: #ef4444;
            color: white;
            border-radius: 50%;
            width: 16px;
            height: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            font-weight: bold;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
            border: 1px solid white;
        }
    </style>
</header>

@push('scripts')
<script>
    function toggleSearch(event) {
        event.preventDefault();
        const searchBar = document.getElementById('searchBar');
        const searchInput = document.getElementById('searchInput');

        if (searchBar.classList.contains('active')) {
            searchBar.classList.remove('active');
        } else {
            searchBar.classList.add('active');
            setTimeout(() => {
                searchInput.focus();
            }, 300);
        }
    }

    // Hide search bar when clicking outside
    document.addEventListener('click', function(event) {
        const searchBar = document.getElementById('searchBar');
        const searchToggle = document.querySelector('.mobile-search-toggle');

        if (window.innerWidth <= 767 &&
            !searchBar.contains(event.target) &&
            !searchToggle.contains(event.target) &&
            searchBar.classList.contains('active')) {
            searchBar.classList.remove('active');
        }
    });

    // Handle window resize
    window.addEventListener('resize', function() {
        const searchBar = document.getElementById('searchBar');
        if (window.innerWidth > 767) {
            searchBar.classList.remove('active');
        }
    });

    // Search suggestions (optional enhancement)
    document.getElementById('searchInput').addEventListener('input', function(e) {
        const query = e.target.value.trim();
        if (query.length < 2) return;

        fetch(`{{ route('search.suggestions') }}?query=${encodeURIComponent(query)}`)
            .then(response => response.json())
            .then(suggestions => {
                // Show suggestions dropdown
                // Implement this UI as needed
            });
    });
</script>
@endpush
