<?php
session_start();

$rawData = file_get_contents("php://input");
$updatedCart = json_decode($rawData, true);

if ($updatedCart !== null) {
    $_SESSION['cart'] = $updatedCart;
}
?>