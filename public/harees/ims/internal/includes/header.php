<?php

if (!isset($_SESSION)) {
  session_start();
}

// Prevent caching for all pages including this header
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Past date

include_once('data.php');

if (isset($_SESSION['username'])) {
} else {
  // Handle the case where session is not started
  // (e.g., display a message or redirect to login page)
  //echo "Session not started.";
  // $sess = $_SESSION['username'];
  //    echo "<SCRIPT>alert('$sess');</SCRIPT>";
  echo "<Script>alert('Session Expired! Please login again to Continue');</Script>";
  echo "<script>location.href='../logout.php'</script>";
  exit(); // Stop execution immediately for unauthenticated users
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>HJ Internal Portal</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="img/hareesjewelleryfavicon.png" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
    // Prevent Back Button after Logout (Force Reload if loaded from cache)
    window.onpageshow = function(event) {
      if (event.persisted || (window.performance && window.performance.navigation.type == 2)) {
        window.location.reload();
      }
    };
  </script>
</head>

<?php include_once('functions.php');
include_once('../db_connect.php'); ?>