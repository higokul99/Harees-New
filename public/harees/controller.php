<?php
session_start();

// Database connection
include('includes/dbconnect.php');
$UserID = $_SESSION['userid'];  

// Handle login
if (isset($_POST['login'])) {
    $phone = $_POST['phone'];
    $password = $_POST['password']; // PIN in plain text
    $remember = isset($_POST['remember']) ? true : false;

    // Validate inputs
    if (!preg_match('/^\d{10}$/', $phone)) {
        $_SESSION['error'] = "Invalid phone number format";
        header("Location: sign-in");
        exit();
    }

    // Check user in database
    $stmt = $conn->prepare("SELECT * FROM users WHERE phone = ?");
    $stmt->bind_param("s", $phone);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && $password === $user['password']) { // Direct comparison without hashing
        // Login successful
        $_SESSION['userid'] = $user['id'];
        $_SESSION['username'] = $user['fullname'];
        
        if ($remember) {
            // Set remember me cookie (30 days)
            setcookie('remember_user', $user['id'], time() + (30 * 24 * 60 * 60), '/');
        }
        
        header("Location: index");
        exit();
    } else {
        $_SESSION['error'] = "Invalid phone number or password";
        header("Location: sign-in");
        exit();
    }
}

// Handle signup
if (isset($_POST['signup'])) {
    // Validate all required fields
    $required_fields = [
        'fullname', 'email', 'phone', 'pin', 'confirm_pin', 
        'security_question', 'security_answer', 
        'address1', 'city', 'state', 'pincode', 'terms'
    ];
    
    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            $_SESSION['error'] = "Please fill all required fields";
            header("Location: sign-up");
            exit();
        }
    }
    
    // Extract form data
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $pin = $_POST['pin'];
    $confirm_pin = $_POST['confirm_pin'];
    $security_question = $_POST['security_question'];
    $security_answer = trim($_POST['security_answer']);
    $address1 = trim($_POST['address1']);
    $address2 = trim($_POST['address2'] ?? '');
    $city = trim($_POST['city']);
    $state = trim($_POST['state']);
    $pincode = trim($_POST['pincode']);
    $landmark = trim($_POST['landmark'] ?? '');
    
    // Validate inputs
    if (!preg_match('/^[A-Za-z ]{3,50}$/', $fullname)) {
        $_SESSION['error'] = "Invalid name format";
        header("Location: sign-up");
        exit();
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email format";
        header("Location: sign-up");
        exit();
    }
    
    if (!preg_match('/^\d{10}$/', $phone)) {
        $_SESSION['error'] = "Phone number must be 10 digits";
        header("Location: sign-up");
        exit();
    }
    
    if (!preg_match('/^\d{4}$/', $pin) || $pin !== $confirm_pin) {
        $_SESSION['error'] = "PIN must be 4 digits and match confirmation";
        header("Location: sign-up");
        exit();
    }
    
    // Check if user already exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ? OR phone = ?");
    $stmt->bind_param("ss", $email, $phone);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $_SESSION['error'] = "User with this email or phone already exists";
        header("Location: sign-up");
        exit();
    }
    
    // Insert new user (no password hashing)
    try {
        $stmt = $conn->prepare("INSERT INTO users (
            fullname, email, phone, password, 
            security_question, security_answer,
            address1, address2, city, state, pincode, landmark,
            created_at
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");
        
        $stmt->bind_param(
            "ssssssssssss", 
            $fullname, $email, $phone, $pin,
            $security_question, $security_answer,
            $address1, $address2, $city, $state, $pincode, $landmark
        );
        
        $stmt->execute();
        
        // Get the new user ID
        $user_id = $stmt->insert_id;
        
        // Log the user in
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_name'] = $fullname;
        
        header("Location: sign-in");
        exit();
        
    } catch (Exception $e) {
        $_SESSION['error'] = "Registration failed: " . $e->getMessage();
        header("Location: sign-up");
        exit();
    }
}


// Handle Forgot Password (Initial Step)
if (isset($_POST['forgot_password'])) {
    $phone = trim($_POST['phone']);
    
    // Validate phone
    if (!preg_match('/^\d{10}$/', $phone)) {
        $_SESSION['error'] = "Please enter a valid 10-digit phone number";
        header("Location: sign-forget");
        exit();
    }
    
    // Check if user exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE phone = ?");
    $stmt->bind_param("s", $phone);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    
    if (!$user) {
        $_SESSION['error'] = "No account found with that phone number";
        header("Location: sign-forget");
        exit();
    }
    
    // Store in session for next steps
    $_SESSION['reset_phone'] = $user['phone'];
    $_SESSION['security_question'] = $user['security_question'];
    $_SESSION['correct_answer'] = $user['security_answer'];
    $_SESSION['correct_question'] = $user['security_question'];
    
    header("Location: sign-forget");
    exit();
}

