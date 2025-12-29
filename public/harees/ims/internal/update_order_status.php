<?php
// Include database connection
include_once('../db_connect.php');

// Set appropriate headers
header('Content-Type: application/json');

// Validate request method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'error' => 'Invalid request method']);
    exit;
}

// Get and sanitize input
$orderId = isset($_POST['order_id']) ? intval($_POST['order_id']) : 0;
$newStatus = isset($_POST['new_status']) ? intval($_POST['new_status']) : -1;

// Validate input
if ($orderId <= 0 || $newStatus < 0 || $newStatus > 3) {
    echo json_encode(['success' => false, 'error' => 'Invalid input']);
    exit;
}

// Prepare and execute update
$query = "UPDATE customer_orders SET status = ? WHERE id = ?";
$stmt = mysqli_prepare($conn, $query);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, 'ii', $newStatus, $orderId);
    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Failed to update order']);
    }
    mysqli_stmt_close($stmt);
} else {
    echo json_encode(['success' => false, 'error' => 'Database error: ' . mysqli_error($conn)]);
}
