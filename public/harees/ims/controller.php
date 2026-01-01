<?php
include_once('db_connect.php');
include_once('internal/csrf_token.php');
// session_start(); // Handled by csrf_token.php

// ----------------------------------- LOGIN CODE - mysql ----------------------------------------------------------
if (isset($_POST['loginbtn'])) {
    if (!isset($_POST['csrf_token']) || !verify_csrf_token($_POST['csrf_token'])) {
        die("Invalid CSRF Token");
    }

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

        // Check password: Try Verify (Hash) -> Then Plaintext (Migration)
        $loginSuccess = false;
        $needsRehash = false;

        if (password_verify($password, $Table_Password)) {
            $loginSuccess = true;
            // Check if hash needs update (e.g. algorithm changed cost)
            if (password_needs_rehash($Table_Password, PASSWORD_DEFAULT)) {
                $needsRehash = true;
            }
        } elseif ($password === $Table_Password) {
            // Legacy Plaintext Match - Migrate to Hash
            $loginSuccess = true;
            $needsRehash = true;
        }

        if ($loginSuccess) {
            // Regenerate session ID to prevent fixation
            session_regenerate_id(true);

            // Update Password Hash if needed
            if ($needsRehash) {
                $newHash = password_hash($password, PASSWORD_DEFAULT);
                // Use primary key or unique identifier to update
                // Assuming username is unique, OR better use ID if available. 
                // Table structure 'login' usually has 'id'. Let's check SELECT * result.
                // Step 296 says `SELECT *`. $row has all cols. Assuming 'id' exists.
                if (isset($row['id'])) {
                    $uStmt = $conn->prepare("UPDATE login SET password = ? WHERE id = ?");
                    $uStmt->bind_param("si", $newHash, $row['id']);
                    $uStmt->execute();
                    $uStmt->close();
                } else {
                    // Fallback to username
                    $uStmt = $conn->prepare("UPDATE login SET password = ? WHERE username = ?");
                    $uStmt->bind_param("ss", $newHash, $username);
                    $uStmt->execute();
                    $uStmt->close();
                }
            }

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
