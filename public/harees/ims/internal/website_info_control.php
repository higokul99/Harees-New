<?php include_once('includes/header.php'); ?>
<?php include_once('../db_connect.php'); // db connection file 
?>

<?php
// Fetch current setting
$query = "SELECT * FROM site_settings WHERE option_name = 'hide_product_rates' LIMIT 1";
$result = mysqli_query($conn, $query);
$setting = mysqli_fetch_assoc($result);

$currentStatus = $setting ? $setting['status'] : 1; // Default to ON (hide rates)
?>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <?php include_once('includes/sidebar.php'); ?>
        <div class="content">
            <?php include_once('includes/topbar.php'); ?>

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-8">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h1 class="mb-4" style="color: #f5d02a;">Website Info Control</h1>
                            <p class="text-white mb-4">Control what information is displayed on the customer-facing website.</p>

                            <?php if (isset($_SESSION['success'])): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="fa fa-check-circle me-2"></i><?php echo $_SESSION['success'];
                                                                            unset($_SESSION['success']); ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            <?php endif; ?>

                            <?php if (isset($_SESSION['error'])): ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="fa fa-exclamation-circle me-2"></i><?php echo $_SESSION['error'];
                                                                                    unset($_SESSION['error']); ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            <?php endif; ?>

                            <form action="website_info_controller.php" method="POST">
                                <div class="bg-dark rounded p-4 mb-4">
                                    <h5 class="mb-4" style="color: #f5d02a;">
                                        <i class="fa fa-rupee-sign me-2"></i>Product Rate Display
                                    </h5>

                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <p class="text-white mb-2">
                                                <strong>Hide Product Rates on Website</strong>
                                            </p>
                                            <p class="text-muted small mb-0">
                                                When enabled, all product prices and rate breakdowns will be hidden from the customer website.
                                                Customers will need to contact you for pricing information.
                                            </p>
                                        </div>
                                        <div class="col-md-4 text-end">
                                            <div class="form-check form-switch d-inline-block">
                                                <input class="form-check-input"
                                                    type="checkbox"
                                                    role="switch"
                                                    id="hideRatesSwitch"
                                                    name="hide_rates"
                                                    value="1"
                                                    <?php echo ($currentStatus == 1) ? 'checked' : ''; ?>
                                                    style="width: 60px; height: 30px; cursor: pointer;">
                                                <label class="form-check-label ms-2" for="hideRatesSwitch" style="font-size: 1.2em;">
                                                    <span id="statusText" style="color: <?php echo ($currentStatus == 1) ? '#28a745' : '#dc3545'; ?>;">
                                                        <?php echo ($currentStatus == 1) ? 'ON' : 'OFF'; ?>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="my-4" style="border-color: rgba(255,255,255,0.1);">

                                    <div class="alert alert-info mb-0">
                                        <i class="fa fa-info-circle me-2"></i>
                                        <strong>Current Status:</strong>
                                        <?php if ($currentStatus == 1): ?>
                                            Product rates are <strong>HIDDEN</strong> on the website. Customers cannot see prices.
                                        <?php else: ?>
                                            Product rates are <strong>VISIBLE</strong> on the website. Customers can see all pricing details.
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">
                                    <button type="submit" class="btn btn-primary" style="width: 200px;">
                                        <i class="fa fa-save me-2"></i>Save Changes
                                    </button>
                                    <a href="index.php" class="btn btn-secondary">
                                        <i class="fa fa-arrow-left me-2"></i>Back to Dashboard
                                    </a>
                                </div>
                            </form>

                            <!-- Information Section -->
                            <div class="mt-5 p-4 bg-dark rounded">
                                <h5 class="mb-3" style="color: #f5d02a;">
                                    <i class="fa fa-question-circle me-2"></i>What gets hidden?
                                </h5>
                                <ul class="text-white">
                                    <li class="mb-2">Product prices on listing pages</li>
                                    <li class="mb-2">Price breakdowns (Metal Cost, Making Charges, GST)</li>
                                    <li class="mb-2">Final price on product detail pages</li>
                                    <li class="mb-2">Add to Cart functionality (if price is hidden)</li>
                                </ul>
                                <p class="text-muted mb-0 mt-3">
                                    <i class="fa fa-lightbulb me-2"></i>
                                    <strong>Tip:</strong> Use this feature when you want customers to contact you directly for pricing,
                                    or during special promotional periods.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Stats Sidebar -->
                    <div class="col-sm-12 col-xl-4">
                        <div class="bg-secondary rounded p-4 mb-4">
                            <h6 class="mb-4" style="color: #f5d02a;">
                                <i class="fa fa-chart-line me-2"></i>Quick Stats
                            </h6>
                            <?php
                            // Get total products count
                            $productCount = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as count FROM products WHERE is_visible = 1"))['count'];

                            // Get visible products count
                            $visibleCount = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as count FROM products WHERE is_visible = 1 AND delist = 0"))['count'];
                            ?>
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-grow-1">
                                    <p class="mb-1 text-white">Total Products</p>
                                    <h4 class="mb-0" style="color: #f5d02a;"><?php echo $productCount; ?></h4>
                                </div>
                                <i class="fa fa-box fa-2x text-primary"></i>
                            </div>
                            <hr style="border-color: rgba(255,255,255,0.1);">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <p class="mb-1 text-white">Visible on Website</p>
                                    <h4 class="mb-0" style="color: #f5d02a;"><?php echo $visibleCount; ?></h4>
                                </div>
                                <i class="fa fa-eye fa-2x text-success"></i>
                            </div>
                        </div>

                        <div class="bg-secondary rounded p-4">
                            <h6 class="mb-4" style="color: #f5d02a;">
                                <i class="fa fa-history me-2"></i>Last Updated
                            </h6>
                            <?php if ($setting): ?>
                                <p class="text-white mb-2">
                                    <strong>Date:</strong> <?php echo date('d M Y', strtotime($setting['updated_datetime'])); ?>
                                </p>
                                <p class="text-white mb-2">
                                    <strong>Time:</strong> <?php echo date('h:i A', strtotime($setting['updated_datetime'])); ?>
                                </p>
                                <p class="text-muted small mb-0">
                                    Updated by: <?php echo $setting['updated_by'] ?? 'Admin'; ?>
                                </p>
                            <?php else: ?>
                                <p class="text-muted">No updates yet</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php include_once('includes/footer.php'); ?>
        </div>
    </div>

    <script>
        // Toggle switch visual feedback
        document.getElementById('hideRatesSwitch').addEventListener('change', function() {
            const statusText = document.getElementById('statusText');
            if (this.checked) {
                statusText.textContent = 'ON';
                statusText.style.color = '#28a745';
            } else {
                statusText.textContent = 'OFF';
                statusText.style.color = '#dc3545';
            }
        });
    </script>

</body>

</html>