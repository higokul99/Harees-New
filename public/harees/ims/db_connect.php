<?php
$env = "local";

if (session_status() === PHP_SESSION_NONE) {
  // Enforce Secure Session Settings
  ini_set('session.cookie_httponly', 1);
  ini_set('session.use_only_cookies', 1);
  // ini_set('session.cookie_secure', 1); // Uncomment when HTTPS is live
}

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

} catch (Exception $e) {
  echo "Error: " . $e->getMessage();
  // Log the error for further investigation
  error_log("Database error: " . $e->getMessage());
}


// db_connect.php
// This file's sole purpose is to provide a database connection object.
// It MUST NOT output any characters (including whitespace, newlines, BOM)
// outside of PHP tags, especially before the opening <?php tag.

// function getDbConnection() {
//     $env = "local"; // You can change this based on your deployment environment

//     switch ($env) {
//         case 'local':
//             // Database connection details (localhost)
//             $hostname = "localhost";
//             $username = "root";
//             $password = "";
//             $dbname = "hjimsdb_localenv";
//             break;
//         case 'dev':
//             // Database connection details (hostinger)
//             $hostname = "localhost";
//             $username = "u784516105_anshadby300";
//             $password = "D3f3nd3r#2024#300";
//             $dbname = "u784516105_hareesimsdev";
//             break;
//         case 'prod':
//             // Database connection details (hostinger)
//             $hostname = "localhost";
//             $username = "u784516105_anshadby300p";
//             $password = "xSd7dN4RO5rv";
//             $dbname = "u784516105_hareesimsprod";
//             break; 
//         default:
//             // Default to local if env is not recognized, or handle as an error
//             $hostname = "localhost";
//             $username = "root";
//             $password = "";
//             $dbname = "hjimsdb_localenv";
//             error_log("Unknown environment specified in db_connect.php. Defaulting to 'local'.");
//             break;
//     }

//     try {
//         // Create a new mysqli connection object
//         $conn = new mysqli($hostname, $username, $password, $dbname);

//         // Check for connection errors
//         if ($conn->connect_error) {
//             // Log the error for debugging, but do not output to the browser directly
//             error_log("Database connection failed: " . $conn->connect_error);
//             return null; // Return null on failure
//         }

//         // Return the connection object on success
//         return $conn;

//     } catch(Exception $e) {
//         // Catch any other exceptions during connection attempt and log them
//         error_log("Database connection exception: " . $e->getMessage());
//         return null; // Return null on failure
//     }
// }
