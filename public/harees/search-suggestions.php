<?php
session_start();
include('includes/dbconnect.php');

$query = isset($_GET['query']) ? trim($_GET['query']) : '';
if (strlen($query) < 2) {
    echo json_encode([]);
    exit;
}

$searchTerms = explode(' ', $query);
$allTables = []; // Same as in search.php

$suggestions = [];

foreach ($allTables as $table) {
    $tableCheck = $conn->query("SHOW TABLES LIKE '$table'");
    if ($tableCheck->num_rows === 0) continue;
    
    $sql = "SELECT name, product_code FROM `$table` WHERE delist != 1 AND stock_quantity > 0 AND (";
    
    $conditions = [];
    $params = [];
    
    foreach ($searchTerms as $term) {
        if (strlen($term) < 2) continue;
        
        $conditions[] = "(name LIKE ? OR product_code LIKE ?)";
        $term = "%$term%";
        $params[] = $term;
        $params[] = $term;
    }
    
    if (empty($conditions)) continue;
    
    $sql .= implode(' AND ', $conditions) . ") LIMIT 5";
    
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $types = str_repeat('s', count($params));
        $stmt->bind_param($types, ...$params);
        $stmt->execute();
        $result = $stmt->get_result();
        
        while ($row = $result->fetch_assoc()) {
            $suggestions[] = [
                'name' => $row['name'],
                'code' => $row['product_code']
            ];
        }
        
        $stmt->close();
    }
}

header('Content-Type: application/json');
echo json_encode(array_slice($suggestions, 0, 5));