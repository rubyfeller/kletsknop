<?php
include('../database.php');
$ipaddress = '145.93.144.37';
$port = 80;
$sock=socket_create(AF_INET,SOCK_STREAM,0) or die("Cannot create a socket");
date_default_timezone_set('Europe/Amsterdam');
echo date_default_timezone_get();
$timestamp = date('Y-m-d H:i:s');
if ($sock == false) {
    echo socket_strerror(socket_last_error()); // display PHP error
}
else {
    echo "socket OK";
}
socket_connect($sock,$ipaddress,$port) or die("Could not connect to the socket");
$readMessage = socket_read($sock, 1024);

echo $readMessage;

socket_close($sock); // close socket for security
?>