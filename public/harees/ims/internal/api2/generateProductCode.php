<?php
//generateProductCode.php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *"); // For public access (you can restrict by domain)
header("Access-Control-Allow-Methods: POST");


$servername = "localhost";
$username = "root";
$password = "";
$database = "hjdb"; // Replace with your DB name

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(["status" => "error", "message" => "Database connection failed"]);
    exit;
}

require_once "../functions.php";

// Read POST body as JSON
$data = json_decode(file_get_contents("php://input"), true);

// Basic validation
if (!isset($data['brand'], $data['metal_id'], $data['purity_id'], $data['category_id'])) {
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "Missing required parameters"]);
    exit;
}

$brand = $data['brand'];
$metal_id = $data['metal_id'];
$purity_id = $data['purity_id'];
$category_id = $data['category_id'];

try {
    $productCode = generateProductCode($conn, $brand, $metal_id, $purity_id, $category_id);
    echo json_encode(["status" => "success", "product_code" => $productCode]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(["status" => "error", "message" => "Failed to generate product code"]);
}

?>