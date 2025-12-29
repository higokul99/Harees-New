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

<br><br>

<?php 
    include ('functionsFE.php');

    $name = [
        'anklets', 'bangles', 'bracelets', 'chains'
    ]

    // Define all tables
    $tables = [
        '18kgold_product_'.$name
    ];
    
    // Store all items
    $allItems = array();
    
    // Query each table
    foreach ($tables as $table_name) {
        // First check if table exists
        $table_check = $conn->query("SHOW TABLES LIKE '$table_name'");
        
        if ($table_check->num_rows > 0) {
            $query = "SELECT *, '$table_name' as source_table FROM `$table_name` WHERE CAST(is_featured AS UNSIGNED) != 2 AND delist != 1 AND stock_quantity > 0 ORDER BY is_featured DESC, id ASC";
            $result = $conn->query($query);
            
            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $allItems[] = $row;
                }
            }
        }
    }
    
    // Optional: Sort all items by featured status
    usort($allItems, function($a, $b) {
        return $b['is_featured'] - $a['is_featured'];
    });
?>

<!-- grid section 2 -->
    <div class="max-w-7xl mx-auto p-6">
        <h1 class="text-3xl font-semibold text-yellow-300 text-center mb-8">Light Weight Jewellery</h1>
        <p class="text-center text-2xl mb-12">
            Discover the beauty of light weight jewells with our timeless 18K collection
        </p>
        <style>
            /* Minimal version */
        .grid div img {
        transition: transform 0.3s ease;
        }
        .grid div:hover img {
        transform: scale(1.015); /* Even more subtle */
        }
        </style>
        <div class="grid grid-cols-2 md:grid-cols-4 auto-rows-fr gap-4">
            <!-- Large image at top-left (responsive) -->
            <div class="md:col-span-2 md:row-span-2">
                <img class="w-full h-full object-cover rounded-lg"
                    src="assets/jewelry-products/webp/1.webp"
                    alt="Diamond Necklace" />
            </div>

            <!-- Regular images -->
            <div>
                <img class="w-full h-full object-cover rounded-lg"
                    src="assets/jewelry-products/webp/2.webp"
                    alt="Diamond Earrings" />
            </div>
            <div>
                <img class="w-full h-full object-cover rounded-lg"
                    src="assets/jewelry-products/webp/3.webp"
                    alt="Diamond Bracelet" />
            </div>
            <div>
                <img class="w-full h-full object-cover rounded-lg"
                    src="assets/jewelry-products/webp/4.webp"
                    alt="Diamond Ring" />
            </div>
            <div>
                <img class="w-full h-full object-cover rounded-lg"
                    src="assets/jewelry-products/webp/5.webp"
                    alt="Diamond Pendant" />
            </div>
            <div>
                <img class="w-full h-full object-cover rounded-lg"
                    src="assets/jewelry-products/webp/6.webp"
                    alt="Diamond Brooch" />
            </div>
            <div>
                <img class="w-full h-full object-cover rounded-lg"
                    src="assets/jewelry-products/webp/7.webp"
                    alt="Diamond Anklet" />
            </div>
            <div>
                <img class="w-full h-full object-cover rounded-lg"
                    src="assets/jewelry-products/webp/8.webp"
                    alt="Diamond Tiara" />
            </div>
            <div>
                <img class="w-full h-full object-cover rounded-lg"
                    src="assets/jewelry-products/webp/9.webp"
                    alt="Diamond Cufflinks" />
            </div>

            <!-- Large image at bottom-right (only on md and above) -->
            <div class="md:col-start-3 md:row-start-3 md:col-span-2 md:row-span-2">
                <img class="w-full h-full object-cover rounded-lg"
                    src="assets/jewelry-products/webp/12.webp"
                    alt="Diamond Pin" />
            </div>
        </div>
    </div>