<?php
include 'db_connect.php';

$success = $error = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $name = trim($_POST['name']);
    $account_type = 'ADMIN';
    $account_status = 'Approved';

    if (empty($username) || empty($password) || empty($name)) {
        $error = "All fields are required.";
    } else {
        // Insert into 'login' table without password hashing
        $stmt = $conn->prepare("INSERT INTO login (username, password, name, account_type, account_status) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $username, $password, $name, $account_type, $account_status);

        if ($stmt->execute()) {
            $success = "New admin user added successfully!";
        } else {
            $error = "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Admin User</title>
    <style>
        body { font-family: Arial; padding: 20px; background-color: #f9f9f9; }
        form { background: white; padding: 20px; border-radius: 8px; max-width: 400px; margin: auto; box-shadow: 0 0 8px rgba(0,0,0,0.1); }
        input { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px; }
        .success { color: green; text-align: center; }
        .error { color: red; text-align: center; }
    </style>
</head>
<body>

<h2 style="text-align:center;">Add New Admin</h2>

<?php if ($success): ?><p class="success"><?= $success ?></p><?php endif; ?>
<?php if ($error): ?><p class="error"><?= $error ?></p><?php endif; ?>

<form method="POST" action="">
    <input type="text" name="username" placeholder="Username" required />
    <input type="text" name="password" placeholder="Password" required />
    <input type="text" name="name" placeholder="Full Name" required />
    <input type="submit" value="Add Admin" />
</form>

</body>
</html>
