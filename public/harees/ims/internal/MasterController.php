<?php
include('../db_connect.php');
include('functions.php');

if (!isset($_SESSION)) {
    session_start();
}



if (!empty($_SESSION['username'])) {
    //------------------------------- UPDATE GOLD RATE ------------------------
    if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['SaveGoldRate'])) {
        if (!isset($_POST['csrf_token']) || !verify_csrf_token($_POST['csrf_token'])) {
            echo "<script>alert('Invalid CSRF Token. Please refresh and try again.'); location.href='AddGoldRate.php';</script>";
            exit();
        }
        $Rate_18K1GM = $_POST['18K1GM'];
        $Rate_22K1GM = $_POST['22K1GM'];

        date_default_timezone_set('Asia/Kolkata');
        $currentDateTime = date('Y-m-d H:i:s');

        $User = $_SESSION['username'];
        $Query = "UPDATE goldrate SET 18k_1gm = $Rate_18K1GM,22k_1gm = $Rate_22K1GM,updated_on='$currentDateTime' WHERE id=1";
        //echo $Query;
        $Result = mysqli_query($conn, $Query);

        $Query2 = "INSERT INTO goldrate_history(18k_1gm,22k_1gm,updated_on,updated_by) VALUES($Rate_18K1GM,$Rate_22K1GM,'$currentDateTime','$User')";
        //echo $Query2;
        $Result2 = mysqli_query($conn, $Query2);

        $Query3 = "UPDATE metals_rates SET 18kgold = $Rate_18K1GM, 22kgold = $Rate_22K1GM WHERE id=1";
        $Result3 = mysqli_query($conn, $Query3);

        if ($Result && $Result2 && $Result3) {
            $location = 'AddGoldRate.php';
            //$message = $Status.'!'; 
            $message = "Updated Gold Rate!";
            echo "<script>alert('$message');</script>";
            //echo $message;
            echo "<script>location.href='$location'</script>";


            // echo "<script>
            //     successAlert('Success!','Updated Gold Rate!');
            //     setTimeout(function() {
            //         window.location.href = 'AddGoldRate.php';
            //     }, 2000);
            // </script>";
        } else {
            $location = 'AddGoldRate.php';
            //$message = $Status.'!'; 
            $message = "Failed to Update Gold Rate! Contact Developer.";
            echo "<script>alert('$message');</script>";
            echo $message;
            echo "<script>location.href='$location'</script>";


            // echo "<script>
            //     successAlert('Failed!','Failed to Update Gold Rate! Contact Developer.');
            //     setTimeout(function() {
            //         window.location.href = 'AddGoldRate.php';
            //     }, 2000);
            // </script>";

        }
    }
