<!DOCTYPE html>
<html lang="en">

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

<!-- header tag open -->
<?php 
  include ('includes/dbconnect.php'); 
  include('functionsFE.php');
?>
<!-- nav bar close -->
<?php
  $id = $_GET['id'];
  $product_code = $_GET['product_code'];
  $table_name = $_GET['table'];
?>

<!-- ###################################--START--########################################## -->

<?php
    $query = "SELECT * FROM `$table_name` where id=$id";
    // echo $query;
    $result = $conn->query($query);
        while ($row = $result->fetch_assoc()) {
          switch ($env) {
            case 'local':
              // Path location details (localhost)
              $loc = "ims/internal/";
              $imagedetails = $loc.$row['img2'];
              break;
            case 'dev':
              //Path location details (hostinger dev folder)
              $loc = "ims/internal/";
              $imagedetails = $loc.$row['img2'];
              break;
            case 'prod':
              // Path location details (hostinger)
              $loc = "ims/internal/";
              $imagedetails = $loc.$row['img2'];
              break; 
          
            default:
              # code...
              break;
          }
    ?>

<div class="w-full pt-16">
<div class="max-w-7xl mx-auto p-4">
  <div class="flex flex-col md:flex-row">
    <div class="flex-1">
    <!-- Main product image - load immediately (above the fold) -->
    <img id="mainImage" 
         src="<?php echo $imagedetails; ?>" 
         alt="Product Image" 
         class="w-full h-auto object-cover" />
    
    <!-- Thumbnail images with lazy loading -->
    <div class="flex mt-4 space-x-2">
        <?php
        for ($i = 2; $i <= 5; $i++) {
            $imgKey = 'img' . $i;
            if (!empty($row[$imgKey])) {
                $src = $loc.$row[$imgKey]; // Fixed to use correct image path
                echo '<div class="thumbnail-container relative w-16 h-16">';
                echo '<div class="lazy-placeholder bg-gray-200 animate-pulse w-16 h-16 flex items-center justify-center absolute top-0 left-0">';
                echo '<div class="text-gray-400 text-xs">...</div>';
                echo '</div>';
                echo '<img data-src="' . $src . '" alt="Thumbnail ' . $i . '" class="lazy-image w-16 h-16 object-cover cursor-pointer opacity-0 transition-opacity duration-300 absolute top-0 left-0" onclick="changeMainImage(\'' . $src . '\')" />';
                echo '</div>';
            }
        }
        ?>
    </div>
</div>

    <div class="flex-1 md:ml-8 mt-8 md:mt-0">
      <h1 class="text-2xl font-bold text-yellow-300"><?php echo $row['name'] ?></h1>
      <p class="text-muted-foreground">
        <?php echo $row['description'] ?> 
        <!-- | <?php echo $row['Type'] ?> -->
      </p>
      <small class="text-muted-foreground">Product Code: <?php echo $row['product_code'] ?></small><br>
      <small class="text-muted-foreground">All India Delivery available | BIS Hallmarked Jewellery</small>
      <p class="mt-2"><span class="font-semibold">Availability:</span> 
      <span class="<?php echo ($row['stock_quantity'] > 0) ? 'text-green-600' : 'text-red-600'; ?>">
        <?php if ($row['stock_quantity'] > 0) { echo 'In Stock'; } else { echo 'Out of Stock'; } ?></span> 
      <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm text-zinc-700">
        <div class="flex items-center space-x-2">
          <span class="font-semibold text-yellow-600">Size:</span>
          <span class="text-base font-medium"><?php echo $row['size']; ?></span>
        </div>
        <div class="flex items-center space-x-2">
          <span class="font-semibold text-yellow-600">Weight:</span>
          <?php 
              $formatted_net_weight = number_format($row['net_weight'], 3, '.', ''); // 3 decimal places
          ?>
          <span class="text-base font-medium"><?php echo $formatted_net_weight.'gm'; ?></span>
        </div>
      </div>
      <?php 
        $data = displayRate($conn,$product_code,$table_name); 
        $Product_Rate = $data[0];
        $Metal_Rate_Only = $data[1];
        $Making_charges_Only = $data[2];
        $GST_Only = $data[3];
        $Metal = $data[4];
      ?>
      <p class="text-2xl font-bold text-primary mt-4">₹ <?php echo ceil($Product_Rate); ?></p>
      <small class="text-muted-foreground">(Inclusive of all taxes)</small>

      <div class="mt-4">
        <h2 class="text-lg font-semibold text-yellow-300">Price Breakup</h2>
        <div class="flex space-x-4 mt-2">

          <?php if (!empty($Metal_Rate_Only)) { ?>
            <div class="flex-1 p-4 bg-zinc-100 rounded-md">
              <p class="text-sm text-muted-foreground"><?php echo $Metal ?></p>
              <p class="text-xs font-bold">₹ <?php echo ceil($Metal_Rate_Only); ?></p>
            </div>
          <?php } ?>

          <?php if (!empty($Making_charges_Only)) { ?>
            <div class="flex-1 p-4 bg-zinc-100 rounded-md">
              <p class="text-sm text-muted-foreground">Making</p>
              <p class="text-xs font-bold">₹ <?php echo ceil($Making_charges_Only); ?></p>
            </div>
          <?php } ?>

          <?php if (!empty($GST_Only)) { ?>
            <div class="flex-1 p-4 bg-zinc-100 rounded-md">
              <p class="text-sm text-muted-foreground">Tax</p>
              <p class="text-xs font-bold">₹ <?php echo ceil($GST_Only); ?></p>
            </div>
          <?php } ?>

        </div>
      </div>

      <?php
        if (isset($_SESSION['userid'])) {
      ?>
      <div class="flex gap-4 mt-6">
      <button 
          onclick="
            let code = '<?php echo $product_code ?>';
            let currentURL = window.location.href;
            let message = 'Hi, I am interested in this product (PRODUCT CODE: ' + code + ') - ' + currentURL;
            window.open('https://wa.me/+918921387392?text=' + encodeURIComponent(message), '_blank');
          "
          class="w-1/2 bg-green-500 text-white p-3 rounded-md text-lg hover:bg-yellow-500 flex items-center justify-center">Chat with us on  .
          <i class="fab fa-whatsapp"></i>
        </button>
        <!-- <button class="w-1/2 bg-yellow-400 text-black py-3 rounded-md text-lg font-semibold hover:bg-yellow-500">Buy Now</button> -->
        <!-- <?php echo $_SESSION['userid']; ?>
        <?php echo $id; ?>
        <?php echo $product_code; ?>
        <?php echo $table_name; ?> -->
        <form action="uadd_to_cart.php" method="POST" class="w-1/2">
          <input type="hidden" name="product_id" value="<?php echo $id; ?>">
          <input type="hidden" name="product_code" value="<?php echo $product_code; ?>">
          <input type="hidden" name="table_name" value="<?php echo $table_name; ?>">
          <button type="submit" class="w-full bg-yellow-400 text-black py-3 rounded-md text-lg font-semibold hover:bg-yellow-500">Add To Cart</button>
          
        </form>
      </div>
      <?php
        }else{
      ?>
      <div class="flex flex-wrap gap-4 mt-6">

        <button onclick="window.location.href='sign-in.php'" 
                class="flex-1 bg-yellow-400 text-black py-3 rounded-md text-lg font-semibold hover:bg-yellow-500">
          Buy Now
        </button>

        <button onclick="window.location.href='sign-in.php'" 
                class="flex-1 bg-yellow-400 text-black py-3 rounded-md text-lg font-semibold hover:bg-yellow-500">
          Add To Cart
        </button>

        <!-- WhatsApp Small Button -->
        <!-- <button onclick="window.open('https://wa.me/+918921387392?text=Hi, I am interested in this product (PRODUCT CODE : <?php echo urlencode($product_code); ?>)', '_blank')" 
                class="bg-green-500 text-white p-3 rounded-md text-lg hover:bg-green-600 flex items-center justify-center">
          <i class="fab fa-whatsapp"></i>
        </button> -->

        <!-- <button 
          onclick="
            let code = '<?php echo $product_code ?>';
            let currentURL = window.location.href;
            let message = 'Hi, I am interested in this product (PRODUCT CODE: ' + code + ') - ' + currentURL;
            window.open('https://wa.me/+918547470675?text=' + encodeURIComponent(message), '_blank');
          "
          class="bg-green-500 text-white p-3 rounded-md text-lg hover:bg-yellow-500 flex items-center justify-center">
          <i class="fab fa-whatsapp"></i>
        </button> -->

      </div>

      <?php
        }
      ?>
     
      <div class="mt-4 flex items-center space-x-4">
        <p class="text-sm">100% Certified by International Standards</p>
        <!-- Lazy load certification icon -->
        <div class="cert-icon-container relative">
          <div class="lazy-placeholder bg-gray-200 animate-pulse w-12 h-12 rounded"></div>
          <img data-src="https://placehold.co/50x50" 
               alt="certification-icon" 
               class="lazy-image w-12 h-12 opacity-0 transition-opacity duration-300" 
               style="position: absolute; top: 0; left: 0;" />
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php 
  // Store current product details for similar products query
  // $current_type = $row['Type'];
  $id = $row['id'];
} 
?>

