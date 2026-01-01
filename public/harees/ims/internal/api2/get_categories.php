<?php
include_once('../../db_connect.php');
session_start();
if (!isset($_SESSION['username'])) {
    http_response_code(401);
    echo json_encode(['error' => 'Unauthorized']);
    exit();
}

$data = [];
$res = mysqli_query($conn, "SELECT * FROM categories ORDER BY name ASC");
while ($row = mysqli_fetch_assoc($res)) {
    $data[] = $row;
}

header('Content-Type: application/json');
echo json_encode($data);
