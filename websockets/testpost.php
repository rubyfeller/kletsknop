<?php
include('../database.php');
$readMessage = "test";
date_default_timezone_set('Europe/Amsterdam'); // set correct timezone
$timestamp = date('Y-m-d H:i:s');

$sql = "INSERT INTO buttonclicks (clickTime, clickMessage) VALUES('$timestamp', '$readMessage')";

if ($mysqli->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}
?>