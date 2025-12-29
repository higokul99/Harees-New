<?php
include_once('../db_connect.php');
?>


<?php


// ========================== May 20 - Generate product code
function generateProductCode2($conn, $brand_code, $metal_id, $metalpurity_id, $category_id) {
    echo "<script>console.log('--- Starting Product Code Generation ---');</script>";
    echo "<script>console.log('Input Data - Brand:', '$brand_code', 'Metal ID:', $metal_id, 'Purity ID:', $metalpurity_id, 'Category ID:', $category_id);</script>";

    // Step 1: Fetch metal code
    $metal_code = '';
    $stmt = $conn->prepare("SELECT code FROM metals WHERE metal_id = ?");
    $stmt->bind_param("i", $metal_id);
    $stmt->execute();
    $stmt->bind_result($metal_code);
    $stmt->fetch();
    $stmt->close();
    echo "<script>console.log('Metal Code:', '$metal_code');</script>";

    // Step 2: Fetch purity code
    $purity_code = '';
    $stmt = $conn->prepare("SELECT code FROM metals_purity WHERE metalpurity_id = ?");
    $stmt->bind_param("i", $metalpurity_id);
    $stmt->execute();
    $stmt->bind_result($purity_code);
    $stmt->fetch();
    $stmt->close();
    echo "<script>console.log('Purity Code:', '$purity_code');</script>";

    // Step 3: Fetch category code
    $category_code = '';
    $stmt = $conn->prepare("SELECT code FROM categories WHERE cat_id = ?");
    $stmt->bind_param("i", $category_id);
    $stmt->execute();
    $stmt->bind_result($category_code);
    $stmt->fetch();
    $stmt->close();
    echo "<script>console.log('Category Code:', '$category_code');</script>";

    // Step 4: Check last serial number for this combo
    $p5_uniquecode = 0;
    $stmt = $conn->prepare("SELECT MAX(p5_uniquecode) FROM product_codes WHERE p1_brand = ? AND p2_metal = ? AND p3_purity = ? AND p4_cat = ?");
    $stmt->bind_param("ssss", $brand_code, $metal_code, $purity_code, $category_code);
    $stmt->execute();
    $stmt->bind_result($p5_uniquecode);
    if (!$stmt->fetch()) {
        $p5_uniquecode = 0;
        echo "<script>console.log('No existing record found for this combination. Starting from 0.');</script>";
    } else {
        echo "<script>console.log('Existing unique code found:', $p5_uniquecode);</script>";
    }
    $stmt->close();

    // Step 5: Increment and format serial
    $new_serial = $p5_uniquecode + 1;
    $serial_formatted = str_pad($new_serial, 6, '0', STR_PAD_LEFT);
    echo "<script>console.log('New Serial Number:', $new_serial, 'Formatted:', '$serial_formatted');</script>";

    // Step 6: Save or update the last serial in DB
    $full_code = $brand_code . $metal_code . $purity_code . $category_code . $serial_formatted;
    echo "<script>console.log('Final Product Code:', '$full_code');</script>";

    $table_name = tableNameGenerator($metal_id, $metalpurity_id, $category_id);

    $stmt = $conn->prepare("
        INSERT INTO product_codes (p1_brand, p2_metal, p3_purity, p4_cat, p5_uniquecode, full_code,table_name)
        VALUES (?, ?, ?, ?, ?, ?, ?)
    ");
    $stmt->bind_param("ssssiss", $brand_code, $metal_code, $purity_code, $category_code, $new_serial, $full_code, $table_name);
    

    if ($stmt->execute()) {
        echo "<script>console.log('Product code saved to database successfully.');</script>";
        // You can also get the number of affected rows:
         echo "<script>console.log('Affected rows: " . $stmt->affected_rows . "');</script>";
    } else {
        // Handle the error
        echo "<script>console.log('Error saving product code: " . $stmt->error . "');</script>";
        // You might also want to log this error to a file or a more robust error handling system
    }
    
    $stmt->close();
    echo "<script>console.log('Product code saved to database.');</script>";

    // Step 7: Return final product code
    echo "<script>console.log('--- Product Code Generation Complete ---');</script>";
    return $full_code;
}



//============================================END================================

// ========================== TableName Generator =======================

function tableNameGenerator($metal_id, $metalpurity_id, $category_id){
    // Getting the table name
    $TableName = '';
    switch ($metal_id) {
        case '1':
            $TableName = "gold_product";
            switch ($metalpurity_id) {
                case '4':
                    $TableName = "18k".$TableName;
                    break;

                case '5':
                    $TableName = "22k".$TableName;
                    break;

                case '6':
                    $TableName = "18kd".$TableName;
                    break;
                
                default:
                    # code...
                    break;
            }
            break;
        
        case '2':
            $TableName = "silver_product";
            switch ($metalpurity_id) {
                case '1':
                    # code...
                    break;
                case '2':
                    # code...
                    break;
                case '3':
                    $TableName = "rosegold_product";
                    break;
                
                default:
                    # code...
                    break;
            }
            break;
        default:
            # code...
            break;
    }

    switch ($category_id) {
        case 1:
            $TableName = $TableName."_necklaces";
            break;
        case 2:
            $TableName = $TableName."_pendants";
            break;
        case 3:
            $TableName = $TableName."_bracelets";
            break;
        case 4:
            $TableName = $TableName."_anklets";
            break;
        case 5:
            $TableName = $TableName."_kadas";
            break;
        case 6:
            $TableName = $TableName."_bangles";
            break; 
        case 7:
            $TableName = $TableName."_rings";
            break;
        case 8:
            $TableName = $TableName."_earrings";
            break;
        case 9:
            $TableName = $TableName."_studs";
            break;
        case 10:
            $TableName = $TableName."_others";
            break;
        case 11:
            $TableName = $TableName."_chains";
            break;
        case 12:
            $TableName = $TableName."_fancychains";
            break;
        case 13:
            $TableName = $TableName."_secondstuds";
            break;   
        default:
            # code...
            break;
    }

    return $TableName;
}


// ========================== May 10 - Generate product code
function generateProductCode($conn, $brand, $metal_id, $purity_id, $category_id) {
    echo "<script>console.log('--- Starting Product Code Generation ---');</script>";
    echo "<script>console.log('Input Data - Brand:', '$brand', 'Metal ID:', $metal_id, 'Purity ID:', $purity_id, 'Category ID:', $category_id);</script>";

    // Step 1: Fetch metal code
    $metal_code = '';
    $stmt = $conn->prepare("SELECT code FROM metals WHERE metal_id = ?");
    $stmt->bind_param("i", $metal_id);
    $stmt->execute();
    $stmt->bind_result($metal_code);
    $stmt->fetch();
    $stmt->close();
    echo "<script>console.log('Metal Code:', '$metal_code');</script>";

    // Step 2: Fetch purity code
    $purity_code = '';
    $stmt = $conn->prepare("SELECT code FROM silver_metals WHERE silver_metal_id = ?");
    $stmt->bind_param("i", $purity_id);
    $stmt->execute();
    $stmt->bind_result($purity_code);
    $stmt->fetch();
    $stmt->close();
    echo "<script>console.log('Purity Code:', '$purity_code');</script>";

    // Step 3: Fetch category code
    $category_code = '';
    $stmt = $conn->prepare("SELECT code FROM silver_categories WHERE sil_cat_id = ?");
    $stmt->bind_param("i", $category_id);
    $stmt->execute();
    $stmt->bind_result($category_code);
    $stmt->fetch();
    $stmt->close();
    echo "<script>console.log('Category Code:', '$category_code');</script>";

    // Step 4: Check last serial number for this combo
    $p5_uniquecode = 0;
    $stmt = $conn->prepare("SELECT max(p5_uniquecode) FROM product_codes WHERE p1_brand = ? AND p2_metal = ? AND p3_purity = ? AND p4_cat = ?");
    $stmt->bind_param("ssss", $brand, $metal_code, $purity_code, $category_code);
    $stmt->execute();
    $stmt->bind_result($p5_uniquecode);
    if (!$stmt->fetch()) {
        $p5_uniquecode = 0;
        echo "<script>console.log('No existing record found for this combination. Starting from 0.');</script>";
    } else {
        echo "<script>console.log('Existing unique code found:', $p5_uniquecode);</script>";
    }
    $stmt->close();

    // Step 5: Increment and format serial
    $new_serial = $p5_uniquecode + 1;
    $serial_formatted = str_pad($new_serial, 6, '0', STR_PAD_LEFT);
    echo "<script>console.log('New Serial Number:', $new_serial, 'Formatted:', '$serial_formatted');</script>";

    // Step 6: Save or update the last serial in DB
    $full_code = $brand . $metal_code . $purity_code . $category_code . $serial_formatted;
    echo "<script>console.log('Final Product Code:', '$full_code');</script>";

    $stmt = $conn->prepare("
        INSERT INTO product_codes (p1_brand, p2_metal, p3_purity, p4_cat, p5_uniquecode, full_code)
        VALUES (?, ?, ?, ?, ?, ?)
        ON DUPLICATE KEY UPDATE p5_uniquecode = VALUES(p5_uniquecode)
    ");
    $stmt->bind_param("ssssis", $brand, $metal_code, $purity_code, $category_code, $new_serial, $full_code);
    $stmt->execute();
    $stmt->close();
    echo "<script>console.log('Product code saved to database.');</script>";

    // Step 7: Return final product code
    echo "<script>console.log('--- Product Code Generation Complete ---');</script>";
    return $full_code;
}



//============================================END================================




function get18krate($conn){
    $sql = "SELECT 18k_1gm FROM goldrate";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $TodayGoldRate18K_1GM = $row['18k_1gm'];

    //echo "<script>alert('$TodayGoldRate18K_1GM');</script>";
    return $TodayGoldRate18K_1GM;
}


function get22krate($conn){
    $sql = "SELECT 22k_1gm FROM goldrate";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $TodayGoldRate22K_1GM = $row['22k_1gm'];
    return $TodayGoldRate22K_1GM;

}

function get_normal_silver_rate($conn){
    $sql = "SELECT normal_silver FROM metals_rates";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $rate = $row['normal_silver'];
    return $rate;
}

function get_925_silver_rate($conn){
    $sql = "SELECT 925_silver FROM metals_rates";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $rate = $row['925_silver'];
    return $rate;
}

function get_rosegold_silver_rate($conn){
    $sql = "SELECT rosegold_silver FROM metals_rates";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $rate = $row['rosegold_silver'];
    return $rate;
}

function get_diamond_rate($conn){
    $sql = "SELECT diamond_rate FROM metals_rates";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $rate = $row['diamond_rate'];
    return $rate;
}

function getUpdatedDate($conn,$tablename){
    $sql = "SELECT updated_on FROM $tablename";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $dateTimeString = $row['updated_on'];

    // Convert the string to a DateTime object
    $dateTime = new DateTime($dateTimeString);

    // Format the date part as "Month Day, Year"
    $formattedDate = $dateTime->format('F j, Y');

    // Format the time part as "Time" with leading zeros for hours if needed (optional)
    $formattedTime = $dateTime->format('H:i');  // Adjust format if needed (e.g., g:i a for AM/PM)

    // Combine the formatted parts with a separator
    $formattedDateTime = $formattedDate . " | " . $formattedTime;

    //echo $formattedDateTime;
    return $formattedDateTime;
}

function getUpdatedTime($conn,$tablename){
    $sql = "SELECT updated_on FROM $tablename";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $dateTimeString = $row['updated_on'];

    // Convert the string to a DateTime object
    $dateTime = new DateTime($dateTimeString);

    // Format the date part as "Month Day, Year"
    $formattedDate = $dateTime->format('F j, Y');

    // Format the time part as "Time" with leading zeros for hours if needed (optional)
    $formattedTime = $dateTime->format('H:i');  // Adjust format if needed (e.g., g:i a for AM/PM)

    // Combine the formatted parts with a separator
    $formattedDateTime = $formattedDate . " | " . $formattedTime;

    //echo $formattedDateTime;
    return $formattedTime;
}





//===============================================================================
// Function to convert images to WebP format with 80% quality
//===============================================================================
function convertToWebP($sourcePath, $destPath, $quality = 80) {
    // Check if source file exists
    if (!file_exists($sourcePath)) {
        return false;
    }
    
    // Get image info
    $imageInfo = getimagesize($sourcePath);
    if ($imageInfo === false) {
        return false;
    }
    
    $mimeType = $imageInfo['mime'];
    $sourceImage = null;
    
    // Create image resource based on file type
    switch ($mimeType) {
        case 'image/jpeg':
            $sourceImage = imagecreatefromjpeg($sourcePath);
            break;
        case 'image/png':
            $sourceImage = imagecreatefrompng($sourcePath);
            break;
        case 'image/gif':
            $sourceImage = imagecreatefromgif($sourcePath);
            break;
        case 'image/bmp':
            $sourceImage = imagecreatefrombmp($sourcePath);
            break;
        case 'image/webp':
            $sourceImage = imagecreatefromwebp($sourcePath);
            break;
        default:
            return false; // Unsupported format
    }
    
    if ($sourceImage === false) {
        return false;
    }
    
    // Convert to WebP with specified quality
    $result = imagewebp($sourceImage, $destPath, $quality);
    
    // Clean up memory
    imagedestroy($sourceImage);
    
    return $result;
}






function save_to_log_table($input,$conn)
{
    $output = str_replace(["'", '"'], '', $input);
    $user = $_SESSION['username'];
    $Logger_query = "INSERT INTO log_table(action,action_by) VALUES('$output','$user')";
    $Logger_Result = mysqli_query($conn,$Logger_query);
}

function showConsole($message)
{
    return "echo `<script>console.log('" . addslashes($message) . "');</script>`";
}

function showpop($msg)
{
    return "echo `<script>alert('.$msg.');</script>`";
}
?>

