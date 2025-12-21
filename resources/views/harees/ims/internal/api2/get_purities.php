<?php
include_once('../../db_connect.php');

$metal_id = intval($_GET['metal_id']);
$data = [];

    $res = mysqli_query($conn, "SELECT * FROM metals_purity WHERE metal_id = $metal_id");
    while ($row = mysqli_fetch_assoc($res)) {
        $data[] = $row;
    }

header('Content-Type: application/json');
echo json_encode($data);
?>