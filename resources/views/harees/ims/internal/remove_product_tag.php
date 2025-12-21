<?php
// remove_product_tag.php

header('Content-Type: application/json');
if (!isset($_POST['product_code']) || !isset($_POST['tag'])) {
    echo json_encode(['success' => false, 'message' => 'Missing parameters']);
    exit;
}

$product_code = $_POST['product_code'];
$tag_to_remove = trim($_POST['tag']);

require '../db_connect.php'; // your DB connection; replace as needed

// Fetch current tags
$stmt = $conn->prepare("SELECT tag FROM products WHERE product_code = ?");
if (!$stmt) {
    echo json_encode(['success' => false, 'message' => $conn->error]);
    exit;
}
$stmt->bind_param("s", $product_code);
$stmt->execute();
$stmt->bind_result($tags_str);
if (!$stmt->fetch()) {
    echo json_encode(['success' => false, 'message' => 'Product not found']);
    exit;
}
$stmt->close();

// Remove tag from array
$tags_array = array_filter(array_map('trim', explode(',', $tags_str)));
$updated_tags = array_filter($tags_array, function($t) use ($tag_to_remove) {
    return strcasecmp($t, $tag_to_remove) !== 0; // case-insensitive remove
});

// Update DB
$tags_csv = implode(',', $updated_tags);
$updateStmt = $conn->prepare("UPDATE products SET tags = ? WHERE product_code = ?");
if (!$updateStmt) {
    echo json_encode(['success' => false, 'message' => $conn->error]);
    exit;
}
$updateStmt->bind_param("ss", $tags_csv, $product_code);
$success = $updateStmt->execute();
$updateStmt->close();

if ($success) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'DB update failed']);
}