?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function successAlert(shortMsg, longMsg) {
            swal({
                title: shortMsg,
                text: longMsg,
                icon: "success"
            });
        }

        function failedAlert(shortMsg, longMsg) {
            swal({
                title: shortMsg,
                text: longMsg,
                icon: "error"
            });
        }
    </script>
    <?php


    //--------------------------DOWNLOAD TEMPLATE

    if (isset($_GET['Download'])) {
        $sql = "SELECT 18k_1gm,22k_1gm,updated_on FROM goldrate";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        $carat18_1gram = $row['18k_1gm'];
        $carat18_8gram = $row['18k_8gm'];
        $carat22_1gram = $row['22k_1gm'];
        $carat22_8gram = $row['22k_8gm'];
        $currentDate = $row['updated_on'];
        // // Convert the string to a DateTime object
        // $dateTime = new DateTime($dateTimeString);

        // // Format the date part as "Month Day, Year"
        // $formattedDate = $dateTime->format('F j, Y');

        // // Format the time part as "Time" with leading zeros for hours if needed (optional)
        // $formattedTime = $dateTime->format('H:i');  // Adjust format if needed (e.g., g:i a for AM/PM)

        // // Combine the formatted parts with a separator
        // $formattedDateTime = $formattedDate;
        // $currentDate = $formattedDateTime

        // Format the date
        $dateObj = new DateTime($currentDate);
        $formattedDate = $dateObj->format('d-m-Y');

        // Load the image
        $image = imagecreatefrompng('image.png'); // Replace with your image path

        // Set text properties
        $white = imagecolorallocate($image, 255, 255, 255);
        $font = 'arial.ttf'; // Make sure this font file exists in your server

        // Add text to the image
        imagettftext($image, 50, 0, 425, 540, $white, $font, $formattedDate);
        imagettftext($image, 50, 0, 610, 798, $white, $font, $carat18_1gram);
        imagettftext($image, 50, 0, 600, 920, $white, $font, $carat18_8gram);
        imagettftext($image, 50, 0, 610, 1162, $white, $font, $carat22_1gram);
        imagettftext($image, 50, 0, 600, 1284, $white, $font, $carat22_8gram);

        // Set headers to output PNG image
        header('Content-Type: image/png');
        header('Content-Disposition: attachment; filename="gold_info.png"');

        // Output the image
        imagepng($image);

        // Free up memory
        imagedestroy($image);
        exit;
    }


    //------------------------------- UPDATE Silver RATE ------------------------
    if (isset($_POST['SaveSilverRate'])) {
        $Rate_NormalSilver = $_POST['NormalSilver'];
        $Rate_Silver925 = $_POST['Silver925'];
        $Rate_RoseGoldSilver = $_POST['RoseGoldSilver'];
        $diamondrate = $_POST['diamondrate'];
        date_default_timezone_set('Asia/Kolkata');
        $currentDateTime = date('Y-m-d H:i:s');

        $User = $_SESSION['username'];

        $Query = "UPDATE metals_rates SET normal_silver = $Rate_NormalSilver , 925_silver = $Rate_Silver925 , rosegold_silver = $Rate_RoseGoldSilver , diamond_rate=$diamondrate WHERE id=1";
        //echo $Query;
        $Result = mysqli_query($conn, $Query);

        $Query2 = "INSERT INTO metals_rates_history(normal_silver,925_silver,rosegold_silver,diamondrate,updated_by) VALUES($Rate_NormalSilver,$Rate_Silver925,$Rate_RoseGoldSilver,$diamondrate,'$User')";
        echo $Query2;
        $Result2 = mysqli_query($conn, $Query2);

        if ($Result && $Result2) {
            $location = 'AddGoldRate.php';
            //$message = $Status.'!'; 
            $message = "Updated Metals Rate!";
            echo "<script>alert('$message');</script>";
            echo $message;
            echo "<script>location.href='$location'</script>";


            // echo "<script>
            //     successAlert('Success!','Updated Gold Rate!');
            //     setTimeout(function() {
            //         window.location.href = 'AddGoldRate.php';
            //     }, 2000);
            // </script>";
        } else {
            $location = 'AddGoldRate.php';
            //$message = $Status.'!'; 
            $message = "Failed to Update Metals Rate! Contact Developer.";
            echo "<script>alert('$message');</script>";
            echo $message;
            echo "<script>location.href='$location'</script>";


            // echo "<script>
            //     successAlert('Failed!','Failed to Update Gold Rate! Contact Developer.');
            //     setTimeout(function() {
            //         window.location.href = 'AddGoldRate.php';
            //     }, 2000);
            // </script>";

        }
    }
} else {
    echo "<script>alert('Unauthorised Access');</script>";
    echo "<script>location.href='../logout.php'</script>";
}


