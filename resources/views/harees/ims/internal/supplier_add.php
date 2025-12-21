<?php
session_start();

// Handle success/error messages from controller
$errors = array();
$success = false;

// Check for success message
if (isset($_GET['success']) && $_GET['success'] == '1' && isset($_SESSION['success_message'])) {
    $success = true;
    $success_message = $_SESSION['success_message'];
    unset($_SESSION['success_message']);
}

// Check for error messages
if (isset($_GET['error']) && $_GET['error'] == '1' && isset($_SESSION['form_errors'])) {
    $errors = $_SESSION['form_errors'];
    unset($_SESSION['form_errors']);
    unset($_SESSION['form_data']);
}

include_once('includes/header.php');
?>

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

                            <?php if (!empty($errors)): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php foreach ($errors as $error): ?>
                                            <li><?php echo htmlspecialchars($error); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>

                            <form method="POST" action="supplier_controller.php" id="supplierForm">
                                <div class="mb-3">
                                    <label for="supplier_name" class="form-label">Supplier Name:</label>
                                    <input type="text" class="form-control" id="supplier_name" name="supplier_name" 
                                           maxlength="255" required>
                                    <div class="invalid-feedback" id="supplier_name_error"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="contact_person" class="form-label">Contact Person:</label>
                                    <input type="text" class="form-control" id="contact_person" name="contact_person" 
                                           maxlength="255">
                                    <div class="invalid-feedback" id="contact_person_error"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address:</label>
                                    <input type="text" class="form-control" id="address" name="address" 
                                           maxlength="500" required>
                                    <div class="invalid-feedback" id="address_error"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="city" class="form-label">City:</label>
                                    <input type="text" class="form-control" id="city" name="city" 
                                           maxlength="100" required>
                                    <div class="invalid-feedback" id="city_error"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">State:</label>
                                    <input type="text" class="form-control" id="state" name="state" 
                                           maxlength="100" required>
                                    <div class="invalid-feedback" id="state_error"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="zip_code" class="form-label">Zip Code:</label>
                                    <input type="text" class="form-control" id="zip_code" name="zip_code" 
                                        maxlength="6" minlength="6" pattern="\d{6}" required>
                                    <div class="invalid-feedback" id="zip_code_error">Zip code must be exactly 6 digits.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="country" class="form-label">Country:</label>
                                    <input type="text" class="form-control" id="country" name="country" 
                                           maxlength="100" required>
                                    <div class="invalid-feedback" id="country_error"></div>
                                </div>
                               <div class="mb-3">
                                    <label for="phone" class="form-label">Phone:</label>
                                    <input type="text" class="form-control" id="phone" name="phone" 
                                        maxlength="10" minlength="10" pattern="\d{10}" required>
                                    <div class="invalid-feedback" id="phone_error">Phone number must be exactly 10 digits.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" 
                                           maxlength="255" required>
                                    <div class="invalid-feedback" id="email_error"></div>
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
        .swal2-dark .swal2-title {
            color: #f8f9fa !important;
        }
        .swal2-dark .swal2-content {
            color: #f8f9fa !important;
        }
        .swal2-dark .swal2-confirm {
            background-color: #007bff !important;
            border-color: #007bff !important;
        }
        .swal2-dark .swal2-cancel {
            background-color: #6c757d !important;
            border-color: #6c757d !important;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script language="JavaScript">
        // Show success alert if redirected with success
        <?php if ($success): ?>
        window.addEventListener('load', function() {
            console.log('Success alert triggered');
            Swal.fire({
                title: 'Success!',
                text: '<?php echo addslashes($success_message); ?>',
                icon: 'success',
                customClass: {
                    popup: 'swal2-dark'
                },
                confirmButtonText: 'OK'
            });
        });
        <?php endif; ?>

        // Show error alert if redirected with errors
        <?php if (!empty($errors) && !$success): ?>
        window.addEventListener('load', function() {
            console.log('Failed alert triggered');
            Swal.fire({
                title: 'Error!',
                text: 'Failed to add supplier. Please check the form and try again.',
                icon: 'error',
                customClass: {
                    popup: 'swal2-dark'
                },
                confirmButtonText: 'OK'
            });
        });
        <?php endif; ?>
        
        document.getElementById('supplierForm').addEventListener('submit', function(e) {
            console.log('Form submission attempted');
            e.preventDefault();
            
            // Clear previous errors
            clearErrors();
            
            let errors = [];
            let isValid = true;
            
            // Get form values
            const supplierName = document.getElementById('supplier_name').value.trim();
            const contactPerson = document.getElementById('contact_person').value.trim();
            const address = document.getElementById('address').value.trim();
            const city = document.getElementById('city').value.trim();
            const state = document.getElementById('state').value.trim();
            const zipCode = document.getElementById('zip_code').value.trim();
            const country = document.getElementById('country').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const email = document.getElementById('email').value.trim();
            
            console.log('Form values:', {
                supplierName, contactPerson, address, city, state, 
                zipCode, country, phone, email
            });
            
            // Validation logic
            if (!supplierName) {
                showError('supplier_name', 'Supplier Name is required.');
                isValid = false;
            } else if (supplierName.length > 255) {
                showError('supplier_name', 'Supplier Name must be less than 255 characters.');
                isValid = false;
            }
            
            if (contactPerson && !/^[a-zA-Z\s\.]+$/.test(contactPerson)) {
                showError('contact_person', 'Invalid contact person name (letters, spaces, and periods only).');
                isValid = false;
            } else if (contactPerson.length > 255) {
                showError('contact_person', 'Contact Person name must be less than 255 characters.');
                isValid = false;
            }
            
            if (!address) {
                showError('address', 'Address is required.');
                isValid = false;
            } else if (address.length > 500) {
                showError('address', 'Address must be less than 500 characters.');
                isValid = false;
            }
            
            if (!city) {
                showError('city', 'City is required.');
                isValid = false;
            } else if (!/^[a-zA-Z\s\-\.]+$/.test(city)) {
                showError('city', 'Invalid city name (letters, spaces, hyphens, and periods only).');
                isValid = false;
            } else if (city.length > 100) {
                showError('city', 'City name must be less than 100 characters.');
                isValid = false;
            }
            
            if (!state) {
                showError('state', 'State is required.');
                isValid = false;
            } else if (!/^[a-zA-Z\s\-\.]+$/.test(state)) {
                showError('state', 'Invalid state name (letters, spaces, hyphens, and periods only).');
                isValid = false;
            } else if (state.length > 100) {
                showError('state', 'State name must be less than 100 characters.');
                isValid = false;
            }
            
            if (!country) {
                showError('country', 'Country is required.');
                isValid = false;
            } else if (!/^[a-zA-Z\s\-\.]+$/.test(country)) {
                showError('country', 'Invalid country name (letters, spaces, hyphens, and periods only).');
                isValid = false;
            } else if (country.length > 100) {
                showError('country', 'Country name must be less than 100 characters.');
                isValid = false;
            }
            
            if (zipCode && !/^[0-9A-Za-z\-\s]{3,10}$/.test(zipCode)) {
                showError('zip_code', 'Invalid Zip Code format.');
                isValid = false;
            }
            
            if (phone && !/^[\+]?[0-9\-\(\)\s]{10,15}$/.test(phone)) {
                showError('phone', 'Invalid phone number format.');
                isValid = false;
            }
            
            if (!email) {
                showError('email', 'Email is required.');
                isValid = false;
            } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                showError('email', 'Invalid email address.');
                isValid = false;
            } else if (email.length > 255) {
                showError('email', 'Email must be less than 255 characters.');
                isValid = false;
            }
            
            console.log('Client-side validation result:', isValid ? 'PASSED' : 'FAILED');
            
            // If validation passes, submit the form
            if (isValid) {
                console.log('Submitting form to server...');
                
                // Ensure 'add_supplier' is included in form data
                const hidden = document.createElement('input');
                hidden.type = 'hidden';
                hidden.name = 'add_supplier';
                hidden.value = '1';
                this.appendChild(hidden);

                this.submit();
            }
            else {
                console.log('Form submission blocked due to validation errors');
            }
        });
        
        function showError(fieldId, message) {
            const field = document.getElementById(fieldId);
            const errorDiv = document.getElementById(fieldId + '_error');
            field.classList.add('is-invalid');
            errorDiv.textContent = message;
            console.log('Error shown for field:', fieldId, 'Message:', message);
        }
        
        function clearErrors() {
            const fields = ['supplier_name', 'contact_person', 'address', 'city', 'state', 'zip_code', 'country', 'phone', 'email'];
            fields.forEach(function(fieldId) {
                const field = document.getElementById(fieldId);
                const errorDiv = document.getElementById(fieldId + '_error');
                field.classList.remove('is-invalid');
                errorDiv.textContent = '';
            });
            console.log('All validation errors cleared');
        }
        
        // Clear errors on input
        document.querySelectorAll('input').forEach(function(input) {
            input.addEventListener('input', function() {
                this.classList.remove('is-invalid');
                document.getElementById(this.id + '_error').textContent = '';
                console.log('Error cleared for field:', this.id);
            });
        });
        
        // Log when page loads
        console.log('Supplier form page loaded successfully');
    </script>

</body>

</html>