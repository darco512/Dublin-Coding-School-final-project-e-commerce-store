<?php

$username = 'db_admin';
$password = 'VZdaW1RdMtrKykkW';
$host = 'localhost';
$database = 'store';

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

?>