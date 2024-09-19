<?php
// Enable all errors, otherwise pages will fail silently ...
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Check what server you are accessing
if (strstr($_SERVER['SERVER_NAME'], 'localhost')) {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "e54061";
  $imagePath="/~e54061/public_html/wp/week9/images/";
} else {
  $servername = "talsprddb02.int.its.rmit.edu.au";
  $username = "e54061";
  $password = "RMITp4ssw0rd";
  $dbname = "e54061";
  $imagePath="/home/eh1/e54061/public_html/wp/week9/images/";
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Debugging function 
function pre($var) {
  echo "<pre>";
  print_r($var);
  echo "</pre>";
}
?>
