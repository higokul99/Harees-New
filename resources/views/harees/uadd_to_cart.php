<?php
session_start();
include ('includes/dbconnect.php'); // include your DB connection file

$userid = $_SESSION['userid']; // assuming user ID is stored in session after login
$product_id = $_POST['product_id'];
$product_code = $_POST['product_code'];
$table_name = $_POST['table_name'];

$sql = "INSERT INTO cart (userid, productid, product_code, table_name) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iiss", $userid, $product_id, $product_code, $table_name);

if ($stmt->execute()) {
    header("Location: " . $_SERVER['HTTP_REFERER']); // Redirect back to previous page
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

