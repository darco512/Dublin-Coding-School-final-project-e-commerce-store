<?php 

include 'dbConnection.php';


$product_id = $_POST['product_id']; 

$sql = $connection->prepare("DELETE FROM `products` WHERE `product_id` = ?");
$sql->bind_param("i", $product_id);

$sql->execute();

$connection->close();

header("Location: ../pages/collections.php");
exit;
?>