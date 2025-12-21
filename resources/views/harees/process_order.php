<?php
session_start();
include('includes/dbconnect.php');

// Check if user is logged in
if (!isset($_SESSION['userid'])) {
    header('Location: login');
    exit();
}

// Check if cart exists
if (!isset($_SESSION['cart'])) {
    header('Location: ucart');
    exit();
}

// Get form data
$userid = $_SESSION['userid'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$deliveryType = $_POST['delivery'];
$fullname = $_POST['fullname'] ?? '';
$pincode = $_POST['pincode'] ?? '';
$address = $_POST['address'] ?? '';
$city = $_POST['city'] ?? '';
$state = $_POST['state'] ?? '';
$price = $_POST['rate'];

// Start transaction
$conn->begin_transaction();

$orderSuccess = true;

foreach ($_SESSION['cart'] as $item) {
    $productid = $item['productid'];
    $product_code = $item['product_code'];
    $table_name = $item['table_name'];
    $price = $item['rate'];
    $qty = isset($item['quantity']) ? (int)$item['quantity'] : 1; // Set quantity safely

    // Insert into orders table
    $stmt = $conn->prepare("INSERT INTO orders (userid, productid, product_code, price, table_name, status) VALUES (?, ?, ?, ?, ?, 0)");
    $stmt->bind_param("iisds", $userid, $productid, $product_code, $price, $table_name);

    if (!$stmt->execute()) {
        $orderSuccess = false;
        $stmt->close();
        break;
    }
    $stmt->close();

    // Reduce stock from respective table
    $updateStock = $conn->prepare("UPDATE `$table_name` SET stock_quantity = stock_quantity - ? WHERE id = ? AND stock_quantity >= ?");
    $updateStock->bind_param("iii", $qty, $productid, $qty);

    if (!$updateStock->execute() || $updateStock->affected_rows === 0) {
        $orderSuccess = false;
        $updateStock->close();
        break;
    }
    $updateStock->close();
}

// Commit or rollback based on success
if ($orderSuccess) {
    $conn->commit();

    // Clear cart in DB
    $clearCart = $conn->prepare("DELETE FROM cart WHERE userid = ?");
    $clearCart->bind_param("i", $userid);
    $clearCart->execute();
    $clearCart->close();

    // Clear session cart
    unset($_SESSION['cart']);
    unset($_SESSION['cart_total']);
    unset($_SESSION['cart_count']);
    unset($_SESSION['discount_amount']);

    $_SESSION['order_success'] = true;
    header('Location: order_success');
    exit();
} else {
    $conn->rollback();
    $_SESSION['order_error'] = "There was an error processing your order. Please try again.";
    header('Location: uplaceorder');
    exit();
}
?>
