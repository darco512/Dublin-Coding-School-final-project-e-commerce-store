<?php 
session_start(); 

include '/xampp/htdocs/Coding School Final Project/php/handleCartItemsFetch.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link href="../styles.css" rel="stylesheet">
</head>
<body>
    
   <div class="cart-content">
        <?php include '../partial/header.php'; ?>

        <main class="cart">
            <div class="cart-container">
                <div class="cart-items">
                    <?php echo "<h1>You have <span id='totalItems'>$totalItems</span> items in cart</h1>"; ?>
                    <?php if(!empty($_SESSION['cart'])): ?>
                        <?php foreach($cartItems as $id => $item): ?>
                            <?php foreach($item as $size => $quantity): ?>
                                <?php $quantityInStock = $products[$id]['sizes'][$size] ?>
                                <div id="<?php echo $id.'-'. $size ?>" class='cart-item-container'>
                                    <div class='cart-item'>
                                        <a ef='/Coding School Final Project/pages/product.php?id=<?php echo $id?>'>
                                            <img src='<?php echo $products[$id]['images'][0] ?>'>
                                        </a>
                                        <div style="width: 100%;">
                                            <p class="quantity-error">No more items in stock</p>
                                            <div class='cart-item-info'>
                                                <div class='cart-item-description'>
                                                    <h3><?php echo $products[$id]['brand']?></h3>
                                                    <p>
                                                        <span>
                                                            <?php echo $products[$id]['color'] ?>
                                                        </span> - <span>
                                                            <?php echo $products[$id]['type'] ?>
                                                        </span>
                                                    </p>
                                                </div>
                                                <h3 class='cart-item-size'><?php echo $size ?></h3>
                                                <div class='cart-item-quantity'>
                                                    <button onclick="decreseProduntQuantity('<?php echo $id?>', '<?php echo $size?>', '<?php echo $products[$id]['price'] ?>')">-</button>
                                                    <h4 class="quantity"><?php echo $quantity ?></h4>
                                                    <button onclick="increaseProduntQuantity('<?php echo $id?>', '<?php echo $size?>', '<?php echo $products[$id]['price'] ?>', '<?php  echo $quantityInStock ?>')">+</button>
                                                </div>
                                                <h3 class='cart-item-price'>$ <?php echo $products[$id]['price'] ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <?php 
                                        if(!($id === array_key_last($cartItems)  && $size === array_key_last($item))){
                                            echo "<hr/>";
                                        }
                                    ?>
                                </div>
                                <?php $index++;?>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    <?php endif ?>
                </div>
                <div class="cart-summary">
                    <h1>Order Summary</h1>
                    <div>
                        <h3>Total price incl. TAX:</h3>
                        <?php echo "<h1 class='sum'>$<span id='sum'>" . number_format($totalSum, 2, '.', '') . "</span></h1>" ?>
                    </div>
                    <button class="cart-btn">Check out</button>
                </div>
            </div>
        </main>
        <?php include '../partial/footer.php'; ?>
   </div>
   <script>
        let cartPHP = <?php 
        if(!empty($_SESSION['cart'])){
            echo json_encode($cartItems); 
        } else{
            echo 'null'; 
        }
    ?>;

    if(cartPHP !== null){
        sessionStorage.setItem('cart', JSON.stringify(cartPHP));
    }
   </script>
   <script src="../js/cart.js"></script>
</body>
</html>