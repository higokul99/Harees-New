<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['userid'])) {
    header("Location: index");
    exit();
}

// Include database connection
include('includes/dbconnect.php');

// Get user ID from session
$UserID = $_SESSION['userid'];

// Handle POST requests only
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Check if action is set
    if (!isset($_POST['action'])) {
        $_SESSION['error'] = "Invalid request.";
        header("Location: uprofile");
        exit();
    }
    
    $action = $_POST['action'];
    
    // Handle password change
    if ($action === 'change_password') {
        
        // Validate required fields
        if (empty($_POST['current_password']) || empty($_POST['new_password']) || empty($_POST['confirm_password'])) {
            $_SESSION['error'] = "All password fields are required.";
            header("Location: uprofile");
            exit();
        }
        
        $current_password = $_POST['current_password'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];
        
        // Validate new password - must be exactly 4 digits
        if (!preg_match('/^\d{4}$/', $new_password)) {
            $_SESSION['error'] = "New password must be exactly 4 digits.";
            header("Location: uprofile");
            exit();
        }
        
        // Check if new password and confirm password match
        if ($new_password !== $confirm_password) {
            $_SESSION['error'] = "New password and confirm password do not match.";
            header("Location: uprofile");
            exit();
        }
        
        // Check if new password is different from current password
        if ($current_password === $new_password) {
            $_SESSION['error'] = "New password must be different from current password.";
            header("Location: uprofile");
            exit();
        }
        
        // Get current user data from database
        $query = "SELECT password FROM users WHERE id = ?";
        $stmt = mysqli_prepare($conn, $query);
        
        if (!$stmt) {
            $_SESSION['error'] = "Database error occurred.";
            header("Location: uprofile");
            exit();
        }
        
        mysqli_stmt_bind_param($stmt, "i", $UserID);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $user = mysqli_fetch_assoc($result);
        
        if (!$user) {
            $_SESSION['error'] = "User not found.";
            header("Location: uprofile");
            exit();
        }
        
        // Verify current password (4-digit numeric)
        if ($current_password !== $user['password']) {
            $_SESSION['error'] = "Current password is incorrect.";
            header("Location: uprofile");
            exit();
        }
        
        // Store the new 4-digit password directly (no hashing for numeric PIN)
        $new_password_to_store = $new_password;
        
        // Update password in database
        $update_query = "UPDATE users SET password = ?, updated_at = NOW() WHERE id = ?";
        $update_stmt = mysqli_prepare($conn, $update_query);
        
        if (!$update_stmt) {
            $_SESSION['error'] = "Database error occurred while updating password.";
            header("Location: uprofile");
            exit();
        }
        
        mysqli_stmt_bind_param($update_stmt, "si", $new_password_to_store, $UserID);
        
        if (mysqli_stmt_execute($update_stmt)) {
            $_SESSION['msg'] = "Password updated successfully!";
        } else {
            $_SESSION['error'] = "Failed to update password. Please try again.";
        }
        
        mysqli_stmt_close($update_stmt);
        mysqli_stmt_close($stmt);
        
    } 
    // Handle special dates update
    elseif ($action === 'update_dates') {
        // Get and sanitize input
        $dob = !empty($_POST['dob']) ? $_POST['dob'] : null;
        $anniversary = !empty($_POST['anniversary']) ? $_POST['anniversary'] : null;
        
        // Validate dates if provided
        if ($dob && !strtotime($dob)) {
            $_SESSION['error'] = "Invalid birthday date format.";
            header("Location: uprofile");
            exit();
        }
        
        if ($anniversary && !strtotime($anniversary)) {
            $_SESSION['error'] = "Invalid anniversary date format.";
            header("Location: uprofile");
            exit();
        }
        
        // Update database
        $query = "UPDATE users SET dob = ?, anniversary = ? WHERE id = ?";
        $stmt = mysqli_prepare($conn, $query);
        
        if (!$stmt) {
            $_SESSION['error'] = "Database error occurred.";
            header("Location: uprofile");
            exit();
        }
        
        mysqli_stmt_bind_param($stmt, "ssi", $dob, $anniversary, $UserID);
        
        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['msg'] = "Special dates updated successfully!";
        } else {
            $_SESSION['error'] = "Failed to update special dates. Please try again.";
        }
        
        mysqli_stmt_close($stmt);
    }
    else {
        $_SESSION['error'] = "Invalid action specified.";
    }
    
} else {
    $_SESSION['error'] = "Invalid request method.";
}

// Close database connection
mysqli_close($conn);

// Redirect back to profile page
header("Location: uprofile");
exit();
?>