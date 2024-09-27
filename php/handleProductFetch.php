<?php
include 'dbConnection.php';
    
$product_id = isset($_GET['id']) ? $_GET['id'] : null;

$sql = $connection->prepare("SELECT `category`, `brand`, `type`, `color`, `old_price`, `price` FROM products WHERE product_id = ?");
$sql->bind_param("i", $product_id);
$sql->execute();
$sql->bind_result($category, $brand, $type, $color, $old_price, $price);

$sql->fetch();

if (!$product_id || $category===null) {
    echo "Product not found!";
    exit;
}

$sql->close();

$sql = $connection->prepare("SELECT `path` FROM images WHERE product_id = ?");

$sql->bind_param("i", $product_id);
$sql->execute();
$sql->bind_result($image_url);

$paths = [];

while ($sql->fetch()) {
    $paths[] = $image_url;
}
$sql->close();

$sql = $connection->prepare("SELECT `size`, `quantity` FROM sizes WHERE product_id = ?");

$sql->bind_param("i", $product_id);
$sql->execute();
$sql->bind_result($size, $quantity);

$sizesArray = [];

while ($sql->fetch()) {
    $sizesArray[$size] = $quantity;
}
$sql->close();
$connection->close();
?>