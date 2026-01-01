<?php
include('../db_connect.php');
include('functions.php');

if (!isset($_SESSION)) {
    session_start();
}



if (!empty($_SESSION['username'])) {
    //==================================================================================================================
    //                                                START ADDING HERE
    //==================================================================================================================


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!isset($_POST['csrf_token']) || !verify_csrf_token($_POST['csrf_token'])) {
            echo "<script>alert('Invalid CSRF Token. Please refresh and try again.'); history.back();</script>";
            exit();
        }
    }

    //===============================================================================UpdateBasicProductDetails======================
    if (isset($_POST['UpdateBasicProductDetails'])) {
        $errors = [];
?>
        <script>
            console.log("---- Update Basic Product Details Operation Started ----");
        </script>
        <?php
        // Retrieve form data
        $product_code = $_SESSION['product_code'];
        $table_name = $_SESSION['table_name'];
        ?>
        <script>
            console.log("product_code:", "<?php echo $product_code; ?>");
            console.log("table_name:", "<?php echo $table_name; ?>");
        </script>
        <?php
        $name = trim($_POST['name']);
        $description = trim($_POST['description']);
        $stockQuantity = trim($_POST['stock_quantity']);
        $size = trim($_POST['size']);
        $gender = trim($_POST['gender']);

        // Validation
        if (empty($name)) $errors[] = "Product Name is required.";
        if (empty($stockQuantity)) $errors[] = "Stock Quantity is required.";

        // Final Insert
        if (empty($errors)) {
            $stmt = $conn->prepare("UPDATE $table_name SET name = ?, description = ?, gender = ?, size = ?, stock_quantity = ? WHERE product_code = ?");
            $stmt->bind_param("ssssis", $name, $description, $gender, $size, $stockQuantity, $product_code);

            if ($stmt->execute()) {
                echo "<script>console.log('Basic Product Details Updated successfully');</script>";
                header("Location: AddProductDetails2.php?product_code=" . urlencode($product_code) . "&table_name=" . urlencode($table_name));
                exit;
            } else {
                echo "<script>console.error('DB update failed:', '" . $stmt->error . "');</script>";
            }
            $stmt->close();
        }

        if (!empty($errors)) {
            echo "<ul>";
            foreach ($errors as $error) {
                echo "<li>" . htmlspecialchars($error) . "</li>";
                echo "<script>console.error(" . json_encode($error) . ");</script>";
            }
            echo "</ul>";
        }
    }

    //===============================================================================UpdateBasicProductDetails======================





    //===============================================================================Update Weight Details======================


    if (isset($_POST['UpdateWeightDetails'])) {
        $errors = [];
        ?>
        <script>
            console.log("---- UpdateWeightDetails Operation Started ----");
        </script>
        <?php
        // Retrieve form data
        $product_code = $_SESSION['product_code'];
        $table_name = $_SESSION['table_name'];
        ?>
        <script>
            console.log("product_code:", "<?php echo $product_code; ?>");
            console.log("table_name:", "<?php echo $table_name; ?>");
        </script>
        <?php
        $net_weight = trim($_POST['net_weight']);
        $gross_weight = trim($_POST['gross_weight']);

        ?><script>
            console.log("GW:", "<?php echo $gross_weight; ?>");
        </script><?php

                    showpop("here");
                    if ($gross_weight == 0) {
                        $gross_weight = $net_weight;
                    } else {
                    }
                    // Option 1: Using the null coalescing operator (PHP 7.0+) - Recommended
                    // $TypeSBD = trim($_POST['TypeSBD'] ?? ''); // Defaults to empty string if not set or null
                    // //echo $TypeSBD;
                    // $count = $_POST['count'] ?? null;        // Defaults to null if not set or null
                    // $cent = $_POST['cent'] ?? null;          // Defaults to null if not set or null
                    // $per_unit_cost = $_POST['per_unit_cost'] ?? null; // Defaults to null if not set or null
                    // if($_POST['TypeSBD'] == 'Nothing'){
                    //     $is_stone_bead_diamonds = 0;
                    // }else{
                    //     $is_stone_bead_diamonds = 1;
                    // }

                    //echo $is_stone_bead_diamonds;


                    // Validation
                    //if (empty($weight)) $errors[] = "weight is required.";
                    //if (empty($stockQuantity)) $errors[] = "Stock Quantity is required.";

                    // Final Insert
                    if (empty($errors)) {
                        $stmt = $conn->prepare("UPDATE $table_name SET net_weight = ?, gross_weight = ? WHERE product_code = ?");
                        $stmt->bind_param("dds", $net_weight, $gross_weight, $product_code);

                        if ($stmt->execute()) {
                            echo "<script>console.log('Basic Weight Details Updated successfully');</script>";
                            header("Location: AddProductDetails2.php?product_code=" . urlencode($product_code) . "&table_name=" . urlencode($table_name));
                            exit;
                        } else {
                            echo "<script>console.error('DB update failed:', '" . $stmt->error . "');</script>";
                        }
                        $stmt->close();
                    }

                    // if (empty($errors)) {
                    //     $stmt = $conn->prepare("UPDATE $table_name SET weight = ?, is_stone_bead_diamonds = ?, type = ?, count = ?, cent = ?, per_unit_cost = ? WHERE product_code = ?");
                    //     $stmt->bind_param("iisdids", $weight, $is_stone_bead_diamonds, $TypeSBD, $count, $cent, $per_unit_cost,$product_code);

                    //     if ($stmt->execute()) {
                    //         echo "<script>console.log('Basic Weight Details Updated successfully');</script>";
                    //         header("Location: AddProductDetails2.php?product_code=" . urlencode($product_code) . "&table_name=" . urlencode($table_name));
                    //         exit;
                    //     } else {
                    //         echo "<script>console.error('DB update failed:', '" . $stmt->error . "');</script>";
                    //     }
                    //     $stmt->close();
                    // }

                    if (!empty($errors)) {
                        echo "<ul>";
                        foreach ($errors as $error) {
                            echo "<li>" . htmlspecialchars($error) . "</li>";
                            echo "<script>console.error(" . json_encode($error) . ");</script>";
                        }
                        echo "</ul>";
                    }
                }





                // //===============================================================================Update Image======================

                //     if($_SERVER["REQUEST_METHOD"] == "POST" AND isset($_POST['UpdateImage']))
                //     {
                //         $product_code = $_SESSION['product_code'];
                //         $table_name = $_SESSION['table_name'];

                //         $Query = "SELECT metal_id, metalpurity_id, cat_id FROM $table_name WHERE product_code = ?";

                //         if ($stmt = $conn->prepare($Query)) {
                //             $stmt->bind_param("s", $product_code);
                //             $stmt->execute();
                //             $result = $stmt->get_result();

                //             if ($fetched_data = $result->fetch_assoc()) {
                //                 $metal_id = $fetched_data['metal_id'];
                //                 $metalpurity_id = $fetched_data['metalpurity_id'];
                //                 $cat_id = $fetched_data['cat_id'];
                //             } else {
                //                 echo "No data found for product code: " . $product_code;
                //             }
                //             $stmt->close();
                //         } else {
                //             echo "Error preparing statement: " . $conn->error;
                //         }

                //         $errors = [];

                //         // Build Path
                //         switch ($metal_id) {
                //             case 1:
                //                 $loc_metal_name = "gold";
                //                 break;
                //             case 2:
                //                 $loc_metal_name = "silver";
                //                 break;


                //             default:
                //                 # code...
                //                 break;
                //         }

                //         switch ($metalpurity_id) {
                //             case 1:
                //                 $metalpurity_loc = "standard_silver";
                //                 break;

                //             case 2:
                //                 $metalpurity_loc = "925_silver";
                //                 break;

                //             case 3:
                //                 $metalpurity_loc = "rosegold_silver";
                //                 break;

                //             case 4:
                //                 $metalpurity_loc = "18k_gold";
                //                 break;

                //             case 5:
                //                 $metalpurity_loc = "22K_gold";
                //                 break;

                //             case 6:
                //                 $metalpurity_loc = "18kd_gold";
                //                 break;

                //             default:
                //                 #
                //                 break;
                //         }

                //         $baseUploadDir = 'product_images';
                //         $metalDir = $loc_metal_name.'/'.$metalpurity_loc;
                //         $categoryDir = $table_name;
                //         $file_location = "$baseUploadDir/$metalDir/$categoryDir/";

                //         //echo $file_location;


                //         // Upload Image
                //         if (!empty($file_location) && isset($_FILES['product_image']) && $_FILES['product_image']['error'] === UPLOAD_ERR_OK) {
                //             $fileTmpPath = $_FILES['product_image']['tmp_name'];
                //             $fileName = $_FILES['product_image']['name'];
                //             $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
                //             $newFileName = $product_code . '.' . $fileExtension;
                //             $destPath = $file_location . $newFileName;

                //             
                    ?>
    // <script>
        //                 console.log("Temp file:", "<?php echo $fileTmpPath; ?>");
        //                 console.log("Destination path:", "<?php echo $destPath; ?>");
        //             
    </script>
    // <?php

        //             if (!is_dir($file_location)) {
        //                 if (!mkdir($file_location, 0755, true)) {
        //                     $errors[] = "Error: Failed to create directory '$file_location'.";
        //                     echo "<script>console.error('Failed to create directory');</script>";
        //                 } else {
        //                     echo "<script>console.log('Directory created:', '$file_location');</script>";
        //                 }
        //             }

        //             if (!is_writable($file_location)) {
        //                 $errors[] = "Error: Directory '$file_location' is not writable.";
        //                 echo "<script>console.error('Directory not writable');</script>";
        //             }

        //             if (empty($errors) && !move_uploaded_file($fileTmpPath, $destPath)) {
        //                 $errors[] = "Error: Failed to move uploaded file.";
        //                 echo "<script>console.error('Failed to move uploaded file');</script>";
        //             } else {
        //                 echo "<script>console.log('File uploaded to:', '$destPath');</script>";
        //             }
        //         } elseif (isset($_FILES['product_image']) && $_FILES['product_image']['error'] !== UPLOAD_ERR_NO_FILE) {
        //             $uploadErrors = [
        //                 UPLOAD_ERR_INI_SIZE => "File too large.",
        //                 UPLOAD_ERR_FORM_SIZE => "File too large.",
        //                 UPLOAD_ERR_PARTIAL => "File only partially uploaded.",
        //                 UPLOAD_ERR_CANT_WRITE => "Cannot write file to disk.",
        //                 UPLOAD_ERR_EXTENSION => "Upload stopped by extension."
        //             ];
        //             $uploadErrorCode = $_FILES['product_image']['error'];
        //             $uploadErrorMessage = $uploadErrors[$uploadErrorCode] ?? "Unknown upload error.";
        //             $errors[] = "Error: $uploadErrorMessage";
        //             echo "<script>console.error('Upload error:', '$uploadErrorMessage');</script>";
        //         } else {
        //             $errors[] = "Product image is required.";
        //             echo "<script>console.warn('No image uploaded');</script>";
        //         }

        //         try{
        //             $Update_Query = "UPDATE $table_name SET img2 = ? WHERE product_code = ?";
        //             if ($stmt = $conn->prepare($Update_Query)) {
        //                 // 3. Bind parameters to the placeholders
        //                 // "ss" indicates that both parameters are strings (s = string, i = integer, d = double, b = blob)
        //                 $defaultimg = "product_images/default.jpg";
        //                 $stmt->bind_param("ss", $destPath, $product_code);

        //                 // 4. Execute the prepared statement
        //                 if ($stmt->execute()) {
        //                     echo "---Updated New photo successfully!";
        //                     // You can also get the ID of the newly inserted row if it's an auto-incrementing primary key
        //                     // echo "New record has ID: " . $stmt->insert_id;
        //                     // IMPORTANT: Always exit after a header redirect to prevent further code execution
        //                     header("Location: AddProductDetails2.php?product_code=" . urlencode($product_code) . "&table_name=" . urlencode($table_name));
        //                     exit();
        //                 } else {
        //                     echo "Error updating photo: " . $stmt->error;
        //                 }

        //                 // 5. Close the statement
        //                 $stmt->close();
        //             } else {
        //                 echo "Error preparing statement: " . $conn->error;
        //             }
        //         }catch (Exception $e){
        //             echo "An exception occurred: " . $e->getMessage();
        //         }


        //         if (!empty($errors)): 
        //             echo '<div class="alert alert-danger">';
        //                 echo '<ul>';
        //                     foreach ($errors as $error):
        //                         echo '<li>'.$error.'</li>';
        //                     endforeach;
        //                 echo '</ul>';
        //             echo '</div>';
        //         endif;
        //     }


        //===============================================================================Update Image======================


        if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['UpdateImage'])) {
            $product_code = $_SESSION['product_code'];
            $table_name = $_SESSION['table_name'];

            if ($table_name === 'products') {
                $Query = "SELECT metal_id, metal_purity_id as metalpurity_id, category_id as cat_id FROM products WHERE product_code = ?";
            } else {
                $Query = "SELECT metal_id, metalpurity_id, cat_id FROM $table_name WHERE product_code = ?";
            }

            if ($stmt = $conn->prepare($Query)) {
                $stmt->bind_param("s", $product_code);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($fetched_data = $result->fetch_assoc()) {
                    $metal_id = $fetched_data['metal_id'];
                    $metalpurity_id = $fetched_data['metalpurity_id'];
                    $cat_id = $fetched_data['cat_id'];
                } else {
                    echo "No data found for product code: " . $product_code;
                }
                $stmt->close();
            } else {
                echo "Error preparing statement: " . $conn->error;
            }

            $errors = [];

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
                // Update both original image path and WebP path
                // Update both original image path and WebP path
                if ($table_name === 'products') {
                    // Fetch product_id first
                    $idQuery = "SELECT id FROM products WHERE product_code = ?";
                    $productId = 0;
                    if ($stmtId = $conn->prepare($idQuery)) {
                        $stmtId->bind_param("s", $product_code);
                        $stmtId->execute();
                        $stmtId->bind_result($productId);
                        $stmtId->fetch();
                        $stmtId->close();
                    }

                    if ($productId > 0) {
                        // Check if image exists
                        $checkImg = "SELECT id FROM product_images WHERE product_id = ? AND is_primary = 1";
                        $existingImgId = 0;
                        if ($stmtCheck = $conn->prepare($checkImg)) {
                            $stmtCheck->bind_param("i", $productId);
                            $stmtCheck->execute();
                            $stmtCheck->bind_result($existingImgId);
                            $stmtCheck->fetch();
                            $stmtCheck->close();
                        }

                        if ($existingImgId > 0) {
                            $Update_Query = "UPDATE product_images SET image_path = ?, updated_at = NOW() WHERE id = ?";
                            $stmt = $conn->prepare($Update_Query);
                            $stmt->bind_param("si", $destPath, $existingImgId);
                        } else {
                            $Update_Query = "INSERT INTO product_images (product_id, image_path, is_primary, created_at) VALUES (?, ?, 1, NOW())";
                            $stmt = $conn->prepare($Update_Query);
                            $stmt->bind_param("is", $productId, $destPath);
                        }

                        if ($stmt->execute()) {
                            echo "---Updated New photo successfully (Unified)!";
                            header("Location: AddProductDetails2.php?product_code=" . urlencode($product_code) . "&table_name=" . urlencode($table_name));
                            exit();
                        } else {
                            echo "Error updating photo: " . $stmt->error;
                        }
                        $stmt->close();
                    } else {
                        echo "Error: Product ID not found for code $product_code";
                    }
                } else {
                    // Legacy Update
                    $Update_Query = "UPDATE $table_name SET img2 = ?, img1_webp = ? WHERE product_code = ?";
                    if ($stmt = $conn->prepare($Update_Query)) {
                        // Bind parameters - added WebP path parameter
                        $webpPath = isset($webpDestPath) ? $webpDestPath : null;
                        $stmt->bind_param("sss", $destPath, $webpPath, $product_code);

                        // Execute the prepared statement
                        if ($stmt->execute()) {
                            echo "---Updated New photo successfully!";
                            header("Location: AddProductDetails2.php?product_code=" . urlencode($product_code) . "&table_name=" . urlencode($table_name));
                            exit();
                        } else {
                            echo "Error updating photo: " . $stmt->error;
                        }

                        // Close the statement
                        $stmt->close();
                    } else {
                        echo "Error preparing statement: " . $conn->error;
                    }
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








        //==================================================================================================================
        //                                                UPDATE STONE DETAILS HERE
        //==================================================================================================================

        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['UpdateStoneDetails'])) {

            $product_code = $_SESSION['product_code'];
            $table_name = $_SESSION['table_name'];

            // Get form data and sanitize
            $product_id = $product_code;
            $stone_available = isset($_POST['stone_available']) ? 1 : 0;

            // Stone details (only if stone is available)
            $stone_desc = isset($_POST['stone_desc']) ? mysqli_real_escape_string($conn, trim($_POST['stone_desc'])) : '';
            $stone_color = isset($_POST['stone_color']) ? mysqli_real_escape_string($conn, trim($_POST['stone_color'])) : '';
            $stone_shape = isset($_POST['stone_shape']) ? mysqli_real_escape_string($conn, trim($_POST['stone_shape'])) : '';
            $stone_count = isset($_POST['stone_count']) ? intval($_POST['stone_count']) : null;
            $stone_weight = isset($_POST['stone_weight']) ? floatval($_POST['stone_weight']) : null;
            $stone_cost = isset($_POST['stone_cost']) ? floatval($_POST['stone_cost']) : null;


            // If stone is not available, set stone fields to NULL
            if ($stone_available == 0) {
                $stone_desc = '';
                $stone_color = '';
                $stone_shape = '';
                $stone_count = null;
                $stone_weight = null;
                $stone_cost = null;
            }

            // Start transaction
            mysqli_begin_transaction($conn);

            try {
                // Update the product details
                $sql = "UPDATE $table_name SET 
                    stone_available = ?,
                    stone_desc = ?,
                    stone_color = ?,
                    stone_shape = ?,
                    stone_count = ?,
                    stone_weight = ?,
                    stone_cost = ?,
                    updated_at = NOW()
                WHERE product_code = ?";

                $stmt = mysqli_prepare($conn, $sql);

                if (!$stmt) {
                    throw new Exception("Prepare failed: " . mysqli_error($conn));
                }

                // Bind parameters
                mysqli_stmt_bind_param(
                    $stmt,
                    "isssiidi",
                    $stone_available,
                    $stone_desc,
                    $stone_color,
                    $stone_shape,
                    $stone_count,
                    $stone_weight,
                    $stone_cost,
                    $product_code
                );

                // Execute the statement
                if (!mysqli_stmt_execute($stmt)) {
                    throw new Exception("Execute failed: " . mysqli_stmt_error($stmt));
                }

                // Check if any rows were affected
                if (mysqli_stmt_affected_rows($stmt) == 0) {
                    throw new Exception("No product found with the given ID or no changes made.");
                }

                // Close statement
                mysqli_stmt_close($stmt);

                // Commit transaction
                mysqli_commit($conn);

                // Set success message
                $_SESSION['success'] = "Product details updated successfully!";

                // Redirect back to the form or to a success page
                header("Location: AddProductDetails2.php?product_code=" . urlencode($product_code) . "&table_name=" . urlencode($table_name));
                exit();
            } catch (Exception $e) {
                // Rollback transaction on error
                mysqli_rollback($conn);

                // Set error message
                $_SESSION['error'] = "Error updating product: " . $e->getMessage();

                // Redirect back to the form
                header("Location: AddProductDetails2.php?product_code=" . urlencode($product_code) . "&table_name=" . urlencode($table_name));
                exit();
            }
        }

        // else {
        //     // If accessed directly without form submission
        //     $_SESSION['error'] = "Invalid request method.";
        //     header("Location: AddProductDetails2.php?product_code=" . urlencode($product_code) . "&table_name=" . urlencode($table_name)); // Redirect to main page or appropriate page
        //     exit();
        // }








        //==================================================================================================================
        //                                                UPDATE DIAMONDS DETAILS HERE
        //==================================================================================================================
        // Check if form is submitted for diamond details
        if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['UpdateDiamondDetails'])) {

            $product_code = $_SESSION['product_code'];
            $table_name = $_SESSION['table_name'];

            // Get form data and sanitize
            $product_id = $product_code;
            $diamond_available = isset($_POST['diamond_available']) ? 1 : 0;

            // Diamond details (only if diamond is available)
            $dia_desc = isset($_POST['dia_desc']) ? mysqli_real_escape_string($conn, trim($_POST['dia_desc'])) : '';
            $dia_cent = isset($_POST['dia_cent']) ? floatval($_POST['dia_cent']) : null;
            $dia_count = isset($_POST['dia_count']) ? intval($_POST['dia_count']) : null;
            $dia_cut = isset($_POST['dia_cut']) ? mysqli_real_escape_string($conn, trim($_POST['dia_cut'])) : '';
            $dia_color = isset($_POST['dia_color']) ? mysqli_real_escape_string($conn, trim($_POST['dia_color'])) : '';
            $dia_clarity = isset($_POST['dia_clarity']) ? mysqli_real_escape_string($conn, trim($_POST['dia_clarity'])) : '';
            $dia_shape = isset($_POST['dia_shape']) ? mysqli_real_escape_string($conn, trim($_POST['dia_shape'])) : '';


            // If diamond is not available, set diamond fields to NULL/empty
            if ($diamond_available == 0) {
                $dia_desc = '';
                $dia_cent = null;
                $dia_count = null;
                $dia_cut = '';
                $dia_color = '';
                $dia_clarity = '';
                $dia_shape = '';
            }

            // Start transaction
            mysqli_begin_transaction($conn);

            try {
                // Update the product details with diamond information
                $sql = "UPDATE $table_name SET 
                    diamond_available = ?,
                    dia_desc = ?,
                    dia_cent = ?,
                    dia_count = ?,
                    dia_cut = ?,
                    dia_color = ?,
                    dia_clarity = ?,
                    dia_shape = ?,
                    updated_at = NOW()
                WHERE product_code = ?";

                $stmt = mysqli_prepare($conn, $sql);

                if (!$stmt) {
                    throw new Exception("Prepare failed: " . mysqli_error($conn));
                }

                // Bind parameters
                mysqli_stmt_bind_param(
                    $stmt,
                    "isdisisss",
                    $diamond_available,
                    $dia_desc,
                    $dia_cent,
                    $dia_count,
                    $dia_cut,
                    $dia_color,
                    $dia_clarity,
                    $dia_shape,
                    $product_code
                );

                // Execute the statement
                if (!mysqli_stmt_execute($stmt)) {
                    throw new Exception("Execute failed: " . mysqli_stmt_error($stmt));
                }

                // Check if any rows were affected
                if (mysqli_stmt_affected_rows($stmt) == 0) {
                    throw new Exception("No product found with the given ID or no changes made.");
                }

                // Close statement
                mysqli_stmt_close($stmt);

                // Commit transaction
                mysqli_commit($conn);

                // Set success message
                $_SESSION['success'] = "Diamond details updated successfully!";

                // Redirect back to the form or to a success page
                header("Location: AddProductDetails2.php?product_code=" . urlencode($product_code) . "&table_name=" . urlencode($table_name));
                exit();
            } catch (Exception $e) {
                // Rollback transaction on error
                mysqli_rollback($conn);

                // Set error message
                $_SESSION['error'] = "Error updating diamond details: " . $e->getMessage();

                // Redirect back to the form
                header("Location: AddProductDetails2.php?product_code=" . urlencode($product_code) . "&table_name=" . urlencode($table_name));
                exit();
            }
        }
        // else {
        //     // If accessed directly without form submission
        //     $_SESSION['error'] = "Invalid request method.";
        //     header("Location: AddProductDetails2.php?product_code=" . urlencode($product_code) . "&table_name=" . urlencode($table_name)); // Redirect to main page or appropriate page
        //     exit();
        // }







        //==================================================================================================================
        //                                                UPDATE BEADS DETAILS HERE
        //==================================================================================================================
        // Check if form is submitted for beads details
        if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['UpdateBeadsDetails'])) {

            $product_code = $_SESSION['product_code'];
            $table_name = $_SESSION['table_name'];

            // Get form data and sanitize
            $product_id = $product_code;
            $beads_available = isset($_POST['beads_available']) ? 1 : 0;

            // Beads details (only if beads is available)
            $beads_desc = isset($_POST['beads_desc']) ? mysqli_real_escape_string($conn, trim($_POST['beads_desc'])) : '';
            $beads_color = isset($_POST['beads_color']) ? mysqli_real_escape_string($conn, trim($_POST['beads_color'])) : '';
            $beads_count = isset($_POST['beads_count']) ? intval($_POST['beads_count']) : null;
            $beads_weight = isset($_POST['beads_weight']) ? floatval($_POST['beads_weight']) : null;
            $beads_cost = isset($_POST['beads_cost']) ? intval($_POST['beads_cost']) : null;


            // If beads is not available, set beads fields to NULL/empty
            if ($beads_available == 0) {
                $beads_desc = '';
                $beads_color = '';
                $beads_count = null;
                $beads_weight = null;
                $beads_cost = null;
            }

            // Start transaction
            mysqli_begin_transaction($conn);

            try {
                // Update the product details with beads information
                $sql = "UPDATE $table_name SET 
                    beads_available = ?,
                    beads_desc = ?,
                    beads_color = ?,
                    beads_count = ?,
                    beads_weight = ?,
                    beads_cost = ?,
                    updated_at = NOW()
                WHERE product_code = ?";

                $stmt = mysqli_prepare($conn, $sql);

                if (!$stmt) {
                    throw new Exception("Prepare failed: " . mysqli_error($conn));
                }

                // Bind parameters
                mysqli_stmt_bind_param(
                    $stmt,
                    "issiids",
                    $beads_available,
                    $beads_desc,
                    $beads_color,
                    $beads_count,
                    $beads_weight,
                    $beads_cost,
                    $product_code
                );

                // Execute the statement
                if (!mysqli_stmt_execute($stmt)) {
                    throw new Exception("Execute failed: " . mysqli_stmt_error($stmt));
                }

                // Check if any rows were affected
                if (mysqli_stmt_affected_rows($stmt) == 0) {
                    throw new Exception("No product found with the given ID or no changes made.");
                }

                // Close statement
                mysqli_stmt_close($stmt);

                // Commit transaction
                mysqli_commit($conn);

                // Set success message
                $_SESSION['success'] = "Beads details updated successfully!";

                // Redirect back to the form or to a success page
                header("Location: AddProductDetails2.php?product_code=" . urlencode($product_code) . "&table_name=" . urlencode($table_name));
                exit();
            } catch (Exception $e) {
                // Rollback transaction on error
                mysqli_rollback($conn);

                // Set error message
                $_SESSION['error'] = "Error updating beads details: " . $e->getMessage();

                // Redirect back to the form
                header("Location: AddProductDetails2.php?product_code=" . urlencode($product_code) . "&table_name=" . urlencode($table_name));
                exit();
            }
        }
        // else {
        //     // If accessed directly without form submission
        //     $_SESSION['error'] = "Invalid request method.";
        //     header("Location: AddProductDetails2.php?product_code=" . urlencode($product_code) . "&table_name=" . urlencode($table_name)); // Redirect to main page or appropriate page
        //     exit();
        // }





        //==================================================================================================================
        //                                                UPDATE PEARLS DETAILS HERE
        //==================================================================================================================
        // Check if form is submitted for pearl details
        if (isset($_POST['UpdatePearlDetails'])) {

            $product_code = $_SESSION['product_code'];
            $table_name = $_SESSION['table_name'];

            // Get form data and sanitize
            $product_id = $product_code;
            $pearls_available = isset($_POST['pearls_available']) ? 1 : 0;

            // Pearl details (only if pearl is available)
            $pearls_desc = isset($_POST['pearls_desc']) ? mysqli_real_escape_string($conn, trim($_POST['pearls_desc'])) : '';
            $pearls_color = isset($_POST['pearls_color']) ? mysqli_real_escape_string($conn, trim($_POST['pearls_color'])) : '';
            $pearls_count = isset($_POST['pearls_count']) ? intval($_POST['pearls_count']) : null;
            $pearls_weight = isset($_POST['pearls_weight']) ? floatval($_POST['pearls_weight']) : null;
            $pearls_cost = isset($_POST['pearls_cost']) ? intval($_POST['pearls_cost']) : null;


            // If pearl is not available, set pearl fields to NULL/empty
            if ($pearls_available == 0) {
                $pearls_desc = '';
                $pearls_color = '';
                $pearls_count = null;
                $pearls_weight = null;
                $pearls_cost = null;
            }

            // Start transaction
            mysqli_begin_transaction($conn);

            try {
                // Update the product details with pearl information
                $sql = "UPDATE $table_name SET 
                    pearls_available = ?,
                    pearls_desc = ?,
                    pearls_color = ?,
                    pearls_count = ?,
                    pearls_weight = ?,
                    pearls_cost = ?,
                    updated_at = NOW()
                WHERE product_code = ?";

                $stmt = mysqli_prepare($conn, $sql);

                if (!$stmt) {
                    throw new Exception("Prepare failed: " . mysqli_error($conn));
                }

                // Bind parameters
                mysqli_stmt_bind_param(
                    $stmt,
                    "issidis",
                    $pearls_available,
                    $pearls_desc,
                    $pearls_color,
                    $pearls_count,
                    $pearls_weight,
                    $pearls_cost,
                    $product_code
                );

                // Execute the statement
                if (!mysqli_stmt_execute($stmt)) {
                    throw new Exception("Execute failed: " . mysqli_stmt_error($stmt));
                }

                // Check if any rows were affected
                if (mysqli_stmt_affected_rows($stmt) == 0) {
                    throw new Exception("No product found with the given ID or no changes made.");
                }

                // Close statement
                mysqli_stmt_close($stmt);

                // Commit transaction
                mysqli_commit($conn);

                // Set success message
                $_SESSION['success'] = "Pearl details updated successfully!";

                // Redirect back to the form or to a success page
                header("Location: AddProductDetails2.php?product_code=" . urlencode($product_code) . "&table_name=" . urlencode($table_name));
                exit();
            } catch (Exception $e) {
                // Rollback transaction on error
                mysqli_rollback($conn);

                // Set error message
                $_SESSION['error'] = "Error updating pearl details: " . $e->getMessage();

                // Redirect back to the form
                header("Location: AddProductDetails2.php?product_code=" . urlencode($product_code) . "&table_name=" . urlencode($table_name));
                exit();
            }
        }
        // else {
        //     // If accessed directly without form submission
        //     $_SESSION['error'] = "Invalid request method.";
        //     header("Location: AddProductDetails2.php?product_code=" . urlencode($product_code) . "&table_name=" . urlencode($table_name)); // Redirect to main page or appropriate page
        //     exit();
        // }



        //==================================================================================================================
        //                                                UPDATE SUPPLIER DETAILS HERE
        //==================================================================================================================

        if (isset($_POST['UpdateSupplierDetails'])) {
            $product_code = $_POST['product_code'];
            $table_name = $_SESSION['table_name'];
            $supplier_id = $_POST['supplier_id'];
            $manufacture_time = $_POST['manufacture_time'];

            $UpdateSupplierDetails_query = "UPDATE $table_name SET supplier_id = ?, manufacture_time = ? WHERE product_code = ?";
            //echo $UpdateSupplierDetails_query;
            $stmt = $conn->prepare($UpdateSupplierDetails_query);
            $stmt->bind_param("iss", $supplier_id, $manufacture_time, $product_code);

            if ($stmt->execute()) {
                header("Location: AddProductDetails2.php?product_code=$product_code&table_name=$table_name");
                exit();
            } else {
                echo "Error updating supplier: " . $stmt->error;
            }

            // $stmt->close();
        }


        //==================================================================================================================
        //                                                UPDATE TAG DETAILS HERE
        //==================================================================================================================


        // Handle Tags Update
        if (isset($_POST['UpdateProductTags'])) {
            try {
                $product_code = $_SESSION['product_code'];
                $table_name = $_SESSION['table_name'];

                // Get existing tags from database first
                $stmt = $conn->prepare("SELECT tag FROM $table_name WHERE product_code = ?");
                $stmt->bind_param("s", $product_code);
                $stmt->execute();
                $result = $stmt->get_result();
                $row = $result->fetch_assoc();

                $existing_tags = [];
                if ($row && !empty($row['tag'])) {
                    $existing_tags = explode(',', $row['tag']);
                }

                // Get new tags from POST data (comma-separated string)
                $tags_input = isset($_POST['product_tags']) ? $_POST['product_tags'] : '';

                // Convert new tags to array, clean and validate
                $new_tags_array = explode(',', $tags_input);
                $clean_new_tags = [];

                foreach ($new_tags_array as $tag) {
                    $clean_tag = trim(strip_tags($tag));
                    if (!empty($clean_tag) && strlen($clean_tag) <= 50) {
                        $clean_new_tags[] = $clean_tag;
                    }
                }

                // Merge existing tags with new tags
                $all_tags = array_merge($existing_tags, $clean_new_tags);

                // Remove duplicates and convert back to comma-separated string
                $all_tags = array_unique($all_tags);
                $tags_to_store = implode(',', $all_tags);

                echo "Stored tags: " . htmlspecialchars($tags_to_store);

                // Update database
                $stmt = $conn->prepare("UPDATE $table_name SET tag = ? WHERE product_code = ?");
                $stmt->bind_param("ss", $tags_to_store, $product_code);
                $result = $stmt->execute();

                if ($result) {
                    $_SESSION['success_message'] = "Product tags updated successfully!";
                } else {
                    throw new Exception("Failed to update tags in database");
                }
            } catch (Exception $e) {
                $_SESSION['error_message'] = "Error updating tags: " . $e->getMessage();
            }

            header("Location: " . $_SERVER['PHP_SELF'] . "?id=" . $product_code);
            exit;
        }

        // Function to get existing tags for a product
        function getProductTags($conn, $product_code, $table_name)
        {
            try {
                $stmt = $conn->prepare("SELECT tag FROM $table_name WHERE product_code = ?");
                $stmt->bind_param("s", $product_code);
                $stmt->execute();
                $result = $stmt->get_result();
                $row = $result->fetch_assoc();

                if ($row && !empty($row['tag'])) {
                    // Convert comma-separated string to array
                    return explode(',', $row['tag']);
                }

                return [];
            } catch (Exception $e) {
                error_log("Error fetching tags: " . $e->getMessage());
                return [];
            }
        }

        // Function to search products by tags
        function searchProductsByTag($conn, $search_tag, $table_name)
        {
            try {
                $stmt = $conn->prepare("SELECT * FROM $table_name WHERE tag LIKE ? AND delist = 0");
                $search_pattern = '%' . $search_tag . '%';
                $stmt->bind_param("s", $search_pattern);
                $stmt->execute();
                $result = $stmt->get_result();
                return $result->fetch_all(MYSQLI_ASSOC);
            } catch (Exception $e) {
                error_log("Error searching by tags: " . $e->getMessage());
                return [];
            }
        }

        // Function to get all unique tags from all products
        function getAllTags($conn, $table_name)
        {
            try {
                $stmt = $conn->prepare("SELECT DISTINCT tag FROM $table_name WHERE tag IS NOT NULL AND tag != '' AND delist = 0");
                $stmt->execute();
                $result = $stmt->get_result();
                $results = $result->fetch_all(MYSQLI_NUM);

                $all_tags = [];
                foreach ($results as $row) {
                    if (!empty($row[0])) {
                        $tags = explode(',', $row[0]);
                        $all_tags = array_merge($all_tags, $tags);
                    }
                }

                return array_unique($all_tags);
            } catch (Exception $e) {
                error_log("Error fetching all tags: " . $e->getMessage());
                return [];
            }
        }

        // Usage example for displaying the form:
        /*
// Get existing tags for the product
$product_code = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$existing_tags = getProductTags($conn, $product_code, $table_name);

// Now you can use $existing_tags in your HTML form
*/

        // Display success/error messages
        if (isset($_SESSION['success_message'])) {
            echo '<div class="alert alert-success">' . htmlspecialchars($_SESSION['success_message']) . '</div>';
            unset($_SESSION['success_message']);
        }

        if (isset($_SESSION['error_message'])) {
            echo '<div class="alert alert-danger">' . htmlspecialchars($_SESSION['error_message']) . '</div>';
            unset($_SESSION['error_message']);
        }




        //==================================================================================================================
        //                                                END ADDING HERE
        //==================================================================================================================
    } else {
        echo "<script>alert('Unauthorised Access');</script>";
        echo "<script>location.href='../logout.php'</script>";
    }
