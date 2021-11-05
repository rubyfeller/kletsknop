<?php
$ipaddress = '172.20.10.6';
$port = '80';
$sock=socket_create(AF_INET,SOCK_STREAM,0) or die("Cannot create a socket");
if ($sock == false) {
    echo socket_strerror(socket_last_error()); // display PHP error
}
else {
    echo "socket OK";
}
socket_connect($sock,$ipaddress,$port) or die("Could not connect to the socket");
$readMessage = socket_read($sock, 1024);

echo $readMessage;
socket_close($sock);
?>