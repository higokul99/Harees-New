<style>
  /* Add this CSS to your stylesheet */
  .nav-icons a i,
  .nav-icons a svg.icon {
    transition: transform 0.3s ease;
  }
  
  .nav-icons a:hover i,
  .nav-icons a:hover svg.icon {
    transform: rotate(5deg);
  }
  
  .search-btn i {
    transition: transform 0.3s ease;
  }
  
  .search-btn:hover i {
    transform: rotate(10deg);
  }
  
  .logo {
    transition: transform 0.3s ease;
  }
  
  .brand:hover .logo {
    transform: rotate(-2deg);
  }
</style>

<header class="site-header" style="background: linear-gradient(135deg, #192f6e 0%, #0f172a 50%, #192f6e 100%);">
  <div class="container">
    <!-- Logo & Brand -->
    <div class="brand">
      <a href="index" title="Go to Homepage" class="flex items-center">
        <img src="./assets/harees-jewellery-logo.png" alt="Harees Gold & Diamonds" class="logo" />
        <div class="brand-text">
          <h1>HAREES JEWELLERY</h1>
                <!-- <p class="subtitle">Step into a realm of opulence and glamour with Harees Jewellers.</p> -->
                <p class="tagline">GOLD | DIAMONDS | SILVER - (beta version)</p>
        </div>
      </a>
    </div>

    <!-- Search Bar -->
    <!-- <div class="search-bar" id="searchBar">
      <form class="search-form" action="product-all" method="GET">
        <input type="search" name="type" placeholder="Search..." id="searchInput" />
        <button type="submit" class="search-btn"><i class="fas fa-search"></i></button>
      </form>
    </div> -->

    <div class="search-bar" id="searchBar">
      <form class="search-form" action="search" method="GET">
        <input type="search" name="query" placeholder="Search for products..." id="searchInput" />
        <button type="submit" class="search-btn"><i class="fas fa-search"></i></button>
      </form>
    </div>

    <!-- Navigation -->
    <nav class="nav-icons">
      <a href="#" class="mobile-search-toggle" onclick="toggleSearch(event)">
        <i class="fas fa-search"></i><span></span>
      </a>
      <a href="store"><i class="fas fa-store"></i><span>Stores</span></a>
      <a href="gold-rate"><i class="fas fa-coins"></i><span>Gold Rate</span></a>
      <a href="wishlist"><svg class="icon" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" /></svg><span>Wishlist</span></a>
      <a href="sign-in"><i class="fas fa-user"></i><span>Account</span></a>
    </nav>
  </div>

  <script>
    function toggleSearch(event) {
      event.preventDefault();
      const searchBar = document.getElementById('searchBar');
      const searchInput = document.getElementById('searchInput');
      
      if (searchBar.classList.contains('active')) {
        // Hide search bar
        searchBar.classList.remove('active');
      } else {
        // Show search bar and focus input
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

    // Add this to header.php's JavaScript
    document.getElementById('searchInput').addEventListener('input', function(e) {
        const query = e.target.value.trim();
        if (query.length < 2) return;
        
        fetch(`search-suggestions.php?query=${encodeURIComponent(query)}`)
            .then(response => response.json())
            .then(suggestions => {
                // Show suggestions dropdown
                // Implement this UI as needed
            });
    });
  </script>
</header>