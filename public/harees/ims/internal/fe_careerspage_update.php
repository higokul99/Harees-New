<?php include_once("includes/header_controls.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Add or Update Job opening</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <?php include_once("includes/head_links.php"); ?>
</head>
<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <?php //include_once("includes/spinner.php"); ?>
        <!-- Spinner End -->

        <!-- Sidebar Start -->
        <?php include_once("includes/sidebar.php"); ?>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include_once("includes/topbar.php"); ?>
            <!-- Navbar End -->

<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-secondary rounded">
<!-- 
=============================================================================================================        
                                              CHANGABLE AREA STARTS HERE 
=============================================================================================================
-->
<?php
// Database connection (assuming you have a connection file)
// include_once("includes/db_connection.php");

// Initialize variables
$job_data = [];
$error_message = '';
$success_message = '';
$is_update = false;
$job_id = null;
$created_by = $_SESSION['username'];

// Check if ID is provided for update
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $job_id = intval($_GET['id']);
    $is_update = true;
    
    // Fetch existing job data
    if (isset($conn) && $conn->connect_error == '') {
        $sql = "SELECT * FROM job_positions WHERE id = ?";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("i", $job_id);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result->num_rows > 0) {
                $job_data = $result->fetch_assoc();
            } else {
                $error_message = "Job position not found.";
            }
            $stmt->close();
        } else {
            $error_message = "Error preparing statement: " . $conn->error;
        }
    }
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($conn) && $conn->connect_error == '') {
    $position_name = trim($_POST['position_name'] ?? '');
    $description = trim($_POST['description'] ?? '');
    $no_of_vacancy = intval($_POST['no_of_vacancy'] ?? 0);
    $location = trim($_POST['location'] ?? '');
    $department = trim($_POST['department'] ?? '');
    $experience_required = trim($_POST['experience_required'] ?? '');
    $qualification = trim($_POST['qualification'] ?? '');
    $status = trim($_POST['status'] ?? 'Active');
    
    // Validation
    if (empty($position_name) || empty($description) || $no_of_vacancy <= 0) {
        $error_message = "Position name, description, and number of vacancies are required.";
    } else {
        if ($is_update && $job_id) {
            // Update existing record
            $sql = "UPDATE job_positions SET position_name = ?, description = ?, no_of_vacancy = ?, location = ?, department = ?, experience_required = ?, qualification = ?, status = ?, updated_at = NOW() WHERE id = ?";
            if ($stmt = $conn->prepare($sql)) {
                $stmt->bind_param("ssississi", $position_name, $description, $no_of_vacancy, $location, $department, $experience_required, $qualification, $status, $job_id);
                
                if ($stmt->execute()) {
                    $success_message = "Job position updated successfully!";
                    // Refresh job data
                    $job_data['position_name'] = $position_name;
                    $job_data['description'] = $description;
                    $job_data['no_of_vacancy'] = $no_of_vacancy;
                    $job_data['location'] = $location;
                    $job_data['department'] = $department;
                    $job_data['experience_required'] = $experience_required;
                    $job_data['qualification'] = $qualification;
                    $job_data['status'] = $status;
                } else {
                    $error_message = "Error updating job position: " . $stmt->error;
                }
                $stmt->close();
            }
        } else {
            // Insert new record
            $sql = "INSERT INTO job_positions (position_name, description, no_of_vacancy, date_posted, location, department, experience_required, qualification, status, created_by) VALUES (?, ?, ?, NOW(), ?, ?, ?, ?, ?, ?)";
            if ($stmt = $conn->prepare($sql)) {
                $stmt->bind_param("ssississs", $position_name, $description, $no_of_vacancy, $location, $department, $experience_required, $qualification, $status, $created_by);
                
                if ($stmt->execute()) {
                    $success_message = "Job position added successfully!";
                    // Clear form data for new entry
                    $job_data = [];
                } else {
                    $error_message = "Error adding job position: " . $stmt->error;
                }
                $stmt->close();
            }
        }
    }
}
// else{
//     echo "<script>alert('hi');</script>";
// }
?>

