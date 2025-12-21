<?php
include_once('../db_connect.php');
// delete_job_position.php
if (isset($_GET['id']) && !empty($_GET['id'])) {
   $job_id = intval($_GET['id']);
   
   if (isset($conn) && $conn->connect_error == '') {
       $sql = "DELETE FROM job_positions WHERE id = ?";
       if ($stmt = $conn->prepare($sql)) {
           $stmt->bind_param("i", $job_id);
           
           if ($stmt->execute()) {
               header("Location: fe_careerspage_viewall.php?message=deleted");
               exit();
           } else {
               header("Location: fe_careerspage_viewall.php?error=delete_failed");
               exit();
           }
           $stmt->close();
       }
   }
}
header("Location: fe_careerspage_viewall.php");
exit();
?>