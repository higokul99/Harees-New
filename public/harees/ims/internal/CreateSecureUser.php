<?php
session_start();
// Include DB connection
$conn = null;
// Adjust path if necessary depending on where this file is placed. 
// Assuming it's in public/harees/ims/internal/ (where AdminAddNewUser was)
include '../db_connect.php';
include_once('csrf_token.php');

// --- SECURITY CHECK ---
// Ensure user is logged in AND is an ADMIN
if (!isset($_SESSION['username']) || !isset($_SESSION['usertype']) || $_SESSION['usertype'] !== 'ADMIN') {
    die("Access Denied: You must be an Administrator to access this page.");
}
// ----------------------

$success = $error = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['csrf_token']) || !verify_csrf_token($_POST['csrf_token'])) {
        die("Invalid CSRF Token");
    }
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $name = trim($_POST['name']);
    $account_type = $_POST['account_type']; // ADMIN, TEAM, USER
    $account_status = 'Approved';

    // Validate Input
    if (empty($username) || empty($password) || empty($name)) {
        $error = "All fields are required.";
    } elseif (!preg_match("/^[a-zA-Z0-9]+$/", $username)) {
        $error = "Username must be alphanumeric.";
    } else {
        // Double check permissions before insert
        if ($_SESSION['usertype'] !== 'ADMIN') {
            die("Access Denied during submission.");
        }

        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare Insert Statement
        if ($stmt = $conn->prepare("INSERT INTO login (username, password, name, account_type, account_status) VALUES (?, ?, ?, ?, ?)")) {
            $stmt->bind_param("sssss", $username, $hashed_password, $name, $account_type, $account_status);

            if ($stmt->execute()) {
                $success = "New user ($account_type) added successfully!";
            } else {
                // Check for duplicate entry error
                if ($conn->errno == 1062) {
                    $error = "Error: Username already exists.";
                } else {
                    $error = "Database Error: " . $stmt->error;
                }
            }
            $stmt->close();
        } else {
            $error = "Statement Error: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Secure Add User</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            padding: 20px;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 500px;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin: 50px auto;
        }

        .form-control {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h3 class="text-center mb-4">Add New User (Secure)</h3>

        <?php if ($success): ?>
            <div class="alert alert-success"><?= htmlspecialchars($success) ?></div>
        <?php endif; ?>
        <?php if ($error): ?>
            <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <form method="POST" action="">
            <?php echo csrf_token_field(); ?>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username" required pattern="[a-zA-Z0-9]+" title="Alphanumeric only">
            </div>
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="name" class="form-control" placeholder="Full Name" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label>Account Type</label>
                <select name="account_type" class="form-control">
                    <option value="USER">USER</option>
                    <option value="STAFF">STAFF</option>
                    <option value="ADMIN">ADMIN</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100 mt-3">Create User</button>
        </form>
        <div class="mt-3 text-center">
            <a href="index.php">Back to Dashboard</a>
        </div>
    </div>

</body>

</html>