//=============================================================================================================================
//                                                                       ADD PRODUCT DETAILS 
//=============================================================================================================================
if (isset($_POST['add_product_details'])) {
    $errors = [];
    ?>
    <script>
        console.log("---- Product Add Operation Started ----");
    </script>
    <?php
    // Retrieve form data
    if (!isset($_POST['csrf_token']) || !verify_csrf_token($_POST['csrf_token'])) {
        $errors[] = "Invalid CSRF Token. Please refresh and try again.";
    }
    $metal_id = trim($_POST['metal_type']);
    $silver_metal_id = trim($_POST['purity']);
    $sil_cat_id = trim($_POST['category']);
    ?>
    <script>
        console.log("Metal ID:", "<?php echo $metal_id; ?>");
        console.log("Silver Metal ID:", "<?php echo $silver_metal_id; ?>");
        console.log("Silver Category ID:", "<?php echo $sil_cat_id; ?>");
    </script>
    <?php
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);
    $weight = trim($_POST['weight']);
    $stockQuantity = trim($_POST['stock_quantity']);
    $size = trim($_POST['size']);
    $color = trim($_POST['color']);
    $gender = trim($_POST['gender']);
    $metaTitle = trim($_POST['meta_title']);
    $metaDescription = trim($_POST['meta_description']);
    $metaKeywords = trim($_POST['meta_keywords']);

    // Validation
    if (empty($name)) $errors[] = "Product Name is required.";
    if (empty($weight)) $errors[] = "Weight is required.";
    if (empty($stockQuantity)) $errors[] = "Stock Quantity is required.";
    if (empty($color)) $errors[] = "Color is required.";

    // Generate Product Code
    $brand = "HJ";
    $product_code = generateProductCode($conn, $brand, $metal_id, $silver_metal_id, $sil_cat_id);
    ?>
    <script>
        console.log("Generated Product Code: '<?php echo $product_code; ?>'");
    </script>
    <?php

    if (strpos($product_code, "Invalid") !== false) {
        $errors[] = $product_code;
    } else {
        // Category Mapping
        $category_map = [
            1 => "silver_products_necklace",
            2 => "silver_products_pendants",
            3 => "silver_products_bracelet",
            4 => "silver_products_anklets",
            5 => "silver_products_kada",
            6 => "silver_products_bangle",
            7 => "silver_products_ring",
            8 => "silver_products_earring",
            9 => "silver_products_studs"
        ];
        $product_table_name = $category_map[$sil_cat_id] ?? null;

        if (!$product_table_name) {
            $errors[] = "Error: Unknown category.";
        } else {
            // Duplicate check
            $stmt = $conn->prepare("SELECT product_code FROM $product_table_name WHERE product_code = ?");
            $stmt->bind_param("s", $product_code);
            $stmt->execute();
            $res = $stmt->get_result();
            if ($res->num_rows > 0) {
                $errors[] = "SKU/Product Code '$product_code' already exists.";
            }
            $stmt->close();
        }

        // Build Path
        $baseUploadDir = 'product_images';
        $metalDir = $metal_id == 1 ? 'gold' : ($metal_id == 2 ? 'silver' : 'unknown_metal');
        $categoryDir = $category_map[$sil_cat_id] ? strtolower(str_replace('silver_products_', '', $product_table_name)) : 'unknown_category';

        $file_location = "$baseUploadDir/$metalDir/$categoryDir/";

    ?>
        <script>
            console.log("Upload Path:", "<?php echo $file_location; ?>");
        </script>
<?php

        if (in_array('unknown_metal', [$metalDir]) || in_array('unknown_category', [$categoryDir])) {
            $errors[] = "Error: Could not determine valid file upload location.";
        }

        // Validated Upload
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp'];
        $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/webp'];

        if (!empty($file_location) && isset($_FILES['product_image']) && $_FILES['product_image']['error'] === UPLOAD_ERR_OK) {
            $fileTmpPath = $_FILES['product_image']['tmp_name'];
            $fileName = $_FILES['product_image']['name'];
            $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

            // Verify Extension
            if (!in_array($fileExtension, $allowedExtensions)) {
                $errors[] = "Error: Invalid file extension. Only JPG, JPEG, PNG, and WEBP are allowed.";
            }
            // Verify MIME type
            else {
                $finfo = new finfo(FILEINFO_MIME_TYPE);
                $fileMimeType = $finfo->file($fileTmpPath);

                if (!in_array($fileMimeType, $allowedMimeTypes)) {
                    $errors[] = "Error: Invalid file type (MIME). Expected image.";
                } else {
                    $newFileName = $product_code . '.' . $fileExtension;
                    $destPath = $file_location . $newFileName;

                    // Directory creation logic...
                    if (!is_dir($file_location)) {
                        if (!mkdir($file_location, 0755, true)) {
                            $errors[] = "Error: Failed to create directory '$file_location'.";
                        }
                    }

                    if (empty($errors)) {
                        if (!move_uploaded_file($fileTmpPath, $destPath)) {
                            $errors[] = "Error: Failed to move uploaded file.";
                        } else {
                            // Success
                        }
                    }
                }
            }
        } elseif (isset($_FILES['product_image']) && $_FILES['product_image']['error'] !== UPLOAD_ERR_NO_FILE) {
            // ... error handling
            $errors[] = "Upload Error Code: " . $_FILES['product_image']['error'];
        } else {
            $errors[] = "Product image is required.";
        }

        // Final Insert
        if (empty($errors)) {
            $stmt = $conn->prepare("INSERT INTO $product_table_name (product_code, name, description, silver_metal_id, sil_cat_id, gender, weight, quantity_available, img1) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssiisdis", $product_code, $name, $description, $silver_metal_id, $sil_cat_id, $gender, $weight, $stockQuantity, $destPath);

            if ($stmt->execute()) {
                echo "<script>console.log('Product inserted successfully');</script>";
                header("Location: AddProduct.php");
                exit;
            } else {
                echo "<script>console.error('DB insert failed:', '" . $stmt->error . "');</script>";
            }
            $stmt->close();
        }
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


//====================================================================================================================================
//                                                                                  ADD PRODUCT -- END
//====================================================================================================================================

// Close connection
$conn->close();
?>