<?php
include('../db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize & assign POST variables
    $supplier_id     = $_POST['supplier_id'];
    $supplier_name   = $_POST['supplier_name'];
    $contact_person  = $_POST['contact_person'];
    $address         = $_POST['address'];
    $city            = $_POST['city'];
    $state           = $_POST['state'];
    $zip_code        = $_POST['zip_code'];
    $country         = $_POST['country'];
    $phone           = $_POST['phone'];
    $email           = $_POST['email'];

    // Prepare SQL statement
    $stmt = $conn->prepare("UPDATE suppliers 
        SET supplier_name = ?, contact_person = ?, address = ?, city = ?, state = ?, zip_code = ?, country = ?, phone = ?, email = ? 
        WHERE id = ?");

    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    // Bind parameters (s = string, i = integer)
    $stmt->bind_param(
        "sssssssssi",
        $supplier_name,
        $contact_person,
        $address,
        $city,
        $state,
        $zip_code,
        $country,
        $phone,
        $email,
        $supplier_id
    );

    // Execute and handle response
    if ($stmt->execute()) {
        // Redirect or show success message
        header("Location: supplier_view.php"); // Change as per your file structure
        exit();
    } else {
        echo "Error updating supplier: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Invalid access method.";
}

$conn->close();
