<?php
include('../db_connect.php');
include('functions.php');

if (!isset($_SESSION)) {
    session_start();
}

// Function to check if the user is logged in
function isLoggedIn() {
    return isset($_SESSION['username']);  // Assuming 'user_id' is set upon login
}

// Main Controller handling the POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the user is logged in before handling the form
    if (!isLoggedIn()) {
        // Redirect to login page or show an error
        header("Location: ../logout.php");
        exit();
    }

    // Process the POST request if the user is logged in
    if (isset($_POST['SaveCategory'])) {
        // Your processing logic
        $CategoryName =$_POST['CategoryName'];
        $updated_by = $_SESSION['username'];
        $Query = "INSERT INTO hlinks_category(hlinks_cat_name,hlinks_updated_by) VALUES('$CategoryName','$updated_by')";
        echo $Query;
        $Result = mysqli_query($conn, $Query);

        $Query2 = "INSERT INTO hlinks_historys(hlinks_updatedtable,hlinks_action,updated_by) VALUES($Rate_18K1GM,'$Query','$currentDateTime','$User')";
        echo $Query2;
        $Result2 = mysqli_query($conn, $Query2);
        if($Result && $Result2){
            $location ='index.php';
            //$message = $Status.'!'; 
            $message = "Category Saved!";
            echo "<script>alert('$message');</script>";
            //echo $message;
            // echo "<script>location.href='$location'</script>";
    
    
            // echo "<script>
            //     successAlert('Success!','Updated Gold Rate!');
            //     setTimeout(function() {
            //         window.location.href = 'AddGoldRate.php';
            //     }, 2000);
            // </script>";
        }else{
            $location ='index.php';
            //$message = $Status.'!'; 
            $message = "Failed to Update! Contact Developer.";
            echo "<script>alert('$message');</script>";
            echo $message;
            //echo "<script>location.href='$location'</script>";
    
    
            // echo "<script>
            //     successAlert('Failed!','Failed to Update Gold Rate! Contact Developer.');
            //     setTimeout(function() {
            //         window.location.href = 'AddGoldRate.php';
            //     }, 2000);
            // </script>";
            
        }
    
    }
}
?>