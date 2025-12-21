<?php

include('../db_connect.php');
include('functions.php');

if (!isset($_SESSION)) {
    session_start();
}

if(!empty($_SESSION['username']))
{
    if($_SERVER["REQUEST_METHOD"] == "POST" AND isset($_POST['metal_type']) && isset($_POST['purity']) && isset($_POST['category']))
{
    

    $brand_id = $_POST['brand'];
    $Fetch_query = "SELECT name,code FROM product_code_prefix WHERE pc_prefix_id = ?";
    if ($stmt = $conn->prepare($Fetch_query)){
        $stmt->bind_param("i",$brand_id);
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
    if ($stmt = $conn->prepare($Fetch_query)){
        $stmt->bind_param("i",$metal_id);
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
    if ($stmt = $conn->prepare($Fetch_query)){
        $stmt->bind_param("i",$metalpurity_id);
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
    if ($stmt = $conn->prepare($Fetch_query)){
        $stmt->bind_param("i",$category_id);
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
    $metalDir = $loc_metal_name.'/'.$metalpurity_loc;
    $categoryDir = $table_name;
    $file_location = "$baseUploadDir/$metalDir/$categoryDir/";
    
    // WebP directory structure
    $webp_file_location = "product_images/webp/$metalDir/$categoryDir/";

    //echo $file_location;

    
    // Upload Image
    if (!empty($file_location) && isset($_FILES['product_image']) && $_FILES['product_image']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['product_image']['tmp_name'];
        $fileName = $_FILES['product_image']['name'];
        $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
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

    try{
        // Insert both original image path and WebP path
        $Insert_query = "INSERT INTO $table_name (product_code, metal_id, metalpurity_id, cat_id, img2, img1_webp) VALUES (?,?,?,?,?,?)";
        if ($stmt = $conn->prepare($Insert_query)) {
            // Bind parameters - added WebP path parameter
            $defaultimg = "product_images/default.jpg";
            $webpPath = isset($webpDestPath) ? $webpDestPath : null;
            $stmt->bind_param("siiiss", $product_code, $metal_id, $metalpurity_id, $category_id, $destPath, $webpPath);
        
            // Execute the prepared statement
            if ($stmt->execute()) {
                echo "---New category inserted successfully!";
                // You can also get the ID of the newly inserted row if it's an auto-incrementing primary key
                // echo "New record has ID: " . $stmt->insert_id;
                // IMPORTANT: Always exit after a header redirect to prevent further code execution
                header("Location: AddProductDetails2.php?product_code=" . urlencode($product_code) . "&table_name=" . urlencode($table_name));
                exit();
            } else {
                echo "Error inserting category: " . $stmt->error;
            }
        
            // Close the statement
            $stmt->close();
        } else {
            echo "Error preparing statement: " . $conn->error;
        }
    }catch (Exception $e){
        echo "An exception occurred: " . $e->getMessage();
    }
    

    if (!empty($errors)): 
        echo '<div class="alert alert-danger">';
            echo '<ul>';
                foreach ($errors as $error):
                    echo '<li>'.$error.'</li>';
                endforeach;
            echo '</ul>';
        echo '</div>';
    endif;
}



    if($_SERVER["REQUEST_METHOD"] == "POST" AND isset($_POST['SearchProduct']))
    {
        $product_code = $_POST['product_code'];
        $product_code = strtoupper($product_code);
        try{
            $Fetch_query = "SELECT table_name FROM product_codes WHERE UPPER(full_code) = ?";
            if ($stmt = $conn->prepare($Fetch_query)) {
                $stmt->bind_param("s",$product_code);
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
        } catch(Exception $e)
        {
            echo "An exception occurred: " . $e->getMessage();
        }

    }
}


?>