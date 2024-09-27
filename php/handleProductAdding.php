<?php

include 'dbConnection.php';

$uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/Coding School Final Project/uploads/';
$uploadUrl = '/Coding School Final Project/uploads/';


$category = $_POST['category'];
$brand = $_POST['brand'];
$type = $_POST['type'];
$color = $_POST['color'];
$oldPrice = $_POST['oldPrice'];
$price = $_POST['price'];
$sizes = $_POST['sizes'];
$quantities = $_POST['quantities'];

$sql = $connection->prepare("INSERT INTO `products`(`category`, `brand`, `type`, `color`, `old_price`, `price`) VALUES (?,?,?,?,?,?)");
$sql->bind_param("ssssdd", $category, $brand, $type, $color, $oldPrice, $price);

$sql->execute();
$product_id = $connection->insert_id;


for ($i = 0; $i < count($sizes); $i++) {
    $size = $sizes[$i];
    $quantity = $quantities[$i];
    $sql = $connection->prepare("INSERT INTO `sizes`(`product_id`, `size`, `quantity`) VALUES (?,?,?)");
    $sql->bind_param("isi",$product_id, $size, $quantity);
    $sql->execute();
}


foreach ($_FILES['images']['tmp_name'] as $key => $tmpName) {
    $fileName = basename($_FILES['images']['name'][$key]);
    $targetFilePath = $uploadDir . $fileName;
    $path = $uploadUrl . $fileName;
    if (move_uploaded_file($tmpName, $targetFilePath)) {
        $sql = $connection->prepare("INSERT INTO `images`(`product_id`, `path`) VALUES (?,?)");
        $sql->bind_param("is",$product_id, $path);
        $sql->execute();
    }
}

$connection->close();

header("Location: ../pages/product.php?id=" . $product_id);
exit;
?>