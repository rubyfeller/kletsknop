<?php
$servername = "localhost";
$username = "root";
$password = ""; // to be replaced with password on server

try {
  $conn = new PDO("mysql:host=$servername;dbname=kletsknop", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>