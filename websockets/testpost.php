<?php
include('../database.php');
$readMessage = "test";
date_default_timezone_set('Europe/Amsterdam'); // set correct timezone
$timestamp = date('Y-m-d H:i:s');

if ($readMessage != '' | NULL) {
    $sql = "INSERT INTO buttonclicks (clickTime, clickMessage) VALUES('$timestamp', '$readMessage')";
    echo  "<br />" . "Received message: " . $readMessage;
    $conn -> exec($sql); // execute SQL statement
}
else {
    echo 0;
    $readMessage = 0;
}
?>