// Handle Security Answer Verification (Second Step)
if (isset($_POST['verify_security'])) {
    $phone = $_POST['phone'];
    $security_question = $_POST['security_question'];
    $security_answer = trim($_POST['security_answer']);
    
    // Verify security question matches what was registered
    if ($security_question !== $_SESSION['correct_question']) {
        $_SESSION['error'] = "Incorrect security question selected";
        header("Location: sign-forget");
        exit();
    }
    
    // Verify security answer (case insensitive)
    if (strtolower($security_answer) !== strtolower($_SESSION['correct_answer'])) {
        $_SESSION['error'] = "Incorrect answer to security question";
        header("Location: sign-forget");
        exit();
    }
    
    // Mark security as verified
    $_SESSION['security_verified'] = true;
    header("Location: sign-forget");
    exit();
}

// Handle Password Reset (Final Step)
if (isset($_POST['reset_password'])) {
    $phone = $_POST['phone'];
    $new_pin = $_POST['new_pin'];
    $confirm_pin = $_POST['confirm_pin'];
    
    // Validate PINs
    if ($new_pin !== $confirm_pin) {
        $_SESSION['error'] = "PINs do not match";
        header("Location: sign-forget");
        exit();
    }
    
    if (!preg_match('/^\d{4}$/', $new_pin)) {
        $_SESSION['error'] = "PIN must be exactly 4 digits";
        header("Location: sign-forget");
        exit();
    }
    
    // Update PIN in database
    $stmt = $conn->prepare("UPDATE users SET password = ? WHERE phone = ?");
    $stmt->bind_param("ss", $new_pin, $phone);
    
    if ($stmt->execute()) {
        // Clear all reset session data
        unset($_SESSION['reset_phone']);
        unset($_SESSION['security_question']);
        unset($_SESSION['correct_answer']);
        unset($_SESSION['security_verified']);
        
        $_SESSION['success'] = "Your PIN has been updated successfully";
        header("Location: sign-in");
        exit();
    } else {
        $_SESSION['error'] = "Failed to update PIN. Please try again.";
        header("Location: sign-forget");
        exit();
    }
}




if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action'])) {
    $action = $_POST['action'];

    // 💬 1. Update Contact Info
    if ($action == 'update_contact') {
        $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);

        $query = "UPDATE users SET fullname = '$fullname', email = '$email', phone = '$phone' WHERE id = '$UserID'";
        if (mysqli_query($conn, $query)) {
            $_SESSION['msg'] = "📞 Contact information updated successfully.";
        } else {
            $_SESSION['msg'] = "❌ Failed to update contact information.";
        }
        header("Location: uprofile");
        exit();
    }

    // 🏠 2. Update Address Info
    if ($action == 'update_address') {
        $address1 = mysqli_real_escape_string($conn, $_POST['address1']);
        $address2 = mysqli_real_escape_string($conn, $_POST['address2']);
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        $state = mysqli_real_escape_string($conn, $_POST['state']);
        $pincode = mysqli_real_escape_string($conn, $_POST['pincode']);
        $landmark = mysqli_real_escape_string($conn, $_POST['landmark']);

        $query = "UPDATE users SET address1 = '$address1', address2 = '$address2', city = '$city', state = '$state', pincode = '$pincode', landmark = '$landmark' WHERE id = '$UserID'";
        if (mysqli_query($conn, $query)) {
            $_SESSION['msg'] = "📦 Address updated successfully.";
        } else {
            $_SESSION['msg'] = "❌ Failed to update address.";
        }
        header("Location: uprofile");
        exit();
    }

    // 🔒 3. Change Password
    if ($action == 'change_password') {
        $old_password = mysqli_real_escape_string($conn, $_POST['old_password']);
        $new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
        $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

        $query = "SELECT password FROM users WHERE id = '$UserID'";
        $result = mysqli_query($conn, $query);
        $data = mysqli_fetch_assoc($result);

        if (!$data || $data['password'] !== $old_password) {
            $_SESSION['msg'] = "❌ Incorrect current password.";
        } elseif ($new_password !== $confirm_password) {
            $_SESSION['msg'] = "❗ New passwords do not match.";
        } else {
            $query = "UPDATE users SET password = '$new_password' WHERE id = '$UserID'";
            if (mysqli_query($conn, $query)) {
                $_SESSION['msg'] = "✅ Password updated successfully.";
            } else {
                $_SESSION['msg'] = "⚠️ Failed to update password.";
            }
        }
        header("Location: uprofile");
        exit();
    }
}




// Redirect if accessed directly
header("Location: sign-in");
exit();
?>