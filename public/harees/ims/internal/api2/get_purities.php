<?php
include_once('../../db_connect.php');
session_start();
if (!isset($_SESSION['username'])) {
    http_response_code(401);
    echo json_encode(['error' => 'Unauthorized']);
    exit();
}

$metal_id = intval($_GET['metal_id']);
$data = [];

$res = mysqli_query($conn, "SELECT * FROM metals_purity WHERE metal_id = $metal_id");
while ($row = mysqli_fetch_assoc($res)) {
    $data[] = $row;
}

header('Content-Type: application/json');
echo json_encode($data);
