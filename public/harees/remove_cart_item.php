<?php
session_start();
include('includes/dbconnect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cart_id'])) {
    $cart_id = intval($_POST['cart_id']);
    $userid = $_SESSION['userid'] ?? null;

    if ($userid) {
        // Secure deletion: make sure the cart item belongs to this user
        $stmt = $conn->prepare("DELETE FROM cart WHERE id = ? AND userid = ?");
        $stmt->bind_param("ii", $cart_id, $userid);
        $stmt->execute();

        // Optional: Check if row was deleted
        if ($stmt->affected_rows > 0) {
            $_SESSION['msg'] = 'Item removed from cart.';
        } else {
            $_SESSION['msg'] = 'Item not found or could not be removed.';
        }

        $stmt->close();
    }
}

$conn->close();

// Redirect back to cart page
header('Location: ucart.php');
exit;
?>
