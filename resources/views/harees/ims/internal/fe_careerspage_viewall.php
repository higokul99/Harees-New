<?php include_once("includes/header_controls.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>View Job Openings</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <?php include_once("includes/head_links.php"); ?>
</head>
<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <?php include_once("includes/spinner.php"); ?>
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
$job_positions = [];
$error_message = '';

// Fetch job positions from database
if (isset($conn) && $conn->connect_error == '') {
    $sql = "SELECT id, position_name, description, no_of_vacancy, date_posted, status, location, department, experience_required, qualification FROM job_positions ORDER BY date_posted DESC";
    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->execute();
        $result = $stmt->get_result();
        
        while ($row = $result->fetch_assoc()) {
            $job_positions[] = $row;
        }
        
        $stmt->close();
    } else {
        $error_message = "Error preparing statement: " . $conn->error;
    }
} else {
    $error_message = "Database connection failed";
}
?>

<div class="col-12">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Job Positions</h6>
        
        <?php if (!empty($error_message)): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo htmlspecialchars($error_message); ?>
            </div>
        <?php endif; ?>
        
        <div class="row g-3">
            <?php if (!empty($job_positions)): ?>
                <?php foreach ($job_positions as $index => $job): ?>
                    <div class="col-lg-6 col-xl-4">
                        <div class="card bg-dark border-secondary h-100">
                            <div class="card-header bg-dark border-secondary d-flex justify-content-between align-items-center">
                                <h6 class="card-title text-light mb-0"><?php echo htmlspecialchars($job['position_name']); ?></h6>
                                <?php 
                                $status = $job['status'];
                                $badge_class = '';
                                switch(strtolower($status)) {
                                    case 'active':
                                        $badge_class = 'bg-success';
                                        break;
                                    case 'inactive':
                                        $badge_class = 'bg-secondary';
                                        break;
                                    case 'closed':
                                        $badge_class = 'bg-danger';
                                        break;
                                    default:
                                        $badge_class = 'bg-primary';
                                }
                                ?>
                                <span class="badge <?php echo $badge_class; ?>"><?php echo htmlspecialchars($status); ?></span>
                            </div>
                            <div class="card-body">
                                <?php if (!empty($job['description'])): ?>
                                    <p class="card-text text-light small mb-3"><?php echo htmlspecialchars(substr($job['description'], 0, 100)) . (strlen($job['description']) > 100 ? '...' : ''); ?></p>
                                <?php endif; ?>
                                
                                <div class="row g-2 mb-3">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-geo-alt-fill text-primary me-2"></i>
                                            <small class="text-light"><?php echo htmlspecialchars($job['location'] ?? 'N/A'); ?></small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-building text-warning me-2"></i>
                                            <small class="text-light"><?php echo htmlspecialchars($job['department'] ?? 'N/A'); ?></small>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row g-2 mb-3">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-people-fill text-info me-2"></i>
                                            <small class="text-light"><?php echo htmlspecialchars($job['no_of_vacancy']); ?> Vacancies</small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-clock-history text-success me-2"></i>
                                            <small class="text-light"><?php echo htmlspecialchars($job['experience_required'] ?? 'N/A'); ?></small>
                                        </div>
                                    </div>
                                </div>
                                
                                <?php if (!empty($job['qualification'])): ?>
                                    <div class="mb-3">
                                        <small class="text-muted">Qualification:</small>
                                        <p class="text-light small mb-0"><?php echo htmlspecialchars(substr($job['qualification'], 0, 80)) . (strlen($job['qualification']) > 80 ? '...' : ''); ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="card-footer bg-dark border-secondary">
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Posted: <?php echo date('M d, Y', strtotime($job['date_posted'])); ?></small>
                                    <div>
                                        <button class="btn btn-sm btn-outline-danger me-1" onclick="if(confirm('Are you sure you want to delete this job position?')) { window.location.href='fe_careerpage_delete.php?id=<?php echo $job['id']; ?>'; }">Delete</button>
                                        <button class="btn btn-sm btn-outline-primary me-1" onclick="window.location.href='fe_careerspage_update.php?id=<?php echo $job['id']; ?>'">Edit/View</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12">
                    <div class="card bg-dark border-secondary">
                        <div class="card-body text-center py-5">
                            <i class="bi bi-briefcase text-muted" style="font-size: 3rem;"></i>
                            <h5 class="text-light mt-3">No Job Positions Found</h5>
                            <p class="text-muted">There are currently no job positions available.</p>
                            <button class="btn btn-primary" onclick="window.location.href='fe_careerspage_update.php'">Add New Position</button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        
        <?php if (!empty($job_positions)): ?>
            <div class="mt-4">
                <div class="row">
                    <div class="col-md-6">
                        <small class="text-muted">Total Job Positions: <?php echo count($job_positions); ?></small>
                    </div>
                    <div class="col-md-6 text-end">
                        <button class="btn btn-primary" onclick="window.location.href='fe_careerspage_update.php'">
                            <i class="bi bi-plus-circle me-1"></i>Add New Position
                        </button>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    

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