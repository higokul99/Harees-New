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
                            <h1 class="mb-4" style="color: #f5d02a;">Add Product Details</h1>

                            <?php
                            include_once('functions.php');
                            include('../db_connect.php'); // Include your database connection

                            if (isset($_POST['metal_type']) && isset($_POST['purity']) && isset($_POST['category'])) {
                                if (!isset($_POST['csrf_token']) || !verify_csrf_token($_POST['csrf_token'])) {
                                    echo "<script>alert('Invalid CSRF Token. Please refresh and try again.'); location.href='AddProduct.php';</script>";
                                    exit();
                                }

                                $metal_id = $_POST['metal_type'];
                                $Fetch_query = "SELECT name FROM metals WHERE metal_id = ?";
                                if ($stmt = $conn->prepare($Fetch_query)) {
                                    $stmt->bind_param("i", $metal_id);
                                    $stmt->execute();
                                    $stmt->bind_result($metal_name);
                                    if ($stmt->fetch()) {
                                        // Use the fetched value
                                        //echo "Metal Name: " . $metal_name;
                                    } else {
                                        //echo "No metal found with ID: " . $metal_id;
                                    }
                                    $stmt->close();
                                }


                                $metalpurity_id = $_POST['purity'];
                                $Fetch_query = "SELECT name FROM metals_purity WHERE metalpurity_id = ?";
                                if ($stmt = $conn->prepare($Fetch_query)) {
                                    $stmt->bind_param("i", $metalpurity_id);
                                    $stmt->execute();
                                    $stmt->bind_result($silver_metal_name);
                                    if ($stmt->fetch()) {
                                        // Use the fetched value
                                        //echo "Metal Name: " . $metal_name;
                                    } else {
                                        //echo "No metal found with ID: " . $metal_id;
                                    }
                                    $stmt->close();
                                }



                                $sil_cat_id = $_POST['category'];
                                $Fetch_query = "SELECT name FROM silver_categories WHERE sil_cat_id = ?";
                                if ($stmt = $conn->prepare($Fetch_query)) {
                                    $stmt->bind_param("i", $sil_cat_id);
                                    $stmt->execute();
                                    $stmt->bind_result($sil_cat_name);
                                    if ($stmt->fetch()) {
                                        // Use the fetched value
                                        //echo "Metal Name: " . $metal_name;
                                    } else {
                                        //echo "No metal found with ID: " . $metal_id;
                                    }
                                    $stmt->close();
                                }

                                $_SESSION["metal_id"] =  $_POST['metal_type'];
                                $_SESSION["silver_metal_id"] = $_POST['purity'];
                                $_SESSION["sil_cat_id"] = $_POST['category'];

                                $errors = [];


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

                                <form action="MasterController.php" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_token_field(); ?>
                                    <input type="hidden" name="metal_type" value="<?php echo $metal_id; ?>">
                                    <input type="hidden" name="purity" value="<?php echo $metalpurity_id; ?>">
                                    <input type="hidden" name="category" value="<?php echo $sil_cat_id; ?>">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Product Image</label>
                                        <input class="form-control bg-dark" type="file" id="formFile" name="product_image" accept=".png, .jpg, .jpeg, image/png, image/jpeg" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Product Name:</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description:</label>
                                        <textarea class="form-control" id="description" name="description"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="weight" class="form-label">Weight (g):</label>
                                        <input type="number" step="0.01" class="form-control" id="weight" name="weight" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="stock_quantity" class="form-label">Stock Quantity:</label>
                                        <input type="number" class="form-control" id="stock_quantity" name="stock_quantity" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="model" class="form-label">Metal Type:</label>
                                        <input type="text" class="form-control" id="Metal_type" name="Metal_type" value="<?php echo $metal_name; ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="model" class="form-label">Purity:</label>
                                        <input type="text" class="form-control" id="Metal_purity" name="Metal_purity" value="<?php echo $silver_metal_name; ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="model" class="form-label">Category:</label>
                                        <input type="text" class="form-control" id="Metal_category" name="Metal_category" value="<?php echo $sil_cat_name; ?>" readonly>
                                    </div>
                                    <!-- <div class="mb-3">
                                        <label for="size" class="form-label">Size:</label>
                                        <input type="text" class="form-control" id="size" name="size">
                                    </div> -->
                                    <div class="mb-3">
                                        <label for="size" class="form-label">Size:</label>
                                        <select class="form-control" id="gender" name="size" required>
                                            <option value="Adults">Adults</option>
                                            <option value="Kids">Kids</option>
                                            <option value="Baby">Baby</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="color" class="form-label">Color:</label>
                                        <input type="text" class="form-control" id="color" name="color">
                                    </div>
                                    <div class="mb-3">
                                        <label for="gender" class="form-label">Gender:</label>
                                        <select class="form-control" id="gender" name="gender" required>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Unisex">Unisex</option>
                                        </select>
                                    </div>
                                    <!-- <div class="mb-3">
                                        <label for="meta_title" class="form-label">Meta Title:</label>
                                        <input type="text" class="form-control" id="meta_title" name="meta_title">
                                    </div>
                                    <div class="mb-3">
                                        <label for="meta_description" class="form-label">Meta Description:</label>
                                        <textarea class="form-control" id="meta_description" name="meta_description"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="meta_keywords" class="form-label">Meta Keywords:</label>
                                        <textarea class="form-control" id="meta_keywords" name="meta_keywords"></textarea>
                                    </div> -->
                                    <button type="submit" name="add_product_details" class="btn btn-primary" style="color: black; width:100%;">Add Product</button>
                                </form>

                            <?php
                            } else {
                                echo "Invalid request. Please select Metal Type and Category.";
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>

            <?php include_once('includes/footer.php'); ?>
        </div>
    </div>
</body>

</html>