<div class="col-12">
    <div class="bg-secondary rounded h-100 p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h6 class="mb-0"><?php echo $is_update ? 'Update Job Position' : 'Add New Job Position'; ?></h6>
            <a href="fe_careerspage_viewall.php" class="btn btn-outline-light btn-sm">
                <i class="bi bi-arrow-left me-1"></i>Back to Job Positions
            </a>
        </div>
        
        <?php if (!empty($error_message)): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo htmlspecialchars($error_message); ?>
            </div>
        <?php endif; ?>
        
        <?php if (!empty($success_message)): ?>
            <div class="alert alert-success" role="alert">
                <?php echo htmlspecialchars($success_message); ?>
            </div>
        <?php endif; ?>
        
        <form method="POST" action="">
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="position_name" class="form-label text-light">Position Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control bg-dark text-light border-secondary" id="position_name" name="position_name" 
                           value="<?php echo htmlspecialchars($job_data['position_name'] ?? ''); ?>" required>
                </div>
                
                <div class="col-md-6">
                    <label for="no_of_vacancy" class="form-label text-light">Number of Vacancies <span class="text-danger">*</span></label>
                    <input type="number" class="form-control bg-dark text-light border-secondary" id="no_of_vacancy" name="no_of_vacancy" 
                           value="<?php echo htmlspecialchars($job_data['no_of_vacancy'] ?? ''); ?>" min="1" required>
                </div>
                
                <div class="col-md-6">
                    <label for="location" class="form-label text-light">Location</label>
                    <input type="text" class="form-control bg-dark text-light border-secondary" id="location" name="location" 
                           value="<?php echo htmlspecialchars($job_data['location'] ?? ''); ?>">
                </div>
                
                <div class="col-md-6">
                    <label for="department" class="form-label text-light">Department</label>
                    <select class="form-control bg-dark text-light border-secondary" id="department" name="department">
                        <option value="">Select Department</option>
                        <option value="Sales" <?php echo (isset($job_data['department']) && $job_data['department'] == 'Sales') ? 'selected' : ''; ?>>Sales</option>
                        <option value="Finance" <?php echo (isset($job_data['department']) && $job_data['department'] == 'Finance') ? 'selected' : ''; ?>>Finance</option>
                        <option value="Production" <?php echo (isset($job_data['department']) && $job_data['department'] == 'Production') ? 'selected' : ''; ?>>Production</option>
                        <option value="Customer Service" <?php echo (isset($job_data['department']) && $job_data['department'] == 'Customer Service') ? 'selected' : ''; ?>>Customer Service</option>
                        <option value="HR" <?php echo (isset($job_data['department']) && $job_data['department'] == 'HR') ? 'selected' : ''; ?>>HR</option>
                        <option value="IT" <?php echo (isset($job_data['department']) && $job_data['department'] == 'IT') ? 'selected' : ''; ?>>IT</option>
                    </select>
                </div>
                
                <div class="col-md-6">
                    <label for="experience_required" class="form-label text-light">Experience Required</label>
                    <input type="text" class="form-control bg-dark text-light border-secondary" id="experience_required" name="experience_required" 
                           value="<?php echo htmlspecialchars($job_data['experience_required'] ?? ''); ?>" placeholder="e.g., 2+ years">
                </div>
                
                <div class="col-md-6">
                    <label for="status" class="form-label text-light">Status</label>
                    <select class="form-control bg-dark text-light border-secondary" id="status" name="status">
                        <option value="Active" <?php echo (isset($job_data['status']) && $job_data['status'] == 'Active') ? 'selected' : ''; ?>>Active</option>
                        <option value="Inactive" <?php echo (isset($job_data['status']) && $job_data['status'] == 'Inactive') ? 'selected' : ''; ?>>Inactive</option>
                        <option value="Closed" <?php echo (isset($job_data['status']) && $job_data['status'] == 'Closed') ? 'selected' : ''; ?>>Closed</option>
                    </select>
                </div>
                
                <div class="col-12">
                    <label for="description" class="form-label text-light">Job Description <span class="text-danger">*</span></label>
                    <textarea class="form-control bg-dark text-light border-secondary" id="description" name="description" rows="4" required><?php echo htmlspecialchars($job_data['description'] ?? ''); ?></textarea>
                </div>
                
                <div class="col-12">
                    <label for="qualification" class="form-label text-light">Qualification Requirements</label>
                    <textarea class="form-control bg-dark text-light border-secondary" id="qualification" name="qualification" rows="3"><?php echo htmlspecialchars($job_data['qualification'] ?? ''); ?></textarea>
                </div>
                
                <div class="col-12">
                    <hr class="border-secondary">
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-outline-light" onclick="window.location.href='fe_careerspage_viewall.php'">
                            <i class="bi bi-x-circle me-1"></i>Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-check-circle me-1"></i><?php echo $is_update ? 'Update Position' : 'Add Position'; ?>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- 
=============================================================================================================        
                                              CHANGABLE AREA ENDS HERE  
=============================================================================================================
-->
    </div>
</div>
            <!-- Footer Start -->
            <?php include_once("includes/footer-new.php"); ?>
            <!-- Footer End -->

            </div>
        <!-- Content End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <?php include_once("includes/js-libraries.php"); ?>

    </body>
</html>