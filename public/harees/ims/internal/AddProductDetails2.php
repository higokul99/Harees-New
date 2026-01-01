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

                            if (isset($_GET['product_code']) && isset($_GET['table_name'])) {
                                $product_code = $_GET['product_code'];
                                $table_name = $_GET['table_name'];

                                $_SESSION['product_code'] = $_GET['product_code'];
                                $_SESSION['table_name'] = $_GET['table_name'];

                                $Fetch_query = "SELECT * FROM $table_name WHERE product_code = ?";
                                if ($stmt = $conn->prepare($Fetch_query)) {
                                    $stmt->bind_param("s", $product_code);
                                    $stmt->execute();
                                    $result = $stmt->get_result();

                                    if ($result->num_rows > 0) {
                                        // Fetch as an associative array
                                        $product_data = $result->fetch_assoc();

                                        // Schema Mapping for Unified Table
                                        if ($table_name === 'products') {
                                            $product_data['metalpurity_id'] = $product_data['metal_purity_id'] ?? null;
                                            $product_data['cat_id'] = $product_data['category_id'] ?? null;

                                            // Fetch Image from product_images
                                            $product_id = $product_data['id'];
                                            $imgQuery = "SELECT image_path FROM product_images WHERE product_id = ? AND is_primary = 1 LIMIT 1";
                                            if ($stmtImg = $conn->prepare($imgQuery)) {
                                                $stmtImg->bind_param("i", $product_id);
                                                $stmtImg->execute();
                                                $resImg = $stmtImg->get_result();
                                                if ($rowImg = $resImg->fetch_assoc()) {
                                                    $product_data['img2'] = $rowImg['image_path'];
                                                } else {
                                                    $product_data['img2'] = '';
                                                }
                                                $stmtImg->close();
                                            }
                                        }

                                        //IMAGES
                                        $img2 = $product_data['img2'] ?? ''; // Handle missing key

                                        // To get a specific column value, for example, 'metal_id':

                                        $metal_id = $product_data['metal_id'];
                                        $metalpurity_id = $product_data['metalpurity_id'];
                                        $cat_id = $product_data['cat_id'];

                                        $name = $product_data['name'];
                                        $description = $product_data['description'];
                                        $gender = $product_data['gender'];
                                        $size = $product_data['size'] ?? 'Adult Size'; // Default if null
                                        $stock_quantity = $product_data['stock_quantity'];

                                        $net_weight = $product_data['net_weight'];
                                        $gross_weight = $product_data['gross_weight'];

                                        //STONE
                                        $stone_available = $product_data['stone_available'];
                                        $stone_desc = $product_data['stone_desc'];
                                        $stone_color = $product_data['stone_color'];
                                        $stone_shape = $product_data['stone_shape'];
                                        $stone_count = $product_data['stone_count'];
                                        $stone_weight = $product_data['stone_weight'];
                                        $stone_cost = $product_data['stone_cost'];

                                        //DIAMONDS
                                        $diamond_available = $product_data['diamond_available'];
                                        $dia_desc = $product_data['dia_desc'];
                                        $dia_cent = $product_data['dia_cent'];
                                        $dia_count = $product_data['dia_count'];
                                        $dia_cut = $product_data['dia_cut'];
                                        $dia_color = $product_data['dia_color'];
                                        $dia_clarity = $product_data['dia_clarity'];
                                        $dia_shape = $product_data['dia_shape'];

                                        //BEADS
                                        $beads_available = $product_data['beads_available'];
                                        $beads_desc = $product_data['beads_desc'];
                                        $beads_color = $product_data['beads_color'];
                                        $beads_count = $product_data['beads_count'];
                                        $beads_weight = $product_data['beads_weight'];
                                        $beads_cost = $product_data['beads_cost'];


                                        //PEARLS
                                        $pearls_available = $product_data['pearls_available'];
                                        $pearls_desc = $product_data['pearls_desc'];
                                        $pearls_color = $product_data['pearls_color'];
                                        $pearls_count = $product_data['pearls_count'];
                                        $pearls_weight = $product_data['pearls_weight'];
                                        $pearls_cost = $product_data['pearls_cost'];


                                        //echo "Product Code/SKU : " . htmlspecialchars($product_code) . "<br>";
                                        // echo "<pre>";
                                        // print_r($product_data); // This will show all fetched columns and their values
                                        // echo "</pre>";

                                        // You can now access individual columns like:
                                        // echo "Metal ID: " . htmlspecialchars($product_data['metal_id']) . "<br>";
                                        // echo "Category ID: " . htmlspecialchars($product_data['cat_id']) . "<br>";
                                        // echo "Any Other Column: " . htmlspecialchars($product_data['another_column_name']) . "<br>";

                                    } else {
                                        echo "No product found with code: " . htmlspecialchars($product_code);
                                    }
                                    $stmt->close();
                                } else {
                                    echo "Error preparing statement: " . $conn->error;
                                }

                                //---------METAL
                                $metal_name = '';
                                $Fetch_name_query = "SELECT name FROM metals WHERE id = ?";
                                if ($stmt = $conn->prepare($Fetch_name_query)) {
                                    $stmt->bind_param("i", $metal_id);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    if ($result->num_rows > 0) {
                                        $row = $result->fetch_assoc();
                                        $metal_name = $row['name'] ?? '';
                                    }
                                    $stmt->close();
                                } else {
                                    echo "Error preparing statement: " . $conn->error . "<br>";
                                }

                                //---------METAL PURITY
                                $purity = '';
                                $Fetch_name_query = "SELECT name FROM metals_purity WHERE metalpurity_id = ?";
                                if ($stmt = $conn->prepare($Fetch_name_query)) {
                                    $stmt->bind_param("i", $metalpurity_id);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    if ($result->num_rows > 0) {
                                        $row = $result->fetch_assoc();
                                        $purity = $row['name'] ?? '';
                                    }
                                    $stmt->close();
                                } else {
                                    echo "Error preparing statement: " . $conn->error . "<br>";
                                }

                                //---------CATEGORY
                                $cat_name = '';
                                $Fetch_name_query = "SELECT name FROM categories WHERE id = ?";
                                if ($stmt = $conn->prepare($Fetch_name_query)) {
                                    $stmt->bind_param("i", $cat_id);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    if ($result->num_rows > 0) {
                                        $row = $result->fetch_assoc();
                                        $cat_name = $row['name'] ?? '';
                                    }
                                    $stmt->close();
                                } else {
                                    echo "Error preparing statement: " . $conn->error . "<br>";
                                }

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
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Product CODE / SKU</label>
                                        <input type="text" class="form-control" id="product_code" name="product_code" value="<?php echo $product_code; ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="weight" class="form-label">Metal: <?php echo $purity . ' - ' . $metal_name; ?></label>

                                    </div>

                                    <div class="mb-3">
                                        <label for="stock_quantity" class="form-label">Category: <?php echo $cat_name; ?></label>

                                    </div>
                                    <!-- 
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
                                        <input type="text" class="form-control" id="color" name="color" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="gender" class="form-label">Gender:</label>
                                        <select class="form-control" id="gender" name="gender" required>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Unisex">Unisex</option>
                                        </select>
                                    </div> -->
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
                                    <!-- <button type="submit" name="add_product_details" class="btn btn-primary" style="color: black; width:100%;">Add Product</button> 
                                     -->
                                </form>

                            <?php
                            } else {
                                echo "Invalid request. Please select Metal Type and Category.";
                            }
                            ?>

                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <!-- 
