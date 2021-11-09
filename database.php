<?php
$mysqli = new mysqli("localhost","root","","kletsknop");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>