<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['add_supplier'])) {
    // Add your existing form processing code here
    include('../db_connect.php');

    // Initialize response arrays
    $errors = array();
    $success = false;

    $supplier_name = trim($_POST['supplier_name'] ?? '');
    $contact_person = trim($_POST['contact_person'] ?? '');
    $address = trim($_POST['address'] ?? '');
    $city = trim($_POST['city'] ?? '');
    $state = trim($_POST['state'] ?? '');
    $zip_code = trim($_POST['zip_code'] ?? '');
    $country = trim($_POST['country'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $email = trim($_POST['email'] ?? '');

    // Input Validation
    if (empty($supplier_name)) {
        $errors[] = "Supplier Name is required.";
    } elseif (strlen($supplier_name) > 255) {
        $errors[] = "Supplier Name must be less than 255 characters.";
    }

    if (!empty($contact_person)) {
        if (!preg_match('/^[a-zA-Z\s\.]+$/', $contact_person)) {
            $errors[] = "Invalid contact person name (letters, spaces, and periods only).";
        } elseif (strlen($contact_person) > 255) {
            $errors[] = "Contact Person name must be less than 255 characters.";
        }
    }

    if (empty($address)) {
        $errors[] = "Address is required.";
    } elseif (strlen($address) > 500) {
        $errors[] = "Address must be less than 500 characters.";
    }

    if (empty($city)) {
        $errors[] = "City is required.";
    } elseif (!preg_match('/^[a-zA-Z\s\-\.]+$/', $city)) {
        $errors[] = "Invalid city name (letters, spaces, hyphens, and periods only).";
    } elseif (strlen($city) > 100) {
        $errors[] = "City name must be less than 100 characters.";
    }

    if (empty($state)) {
        $errors[] = "State is required.";
    } elseif (!preg_match('/^[a-zA-Z\s\-\.]+$/', $state)) {
        $errors[] = "Invalid state name (letters, spaces, hyphens, and periods only).";
    } elseif (strlen($state) > 100) {
        $errors[] = "State name must be less than 100 characters.";
    }

    if (empty($country)) {
        $errors[] = "Country is required.";
    } elseif (!preg_match('/^[a-zA-Z\s\-\.]+$/', $country)) {
        $errors[] = "Invalid country name (letters, spaces, hyphens, and periods only).";
    } elseif (strlen($country) > 100) {
        $errors[] = "Country name must be less than 100 characters.";
    }

    if (!empty($zip_code)) {
        if (!preg_match('/^[0-9A-Za-z\-\s]{3,10}$/', $zip_code)) {
            $errors[] = "Invalid Zip Code format.";
        }
    }

    if (!empty($phone)) {
        if (!preg_match('/^[\+]?[0-9\-\(\)\s]{10,15}$/', $phone)) {
            $errors[] = "Invalid phone number format.";
        }
    }

    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address.";
    } elseif (strlen($email) > 255) {
        $errors[] = "Email must be less than 255 characters.";
    }

    // Duplicate Check (Phone/Email) - only if they're provided
    if (empty($errors) && (!empty($phone) || !empty($email))) {
        if (!empty($phone) && !empty($email)) {
            $check_duplicate = $conn->prepare("SELECT id FROM suppliers WHERE phone = ? OR email = ?");
            $check_duplicate->bind_param("ss", $phone, $email);
        } elseif (!empty($phone)) {
            $check_duplicate = $conn->prepare("SELECT id FROM suppliers WHERE phone = ?");
            $check_duplicate->bind_param("s", $phone);
        } else {
            $check_duplicate = $conn->prepare("SELECT id FROM suppliers WHERE email = ?");
            $check_duplicate->bind_param("s", $email);
        }

        if ($check_duplicate->execute()) {
            $check_duplicate_result = $check_duplicate->get_result();
            if ($check_duplicate_result->num_rows > 0) {
                $errors[] = "Phone number or email already exists.";
            }
        }
        $check_duplicate->close();
    }

    if (empty($errors)) {
        $stmt = $conn->prepare("INSERT INTO suppliers (supplier_name, contact_person, address, city, state, zip_code, country, phone, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

        if ($stmt) {
            $stmt->bind_param("sssssssss", $supplier_name, $contact_person, $address, $city, $state, $zip_code, $country, $phone, $email);

            if ($stmt->execute()) {
                $success = true;
                $_SESSION['success_message'] = 'Supplier has been added successfully.';
                header('Location: supplier_add.php?success=1');
                exit();
            } else {
                $errors[] = "Database error occurred. Please try again.";
            }
            $stmt->close();
        } else {
            $errors[] = "Database preparation error. Please try again.";
        }
    }

    $conn->close();

    // Store errors in session for redirection
    if (!empty($errors)) {
        $_SESSION['form_errors'] = $errors;
        header('Location: supplier_add.php?error=1');
        exit();
    }
} else {
    // Invalid request - redirect back to form
    header('Location: supplier_add.php');
    exit();
}