==================================================== 

PHOTO DETAILS

====================================================  
-->
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Update Photo</h6>
                            <form action="Control-ProductUpdates.php" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_token_field(); ?>
                                <div class="mb-3">

                                    <div class="mb-3 text-center">
                                        <?php if (!empty($img2)): ?>
                                            <a href="<?php echo htmlspecialchars($img2); ?>" target="_blank" rel="noopener noreferrer">
                                                <img src="<?php echo htmlspecialchars($img2); ?>?v=<?php echo time(); ?>" alt="Product Image" class="img-fluid rounded" style="max-height: 500px; object-fit: contain;">
                                            </a>
                                        <?php else: ?>
                                            <p>No image available.</p>
                                        <?php endif; ?>
                                    </div>
                                    <label for="formFile" class="form-label">HD Image</label>
                                    <input class="form-control bg-dark" type="file" id="formFile" name="product_image" accept=".png, .jpg, .jpeg, image/png, image/jpeg" required onchange="checkFileSize(this)">
                                    <div id="fileSizeError" style="color: red; display: none;">Please select a file under 2MB.</div>

                                    <script>
                                        function checkFileSize(input) {
                                            const maxFileSize = 2 * 1024 * 1024; // 2MB in bytes
                                            const fileSizeError = document.getElementById('fileSizeError');

                                            if (input.files.length > 0) {
                                                const file = input.files[0];
                                                if (file.size > maxFileSize) {
                                                    fileSizeError.style.display = 'block'; // Show the error message
                                                    input.value = ''; // Clear the selected file
                                                } else {
                                                    fileSizeError.style.display = 'none'; // Hide the error message
                                                }
                                            } else {
                                                fileSizeError.style.display = 'none'; // Hide the error if no file is selected
                                            }
                                        }
                                    </script>

                                    <!-- <label for="formFile" class="form-label">HD Image 2 (Optional)</label>
                                        <input class="form-control bg-dark" type="file" id="formFile" name="HD_image2" accept=".png, .jpg, .jpeg, image/png, image/jpeg" > -->

                                    <!-- <label for="formFile" class="form-label">Less KB Image</label>
                                        <input class="form-control bg-dark" type="file" id="formFile" name="lowKB_image" accept=".png, .jpg, .jpeg, image/png, image/jpeg" > -->
                                </div>
                                <button type="submit" name="UpdateImage" class="btn btn-primary" style="color: black; width:100%;">Save</button>
                            </form>
                        </div>
                    </div>
                    <!-- 
==================================================== 

BASIC DETAILS

====================================================  
-->
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Basic Products Details</h6>
                            <form method="POST" action="Control-ProductUpdates.php">
                                <?php echo csrf_token_field(); ?>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Product Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description:</label>
                                    <textarea class="form-control" id="description" name="description"><?php echo $description; ?></textarea>
                                </div>
                                <?php
                                ?>
                                <fieldset class="row mb-3">
                                    <?php
                                    $checkedUnisex = '';
                                    $checkedMale = '';
                                    $checkedFemale = '';
                                    switch ($gender) {
                                        case 'Unisex':
                                            $checkedUnisex = "checked";
                                            break;

                                        case 'Male':
                                            $checkedMale = "checked";
                                            break;

                                        case 'Female':
                                            $checkedFemale = "checked";
                                            break;

                                        default:
                                            # code...
                                            break;
                                    }
                                    ?>
                                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="gridRadios1" value="Unisex" <?php echo $checkedUnisex; ?>>
                                            <label class="form-check-label" for="gridRadios1">
                                                Unisex
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="gridRadios1" value="Male" <?php echo $checkedMale; ?>>
                                            <label class="form-check-label" for="gridRadios1">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="gridRadios2" value="Female" <?php echo $checkedFemale; ?>>
                                            <label class="form-check-label" for="gridRadios2">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="row mb-3">
                                    <?php
                                    $checkedAdults = '';
                                    $checkedKids = '';
                                    $checkedBaby = '';
                                    switch ($size) {
                                        case 'Adult Size':
                                            $checkedAdults = "checked";
                                            break;

                                        case 'Kids Size':
                                            $checkedKids = "checked";
                                            break;

                                        case 'Baby Size':
                                            $checkedBaby = "checked";
                                            break;

                                        default:
                                            # code...
                                            break;
                                    }
                                    ?>
                                    <legend class="col-form-label col-sm-2 pt-0">Size</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="size"
                                                id="gridRadios1" value="Adult Size" <?php echo $checkedAdults; ?>>
                                            <label class="form-check-label" for="gridRadios1">
                                                Adult Size
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="size"
                                                id="gridRadios1" value="Kids Size" <?php echo $checkedKids; ?>>
                                            <label class="form-check-label" for="gridRadios1">
                                                Kids Size
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="size"
                                                id="gridRadios2" value="Baby Size" <?php echo $checkedBaby; ?>>
                                            <label class="form-check-label" for="gridRadios2">
                                                Baby Size
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Stock Quantity:</label>
                                    <input type="number" class="form-control" id="stock_quantity" name="stock_quantity" value="<?php echo $product_data['stock_quantity']; ?>" required>
                                </div>
                                <button type="submit" name="UpdateBasicProductDetails" class="btn btn-primary" style="color: black; width:100%;">Save Details</button>

                            </form>
                        </div>
                    </div>
                    <!-- 
