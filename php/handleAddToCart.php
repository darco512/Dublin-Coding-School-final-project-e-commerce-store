<?php 
session_start();

// Initialize the cart as an array if it's not already
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$product_id = $_POST['product_id']; 
$size = $_POST['size']; 
$quantity = 1; 

// Check if the product already exists in the cart
if (!isset($_SESSION['cart'][$product_id])) {
    // If the product is not in the cart, add it with the size and quantity
    $_SESSION['cart'][$product_id] = [];
}

// Check if the specific size already exists for the product
if (isset($_SESSION['cart'][$product_id][$size])) {
    // If the size exists, increase the quantity
    $_SESSION['cart'][$product_id][$size] += $quantity;
} else {
    // If the size doesn't exist, add it with the specified quantity
    $_SESSION['cart'][$product_id][$size] = $quantity;
}


header("Location: ../pages/product.php?id=" . $product_id);
exit;
?>