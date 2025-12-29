<?php
include('includes/dbconnect.php');

$names = ['necklaces', 'pendants', 'earrings', 'studs', 'rings', 'nosepins', 'anklets', 'bangles', 'bracelets', 'chains'];

$images = [];

foreach ($names as $name) {
    $table_name = '18kgold_product_' . $name;
    $query = "SELECT id, product_code, img2, '$table_name' AS table_name FROM `$table_name` WHERE stock_quantity > 0 ORDER BY RAND() LIMIT 3";
    $result = mysqli_query($conn, $query);
    
    while ($row = mysqli_fetch_assoc($result)) {
        $images[] = [
            'img2' => htmlspecialchars($row['img2']),
            'id' => $row['id'],
            'product_code' => $row['product_code'],
            'table' => $row['table_name']
        ];
    }
}

// Shuffle and get max 12 images
shuffle($images);
$images = array_slice($images, 0, 12);
?>


<style>
.bangle-section .bangle-title {
    text-align: center !important;
    padding-top: 30px !important;
}

.bangle-section .bangle-title h2 {
    font-size: 24px !important;
    color: #1e3a8a !important;
    margin-bottom: 6px !important;
}

.bangle-section .bangle-title p {
    color: #666 !important;
    font-size: 14px !important;
}

.bangle-section .bangle-grid-container {
    display: grid !important;
    grid-template-columns: repeat(4, 1fr) !important;
    gap: 10px !important;
    max-width: 1200px !important;
    margin: 40px auto !important;
    padding: 0 10px !important;
}

.bangle-section .bangle-grid-item {
    position: relative !important;
    aspect-ratio: 1 / 1 !important;
    overflow: hidden !important;
    transition: transform 0.3s ease !important;
}

.bangle-section .bangle-grid-item:hover {
    transform: scale(1.02) !important;
    z-index: 2 !important;
}

.bangle-section .bangle-grid-item img {
    width: 100% !important;
    height: 100% !important;
    object-fit: cover !important;
    border-radius: 10px !important;
    transition: transform 0.4s ease-in-out !important;
}

.bangle-section .bangle-large {
    grid-column: span 2 !important;
    grid-row: span 2 !important;
}

/* Mobile & Tablet Fixes */
@media only screen and (max-width: 768px) {
    .bangle-section .bangle-grid-container {
        grid-template-columns: repeat(2, 1fr) !important;
    }

    .bangle-section .bangle-large {
        grid-column: span 2 !important;
        grid-row: span 2 !important;
    }
}

@media only screen and (max-width: 480px) {
    .bangle-section .bangle-grid-container {
        grid-template-columns: 1fr !important;
    }

    .bangle-section .bangle-large {
        grid-column: span 1 !important;
        grid-row: span 1 !important;
    }
}
</style>


<div class="bangle-section">
    <div class="bangle-title">
        <h2>Diamond Jewellery</h2>
        <p>Discover the beauty of diamond with our timeless diamond collection</p>
    </div>

    <div class="bangle-grid-container">
        <?php
        if (count($images) >= 5):
            $total = count($images);

            if ($total >= 1) {
                $img = $images[0];
                echo '<div class="bangle-grid-item bangle-large"><a href="product-detail?id=' . $img['id'] . '&product_code=' . $img['product_code'] . '&table=' . $img['table'] . '"><img src="ims/internal/' . $img['img2'] . '" alt="Large Image"></a></div>';
            }

            for ($i = 1; $i <= 4 && $i < $total; $i++) {
                $img = $images[$i];
                echo '<div class="bangle-grid-item"><a href="product-detail?id=' . $img['id'] . '&product_code=' . $img['product_code'] . '&table=' . $img['table'] . '"><img src="ims/internal/' . $img['img2'] . '" alt="Small Image"></a></div>';
            }

            for ($i = 5; $i <= 6 && $i < $total; $i++) {
                $img = $images[$i];
                echo '<div class="bangle-grid-item"><a href="product-detail?id=' . $img['id'] . '&product_code=' . $img['product_code'] . '&table=' . $img['table'] . '"><img src="ims/internal/' . $img['img2'] . '" alt="Small Image"></a></div>';
            }

            if ($total > 7) {
                $img = $images[7];
                echo '<div class="bangle-grid-item bangle-large"><a href="product-detail?id=' . $img['id'] . '&product_code=' . $img['product_code'] . '&table=' . $img['table'] . '"><img src="ims/internal/' . $img['img2'] . '" alt="Large Image"></a></div>';
            }

            for ($i = 8; $i <= 9 && $i < $total; $i++) {
                $img = $images[$i];
                echo '<div class="bangle-grid-item"><a href="product-detail?id=' . $img['id'] . '&product_code=' . $img['product_code'] . '&table=' . $img['table'] . '"><img src="ims/internal/' . $img['img2'] . '" alt="Small Image"></a></div>';
            }

        else:
            echo '<p style="text-align:center;">Not enough images to display layout</p>';
        endif;
        ?>
    </div>
</div>