==================================================== 

WEIGHT DETAILS

====================================================  
-->

                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Weight Details</h6>
                            <form method="POST" action="Control-ProductUpdates.php">
                                <?php echo csrf_token_field(); ?>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Net Weight (N.W) (in gm)</label>
                                    <input type="number" class="form-control" id="weight" name="net_weight" value="<?php echo $net_weight; ?>" step="0.001" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Gross Weight (G.W) (in gm)</label>
                                    <input type="number" step="0.001" class="form-control" id="weight" name="gross_weight" value="<?php echo $gross_weight; ?>">
                                </div>
                                <!-- <fieldset class="row mb-3">
                                        <legend class="col-form-label col-sm-2 pt-0">Having?</legend>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="TypeSBD"
                                                    id="gridRadios1" value="Nothing" checked>
                                                <label class="form-check-label">
                                                    Nothing
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="TypeSBD"
                                                    id="gridRadios1" value="Stones">
                                                <label class="form-check-label">
                                                    Stones
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="TypeSBD"
                                                    id="gridRadios1" value="Beads">
                                                <label class="form-check-label">
                                                    Beads
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="TypeSBD"
                                                    id="gridRadios2" value="Diamonds">
                                                <label class="form-check-label">
                                                    Diamonds
                                                </label>
                                            </div>
                                        </div>
                                </fieldset>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">No of Stones/beads/Diamonds - (Count)</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1" name="count" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Stones/Beads Weight | Cent (If Diamond)</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1" name="cent" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Per Unit Cost / Stone Cost</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1" name="per_unit_cost" aria-describedby="emailHelp">
                                </div> -->
                                <!-- <label for="exampleInputEmail1" class="form-label">Is it having Stones/Beads/Diamonds</label>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Stones</label>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Beads</label>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Diamonds</label>
                                </div> -->
                                <button type="submit" name="UpdateWeightDetails" class="btn btn-primary" style="color: black; width:100%;">Save Details</button>
                            </form>
                        </div>
                    </div>





                    <!-- 
==================================================== 

STONE DETAILS

====================================================  
-->

                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Stone Details</h6>
                            <form method="POST" action="Control-ProductUpdates.php">
                                <?php echo csrf_token_field(); ?>

                                <!-- Stone Available Toggle -->
                                <div class="mb-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="stone_available" name="stone_available" value="1"
                                            <?php echo (isset($stone_available) && $stone_available == 1) ? 'checked' : ''; ?>
                                            onchange="toggleStoneDetails()">
                                        <label class="form-check-label" for="stone_available">
                                            Stone Available
                                        </label>
                                    </div>
                                </div>

                                <!-- Stone Details Section (hidden by default if no stone) -->
                                <div id="stone_details_section" style="<?php echo (isset($stone_available) && $stone_available == 1) ? 'display:block;' : 'display:none;'; ?>">

                                    <div class="mb-3">
                                        <label for="stone_desc" class="form-label">Stone Description</label>
                                        <input type="text" class="form-control" id="stone_desc" name="stone_desc"
                                            value="<?php echo isset($stone_desc) ? htmlspecialchars($stone_desc) : ''; ?>"
                                            maxlength="100">
                                    </div>

                                    <div class="mb-3">
                                        <label for="stone_color" class="form-label">Stone Color</label>
                                        <input type="text" class="form-control" id="stone_color" name="stone_color"
                                            value="<?php echo isset($stone_color) ? htmlspecialchars($stone_color) : ''; ?>"
                                            maxlength="100">
                                    </div>

                                    <div class="mb-3">
                                        <label for="stone_shape" class="form-label">Stone Shape</label>
                                        <select class="form-control" id="stone_shape" name="stone_shape">
                                            <option value="">Select Shape</option>
                                            <option value="Round" <?php echo (isset($stone_shape) && $stone_shape == 'Round') ? 'selected' : ''; ?>>Round</option>
                                            <option value="Oval" <?php echo (isset($stone_shape) && $stone_shape == 'Oval') ? 'selected' : ''; ?>>Oval</option>
                                            <option value="Square" <?php echo (isset($stone_shape) && $stone_shape == 'Square') ? 'selected' : ''; ?>>Square</option>
                                            <option value="Rectangle" <?php echo (isset($stone_shape) && $stone_shape == 'Rectangle') ? 'selected' : ''; ?>>Rectangle</option>
                                            <option value="Heart" <?php echo (isset($stone_shape) && $stone_shape == 'Heart') ? 'selected' : ''; ?>>Heart</option>
                                            <option value="Pear" <?php echo (isset($stone_shape) && $stone_shape == 'Pear') ? 'selected' : ''; ?>>Pear</option>
                                            <option value="Marquise" <?php echo (isset($stone_shape) && $stone_shape == 'Marquise') ? 'selected' : ''; ?>>Marquise</option>
                                            <option value="Emerald" <?php echo (isset($stone_shape) && $stone_shape == 'Emerald') ? 'selected' : ''; ?>>Emerald</option>
                                            <option value="Other" <?php echo (isset($stone_shape) && $stone_shape == 'Other') ? 'selected' : ''; ?>>Other</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="stone_count" class="form-label">Stone Count</label>
                                        <input type="number" class="form-control" id="stone_count" name="stone_count"
                                            value="<?php echo isset($stone_count) ? $stone_count : ''; ?>"
                                            min="0">
                                    </div>

                                    <div class="mb-3">
                                        <label for="stone_weight" class="form-label">Stone Weight (in gm)</label>
                                        <input type="number" step="0.01" class="form-control" id="stone_weight" name="stone_weight"
                                            value="<?php echo isset($stone_weight) ? $stone_weight : ''; ?>"
                                            min="0">
                                    </div>

                                    <div class="mb-3">
                                        <label for="stone_cost" class="form-label">Stone Cost ( Total cost only , not per gram cost )</label>
                                        <input type="number" step="0.01" class="form-control" id="stone_cost" name="stone_cost"
                                            value="<?php echo isset($stone_cost) ? $stone_cost : ''; ?>"
                                            min="0">
                                    </div>
                                </div>

                                <button type="submit" name="UpdateStoneDetails" class="btn btn-primary" style="color: black; width:100%;">Save Details</button>
                            </form>
                        </div>
                    </div>

                    <script>
                        function toggleStoneDetails() {
                            const checkbox = document.getElementById('stone_available');
                            const section = document.getElementById('stone_details_section');

                            if (checkbox.checked) {
                                section.style.display = 'block';
                            } else {
                                section.style.display = 'none';
                                // Optional: Clear stone detail fields when hiding
                                const stoneFields = section.querySelectorAll('input, select');
                                stoneFields.forEach(field => {
                                    if (field.type !== 'hidden') {
                                        field.value = '';
                                    }
                                });
                            }
                        }
                    </script>






                    <!-- 
