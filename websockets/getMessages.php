<?php
include("../database.php");

$return_arr = array();

$result = mysqli_query($mysqli, "SELECT * FROM buttonclicks WHERE clickTime BETWEEN NOW() - INTERVAL 15 MINUTE AND NOW() ORDER BY clickId");

while($row = mysqli_fetch_array($result)){
    $clickTime = $row['clickTime'];
    $clickMessage = $row['clickMessage'];
	
	$return_arr[] = array("clickTime" => $clickTime,
    "clickMessage" => $clickMessage);
}

echo json_encode($return_arr);
?>