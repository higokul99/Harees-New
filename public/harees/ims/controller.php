<?php
include_once('db_connect.php');
session_start(); // Moved to top to prevent session fixation

// ----------------------------------- LOGIN CODE - mysql ----------------------------------------------------------
if (isset($_POST['loginbtn'])) {
    // Rate limiting - allow max 5 attempts in 5 minutes
    $max_attempts = 5;
    $lockout_time = 300; // 5 minutes in seconds
    
    if (!isset($_SESSION['login_attempts'])) {
        $_SESSION['login_attempts'] = 0;
        $_SESSION['first_attempt_time'] = time();
    }
    
    if ($_SESSION['login_attempts'] >= $max_attempts) {
        if (time() - $_SESSION['first_attempt_time'] < $lockout_time) {
            $message = "Too many login attempts. Please try again later.";
            echo "<script>alert('$message'); location.href='index.php';</script>";
            exit();
        } else {
            // Reset attempts if lockout time has passed
            $_SESSION['login_attempts'] = 0;
            $_SESSION['first_attempt_time'] = time();
        }
    }
    
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Fixed SQL Injection with prepared statement
    $sql = "SELECT * FROM login WHERE username = ? AND (account_status = 'New' OR account_status = 'Approved')";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) { 
        $row = $result->fetch_assoc();
        $Table_Password = $row['password'];
        $type_of_user = strtoupper($row['account_type']); // Normalize case
        $name = $row['name'];

        if ($password == $Table_Password) { 
            // Regenerate session ID to prevent fixation
            session_regenerate_id(true);
            
            $_SESSION['username'] = $username;
            $_SESSION['usertype'] = $type_of_user;
            $_SESSION['name'] = $row['name'];
            $_SESSION['account_status'] = $row['account_status'];
            
            // Reset login attempts on successful login
            unset($_SESSION['login_attempts']);
            unset($_SESSION['first_attempt_time']);
            
            $status = $row['account_status'];
            
            if ($status == "New" || $status == "Rejected" || $status == "Blocked") {
                $message = "Account pending approval or blocked";
                echo "<script>alert('$message'); location.href='index.php';</script>";
                exit();
            } else {
                // Fixed case sensitivity and redirects
                switch ($type_of_user) {
                    case 'USER':
                        $redirect = 'internal/Homepage.php';
                        break;
                    case 'STAFF':
                    case 'ADMIN':
                        $redirect = 'internal/index.php';
                        break;
                    default:
                        $message = "Invalid account type";
                        echo "<script>alert('$message'); location.href='index.php';</script>";
                        exit();
                }
                
                // Secure redirect with header() instead of JS
                header("Location: $redirect");
                exit();
            }
        } else {
            $_SESSION['login_attempts']++;
            $message = "Invalid credentials"; // Generic error message
            echo "<script>alert('$message'); location.href='index.php';</script>";
            exit();
        }
    } else {
        $_SESSION['login_attempts']++;
        $message = "Invalid credentials"; // Generic error message
        echo "<script>alert('$message'); location.href='index.php';</script>";
        exit();
    }
    
    $stmt->close();
}
?>