==================================================== 

DAIMONDS DETAILS

====================================================  
-->
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Diamond Details</h6>
                            <form method="POST" action="Control-ProductUpdates.php">
                                <?php echo csrf_token_field(); ?>

                                <!-- Diamond Available Toggle -->
                                <div class="mb-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="diamond_available" name="diamond_available" value="1"
                                            <?php echo (isset($diamond_available) && $diamond_available == 1) ? 'checked' : ''; ?>
                                            onchange="toggleDiamondDetails()">
                                        <label class="form-check-label" for="diamond_available">
                                            Diamond Available
                                        </label>
                                    </div>
                                </div>

                                <!-- Diamond Details Section (hidden by default if no diamond) -->
                                <div id="diamond_details_section" style="<?php echo (isset($diamond_available) && $diamond_available == 1) ? 'display:block;' : 'display:none;'; ?>">

                                    <div class="mb-3">
                                        <label for="dia_desc" class="form-label">Diamond Description</label>
                                        <input type="text" class="form-control" id="dia_desc" name="dia_desc"
                                            value="<?php echo isset($dia_desc) ? htmlspecialchars($dia_desc) : ''; ?>"
                                            maxlength="255" placeholder="Enter diamond description">
                                    </div>

                                    <div class="mb-3">
                                        <label for="dia_cent" class="form-label">Diamond Carat (Cent)</label>
                                        <input type="number" step="0.0001" class="form-control" id="dia_cent" name="dia_cent"
                                            value="<?php echo isset($dia_cent) ? $dia_cent : ''; ?>"
                                            min="0" placeholder="0.00">
                                    </div>

                                    <div class="mb-3">
                                        <label for="dia_count" class="form-label">Diamond Count</label>
                                        <input type="number" class="form-control" id="dia_count" name="dia_count"
                                            value="<?php echo isset($dia_count) ? $dia_count : ''; ?>"
                                            min="0" placeholder="Number of diamonds">
                                    </div>

                                    <div class="mb-3">
                                        <label for="dia_cut" class="form-label">Diamond Cut</label>
                                        <select class="form-control" id="dia_cut" name="dia_cut">
                                            <option value="">Select Cut</option>
                                            <option value="Excellent" <?php echo (isset($dia_cut) && $dia_cut == 'Excellent') ? 'selected' : ''; ?>>Excellent</option>
                                            <option value="Very Good" <?php echo (isset($dia_cut) && $dia_cut == 'Very Good') ? 'selected' : ''; ?>>Very Good</option>
                                            <option value="Good" <?php echo (isset($dia_cut) && $dia_cut == 'Good') ? 'selected' : ''; ?>>Good</option>
                                            <option value="Fair" <?php echo (isset($dia_cut) && $dia_cut == 'Fair') ? 'selected' : ''; ?>>Fair</option>
                                            <option value="Poor" <?php echo (isset($dia_cut) && $dia_cut == 'Poor') ? 'selected' : ''; ?>>Poor</option>
                                            <option value="Ideal" <?php echo (isset($dia_cut) && $dia_cut == 'Ideal') ? 'selected' : ''; ?>>Ideal</option>
                                            <option value="Signature Ideal" <?php echo (isset($dia_cut) && $dia_cut == 'Signature Ideal') ? 'selected' : ''; ?>>Signature Ideal</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="dia_color" class="form-label">Diamond Color</label>
                                        <select class="form-control" id="dia_color" name="dia_color">
                                            <option value="">Select Color</option>
                                            <option value="D" <?php echo (isset($dia_color) && $dia_color == 'D') ? 'selected' : ''; ?>>D (Colorless)</option>
                                            <option value="E" <?php echo (isset($dia_color) && $dia_color == 'E') ? 'selected' : ''; ?>>E (Colorless)</option>
                                            <option value="F" <?php echo (isset($dia_color) && $dia_color == 'F') ? 'selected' : ''; ?>>F (Colorless)</option>
                                            <option value="G" <?php echo (isset($dia_color) && $dia_color == 'G') ? 'selected' : ''; ?>>G (Near Colorless)</option>
                                            <option value="H" <?php echo (isset($dia_color) && $dia_color == 'H') ? 'selected' : ''; ?>>H (Near Colorless)</option>
                                            <option value="I" <?php echo (isset($dia_color) && $dia_color == 'I') ? 'selected' : ''; ?>>I (Near Colorless)</option>
                                            <option value="J" <?php echo (isset($dia_color) && $dia_color == 'J') ? 'selected' : ''; ?>>J (Near Colorless)</option>
                                            <option value="K" <?php echo (isset($dia_color) && $dia_color == 'K') ? 'selected' : ''; ?>>K (Faint Yellow)</option>
                                            <option value="L" <?php echo (isset($dia_color) && $dia_color == 'L') ? 'selected' : ''; ?>>L (Faint Yellow)</option>
                                            <option value="M" <?php echo (isset($dia_color) && $dia_color == 'M') ? 'selected' : ''; ?>>M (Faint Yellow)</option>
                                            <option value="N" <?php echo (isset($dia_color) && $dia_color == 'N') ? 'selected' : ''; ?>>N (Very Light Yellow)</option>
                                            <option value="O-Z" <?php echo (isset($dia_color) && $dia_color == 'O-Z') ? 'selected' : ''; ?>>O-Z (Light Yellow)</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="dia_clarity" class="form-label">Diamond Clarity</label>
                                        <select class="form-control" id="dia_clarity" name="dia_clarity">
                                            <option value="">Select Clarity</option>
                                            <option value="FL" <?php echo (isset($dia_clarity) && $dia_clarity == 'FL') ? 'selected' : ''; ?>>FL (Flawless)</option>
                                            <option value="IF" <?php echo (isset($dia_clarity) && $dia_clarity == 'IF') ? 'selected' : ''; ?>>IF (Internally Flawless)</option>
                                            <option value="VVS1" <?php echo (isset($dia_clarity) && $dia_clarity == 'VVS1') ? 'selected' : ''; ?>>VVS1 (Very Very Slightly Included)</option>
                                            <option value="VVS2" <?php echo (isset($dia_clarity) && $dia_clarity == 'VVS2') ? 'selected' : ''; ?>>VVS2 (Very Very Slightly Included)</option>
                                            <option value="VS1" <?php echo (isset($dia_clarity) && $dia_clarity == 'VS1') ? 'selected' : ''; ?>>VS1 (Very Slightly Included)</option>
                                            <option value="VS2" <?php echo (isset($dia_clarity) && $dia_clarity == 'VS2') ? 'selected' : ''; ?>>VS2 (Very Slightly Included)</option>
                                            <option value="SI1" <?php echo (isset($dia_clarity) && $dia_clarity == 'SI1') ? 'selected' : ''; ?>>SI1 (Slightly Included)</option>
                                            <option value="SI2" <?php echo (isset($dia_clarity) && $dia_clarity == 'SI2') ? 'selected' : ''; ?>>SI2 (Slightly Included)</option>
                                            <option value="I1" <?php echo (isset($dia_clarity) && $dia_clarity == 'I1') ? 'selected' : ''; ?>>I1 (Included)</option>
                                            <option value="I2" <?php echo (isset($dia_clarity) && $dia_clarity == 'I2') ? 'selected' : ''; ?>>I2 (Included)</option>
                                            <option value="I3" <?php echo (isset($dia_clarity) && $dia_clarity == 'I3') ? 'selected' : ''; ?>>I3 (Included)</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="dia_shape" class="form-label">Diamond Shape</label>
                                        <select class="form-control" id="dia_shape" name="dia_shape">
                                            <option value="">Select Shape</option>
                                            <option value="Round" <?php echo (isset($dia_shape) && $dia_shape == 'Round') ? 'selected' : ''; ?>>Round</option>
                                            <option value="Princess" <?php echo (isset($dia_shape) && $dia_shape == 'Princess') ? 'selected' : ''; ?>>Princess</option>
                                            <option value="Cushion" <?php echo (isset($dia_shape) && $dia_shape == 'Cushion') ? 'selected' : ''; ?>>Cushion</option>
                                            <option value="Emerald" <?php echo (isset($dia_shape) && $dia_shape == 'Emerald') ? 'selected' : ''; ?>>Emerald</option>
                                            <option value="Oval" <?php echo (isset($dia_shape) && $dia_shape == 'Oval') ? 'selected' : ''; ?>>Oval</option>
                                            <option value="Radiant" <?php echo (isset($dia_shape) && $dia_shape == 'Radiant') ? 'selected' : ''; ?>>Radiant</option>
                                            <option value="Asscher" <?php echo (isset($dia_shape) && $dia_shape == 'Asscher') ? 'selected' : ''; ?>>Asscher</option>
                                            <option value="Marquise" <?php echo (isset($dia_shape) && $dia_shape == 'Marquise') ? 'selected' : ''; ?>>Marquise</option>
                                            <option value="Heart" <?php echo (isset($dia_shape) && $dia_shape == 'Heart') ? 'selected' : ''; ?>>Heart</option>
                                            <option value="Pear" <?php echo (isset($dia_shape) && $dia_shape == 'Pear') ? 'selected' : ''; ?>>Pear</option>
                                            <option value="Trillion" <?php echo (isset($dia_shape) && $dia_shape == 'Trillion') ? 'selected' : ''; ?>>Trillion</option>
                                            <option value="Baguette" <?php echo (isset($dia_shape) && $dia_shape == 'Baguette') ? 'selected' : ''; ?>>Baguette</option>
                                        </select>
                                    </div>
                                </div>

                                <button type="submit" name="UpdateDiamondDetails" class="btn btn-primary" style="color: black; width:100%;">Save Details</button>
                            </form>
                        </div>
                    </div>

                    <script>
                        function toggleDiamondDetails() {
                            const checkbox = document.getElementById('diamond_available');
                            const section = document.getElementById('diamond_details_section');

                            if (checkbox.checked) {
                                section.style.display = 'block';
                            } else {
                                section.style.display = 'none';
                                // Optional: Clear diamond detail fields when hiding
                                const diamondFields = section.querySelectorAll('input, select');
                                diamondFields.forEach(field => {
                                    if (field.type !== 'hidden') {
                                        field.value = '';
                                    }
                                });
                            }
                        }
                    </script>






                    <!-- 
