<?php

include('../db_connect.php');
include('functions.php');

if (!isset($_SESSION)) {
    session_start();
}

if (!empty($_SESSION['username'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['metal_type']) && isset($_POST['purity']) && isset($_POST['category'])) {

        if (!isset($_POST['csrf_token']) || !verify_csrf_token($_POST['csrf_token'])) {
            echo "Invalid CSRF Token";
            exit();
        }


        $brand_id = $_POST['brand'];
        $Fetch_query = "SELECT name,code FROM product_code_prefix WHERE pc_prefix_id = ?";
        if ($stmt = $conn->prepare($Fetch_query)) {
            $stmt->bind_param("i", $brand_id);
            $stmt->execute();
            $stmt->bind_result($brand_name, $brand_code);

            if ($stmt->fetch()) {
                // Use the fetched value
                //echo "Metal Name: " . $metal_name;
            } else {
                //echo "No metal found with ID: " . $metal_id;
            }
            $stmt->close();
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
            $stmt->bind_result($metalpurity);
            if ($stmt->fetch()) {
                // Use the fetched value
                //echo "Metal Name: " . $metal_name;
            } else {
                //echo "No metal found with ID: " . $metal_id;
            }
            $stmt->close();
        }



        $category_id = $_POST['category'];
        $Fetch_query = "SELECT name FROM categories WHERE cat_id = ?";
        if ($stmt = $conn->prepare($Fetch_query)) {
            $stmt->bind_param("i", $category_id);
            $stmt->execute();
            $stmt->bind_result($cat_name);

            if ($stmt->fetch()) {
                // Use the fetched value
                //echo "Metal Name: " . $metal_name;
            } else {
                //echo "No metal found with ID: " . $metal_id;
            }
            $stmt->close();
        }

        // $_SESSION["metal_id"] =  $_POST['metal_type'];
        // $_SESSION["metal_id"] =  $_POST['metal_type'];
        // $_SESSION["silver_metal_id"] = $_POST['purity'];
        // $_SESSION["sil_cat_id"] = $_POST['category'];

        $errors = [];


        $product_code = generateProductCode2($conn, $brand_code, $metal_id, $metalpurity_id, $category_id);

        $table_name = tableNameGenerator($metal_id, $metalpurity_id, $category_id);
        // try{
        //     echo $table_name;
        // }catch (Exception $e){
        //     echo "An exception occurred: " . $e->getMessage();
        // }

        // Build Path
        switch ($metal_id) {
            case 1:
                $loc_metal_name = "gold";
                break;
            case 2:
                $loc_metal_name = "silver";
                break;


            default:
                # code...
                break;
        }

        switch ($metalpurity_id) {
            case 1:
                $metalpurity_loc = "standard_silver";
                break;

            case 2:
                $metalpurity_loc = "925_silver";
                break;

            case 3:
                $metalpurity_loc = "rosegold_silver";
                break;

            case 4:
                $metalpurity_loc = "18k_gold";
                break;

            case 5:
                $metalpurity_loc = "22K_gold";
                break;

            case 6:
                $metalpurity_loc = "18kd_gold";
                break;

            default:
                #
                break;
        }

        $baseUploadDir = 'product_images';
        $metalDir = $loc_metal_name . '/' . $metalpurity_loc;
        $categoryDir = $table_name;
        $file_location = "$baseUploadDir/$metalDir/$categoryDir/";

        // WebP directory structure
        $webp_file_location = "product_images/webp/$metalDir/$categoryDir/";

        //echo $file_location;


        // Upload Image
        if (!empty($file_location) && isset($_FILES['product_image']) && $_FILES['product_image']['error'] === UPLOAD_ERR_OK) {
            $fileTmpPath = $_FILES['product_image']['tmp_name'];
            $fileName = $_FILES['product_image']['name'];
            $fileSize = $_FILES['product_image']['size'];
            $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

            // 1. Strict Allow-list for Extensions
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp'];
            if (!in_array($fileExtension, $allowedExtensions)) {
                $errors[] = "Error: Invalid file extension. Only JPG, JPEG, PNG, and WEBP are allowed.";
            }

            // 2. Strict MIME Type Check
            $finfo = new finfo(FILEINFO_MIME_TYPE);
            $mimeType = $finfo->file($fileTmpPath);
            $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/webp'];

            if (!in_array($mimeType, $allowedMimeTypes)) {
                $errors[] = "Error: Invalid file type ($mimeType).";
            }

            // 3. Size Check (e.g., 5MB)
            if ($fileSize > 5 * 1024 * 1024) {
                $errors[] = "Error: File size too large (Max 5MB).";
            }

            if (empty($errors)) {
                $newFileName = $product_code . '.' . $fileExtension;
                $destPath = $file_location . $newFileName;

                // WebP file paths
                $webpFileName = $product_code . '.webp';
                $webpDestPath = $webp_file_location . $webpFileName;

                // Proceed with logic...


?>
                <script>
                    console.log("Temp file:", "<?php echo $fileTmpPath; ?>");
                    console.log("Destination path:", "<?php echo $destPath; ?>");
                    console.log("WebP destination path:", "<?php echo $webpDestPath; ?>");
                </script>
<?php

                // Create original image directory
                if (!is_dir($file_location)) {
                    if (!mkdir($file_location, 0755, true)) {
                        $errors[] = "Error: Failed to create directory '$file_location'.";
                        echo "<script>console.error('Failed to create directory');</script>";
                    } else {
                        echo "<script>console.log('Directory created:', '$file_location');</script>";
                    }
                }

                // Create WebP directory
                if (!is_dir($webp_file_location)) {
                    if (!mkdir($webp_file_location, 0755, true)) {
                        $errors[] = "Error: Failed to create WebP directory '$webp_file_location'.";
                        echo "<script>console.error('Failed to create WebP directory');</script>";
                    } else {
                        echo "<script>console.log('WebP Directory created:', '$webp_file_location');</script>";
                    }
                }

                if (!is_writable($file_location)) {
                    $errors[] = "Error: Directory '$file_location' is not writable.";
                    echo "<script>console.error('Directory not writable');</script>";
                }

                if (!is_writable($webp_file_location)) {
                    $errors[] = "Error: WebP Directory '$webp_file_location' is not writable.";
                    echo "<script>console.error('WebP Directory not writable');</script>";
                }

                // Move original file
                if (empty($errors) && !move_uploaded_file($fileTmpPath, $destPath)) {
                    $errors[] = "Error: Failed to move uploaded file.";
                    echo "<script>console.error('Failed to move uploaded file');</script>";
                } else {
                    echo "<script>console.log('File uploaded to:', '$destPath');</script>";

                    // Convert to WebP if original upload was successful
                    if (empty($errors)) {
                        $webpConversionSuccess = convertToWebP($destPath, $webpDestPath);

                        if ($webpConversionSuccess) {
                            echo "<script>console.log('WebP conversion successful:', '$webpDestPath');</script>";
                        } else {
                            $errors[] = "Error: Failed to convert image to WebP format.";
                            echo "<script>console.error('WebP conversion failed');</script>";
                        }
                    }
                }
            }
        } elseif (isset($_FILES['product_image']) && $_FILES['product_image']['error'] !== UPLOAD_ERR_NO_FILE) {
            $uploadErrors = [
                UPLOAD_ERR_INI_SIZE => "File too large.",
                UPLOAD_ERR_FORM_SIZE => "File too large.",
                UPLOAD_ERR_PARTIAL => "File only partially uploaded.",
                UPLOAD_ERR_CANT_WRITE => "Cannot write file to disk.",
                UPLOAD_ERR_EXTENSION => "Upload stopped by extension."
            ];
            $uploadErrorCode = $_FILES['product_image']['error'];
            $uploadErrorMessage = $uploadErrors[$uploadErrorCode] ?? "Unknown upload error.";
            $errors[] = "Error: $uploadErrorMessage";
            echo "<script>console.error('Upload error:', '$uploadErrorMessage');</script>";
        } else {
            $errors[] = "Product image is required.";
            echo "<script>console.warn('No image uploaded');</script>";
        }

        try {
            // Insert into unified products table
            // We set initial basic fields. Assuming 'name' can be the Product Code initially or empty if not provided yet. 
            // The previous code didn't insert 'name', it was done in AddProductDetails2.php? 
            // No, AddProduct2db.php was inserting into dynamic tables. Let's see what it was inserting.
            // It was inserting (product_code, metal_id, metalpurity_id, cat_id, img2, img1_webp).
            // Unified `products` table has 'name' and 'slug' as NOT NULL. We must provide them.
            $initialName = $product_code; // Placeholder
            $initialSlug = $product_code; // Placeholder

            $Insert_query = "INSERT INTO products (product_code, metal_id, metal_purity_id, category_id, name, slug, created_at, updated_at) VALUES (?,?,?,?,?,?, NOW(), NOW())";

            $inserted_product_id = 0;

            if ($stmt = $conn->prepare($Insert_query)) {
                $stmt->bind_param("siiiss", $product_code, $metal_id, $metalpurity_id, $category_id, $initialName, $initialSlug);

                if ($stmt->execute()) {
                    $inserted_product_id = $conn->insert_id;
                    echo "---New product inserted successfully into unified table!";
                } else {
                    echo "Error inserting into products table: " . $stmt->error;
                    $errors[] = "Database Error: " . $stmt->error;
                }
                $stmt->close();
            } else {
                echo "Error preparing statement: " . $conn->error;
                $errors[] = "Statement Preparation Error: " . $conn->error;
            }

            // Insert into product_images table if product was created
            if ($inserted_product_id > 0) {
                $Insert_Image_Query = "INSERT INTO product_images (product_id, image_path, is_primary, created_at) VALUES (?, ?, 1, NOW())";
                if ($stmtImg = $conn->prepare($Insert_Image_Query)) {
                    $stmtImg->bind_param("is", $inserted_product_id, $destPath); // Storing original path as primary for now.
                    // WebP? `product_images` doesn't strictly separate webp, but usually we store the main path. 
                    // We could add another entry for WebP or handle it in the `image_path` convention.
                    // For now, storing the main image path.
                    $stmtImg->execute();
                    $stmtImg->close();
                }
            }

            if (empty($errors)) {
                // Redirect to next step
                // NOTE: AddProductDetails2.php will need refactoring to handle 'products' table.
                header("Location: AddProductDetails2.php?product_code=" . urlencode($product_code) . "&table_name=products");
                exit();
            }
        } catch (Exception $e) {
            echo "An exception occurred: " . $e->getMessage();
        }


        if (!empty($errors)):
            echo '<div class="alert alert-danger">';
            echo '<ul>';
            foreach ($errors as $error):
                echo '<li>' . $error . '</li>';
            endforeach;
            echo '</ul>';
            echo '</div>';
        endif;
    }



    if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['SearchProduct'])) {
        $product_code = $_POST['product_code'];
        $product_code = strtoupper($product_code);
        try {
            $Fetch_query = "SELECT table_name FROM product_codes WHERE UPPER(full_code) = ?";
            if ($stmt = $conn->prepare($Fetch_query)) {
                $stmt->bind_param("s", $product_code);
                if ($stmt->execute()) {
                    $stmt->bind_result($table_name);
                    if ($stmt->fetch()) {
                        // Now that $table_name has a value, you can use it for redirection
                        header("Location: AddProductDetails2.php?product_code=" . urlencode($product_code) . "&table_name=" . urlencode($table_name));
                        exit();
                    } else {
                        // No rows were found for the given product code
                        echo "No matching product code found in the database for: " . $product_code . "<br>";
                    }

                    // header("Location: AddProductDetails2.php?product_code=" . urlencode($product_code) . "&table_name=" . urlencode($table_name));
                    // exit();
                } else {
                    echo "Error fetching category: " . $stmt->error;
                }
                $stmt->close();
            } else {
                echo "Error preparing statement: " . $conn->error;
            }
        } catch (Exception $e) {
            echo "An exception occurred: " . $e->getMessage();
        }
    }
}


?>