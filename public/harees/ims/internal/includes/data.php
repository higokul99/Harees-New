<?php

$type_of_user = null;
$UserID = null;
$Username = null;
$account_status = null;

if (isset($_SESSION['username'])) {
  // Use session variables if available
  $UserID = $_SESSION['username'];
  $type_of_user = $_SESSION['usertype'];
  $Username = $_SESSION['name'];
  $account_status = $_SESSION['account_status'];
} else {
  // Handle the case where session is not started
  // (e.g., display a message or redirect to login page)
  // echo "Session not started.";
}




//$Username = 'Gokul Jayakumar';
$UserRole = $type_of_user;
//$UserID = "gokul@gmail.com";

$GoldRate_18K1gm = 5000;
$GoldRate_18K8gm = 40000;

$GoldRate_22K1gm = 6000;
$GoldRate_22K8gm = 48000;

$Silver1gm = 80;
$Silver8gm = 640;
