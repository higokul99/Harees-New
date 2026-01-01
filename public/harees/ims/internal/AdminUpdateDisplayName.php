<?php
include_once('includes/header.php');
include_once('csrf_token.php');

// Secure admin check
if (
    !isset($_SESSION['username']) ||
    !isset($_SESSION['usertype']) ||
    strtoupper($_SESSION['usertype']) !== 'ADMIN' ||
    !isset($_SESSION['account_status']) ||
    $_SESSION['account_status'] !== 'Approved'
) {

    // Clear sensitive session data if any exists
    // session_unset(); // header.php might use session, so maybe don't destroy immediately if we want to show a nice message, but for security, if unauthorized admin access, maybe safer.
    // Actually, header.php checks for login. This checks for ADMIN.

    echo "<script>location.href='../index.php?error=access_denied_admin'</script>";
    exit();
}
?>

<body>

    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php include_once('includes/sidebar.php'); ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include_once('includes/topbar.php'); ?>
            <!-- Navbar End -->

            <?php
            // Security Checks and Imports are handled in header/topbar or here if specific
            include_once('csrf_token.php'); // Ensure CSRF token functions are available

            // Re-verify Admin (Redundant if topbar checks, but good for specific page security)
            if (!isset($_SESSION['username']) || strtoupper($_SESSION['usertype']) !== 'ADMIN') {
                echo "<script>location.href='../index.php'</script>";
                exit();
            }

            // DB Connection is already established via includes/header -> db_connect.php (from topbar sequence)
            // But let's confirm correct path if topbar.php logic is slightly different
            include_once('../db_connect.php');

            $tables = [
                // 18kdgold tables
                '18kdgold_product_anklets',
                '18kdgold_product_bangles',
                '18kdgold_product_bracelets',
                '18kdgold_product_chains',
                '18kdgold_product_earrings',
                '18kdgold_product_fancychains',
                '18kdgold_product_necklaces',
                '18kdgold_product_nosepins',
                '18kdgold_product_pendants',
                '18kdgold_product_rings',
                '18kdgold_product_secondstuds',
                '18kdgold_product_studs',

                // 18kgold tables
                '18kgold_product_anklets',
                '18kgold_product_bangles',
                '18kgold_product_bracelets',
                '18kgold_product_chains',
                '18kgold_product_earrings',
                '18kgold_product_fancychains',
                '18kgold_product_necklaces',
                '18kgold_product_nosepins',
                '18kgold_product_pendants',
                '18kgold_product_rings',
                '18kgold_product_secondstuds',
                '18kgold_product_studs',

                // 22kgold tables
                '22kgold_product_anklets',
                '22kgold_product_bangles',
                '22kgold_product_bracelets',
                '22kgold_product_chains',
                '22kgold_product_earrings',
                '22kgold_product_fancychains',
                '22kgold_product_necklaces',
                '22kgold_product_nosepins',
                '22kgold_product_pendants',
                '22kgold_product_rings',
                '22kgold_product_secondstuds',
                '22kgold_product_studs',

                // rosegold tables
                'rosegold_product_anklets',
                'rosegold_product_bangles',
                'rosegold_product_bracelets',
                'rosegold_product_chains',
                'rosegold_product_earrings',
                'rosegold_product_fancychains',
                'rosegold_product_necklaces',
                'rosegold_product_nosepins',
                'rosegold_product_pendants',
                'rosegold_product_rings',
                'rosegold_product_secondstuds',
                'rosegold_product_studs',

                // silver tables
                'silver_product_anklets',
                'silver_product_bangles',
                'silver_product_bracelets',
                'silver_product_chains',
                'silver_product_earrings',
                'silver_product_fancychains',
                'silver_product_kadas',
                'silver_product_necklaces',
                'silver_product_nosepins',
                'silver_product_pendants',
                'silver_product_rings',
                'silver_product_secondstuds',
                'silver_product_studs'
            ];

            $message = '';
            $error = '';

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                // CSRF Check
                if (!isset($_POST['csrf_token']) || !verify_csrf_token($_POST['csrf_token'])) {
                    $error = "Invalid CSRF Token";
                } else {
                    $selected_table = $_POST['table'] ?? '';
                    $product_id = $_POST['product_id'] ?? '';
                    $display_name = trim($_POST['display_name'] ?? '');

                    if (empty($selected_table) || empty($product_id) || empty($display_name)) {
                        $error = 'All fields are required.';
                    } else if (!in_array($selected_table, $tables)) {
                        $error = 'Invalid table selected.';
                    } else {
                        // Use MySQLi ($conn) from db_connect.php
                        $stmt = $conn->prepare("UPDATE `$selected_table` SET t_display_name = ? WHERE id = ?");
                        if ($stmt) {
                            $stmt->bind_param("si", $display_name, $product_id);
                            if ($stmt->execute()) {
                                if ($stmt->affected_rows > 0) {
                                    $message = "Display name updated successfully for product ID $product_id in table $selected_table.";
                                } else {
                                    $error = "No product found with ID $product_id in table $selected_table or no changes made.";
                                }
                            } else {
                                $error = "Database error: " . $stmt->error;
                            }
                            $stmt->close();
                        } else {
                            $error = "Preparation failed: " . $conn->error;
                        }
                    }
                }
            }

            $products = [];
            $selected_table_for_view = $_GET['view_table'] ?? ($_POST['table'] ?? '');

            if ($selected_table_for_view && in_array($selected_table_for_view, $tables)) {
                $stmt = $conn->prepare("SELECT id, product_code, name, t_display_name FROM `$selected_table_for_view` ORDER BY id DESC LIMIT 50");
                if ($stmt) {
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $products = $result->fetch_all(MYSQLI_ASSOC);
                    $stmt->close();
                }
            }
            ?>

            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Update Product Display Name</h6>

                            <?php if ($message): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="fa fa-exclamation-circle me-2"></i><?php echo htmlspecialchars($message); ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif; ?>

                            <?php if ($error): ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="fa fa-exclamation-circle me-2"></i><?php echo htmlspecialchars($error); ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif; ?>

                            <form method="POST" action="">
                                <?php echo csrf_token_field(); ?>
                                <div class="row mb-3">
                                    <label for="table" class="col-sm-2 col-form-label">Select Table</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="table" id="table" required>
                                            <option value="">-- Select a table --</option>
                                            <optgroup label="18K Diamond Gold">
                                                <?php foreach ($tables as $table): ?>
                                                    <?php if (strpos($table, '18kdgold_') === 0): ?>
                                                        <option value="<?php echo $table; ?>" <?php echo ($selected_table_for_view === $table) ? 'selected' : ''; ?>>
                                                            <?php echo ucwords(str_replace(['18kdgold_product_', '_'], ['', ' '], $table)); ?>
                                                        </option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </optgroup>
                                            <optgroup label="18K Gold">
                                                <?php foreach ($tables as $table): ?>
                                                    <?php if (strpos($table, '18kgold_') === 0): ?>
                                                        <option value="<?php echo $table; ?>" <?php echo ($selected_table_for_view === $table) ? 'selected' : ''; ?>>
                                                            <?php echo ucwords(str_replace(['18kgold_product_', '_'], ['', ' '], $table)); ?>
                                                        </option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </optgroup>
                                            <optgroup label="22K Gold">
                                                <?php foreach ($tables as $table): ?>
                                                    <?php if (strpos($table, '22kgold_') === 0): ?>
                                                        <option value="<?php echo $table; ?>" <?php echo ($selected_table_for_view === $table) ? 'selected' : ''; ?>>
                                                            <?php echo ucwords(str_replace(['22kgold_product_', '_'], ['', ' '], $table)); ?>
                                                        </option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </optgroup>
                                            <optgroup label="Rose Gold">
                                                <?php foreach ($tables as $table): ?>
                                                    <?php if (strpos($table, 'rosegold_') === 0): ?>
                                                        <option value="<?php echo $table; ?>" <?php echo ($selected_table_for_view === $table) ? 'selected' : ''; ?>>
                                                            <?php echo ucwords(str_replace(['rosegold_product_', '_'], ['', ' '], $table)); ?>
                                                        </option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </optgroup>
                                            <optgroup label="Silver">
                                                <?php foreach ($tables as $table): ?>
                                                    <?php if (strpos($table, 'silver_') === 0): ?>
                                                        <option value="<?php echo $table; ?>" <?php echo ($selected_table_for_view === $table) ? 'selected' : ''; ?>>
                                                            <?php echo ucwords(str_replace(['silver_product_', '_'], ['', ' '], $table)); ?>
                                                        </option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="product_id" class="col-sm-2 col-form-label">Product ID</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="product_id" id="product_id" required min="1" placeholder="Enter Product ID">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="display_name" class="col-sm-2 col-form-label">Display Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="display_name" id="display_name" required maxlength="100" placeholder="Enter New Display Name">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Display Name</button>
                                <button type="button" class="btn btn-info m-2" onclick="if(document.getElementById('table').value) window.location.href='?view_table=' + document.getElementById('table').value">View Products</button>
                            </form>
                        </div>
                    </div>

                    <?php if (!empty($products)): ?>
                        <div class="col-12">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h6 class="mb-4">Products in <?php echo htmlspecialchars($selected_table_for_view); ?> (Latest 50)</h6>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Product Code</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Current Display Name</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($products as $product): ?>
                                                <tr>
                                                    <th scope="row"><?php echo htmlspecialchars($product['id']); ?></th>
                                                    <td><?php echo htmlspecialchars($product['product_code']); ?></td>
                                                    <td><?php echo htmlspecialchars($product['name']); ?></td>
                                                    <td><?php echo htmlspecialchars($product['t_display_name'] ?: 'Not set'); ?></td>
                                                    <td>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-sm btn-outline-primary"
                                                            onclick="quickUpdate(<?php echo $product['id']; ?>, '<?php echo addslashes(htmlspecialchars($product['name'])); ?>')">
                                                            Quick Update
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <!-- Form End -->


            <script>
                function quickUpdate(productId, productName) {
                    document.getElementById('product_id').value = productId;
                    document.getElementById('display_name').value = productName;
                    document.getElementById('display_name').focus();
                    document.getElementById('product_id').scrollIntoView({
                        behavior: "smooth",
                        block: "center"
                    });
                }

                // Auto-refresh products when table selection changes
                document.getElementById('table').addEventListener('change', function() {
                    if (this.value) {
                        window.location.href = '?view_table=' + this.value;
                    }
                });
            </script>

            <!-- Footer Start -->
            <?php include_once('includes/footer.php'); ?>
            <!-- Footer End -->