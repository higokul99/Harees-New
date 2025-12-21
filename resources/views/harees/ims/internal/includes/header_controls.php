<?php 

if (!isset($_SESSION)) {
    session_start();
}

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
  
}
include_once('functions.php'); 
include_once('../db_connect.php');
?>