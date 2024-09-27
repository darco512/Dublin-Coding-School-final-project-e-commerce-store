<?php include '/xampp/htdocs/Coding School Final Project/php/handleProductFetch.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link href="../styles.css" rel="stylesheet">
</head>
<body>
    <div class="product-content">
        <?php include '../partial/header.php'; ?>

        <main class="product">
            <?php if(isset($_COOKIE['isAdmin']) && $_COOKIE['isAdmin']): ?>
                <form id="deleteForm" class="delete-form" action="../php/handleProductDeleting.php" method="POST">
                    <button class="main-button" onclick="confirmDelete()">Delete Product</button>
                    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>"/>
            </form>
            <?php endif ?>
            <div class="product-images">
                
                <div class="product-thumbnail">
                    <?php foreach($paths as $index => $image): ?>
                        <div class="thumbnail-image" >
                            <img class="thumbnail cursor" src="<?php echo $image; ?>" onclick="setImage(<?php echo $index ?>)" draggable="false">
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="product-images-carousel-wrapper">
                    <button id="product-carousel-left">&#10094;</button>
                    <div class="product-images-carousel">
                        <?php foreach($paths as $image): ?>
                            <div class="main-picture">
                                <img src="<?php echo $image; ?>" draggable="false">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <button id="product-carousel-right">&#10095;</button>
                </div>
                
            </div>
        
    
            <div class="product-description">
                <div class="product-description-info">
                    <div class="product-description-text">
                        <h2 class="product-brand"><?php echo $brand ?></h2>
                        <p class="product-type"><?php echo $type?></p>
                        <p class="product-color">Color: <?php echo $color ?></p>
                    </div>
                    <div class="product-description-prices">
                        <p class="product-prev-price">$ <?php echo $old_price ?></p>
                        <h1 class="product-price">$ <?php echo $price ?></h1>
                    </div>
                </div>
                <hr/>
                <form class="product-cart" action="../php/handleAddToCart.php" method="POST">
                    <p class="error-size">Please select size!</p>
                    <div class="product-cart-size">
                        <label>Size</label>
                        <select id="sizes" name="size">
                            <option hidden value="">Select your size</option>
                            <?php 
                                foreach($sizesArray as $size => $quantities){
                                    echo "<option>{$size}</option>";
                                }
                            ?>
                        </select>
                        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>"/>

                        <div class="product-additional-info">
                            <?php if($type === "Shoes") :?>
                                <div class="shoe-size">
                                    <h4>Size chart</h4>
                                    <span class="info">?</span>
                                    <table id="table-shoe-size">
                                        <thead>
                                            <tr>
                                                <th>EU</th>
                                                <th>UK</th>
                                                <th>US</th>
                                                <th>CM</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>39</td>
                                                <td>5</td>
                                                <td>6</td>
                                                <td>23.5</td>
                                            </tr>
                                            <tr>
                                                <td>40</td>
                                                <td>6</td>
                                                <td>7</td>
                                                <td>24.4</td>
                                            </tr>
                                            <tr>
                                                <td>41</td>
                                                <td>7</td>
                                                <td>8</td>
                                                <td>25.4</td>
                                            </tr>
                                            <tr>
                                                <td>42</td>
                                                <td>8</td>
                                                <td>9</td>
                                                <td>26</td>
                                            </tr>
                                            <tr>
                                                <td>43</td>
                                                <td>9</td>
                                                <td>10</td>
                                                <td>27</td>
                                            </tr>
                                            <tr>
                                                <td>44</td>
                                                <td>10</td>
                                                <td>11</td>
                                                <td>27.9</td>
                                            </tr>
                                            <tr>
                                                <td>45</td>
                                                <td>11</td>
                                                <td>12</td>
                                                <td>28.6</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            <?php endif ?>
                            <div class="why-choose-us">
                                <h4>Why choose us</h4>
                                <span class="info">?</span>
                                <ul id="reasons">
                                    <li>14 days free return</li>
                                    <li>Fast delivey</li>
                                    <li>Up to 80% sales</li>
                                    <li>VIP rewards program</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="cart-btn">Add To Cart</button>
                </form>
            </div>
        </main>

        <?php include '../partial/footer.php'; ?>
    </div>
    <script src="../js/product.js"></script>
</body>
</html>