<!-- ##########################--SIMILAR PRODUCTS SECTION--################################## -->
<div class="w-full py-12 bg-white">
  <div class="max-w-7xl mx-auto p-4">
    <h2 class="text-3xl font-bold text-center mb-8 text-yellow-600">Similar Products</h2>
    
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6">
      <?php
        // Query for similar products (same type, different id, limit to 8 products)
        $similar_query = "SELECT * FROM `$table_name` where id!= $id ORDER BY is_featured DESC LIMIT 8";
        $similar_result = $conn->query($similar_query);
        
        if ($similar_result->num_rows > 0) {
          while ($similar_row = $similar_result->fetch_assoc()) {
      ?>
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-gray-200 relative">
          <?php if ($similar_row['is_featured'] == 1): ?>
            <div class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded-full font-semibold z-10">
              Featured
            </div>
          <?php endif; ?>
          
         <a href="product-detail?id=<?php echo $similar_row['id']; ?>&product_code=<?php echo $similar_row['product_code']; ?>&table=<?php echo $table_name; ?>">
            <div class="aspect-square overflow-hidden relative">
              <?php
                $similar_img = !empty($similar_row['img2']) ? $loc.$similar_row['img2'] : 'https://placehold.co/300x300';
              ?>
              <!-- Lazy loading placeholder -->
              <div class="lazy-placeholder bg-gray-200 animate-pulse w-full h-full flex items-center justify-center">
                <div class="text-gray-400">Loading...</div>
              </div>
              <!-- Lazy loaded image -->
              <img class="lazy-image w-full h-full object-cover hover:scale-105 transition-transform duration-300 opacity-0" 
                   data-src="<?php echo $similar_img; ?>" 
                   alt="<?php echo htmlspecialchars($similar_row['name']); ?>"
                   style="position: absolute; top: 0; left: 0;" />
            </div>
            
            <div class="p-4">
              <h3 class="font-semibold text-sm text-gray-800 truncate"><?php echo htmlspecialchars($similar_row['name']); ?></h3>
              <div class="flex justify-between items-center">
                <div class="text-xs text-gray-600">
                  <span class="font-medium">Weight:</span> <?php echo htmlspecialchars($similar_row['net_weight']); ?>
                </div>
              </div>
              <?php 
              $product_code = $similar_row['product_code'];

              $data = displayRate($conn,$product_code,$table_name); 
              $Product_Rate = $data[0];
              $GoldRate_Only = $data[1];
              $Making_charges_Only = $data[2];
              $GST_Only = $data[3];
              ?>
              <div class="flex justify-between items-center">
                <div>
                  <p class="text-sm font-bold text-primary mt-4">₹ <?php echo ceil($Product_Rate); ?></p>
                  <p class="text-xs text-gray-500">(Inc. all taxes)</p>
                </div>
              </div>
            </div>
          </a>
        </div>
      <?php
          }
        } else {
          // If no similar products found, show message
          echo '<div class="col-span-full text-center py-8">';
          echo '<p class="text-gray-500 text-lg">No similar products found at the moment.</p>';
          echo '<p class="text-gray-400 text-sm mt-2">Check back later for more products in this category.</p>';
          echo '</div>';
        }
      ?>
    </div>
  </div>
