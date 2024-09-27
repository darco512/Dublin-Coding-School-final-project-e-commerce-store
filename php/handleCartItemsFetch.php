<?php

include 'dbConnection.php';

$totalItems = 0;
$totalPrice = 0;
$totalSum = 0;
$index =0;
$cartItems = [];

if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
    $cartItems = $_SESSION['cart'];
}


if (!empty($cartItems)) {
    $productIds = array_keys($cartItems);
    $placeholders = implode(',', array_fill(0, count($productIds), '?'));
    
    $sql = $connection->prepare("SELECT p.product_id, p.category, p.brand, p.type, p.color, p.old_price, p.price, 
                                        i.path as image_path, 
                                        s.size, s.quantity as stock_quantity 
                                 FROM products p
                                 LEFT JOIN images i ON p.product_id = i.product_id
                                 LEFT JOIN sizes s ON p.product_id = s.product_id
                                 WHERE p.product_id IN ($placeholders)
                                 ORDER BY p.product_id, s.size");


    $sql->bind_param(str_repeat('i', count($productIds)), ...$productIds);
    
    $sql->execute();
    $result = $sql->get_result();

    $products = [];
    
    while ($row = $result->fetch_assoc()) {
        $id = $row['product_id'];
        
        if (!isset($products[$id])) {
            $products[$id] = [
                'brand' => $row['brand'],
                'type' => $row['type'],
                'color' => $row['color'],
                'price' => $row['price'],
                'sizes' => [],
                'images' => []
            ];
        }
        
        $products[$id]['sizes'][$row['size']] = $row['stock_quantity'];
        if (!in_array($row['image_path'], $products[$id]['images'])) {
            $products[$id]['images'][] = $row['image_path'];
        }
    }
    
    $sql->close();
}

if (!empty($cartItems)) {
    foreach($cartItems as $id => $item) {
        foreach($item as $size => $quantity) {
            $totalItems += $quantity;
            $totalPrice = $quantity * $products[$id]['price'];
            $totalSum += $totalPrice;
        }
    }
}
?>