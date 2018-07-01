<?php
$host = "localhost";
$user = "root";
$password = "xampp";
$database = "intranetportal";
$sql = new mysqli($host, $user, $password, $database);
echo "Verbindung: ",$sql->host_info,"<br>";
echo "Server-Version: ",$sql->server_info,"<br>";
?>