</div>
<!-- ###################################--END SIMILAR PRODUCTS--########################################## -->

<?php include ('includes/footer.php'); ?>

<!-- Enhanced Lazy Loading JavaScript -->
<script>
  // Intersection Observer for lazy loading
  class LazyLoader {
    constructor() {
      this.imageObserver = null;
      this.init();
    }

    init() {
      // Check if Intersection Observer is supported
      if ('IntersectionObserver' in window) {
        this.imageObserver = new IntersectionObserver((entries, observer) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              this.loadImage(entry.target);
              observer.unobserve(entry.target);
            }
          });
        }, {
          // Load images when they're 100px away from viewport
          rootMargin: '100px 0px',
          threshold: 0.01
        });

        // Observe all lazy images
        this.observeImages();
      } else {
        // Fallback for older browsers
        this.loadAllImages();
      }
    }

    observeImages() {
      const lazyImages = document.querySelectorAll('.lazy-image[data-src]');
      lazyImages.forEach(img => {
        this.imageObserver.observe(img);
      });
    }

    loadImage(img) {
      const placeholder = img.parentElement.querySelector('.lazy-placeholder');
      
      // Create a new image to preload
      const imageLoader = new Image();
      
      imageLoader.onload = () => {
        // Image loaded successfully
        img.src = img.dataset.src;
        img.classList.remove('opacity-0');
        img.classList.add('opacity-100');
        
        // Hide placeholder
        if (placeholder) {
          placeholder.style.display = 'none';
        }
        
        // Remove data-src attribute
        img.removeAttribute('data-src');
      };
      
      imageLoader.onerror = () => {
        // Handle error - show placeholder or default image
        img.src = 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDMwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSIzMDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjRjNGNEY2Ii8+CjxwYXRoIGQ9Ik0xNTAgMTAwVjIwME0xMDAgMTUwSDE1MEgxNTBIMjAwIiBzdHJva2U9IiM5Q0EzQUYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIi8+Cjwvc3ZnPgo=';
        img.classList.remove('opacity-0');
        img.classList.add('opacity-100');
        
        if (placeholder) {
          placeholder.style.display = 'none';
        }
      };
      
      // Start loading the image
      imageLoader.src = img.dataset.src;
    }

    loadAllImages() {
      // Fallback for browsers without Intersection Observer
      const lazyImages = document.querySelectorAll('.lazy-image[data-src]');
      lazyImages.forEach(img => {
        this.loadImage(img);
      });
    }
  }

  // Initialize lazy loading when DOM is ready
  document.addEventListener('DOMContentLoaded', function() {
    new LazyLoader();
  });

  // Original function for changing main image
  function changeMainImage(src) {
    const mainImage = document.getElementById("mainImage");
    
    // Simple immediate change since main image is not lazy loaded
    mainImage.src = src;
  }

  // Performance optimization: Preload critical images
  window.addEventListener('load', function() {
    // Preload next few similar product images that are likely to be viewed
    const similarImages = document.querySelectorAll('.lazy-image[data-src]');
    let preloadCount = 0;
    const maxPreload = 4; // Preload first 4 similar products
    
    similarImages.forEach(img => {
      if (preloadCount < maxPreload) {
        const rect = img.getBoundingClientRect();
        // If image is close to viewport, preload it
        if (rect.top < window.innerHeight + 200) {
          const preloadImg = new Image();
          preloadImg.src = img.dataset.src;
          preloadCount++;
        }
      }
    });
  });
</script>

<!-- Additional CSS for smooth transitions -->
<style>
  .lazy-placeholder {
    background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
    background-size: 200% 100%;
    animation: loading 1.5s infinite;
  }

  @keyframes loading {
    0% {
      background-position: 200% 0;
    }
    100% {
      background-position: -200% 0;
    }
  }

  .lazy-image {
    transition: opacity 0.3s ease-in-out;
  }

  /* Container positioning for overlay effect */
  .main-image-container,
  .thumbnail-container,
  .cert-icon-container {
    position: relative;
    display: inline-block;
  }

  /* Ensure proper aspect ratios */
  .aspect-square {
    aspect-ratio: 1 / 1;
  }
</style>

</body>
</html>