<?php
include('../database.php');
$clickMessage;

    $sql = "SELECT * FROM buttonclicks WHERE clickTime BETWEEN NOW() - INTERVAL 15 MINUTE AND NOW() ORDER BY clickId";
    foreach ($conn->query($sql) as $row) {
        print $row['clickId'] . "\t";
        print $row['clickTime'] . "\t";
        print $row['clickMessage'] . "\n";
    }
?>