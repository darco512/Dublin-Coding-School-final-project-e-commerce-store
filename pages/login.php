<?php
session_start(); 

if(isset($_COOKIE['user'])){
    header("Location: ../pages/profile.php");
}

if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="/Coding School Final Project/styles.css" rel="stylesheet">
</head>
<body>
    <div class="sign-content">
        <?php include '../partial/header.php'; ?>

        <main class="sign">
            <div class="sign-container">
                <?php if (isset($error)): ?>
                    <div style="color: red; text-align: center;">
                        <?php echo htmlspecialchars($error); ?>
                    </div>
                <?php endif; ?>
                <h1>Sign in</h1>
                <form class="sign-form" id="login-form" action="../php/handleLogin.php" method="POST">
                    <label for="sign-in-email">Email</label>
                    <input id="sign-in-email" name="sign-in-email" type="email" placeholder="E.g.: example@mail.com" required>
                    <label for="sign-in-pass">Password</label>
                    <input id="sign-in-pass" name="sign-in-pass" type="password" placeholder="E.g.: pasSWord!123" required>
                    <button type="submit" class="main-button">Sign in</button>
                </form>
                <p>Don't have account yet? <a href="/Coding School Final Project/pages/register.php">Sing up</a></p>
            </div>
        </main>

        <?php include '../partial/footer.php'; ?>
    </div>
</body>
</html>