==================================================== 

BEADS DETAILS

====================================================  
-->
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Beads Details</h6>
                            <form method="POST" action="Control-ProductUpdates.php">
                                <?php echo csrf_token_field(); ?>

                                <!-- Beads Available Toggle -->
                                <div class="mb-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="beads_available" name="beads_available" value="1"
                                            <?php echo (isset($beads_available) && $beads_available == 1) ? 'checked' : ''; ?>
                                            onchange="toggleBeadsDetails()">
                                        <label class="form-check-label" for="beads_available">
                                            Beads Available
                                        </label>
                                    </div>
                                </div>

                                <!-- Beads Details Section (hidden by default if no beads) -->
                                <div id="beads_details_section" style="<?php echo (isset($beads_available) && $beads_available == 1) ? 'display:block;' : 'display:none;'; ?>">

                                    <div class="mb-3">
                                        <label for="beads_desc" class="form-label">Beads Description</label>
                                        <input type="text" class="form-control" id="beads_desc" name="beads_desc"
                                            value="<?php echo isset($beads_desc) ? htmlspecialchars($beads_desc) : ''; ?>"
                                            maxlength="255" placeholder="Enter beads description">
                                    </div>

                                    <div class="mb-3">
                                        <label for="beads_color" class="form-label">Beads Color</label>
                                        <select class="form-control" id="beads_color" name="beads_color">
                                            <option value="">Select Color</option>
                                            <option value="White" <?php echo (isset($beads_color) && $beads_color == 'White') ? 'selected' : ''; ?>>White</option>
                                            <option value="Black" <?php echo (isset($beads_color) && $beads_color == 'Black') ? 'selected' : ''; ?>>Black</option>
                                            <option value="Red" <?php echo (isset($beads_color) && $beads_color == 'Red') ? 'selected' : ''; ?>>Red</option>
                                            <option value="Blue" <?php echo (isset($beads_color) && $beads_color == 'Blue') ? 'selected' : ''; ?>>Blue</option>
                                            <option value="Green" <?php echo (isset($beads_color) && $beads_color == 'Green') ? 'selected' : ''; ?>>Green</option>
                                            <option value="Yellow" <?php echo (isset($beads_color) && $beads_color == 'Yellow') ? 'selected' : ''; ?>>Yellow</option>
                                            <option value="Pink" <?php echo (isset($beads_color) && $beads_color == 'Pink') ? 'selected' : ''; ?>>Pink</option>
                                            <option value="Purple" <?php echo (isset($beads_color) && $beads_color == 'Purple') ? 'selected' : ''; ?>>Purple</option>
                                            <option value="Orange" <?php echo (isset($beads_color) && $beads_color == 'Orange') ? 'selected' : ''; ?>>Orange</option>
                                            <option value="Brown" <?php echo (isset($beads_color) && $beads_color == 'Brown') ? 'selected' : ''; ?>>Brown</option>
                                            <option value="Gray" <?php echo (isset($beads_color) && $beads_color == 'Gray') ? 'selected' : ''; ?>>Gray</option>
                                            <option value="Gold" <?php echo (isset($beads_color) && $beads_color == 'Gold') ? 'selected' : ''; ?>>Gold</option>
                                            <option value="Silver" <?php echo (isset($beads_color) && $beads_color == 'Silver') ? 'selected' : ''; ?>>Silver</option>
                                            <option value="Pearl" <?php echo (isset($beads_color) && $beads_color == 'Pearl') ? 'selected' : ''; ?>>Pearl</option>
                                            <option value="Multi-Color" <?php echo (isset($beads_color) && $beads_color == 'Multi-Color') ? 'selected' : ''; ?>>Multi-Color</option>
                                            <option value="Transparent" <?php echo (isset($beads_color) && $beads_color == 'Transparent') ? 'selected' : ''; ?>>Transparent</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="beads_count" class="form-label">Beads Count</label>
                                        <input type="number" class="form-control" id="beads_count" name="beads_count"
                                            value="<?php echo isset($beads_count) ? $beads_count : ''; ?>"
                                            min="0" placeholder="Number of beads">
                                    </div>

                                    <div class="mb-3">
                                        <label for="beads_weight" class="form-label">Beads Weight (grams)</label>
                                        <input type="number" step="0.01" class="form-control" id="beads_weight" name="beads_weight"
                                            value="<?php echo isset($beads_weight) ? $beads_weight : ''; ?>"
                                            min="0" placeholder="0.00">
                                    </div>

                                    <div class="mb-3">
                                        <label for="beads_cost" class="form-label">Beads Cost</label>
                                        <input type="number" class="form-control" id="beads_cost" name="beads_cost"
                                            value="<?php echo isset($beads_cost) ? $beads_cost : ''; ?>"
                                            min="0" placeholder="Enter cost">
                                    </div>
                                </div>

                                <button type="submit" name="UpdateBeadsDetails" class="btn btn-primary" style="color: black; width:100%;">Save Details</button>
                            </form>
                        </div>
                    </div>

                    <script>
                        function toggleBeadsDetails() {
                            const checkbox = document.getElementById('beads_available');
                            const section = document.getElementById('beads_details_section');

                            if (checkbox.checked) {
                                section.style.display = 'block';
                            } else {
                                section.style.display = 'none';
                                // Optional: Clear beads detail fields when hiding
                                const beadsFields = section.querySelectorAll('input, select');
                                beadsFields.forEach(field => {
                                    if (field.type !== 'hidden') {
                                        field.value = '';
                                    }
                                });
                            }
                        }
                    </script>






                    <!-- 
