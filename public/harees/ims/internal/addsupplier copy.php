<?php include_once('includes/header.php'); ?>

<body>
    <div class="container-fluid position-relative d-flex p-0">

        <?php include_once('includes/sidebar.php'); ?>
        <div class="content">
            <?php include_once('includes/topbar.php'); ?>

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h1 class="mb-4" style="color: #f5d02a;">Add Supplier</h1>

                            <?php
                            include('../db_connect.php');

                            $errors = array();

                            if (isset($_POST['add_supplier'])) {
                                $supplier_name = trim($_POST['supplier_name']);
                                $contact_person = trim($_POST['contact_person']);
                                $address = trim($_POST['address']);
                                $city = trim($_POST['city']);
                                $state = trim($_POST['state']);
                                $zip_code = trim($_POST['zip_code']);
                                $country = trim($_POST['country']);
                                $phone = trim($_POST['phone']);
                                $email = trim($_POST['email']);

                                // Input Validation
                                if (empty($supplier_name)) {
                                    $errors[] = "Supplier Name is required.";
                                }
                                if (!empty($contact_person) && !preg_match('/^[a-zA-Z\s]+$/', $contact_person)) { //Letters and spaces only
                                    $errors[] = "Invalid contact person name (letters and spaces only).";
                                }
                                if (empty($address)) {
                                    $errors[] = "Address is required.";
                                }
                                if (empty($city)) {
                                    $errors[] = "City is required.";
                                }
                                if (empty($state)) {
                                    $errors[] = "State is required.";
                                }
                                if (empty($country)) {
                                    $errors[] = "Country is required.";
                                }
                                if (!empty($zip_code) && !preg_match('/^[0-9]{6}$/', $zip_code)) {
                                    $errors[] = "Invalid Zip Code (6 digits required).";
                                }
                                if (!empty($phone) && !preg_match('/^[0-9]{10}$/', $phone)) {
                                    $errors[] = "Invalid phone number (10 digits required).";
                                }
                                if (empty($email)) {
                                    $errors[] = "Email is required.";
                                } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                    $errors[] = "Invalid email address.";
                                }

                                // Duplicate Check (Phone/Email)
                                $check_duplicate = $conn->prepare("SELECT id FROM suppliers WHERE phone = ? OR email = ?");
                                $check_duplicate->bind_param("ss", $phone, $email);
                                $check_duplicate->execute();
                                $check_duplicate_result = $check_duplicate->get_result();

                                if ($check_duplicate_result->num_rows > 0) {
                                    $errors[] = "Phone number or email already exists.";
                                }

                                $check_duplicate->close();

                                if (empty($errors)) {
                                    $stmt = $conn->prepare("INSERT INTO suppliers (supplier_name, contact_person, address, city, state, zip_code, country, phone, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
                                    $stmt->bind_param("sssssssss", $supplier_name, $contact_person, $address, $city, $state, $zip_code, $country, $phone, $email);

                                    if ($stmt->execute()) {
                                        echo "<script>successAlert();</script>";
                                    } else {
                                        echo "<script>failedAlert();</script>";
                                        echo "Error: " . $stmt->error;
                                    }

                                    $stmt->close();
                                    $conn->close();
                                }
                            }
                            ?>

                            <?php if (!empty($errors)): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php foreach ($errors as $error): ?>
                                            <li><?php echo $error; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>

                            <form method="POST">
                                <div class="mb-3">
                                    <label for="supplier_name" class="form-label">Supplier Name:</label>
                                    <input type="text" class="form-control" id="supplier_name" name="supplier_name" value="<?php echo isset($supplier_name) ? $supplier_name : ''; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="contact_person" class="form-label">Contact Person:</label>
                                    <input type="text" class="form-control" id="contact_person" name="contact_person" value="<?php echo isset($contact_person) ? $contact_person : ''; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address:</label>
                                    <input type="text" class="form-control" id="address" name="address" value="<?php echo isset($address) ? $address : ''; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="city" class="form-label">City:</label>
                                    <input type="text" class="form-control" id="city" name="city" value="<?php echo isset($city) ? $city : ''; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">State:</label>
                                    <input type="text" class="form-control" id="state" name="state" value="<?php echo isset($state) ? $state : ''; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="zip_code" class="form-label">Zip Code:</label>
                                    <input type="text" class="form-control" id="zip_code" name="zip_code" value="<?php echo isset($zip_code) ? $zip_code : ''; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="country" class="form-label">Country:</label>
                                    <input type="text" class="form-control" id="country" name="country" value="<?php echo isset($country) ? $country : ''; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone:</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo isset($phone) ? $phone : ''; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>" required>
                                </div>

                                <button type="submit" name="add_supplier" class="btn btn-primary" style="color: black; width:100%;">Add Supplier</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php include_once('includes/footer.php'); ?>
        </div>
    </div>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.12/sweetalert2.min.css">
    <style>
        /* Dark theme styles for SweetAlert */
        .swal2-dark .swal2-popup {
            background-color: #343a40 !important;
            color: #f8f9fa !important;
        }

        /* ... (rest of the SweetAlert dark theme CSS) ... */
    </style>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script language="JavaScript">
        // ... (SweetAlert JavaScript functions) ...
    </script>

</body>

</html>