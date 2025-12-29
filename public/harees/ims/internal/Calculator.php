<?php include_once('includes/header.php'); ?>

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
include('../db_connect.php');

$sql = "SELECT 18k_1gm,22k_1gm,updated_on FROM goldrate";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$TodayGoldRate18K_1GM = $row['18k_1gm'];
$TodayGoldRate22K_1GM = $row['22k_1gm'];
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


?>
<?php

date_default_timezone_set('Asia/Kolkata');
$currentDateTime = date('Y-m-d H:i:s');
$CurrentDate = date('Y-m-d');

$sql = "SELECT 18k_1gm,22k_1gm,updated_on FROM goldrate";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$dateTimeString = $row['updated_on'];
$LastUpdatedDate = date('Y-m-d', strtotime($dateTimeString));

if ( $CurrentDate  != $LastUpdatedDate){
// Convert the string to a DateTime object
$dateTime = new DateTime($dateTimeString);

// Format the date part as "Month Day, Year"
$formattedDate = $dateTime->format('F j, Y');

// Format the time part as "Time" with leading zeros for hours if needed (optional)
$formattedTime = $dateTime->format('H:i');  // Adjust format if needed (e.g., g:i a for AM/PM)

// Combine the formatted parts with a separator
$formattedDateTime = $formattedDate . " | " . $formattedTime;

echo "<script>alert('Gold Rate not updated for Today! Last Update : $formattedDateTime');</script>";
}
?>



            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h1 class="mb-4" style="color: #f5d02a;">GOLD RATE Calculator</h1>

                    </div>
                    <div class="bg-secondary rounded h-100 p-4">
                        <span>Today's Rate (18 CARAT)</span><h6 class="mb-4" style="color: yellow;"><?php echo 'Rs '.$TodayGoldRate18K_1GM; ?></h6>
                            <span>Today's Rate (22 CARAT)</span><h6 class="mb-4" style="color: yellow;"><?php echo 'Rs '.$TodayGoldRate22K_1GM; ?></h6>
                            <span>Last Updated on : </span><h6 class="mb-4" style="color: yellow;"><?php echo $formattedDateTime; ?></h6>
                            </div> 
                </div>
            </div>
            <!-- Recent Sales End -->


<!-- GOlD Calc -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h1 class="mb-4" style="color: #f5d02a;">18K GOLD Calculator</h1>
<?php
if (isset($_POST['Calculate'])) {
    $goldtype = $_POST['goldtype'];
    $Gram = $_POST['gram'];
    $MakingCharge = $_POST['makingCharge'];
    $GST = $_POST['gst'];

if($goldtype == 18)
{
    $GoldRate = $TodayGoldRate18K_1GM;
}else{
    $GoldRate = $TodayGoldRate22K_1GM;
}


$Rate0 = $Gram * $GoldRate;
$Rate1 = $Rate0 * $MakingCharge /100;
$Rate2 = ($Rate1+$Rate0) * $GST/100;

$FinalRate = $Rate0 + $Rate1 + $Rate2 ;

echo '<div class="mb-3">';
echo '<span>Customer Rate : </span>';
echo '<h1 class="mb-4" style="color: #f5d02a;">' . ' '. $FinalRate . '</h1>';
echo '<span>Weight(in gm) : '.$Gram.'gm | MC : '.$MakingCharge.'% | GST : '.$GST.'%</span>'; 
echo '</div>';


        
    }
?>
                            <form method="POST">
                                <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Gold Type</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="goldtype"
                                                id="gridRadios1" value="18" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                18 Carat Gold
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="goldtype"
                                                id="gridRadios2" value="22">
                                            <label class="form-check-label" for="gridRadios2">
                                                22 Carat Gold
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Gram :</label>
                                    <input type="decimal" name="gram" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Making Charge :</label>
                                    <input type="decimal" name="makingCharge" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">GST :</label>
                                    <input type="decimal" name="gst" class="form-control" value="3">
                                </div>
                                <button type="submit" name="Calculate" class="btn btn-primary"  style="color: black; width:100%;">Calculate</button>
                            </form>

                     <br>
                            
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h1 class="mb-4" style="color: #f5d02a;">22K GOLD Calculator</h1>
<?php
if (isset($_POST['Calculate'])) {
    $goldtype = $_POST['goldtype'];
    $Gram = $_POST['gram'];
    $MakingCharge = $_POST['makingCharge'];
    $GST = $_POST['gst'];

if($goldtype == 18)
{
    $GoldRate = $TodayGoldRate18K_1GM;
}else{
    $GoldRate = $TodayGoldRate22K_1GM;
}


$Rate0 = $Gram * $GoldRate;
$Rate1 = $Rate0 * $MakingCharge /100;
$Rate2 = ($Rate1+$Rate0) * $GST/100;

$FinalRate = $Rate0 + $Rate1 + $Rate2 ;

echo '<div class="mb-3">';
echo '<span>Customer Rate : </span>';
echo '<h1 class="mb-4" style="color: #f5d02a;">' . ' '. $FinalRate . '</h1>';
echo '<span>Weight(in gm) : '.$Gram.'gm | MC : '.$MakingCharge.'% | GST : '.$GST.'%</span>'; 
echo '</div>';


        
    }
?>
                            <form method="POST">
                                <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Gold Type</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="goldtype"
                                                id="gridRadios1" value="18" >
                                            <label class="form-check-label" for="gridRadios1">
                                                18 Carat Gold
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="goldtype"
                                                id="gridRadios2" value="22" checked>
                                            <label class="form-check-label" for="gridRadios2">
                                                22 Carat Gold
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Gram :</label>
                                    <input type="decimal" name="gram" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Making Charge :</label>
                                    <input type="decimal" name="makingCharge" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">GST :</label>
                                    <input type="decimal" name="gst" class="form-control" value="3">
                                </div>
                                <button type="submit" name="Calculate" class="btn btn-primary"  style="color: black; width:100%;">Calculate</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->




 
<script language="JavaScript">
function successAlert() { 
    swal("Success!", "Your data have been saved. Thank you!", "success");
}
function failedAlert() { 
    swal("Sorry!", "Opps, something went wrong. Please try again later.", "error");
}
</script>



<!-- Footer Start -->
<?php include_once('includes/footer.php'); ?>