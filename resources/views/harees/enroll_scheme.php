<?php
// enroll_scheme.php
session_start();
if (!isset($_SESSION['userid'])) {
    header("Location: index");
    exit();
}
include('includes/dbconnect.php');

function generateSchemeNumber($conn, $user_id, $scheme_type) {
    // Get current year and month
    $year = date('y'); // Last two digits of year
    $month = date('m');
    
    // Get user initials (first letters of first and last name)
    $user_query = "SELECT username FROM users WHERE id = '$user_id'";
    $user_result = mysqli_query($conn, $user_query);
    $user_data = mysqli_fetch_assoc($user_result);
    $name_parts = explode(' ', $user_data['username']);
    $initials = '';
    foreach($name_parts as $part) {
        $initials .= strtoupper(substr($part, 0, 1));
    }
    
    // Generate random 4-digit number
    $random = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);
    
    // Format: YEARMONTH-INITIALS-SCHEMETYPE-RANDOM (e.g., 2307-JD-A-1234)
    $scheme_number = $year.$month.'-'.$initials.'-'.$scheme_type.'-'.$random;
    
    return $scheme_number;
}

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $scheme_type = $_POST['scheme_type'];
    $user_id = $_SESSION['userid'];
    
    // Define scheme details based on type
    $scheme_details = [
        'A' => ['name' => 'Basic', 'amount' => 500, 'bonus' => 600],
        'B' => ['name' => 'Premium', 'amount' => 1000, 'bonus' => 1200],
        'C' => ['name' => 'Elite', 'amount' => 2000, 'bonus' => 2400],
        'D' => ['name' => 'Royal', 'amount' => 2500, 'bonus' => 3000],
        'E' => ['name' => 'Imperial', 'amount' => 5000, 'bonus' => 6000],
        'F' => ['name' => 'Dynasty', 'amount' => 10000, 'bonus' => 12000]
    ];
    
    if (!array_key_exists($scheme_type, $scheme_details)) {
        $_SESSION['error'] = "Invalid scheme selected";
        header("Location: ugoldscheme");
        exit();
    }
    
    // Check if user has any completed schemes (11 months)
    $completed_schemes_sql = "SELECT id FROM user_schemes 
                            WHERE user_id = ? 
                            AND months_completed >= 11
                            AND status = 'active'";
    $completed_stmt = $conn->prepare($completed_schemes_sql);
    $completed_stmt->bind_param("i", $user_id);
    $completed_stmt->execute();
    $completed_result = $completed_stmt->get_result();
    
    // If any completed schemes exist, mark them as completed
    if ($completed_result->num_rows > 0) {
        $update_sql = "UPDATE user_schemes 
                      SET status = 'completed', 
                          completion_date = NOW() 
                      WHERE user_id = ? 
                      AND months_completed >= 11
                      AND status = 'active'";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param("i", $user_id);
        $update_stmt->execute();
    }
    
    // Check if user has any active schemes (excluding completed ones)
    $active_schemes_sql = "SELECT id FROM user_schemes 
                          WHERE user_id = ? 
                          AND status = 'active'";
    $active_stmt = $conn->prepare($active_schemes_sql);
    $active_stmt->bind_param("i", $user_id);
    $active_stmt->execute();
    $active_result = $active_stmt->get_result();
    
    if ($active_result->num_rows > 0) {
        $_SESSION['error'] = "You already have an active scheme. Complete your current scheme before enrolling in a new one.";
        header("Location: umyschemes");
        exit();
    }

    $scheme_number = 'GS-' . strtoupper(substr(md5($user_id), 0, 4)) . '-' . str_pad($user_id, 4, '0', STR_PAD_LEFT). '-' . rand(100, 999);
    
    // Insert the new scheme
    $insert_sql = "INSERT INTO user_schemes (user_id, scheme_type, scheme_name, monthly_amount, start_date, status, code) 
                   VALUES (?, ?, ?, ?, CURDATE(), 'active', ? )";
    $insert_stmt = $conn->prepare($insert_sql);
    $insert_stmt->bind_param("issds", $user_id, $scheme_type, $scheme_details[$scheme_type]['name'], 
                            $scheme_details[$scheme_type]['amount'], $scheme_number);
    
    if ($insert_stmt->execute()) {
        $_SESSION['msg'] = "Successfully enrolled in Scheme $scheme_type! You can make your first payment anytime.";
        header("Location: umyschemes");
        exit();
    } else {
        $_SESSION['error'] = "Error enrolling in scheme: " . $conn->error;
        header("Location: ugoldscheme");
        exit();
    }
} else {
    header("Location: ugoldscheme");
    exit();
}