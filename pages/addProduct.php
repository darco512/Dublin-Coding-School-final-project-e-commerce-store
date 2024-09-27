<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="../styles.css" rel="stylesheet">
</head>
<body>
    
    <?php include '../partial/header.php'; ?>

    <main class="add">
        <p id='error-category' class='error-add'>Please choose a category.</p>
        <p id='error-images' class='error-add'>Must be added at least 1 image.</p>
        <form class='add-product' action="../php/handleProductAdding.php" method="POST" enctype="multipart/form-data">

            <div class='add-images'>
                <div class='add-image-main'>
                    <img id="main-image-preview" src="../images/no-image.png">
                </div>
                <div class='add-images-thumbnail' id="thumbnails-container">
                    <div class='add-images-container'>
                        <img src="../images/add-image.png"/>
                        <input type="file" id="images" name="images[]" accept="image/*" multiple>
                    </div>
                </div>
            </div>
            <div class="add-product-description">

                <div>
                    
                    <div class='add-description-row'>
                        <label for='add-category'>Category</label>
                        <select id='add-category' name='category'>
                            <option value='' hidden>Choose category</option>
                            <option value='Women'>Women</option>
                            <option value='Men'>Men</option>
                            <option value='Kids'>Kids</option>
                        </select>
                    </div>
                    <div class='add-description-row'>
                        <label>Brand</label>
                        <input name='brand' type='text' required>
                    </div>

                </div>
                <div>
                    <div class='add-description-row'>
                        <label>Color</label>
                        <input name='color' type='text' required>
                    </div>
                    <div class='add-description-row'>
                        <label>Type</label>
                        <input name='type' type='text' required>
                    </div>
                </div>
                <div>
                    <div class='add-description-row'>
                        <label>Old price</label>
                        <input name='oldPrice' type='number' step='0.01' required>
                    </div>
                    <div class='add-description-row'>
                        <label>New price</label>
                        <input name='price' type='number' step='0.01' required>
                    </div>
                </div>
                <div class='add-sizes'>
                    <h4>Sizes</h4>
                    <div class='add-description-row'>
                        <label>Value</label>
                        <label>Quantity</label>
                    </div>
                    <div class="size-inputs-container">
                        <div class='add-sizes-row'>
                            <input name = 'sizes[]' type="text" required>
                            <input name = 'quantities[]' type='number' required>
                        </div>
                    </div>
                    <button id='add-size'>Add size</button>
                </div>
                <button type='submit' class='cart-btn'>Add Product</button>
            </div>
        </form>
    </main>

    <?php include '../partial/footer.php'; ?>
    
    <script src="../js/addProduct.js"></script>
</body>
</html>