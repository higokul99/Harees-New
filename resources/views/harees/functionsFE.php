<?php 

include ('includes/dbconnect.php'); 
// include '../../harees_inventory/hareesims-local/public/Internal/functions.php';

?>

<?php
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
    $sql = "SELECT 925_silver FROM metals_rates";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $rate = $row['925_silver'];
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

function get_GST($conn)
{
    $SQLQUERY = "SELECT * FROM gst WHERE id = 1";
    $result = mysqli_query($conn, $SQLQUERY);
    $row = mysqli_fetch_assoc($result);
    $gst = $row['tax_percent'];
    return $gst;
}

function get_Making_Charge($conn, $metalpurity_id, $cat_id)
{
    $SQLQUERY = "SELECT normal_mc,discount_mc,excp_normal_mc,excp_discount_mc FROM making_charges WHERE metalpurity_id = ? AND cat_id = ?";
    try {
        // 1. Prepare the statement
        if ($stmt = $conn->prepare($SQLQUERY)) {
            // 2. Bind the parameter
            // 'i' indicates an integer type for the parameter
            $stmt->bind_param("ii", $metalPurityId,$cat_id);

            // 3. Execute the query
            if ($stmt->execute()) {
                // 4. Get the result set
                $result = $stmt->get_result();

                // 5. Check if a row was returned
                if ($result->num_rows > 0) {
                    // Fetch the results as an associative array
                    $row = $result->fetch_assoc();
                    // Close the result set
                    $result->free();
                    // Close the statement
                    $stmt->close();
                    return $row; // Returns the associative array directly
                } else {
                    // No rows found
                    $result->free();
                    $stmt->close();
                    return false;
                }
            } else {
                // Error executing statement
                error_log("Error executing statement: " . $stmt->error);
                $stmt->close();
                return false;
            }
        } else {
            // Error preparing statement
            error_log("Error preparing statement: " . $conn->error);
            return false;
        }
    } catch (Exception $e) {
        // Catch any general exceptions
        error_log("Database error: " . $e->getMessage());
        return false;
    }
}


function displayRatex($product_code,$tablename)
{

    $final_rate = 999;
    return $final_rate;
}

function displayRate($conn,$product_code,$tablename)
{
try{
    
    $SQLQUERY = "SELECT * FROM $tablename WHERE product_code = ?";
    if ($stmt = $conn->prepare($SQLQUERY))
    {
        $stmt -> bind_param("s",$product_code);
        if ($stmt->execute())
        {
            $result = $stmt->get_result();
            if ($result->num_rows > 0)
            {
                $row = $result->fetch_assoc();
                $metalpurity_id = $row['metalpurity_id'];
                $cat_id = $row['cat_id'];
                // echo "<script>";
                // echo "console.log('$metalpurity_id')";
                // echo "</script>";

                switch ($metalpurity_id) {
                    case 1:
                        $MetalRate = get_normal_silver_rate($conn);
                        $net_weight = $row['net_weight'];
                        $Silver_Cost_Only = $net_weight * $MetalRate;
                        $GST = get_GST($conn);
                        $GST_Only = $Silver_Cost_Only * $GST/100;
                        $final_rate = $Silver_Cost_Only + $GST_Only;
                        return [$final_rate, $Silver_Cost_Only, 0, $GST_Only, 'Silver'];
                        break;
                    case 2:
                        $MetalRate = get_925_silver_rate($conn);
                        $net_weight = $row['net_weight'];
                        $RSG_costonly = $net_weight*$MetalRate;
                        $GST = 3;
                        $GST_cost = $RSG_costonly * $GST/100;
                        $final_rate = $RSG_costonly + $GST_cost;
                        return [$final_rate, $RSG_costonly, 0, $GST_cost, '925 Silver']; 
                        break;
                    case 3:
                        $MetalRate = get_rosegold_silver_rate($conn);
                        $net_weight = $row['net_weight'];
                        $RSG_costonly = $net_weight*$MetalRate;
                        $GST = 3;
                        $GST_cost = $RSG_costonly * $GST/100;
                        $final_rate = $RSG_costonly + $GST_cost;
                        return [$final_rate, $RSG_costonly, 0, $GST_cost, 'Rose Gold Silver'];  
                        break;
                    case 4:
                        $MetalRate = get18krate($conn);
                        $net_weight = $row['net_weight'];
                        $Gold_Cost_Only = $net_weight * $MetalRate;
                        $MakingCharge = 35;
                        $Making_Charges = $Gold_Cost_Only * $MakingCharge /100;
                        $GoldCost_MakingCharges = $Gold_Cost_Only + $Making_Charges;
                        $GST = 3;
                        $GST_Only = $GoldCost_MakingCharges * $GST/100;
                        $final_rate = $GoldCost_MakingCharges + $GST_Only ;
                        return [$final_rate, $Gold_Cost_Only, $Making_Charges, $GST_Only, 'Gold'];
                        break;
                    case 5:
                        $MetalRate = get22krate($conn);
                        $net_weight = $row['net_weight'];
                        $Gold_Cost_Only = $net_weight * $MetalRate;
                        $MakingCharge = 35;
                        $Making_Charges = $Gold_Cost_Only * $MakingCharge /100;
                        $GoldCost_MakingCharges = $Gold_Cost_Only + $Making_Charges;
                        $GST = 3;
                        $GST_Only = $GoldCost_MakingCharges * $GST/100;
                        $final_rate = $GoldCost_MakingCharges + $GST_Only ;
                        return [$final_rate, $Gold_Cost_Only, $Making_Charges, $GST_Only, 'Gold'];
                        break;
                    case 6:
                        $MetalRate = get18krate($conn);
                        $DiamondRate = get_diamond_rate($conn);
                        $final_rate = $MetalRate+$DiamondRate;
                        return [$final_rate, 0, 0, 0, 'Gold'];
                        break;

                    default:
                        # code...
                        break;
                }

            }else
            {
                echo "<script>";
                echo "console.log('No Records Found!')";
                echo "</script>";
            }
        }else
        {
            echo "<script>";
            echo "console.log('Error Executing statement: ' . $conn->error . ')";
            echo "</script>";
        }
    }else{
        echo "<script>";
        echo "console.log('Error preparing statement: ' . $conn->error . ')";
        echo "</script>";
    }
    
}catch (Exception $e)
{
    echo "An exception occurred: " . $e->getMessage() . "<br>";
}
    
}



?>