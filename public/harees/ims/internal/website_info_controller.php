<?php
session_start();
include_once('../db_connect.php');

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get the toggle value (1 if checked, 0 if not)
    $hideRates = isset($_POST['hide_rates']) ? 1 : 0;

    // Get username from session (set during login)
    $updatedBy = isset($_SESSION['username']) ? $_SESSION['username'] : 'Admin';

    // Check if setting already exists
    $checkQuery = "SELECT id FROM site_settings WHERE option_name = 'hide_product_rates' LIMIT 1";
    $checkResult = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        // Update existing setting
        $updateQuery = "UPDATE site_settings
                       SET status = ?,
                           updated_by = ?,
                           updated_datetime = NOW()
                       WHERE option_name = 'hide_product_rates'";

        $stmt = mysqli_prepare($conn, $updateQuery);
        mysqli_stmt_bind_param($stmt, "is", $hideRates, $updatedBy);

        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['success'] = 'Website info settings updated successfully!';
        } else {
            $_SESSION['error'] = 'Failed to update settings. Please try again.';
        }

        mysqli_stmt_close($stmt);
    } else {
        // Insert new setting
        $insertQuery = "INSERT INTO site_settings (option_name, status, updated_by, updated_datetime)
                       VALUES ('hide_product_rates', ?, ?, NOW())";

        $stmt = mysqli_prepare($conn, $insertQuery);
        mysqli_stmt_bind_param($stmt, "is", $hideRates, $updatedBy);

        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['success'] = 'Website info settings created successfully!';
        } else {
            $_SESSION['error'] = 'Failed to create settings. Please try again.';
        }

        mysqli_stmt_close($stmt);
    }

    // Redirect back to the control page
    header('Location: website_info_control.php');
    exit();
} else {
    // If accessed directly without POST, redirect to control page
    header('Location: website_info_control.php');
    exit();
}
