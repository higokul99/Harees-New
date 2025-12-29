<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hjdb";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

require_once 'functions.php'; // Include the function file if separate

// Test parameters
$brand = "HJ";
$metal_id = 1;      // S
$purity_id = 1;     // 850
$category_id = 1;   // BR

echo "hi";
// $productCode = generateProductCode($conn, $brand, $metal_id, $purity_id, $category_id);
// echo "Generated Product Code: " . $productCode;
?>