==================================================== 

PEARLS DETAILS

====================================================  
-->
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Pearl Details</h6>
                            <form method="POST" action="Control-ProductUpdates.php">
                                <?php echo csrf_token_field(); ?>

                                <!-- Pearl Available Toggle -->
                                <div class="mb-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="pearls_available" name="pearls_available" value="1"
                                            <?php echo (isset($pearls_available) && $pearls_available == 1) ? 'checked' : ''; ?>
                                            onchange="togglePearlDetails()">
                                        <label class="form-check-label" for="pearls_available">
                                            Pearl Available
                                        </label>
                                    </div>
                                </div>

                                <!-- Pearl Details Section (hidden by default if no pearl) -->
                                <div id="pearl_details_section" style="<?php echo (isset($pearls_available) && $pearls_available == 1) ? 'display:block;' : 'display:none;'; ?>">

                                    <div class="mb-3">
                                        <label for="pearls_desc" class="form-label">Pearl Description</label>
                                        <input type="text" class="form-control" id="pearls_desc" name="pearls_desc"
                                            value="<?php echo isset($pearls_desc) ? htmlspecialchars($pearls_desc) : ''; ?>"
                                            maxlength="255" placeholder="Enter pearl description">
                                    </div>

                                    <div class="mb-3">
                                        <label for="pearls_color" class="form-label">Pearl Color</label>
                                        <select class="form-control" id="pearls_color" name="pearls_color">
                                            <option value="">Select Color</option>
                                            <option value="White" <?php echo (isset($pearls_color) && $pearls_color == 'White') ? 'selected' : ''; ?>>White</option>
                                            <option value="Cream" <?php echo (isset($pearls_color) && $pearls_color == 'Cream') ? 'selected' : ''; ?>>Cream</option>
                                            <option value="Silver" <?php echo (isset($pearls_color) && $pearls_color == 'Silver') ? 'selected' : ''; ?>>Silver</option>
                                            <option value="Golden" <?php echo (isset($pearls_color) && $pearls_color == 'Golden') ? 'selected' : ''; ?>>Golden</option>
                                            <option value="Pink" <?php echo (isset($pearls_color) && $pearls_color == 'Pink') ? 'selected' : ''; ?>>Pink</option>
                                            <option value="Black" <?php echo (isset($pearls_color) && $pearls_color == 'Black') ? 'selected' : ''; ?>>Black</option>
                                            <option value="Gray" <?php echo (isset($pearls_color) && $pearls_color == 'Gray') ? 'selected' : ''; ?>>Gray</option>
                                            <option value="Peacock" <?php echo (isset($pearls_color) && $pearls_color == 'Peacock') ? 'selected' : ''; ?>>Peacock</option>
                                            <option value="Lavender" <?php echo (isset($pearls_color) && $pearls_color == 'Lavender') ? 'selected' : ''; ?>>Lavender</option>
                                            <option value="Blue" <?php echo (isset($pearls_color) && $pearls_color == 'Blue') ? 'selected' : ''; ?>>Blue</option>
                                            <option value="Multi-Color" <?php echo (isset($pearls_color) && $pearls_color == 'Multi-Color') ? 'selected' : ''; ?>>Multi-Color</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="pearls_count" class="form-label">Pearl Count</label>
                                        <input type="number" class="form-control" id="pearls_count" name="pearls_count"
                                            value="<?php echo isset($pearls_count) ? $pearls_count : ''; ?>"
                                            min="0" placeholder="Number of pearls">
                                    </div>

                                    <div class="mb-3">
                                        <label for="pearls_weight" class="form-label">Pearl Weight (in grams)</label>
                                        <input type="number" step="0.01" class="form-control" id="pearls_weight" name="pearls_weight"
                                            value="<?php echo isset($pearls_weight) ? $pearls_weight : ''; ?>"
                                            min="0" placeholder="0.00">
                                    </div>

                                    <div class="mb-3">
                                        <label for="pearls_cost" class="form-label">Pearl Cost</label>
                                        <input type="number" class="form-control" id="pearls_cost" name="pearls_cost"
                                            value="<?php echo isset($pearls_cost) ? $pearls_cost : ''; ?>"
                                            min="0" placeholder="Enter pearl cost">
                                    </div>
                                </div>

                                <button type="submit" name="UpdatePearlDetails" class="btn btn-primary" style="color: black; width:100%;">Save Details</button>
                            </form>
                        </div>
                    </div>

                    <script>
                        function togglePearlDetails() {
                            const checkbox = document.getElementById('pearls_available');
                            const section = document.getElementById('pearl_details_section');

                            if (checkbox.checked) {
                                section.style.display = 'block';
                            } else {
                                section.style.display = 'none';
                                // Optional: Clear pearl detail fields when hiding
                                const pearlFields = section.querySelectorAll('input, select');
                                pearlFields.forEach(field => {
                                    if (field.type !== 'hidden') {
                                        field.value = '';
                                    }
                                });
                            }
                        }
                    </script>




                    <!-- 
