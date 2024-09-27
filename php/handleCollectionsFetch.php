<?php
include 'dbConnection.php';
$category = $_GET['category'];
$category = $connection->real_escape_string($category);

$sql = $connection->prepare("
    SELECT 
        p.product_id, 
        p.brand, 
        p.type, 
        p.old_price, 
        p.price,
        i.path
    FROM products p
    LEFT JOIN images i ON p.product_id = i.product_id
    WHERE p.category = ?
    ORDER BY i.id ASC
");

$sql->bind_param("s", $category);
$sql->execute();
$result = $sql->get_result();

$products = [];
$current_product_id = null;
$first_image_url = null;

while ($row = $result->fetch_assoc()) {
    if ($current_product_id !== $row['product_id']) {
        if ($current_product_id !== null) {
            $products[] = [
                'product_id' => $current_product_id,
                'brand' => $brand,
                'type' => $type,
                'old_price' => $old_price,
                'price' => $price,
                'path' => $first_image_url
            ];
        }

        $current_product_id = $row['product_id'];
        $brand = $row['brand'];
        $type = $row['type'];
        $old_price = $row['old_price'];
        $price = $row['price'];
        $first_image_url = $row['path'];
    }
}

if ($current_product_id !== null) {
    $products[] = [
        'product_id' => $current_product_id,
        'brand' => $brand,
        'type' => $type,
        'old_price' => $old_price,
        'price' => $price,
        'path' => $first_image_url
    ];
}

echo json_encode($products);

$sql->close();
$connection->close();
?>