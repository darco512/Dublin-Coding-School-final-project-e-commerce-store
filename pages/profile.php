<?php
session_start();

if(!isset($_COOKIE['user'])){
    header("Location: ../pages/login.php");
}

$name = $_COOKIE['name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="../styles.css" rel="stylesheet">
</head>
<body>
    <div class="profile-content">
        <?php include '../partial/header.php'; ?>


        <div class="profile-container">
            <div>
                <h2>Hello <?php echo $name?>!</h2>
                <form action="../php/handleLogout.php" method="POST">
                    <button class="main-button">Log Out</button>
                </form>
            </div>
            <?php if($_COOKIE['isAdmin']): ?>
                <a href="./addProduct.php"><button class="main-button">Add Product</button></a>
            <?php endif ?>
        </div>
        <?php include '../partial/footer.php'; ?>
    </div>
</body>
</html>