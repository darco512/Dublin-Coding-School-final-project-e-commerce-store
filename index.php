<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link href="./styles.css" rel="stylesheet">
</head>

<body>
    <?php include './partial/header.php'; ?>

    <main>

        <!-- Button, that scrolls screen up -->
        <button id="scrollToTopBtn" title="Go to top">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="black" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
            </svg>             
        </button>


        
        <div class="best-offer">
            <div>
                <h1>Best Offers</h1>
                <p>Up to 70% off</p>
            </div>
            <div>
                <img src="./images/home/best-offer.jpg"/>
                <a id="best-offer-cover" href="#">
                        <h1>View Products</h1>
                </a>
            </div>
        </div>

        <div class="best-brands">
            <h1>Check our best brands</h1>
            <div class="best-brands-logo">
                <a><img src="./images/home/Adidas-Logo.png" /></a>
                <a><img src="./images/home/Boss-Logo.png" /></a>
                <a><img src="./images/home/North-Face-Logo.png" /></a>
                <a><img src="./images/home/Lacoste-Logo.png" /></a>
                <a><img src="./images/home/Nike-Logo.png" /></a>
                <a><img src="./images/home/CK-Logo.png" /></a>
            </div>
        </div>


        <div class="assortment">
            <h1>We have assortment for whole family</h1>

            <div class="assortment-container">
                <div class="assortment-img" id="assortment-women">
                    <img src="images/home/women.jpg" />
                </div>
                <div class="assortment-img" id="assortment-men">
                    <img src="images/home/men.jpg" />
                </div>
                <div class="assortment-img" id="assortment-kids">
                    <img src="images/home/kids.jpg" />
                </div>
            </div>
        
            <div id="hovered-item-container"></div>
        </div>


        <div class="carousel-container">
            <h1>Our latest collection</h1>
            <div class="wrapper">
                <button id="left">&#10094;</button>
                <ul class="carousel">
                    <li class="card">
                        <div class="img">
                            <img src="./images/home/First-Carousel-Item.png" alt="Image 1" draggable="false">
                        </div>
                        <div class="carousel-card-cover">
                            <h3>This season standouts</h3>
                            <span>Save up to 50%</span>
                        </div>
                    </li>
                    <li class="card">
                        <div class="img">
                            <img src="./images/home/Second-Carousel-Item.png" alt="Image 2" draggable="false">
                        </div>
                        <div class="carousel-card-cover">
                            <h3>Summer Shoes</h3>
                            <span>Save up to 70%</span>
                        </div>
                    </li>
                    <li class="card">
                        <div class="img">
                            <img src="./images/home/Third-Carousel-Item.png" alt="Image 3" draggable="false">
                        </div>
                        <div class="carousel-card-cover">
                            <h3>Balenciaga</h3>
                            <span>Save up to 50%</span>
                        </div>
                    </li>
                    <li class="card">
                        <div class="img">
                            <img src="./images/home/Fourth-Carousel-Item.png" alt="Image 4" draggable="false">
                        </div>
                        <div class="carousel-card-cover">
                            <h3>Vince.</h3>
                            <span>Save up to 50%</span>
                        </div>
                    </li>
                    <li class="card">
                        <div class="img">
                            <img src="./images/home/Fifth-Carousel-Item.png" alt="Image 5" draggable="false"> 
                        </div>
                        <div class="carousel-card-cover">
                            <h3>Exclusive designers</h3>
                            <span>Save up to 80%</span>
                        </div>
                    </li>
                </ul>
                <button id="right">&#10095;</button>
            </div>
        </div>

    </main>

    <?php include './partial/footer.php'; ?>

    <script src="./index.js"></script>
</body>

</html>