==================================================== 

Suppliers DETAILS

====================================================  
-->
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Supplier & Manufacturing</h6>
                            <form method="POST" action="Control-ProductUpdates.php">
                                <?php echo csrf_token_field(); ?>
                                <?php
                                include('../db_connect.php');

                                // Assume $product_code is already available in the current context
                                $supplier_id = '';
                                $manufacture_time = '';

                                // Fetch current product's supplier and manufacture_time
                                if (isset($product_code)) {
                                    $stmt = $conn->prepare("SELECT supplier_id, manufacture_time FROM $table_name WHERE product_code = ?");
                                    $stmt->bind_param("s", $product_code);
                                    $stmt->execute();
                                    $stmt->bind_result($supplier_id, $manufacture_time);
                                    $stmt->fetch();
                                    $stmt->close();
                                }

                                // Fetch supplier list for dropdown
                                $supplierOptions = '';
                                $sql = "SELECT id, supplier_name FROM suppliers ORDER BY supplier_name ASC";
                                $result = $conn->query($sql);

                                if ($result && $result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        $selected = ($row['id'] == $supplier_id) ? 'selected' : '';
                                        $supplierOptions .= "<option value='{$row['id']}' $selected>{$row['supplier_name']}</option>";
                                    }
                                } else {
                                    $supplierOptions .= "<option disabled>No suppliers found</option>";
                                }

                                ?>

                                <input type="hidden" name="product_code" value="<?php echo htmlspecialchars($product_code); ?>">

                                <div class="mb-3">
                                    <label for="supplier_id" class="form-label">Supplier:</label>
                                    <select class="form-select" id="supplier_id" name="supplier_id" required>
                                        <option value="">-- Select Supplier --</option>
                                        <?php echo $supplierOptions; ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="manufacture_time" class="form-label">Manufacturing Time:</label>
                                    <input type="text" class="form-control" id="manufacture_time" name="manufacture_time"
                                        value="<?php echo htmlspecialchars($manufacture_time ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>
                                </div>

                                <button type="submit" name="UpdateSupplierDetails" class="btn btn-warning" style="width:100%;">
                                    Save Supplier & Manufacturing Info
                                </button>
                            </form>
                        </div>
                    </div>



                    <!-- 
==================================================== 

TAG DETAILS

