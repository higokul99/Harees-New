<?php
include_once('env_settings.php');
//$env = "local";

switch ($env) {
  case 'local':
    // Database connection details (localhost)
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hjimsdb_localenv";
    break;
    
  case 'dev':
    //Database connection details (hostinger)
    $hostname = "localhost";
    $username = "u784516105_anshadby300";
    $password = "8beqwiS9nao4wqY";
    $dbname = "u784516105_hareesimsdev";
    break;

  case 'prod':
    // Database connection details (hostinger)
    $hostname = "localhost";
    $username = "u784516105_anshadby300p";
    $password = "8beqwiS9nao4wqY";
    $dbname = "u784516105_hareesimsprod";
    break; 

  default:
    # code...
    break;
}

try {
  // Create a new mysqli connection object
  $conn = new mysqli($hostname, $username, $password, $dbname);

  // Check for connection errors (either object creation or connection failure)
  if ($conn->connect_error) {
    throw new Exception("Connection failed: " . $conn->connect_error);
  }

  // Check maintenance status first
  // $maintenanceQuery = "SELECT status FROM maintances where status =0";
  // $maintenanceResult = $conn->query($maintenanceQuery);
  // if ($maintenanceResult && $maintenanceResult->num_rows > 0) {
  //   $maintenanceData = $maintenanceResult->fetch_assoc();
  //   if ($maintenanceData['status'] == 0) {
  //     header("Location: maintenance.php");
  //     exit();
  //   }
  // }

  // Your database operations here (assuming a basic query)
  $sql = "SELECT * FROM login";
  $result = $conn->query($sql);

  // Check for query execution errors
  if (!$result) {
    throw new Exception("Error executing query: " . $conn->error);
  }

  $users = $result->fetch_all(MYSQLI_ASSOC);

  //echo "Connection successful and data retrieved!";

  // Close the connection
  //$conn->close();

} catch(Exception $e) {
  echo "Error: " . $e->getMessage();
  // Log the error for further investigation
  error_log("Database error: " . $e->getMessage());
}

?>
