<?php 
$mysqli = new mysqli("localhost", "pma", "Qwe123", "kletsknop");

// Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
?>