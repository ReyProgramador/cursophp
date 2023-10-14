<?php


if($_SERVER['SERVER_NAME'] == "opengiscrm.com" ) {  
    $dbHost     = "localhost";
    $dbUsername = "jonatha";
    $dbPassword = "12";
    $dbName     = "cursoph";
                                          
}
  else { 
  
    $dbHost     = "localhost";
    $dbUsername = "jonathan";
    $dbPassword = "123";
    $dbName     = "cursophp";
} 

// Create database connection  $dbHost     = "localhost";
   

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
//echo "DB Name:".$dbName."<br>";
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

?>