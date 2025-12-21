<?php include_once('includes/header.php'); ?>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
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

$sql = "SELECT * FROM metal_rates WHERE type = 'NormalSilver'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$RoseGoldSilverRate = $row['rate'];

//$dateTimeString = $row['date_silver'];
// Convert the string to a DateTime object
//$dateTime = new DateTime($dateTimeString);

// Format the date part as "Month Day, Year"
//$formattedDate = $dateTime->format('F j, Y');

// Format the time part as "Time" with leading zeros for hours if needed (optional)
//$formattedTime = $dateTime->format('H:i');  // Adjust format if needed (e.g., g:i a for AM/PM)

// Combine the formatted parts with a separator
//$formattedDateTime = $formattedDate . " | " . $formattedTime;

//echo $formattedDateTime;


?>




            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h1 class="mb-4" style="color: #f5d02a;">Normal Silver Calculator</h1>

                    </div>
                    <div class="bg-secondary rounded h-100 p-4">
                        <!-- <h6 class="mb-4" style="color: #f5d02a;">Rose Gold Silver Rate is <?php echo 'Rs '.$RoseGoldSilver; ?>. Updated on : <?php echo $formattedDateTime; ?></h6> -->
                        <!-- <span>Today's Rate (18 CARAT)</span><h6 class="mb-4" style="color: yellow;"><?php echo 'Rs '.$TodayGoldRate18K_1GM; ?></h6>
                            <span>Today's Rate (22 CARAT)</span><h6 class="mb-4" style="color: yellow;"><?php echo 'Rs '.$TodayGoldRate22K_1GM; ?></h6>
                            <span>Last Updated on : </span><h6 class="mb-4" style="color: yellow;"><?php echo $formattedDateTime; ?></h6> -->
                            </div> 
                    <form method="POST">
                        
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Gram :</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="gram" class="form-control" step="0.01" min="0" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">GST :</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="gst" class="form-control" value="3" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Normal Silver Rate :</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="RoseGoldSilverCost" class="form-control" value="<?php echo $RoseGoldSilverRate; ?>" required>
                                    </div>
                                </div>
                                
                                <button type="submit" name="Calculate" class="btn btn-primary"  style="color: black; width:100%;">Calculate</button>
<?php
if (isset($_POST['Calculate'])) {
    
    $Gram = $_POST['gram'];
    
    $GST = $_POST['gst'];

    $RoseGoldSilverRate = $_POST['RoseGoldSilverCost'];

$Rate0 = $Gram * $RoseGoldSilverRate;
$Rate1 = $Rate0 * $GST/100;
$FinalRate = $Rate1+$Rate0;

echo '<div class="mb-3">';
echo '<span>Customer Rate : </span>';
echo '<h1 class="mb-4" style="color: #f5d02a;">' . ' '. $FinalRate . '</h1>';
echo '<span>Weight(in gm) : '.$Gram.'gm |  GST : '.$GST.'%</span>'; 
echo '</div>';


        
    }
?>
                            </form>
                </div>
            </div>
            <!-- Recent Sales End -->







 
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