====================================================  
-->
                    <?php

                    // Assume $conn is your mysqli connection
                    $product_code = $_SESSION['product_code'];
                    $table_name = $_SESSION['table_name'];
                    // Initialize the existing_tags array
                    $existing_tags = [];

                    if ($product_code !== '') {
                        // Prepare statement to get the tags for given product_code
                        $stmt = $conn->prepare("SELECT tag FROM $table_name WHERE product_code = ?");
                        if ($stmt) {
                            $stmt->bind_param("s", $product_code);
                            $stmt->execute();
                            $stmt->bind_result($tags_str);
                            if ($stmt->fetch()) {
                                if (!empty($tags_str)) {
                                    // Assuming tags are comma-separated in database
                                    $existing_tags = array_map('trim', explode(',', $tags_str));
                                }
                            }
                        } else {
                            // Handle error if prepare fails (optional)
                            error_log("Failed to prepare statement: " . $conn->error);
                        }
                    }


                    ?>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Product Tags</h6>
                            <form method="POST" action="Control-ProductUpdates.php">
                                <?php echo csrf_token_field(); ?>

                                <!-- Tags Section -->
                                <div class="mb-3">
                                    <label for="tag_input" class="form-label">Add Tags</label>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" id="tag_input"
                                            placeholder="Enter tag and press Enter or click Add"
                                            onkeypress="handleTagInput(event)">
                                        <button type="button" class="btn btn-outline-primary" onclick="addTag()">Add</button>
                                    </div>
                                    <small class="form-text text-muted">Press Enter or click Add to add each tag. Click on tags to remove them.</small>
                                </div>

                                <!-- Existing Tags Display with Remove Option -->
                                <div class="mb-3">
                                    <label class="form-label">Existing Tags</label>
                                    <div id="existing_tags_container" class="border rounded p-2" style="min-height: 50px; background-color: #fff3cd;">
                                        <?php if (!empty($existing_tags)): ?>
                                            <?php foreach ($existing_tags as $tag):
                                                $trimmed_tag = trim($tag);
                                                if ($trimmed_tag !== ''): ?>
                                                    <span class="badge bg-warning text-dark me-1 mb-1" style="cursor: pointer;" onclick="removeExistingTag(this)" title="Click to remove">
                                                        <?php echo htmlspecialchars($trimmed_tag); ?> <span>&times;</span>
                                                    </span>
                                            <?php endif;
                                            endforeach; ?>
                                        <?php else: ?>
                                            <small class="text-muted">No existing tags</small>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <!-- New Tags Display Area -->
                                <div class="mb-3">
                                    <label class="form-label">New Tags to Add</label>
                                    <div id="tags_container" class="border rounded p-2" style="min-height: 50px; background-color: #d1ecf1;">
                                        <small class="text-muted">New tags will appear here</small>
                                    </div>
                                    <!-- Hidden input to store new tags as comma-separated string -->
                                    <input type="hidden" id="tags_hidden" name="product_tags" value="">
                                    <!-- Hidden input to store existing tags after user removes -->
                                    <input type="hidden" id="existing_tags_hidden" name="existing_product_tags" value="<?php echo htmlspecialchars(implode(',', $existing_tags)); ?>">
                                </div>

                                <button type="submit" name="UpdateProductTags" class="btn btn-primary" style="color: black; width:100%;">Save Tags</button>
                            </form>
                        </div>
                    </div>

                    <script>
                        // Initialize from PHP
                        let newTags = []; // For new tags added in this session
                        let existingTags = <?php echo json_encode($existing_tags); ?>;

                        function handleTagInput(event) {
                            if (event.key === 'Enter') {
                                event.preventDefault();
                                addTag();
                            }
                        }

                        function addTag() {
                            const input = document.getElementById('tag_input');
                            const tagValue = input.value.trim();

                            // Check tag is not empty and not in any array already
                            if (tagValue && !existingTags.includes(tagValue) && !newTags.includes(tagValue)) {
                                newTags.push(tagValue);
                                updateNewTagsDisplay();
                                input.value = '';
                            } else if (existingTags.includes(tagValue) || newTags.includes(tagValue)) {
                                alert('Tag already exists!');
                            }
                        }

                        function removeExistingTag(element) {
                            const tagText = element.textContent.replace(' ×', '').trim();
                            const index = existingTags.indexOf(tagText);
                            if (index > -1) {
                                existingTags.splice(index, 1);
                                element.remove();

                                // Update hidden input with new existing tags CSV
                                const existingHiddenInput = document.getElementById('existing_tags_hidden');
                                existingHiddenInput.value = existingTags.join(',');

                                const container = document.getElementById('existing_tags_container');
                                if (existingTags.length === 0) {
                                    container.innerHTML = '<small class="text-muted">No existing tags</small>';
                                }
                            }
                        }

                        function removeNewTag(element) {
                            const tagText = element.textContent.replace(' ×', '').trim();
                            const index = newTags.indexOf(tagText);
                            if (index > -1) {
                                newTags.splice(index, 1);
                                updateNewTagsDisplay();
                            }
                        }

                        function updateNewTagsDisplay() {
                            const container = document.getElementById('tags_container');
                            const hiddenInput = document.getElementById('tags_hidden');

                            container.innerHTML = '';

                            if (newTags.length === 0) {
                                container.innerHTML = '<small class="text-muted">New tags will appear here</small>';
                            } else {
                                newTags.forEach(tag => {
                                    const badge = document.createElement('span');
                                    badge.className = 'badge bg-info text-dark me-1 mb-1';
                                    badge.style.cursor = 'pointer';
                                    badge.innerHTML = `${tag} <span>&times;</span>`;
                                    badge.onclick = function() {
                                        removeNewTag(this);
                                    };
                                    badge.title = 'Click to remove';
                                    container.appendChild(badge);
                                });
                            }

                            // Update hidden input with comma-separated string of new tags only
                            hiddenInput.value = newTags.join(',');
                        }
                    </script>




                    <!-- ============================================================================================================================================
XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

                                  END OF FILE HERE

XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
============================================================================================================================================ -->
                    <!-- Footer Start -->
                    <?php include_once('includes/footer.php'); ?>