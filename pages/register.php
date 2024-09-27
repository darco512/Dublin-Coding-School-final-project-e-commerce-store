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
    <title>Registration</title>
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
                <h1>Sign up</h1>
                <form class="sign-form" id="login-form" action="../php/handleRegistration.php" method="POST">

                    <legend><u>Personal information</u></legend>

                    <label for="fname">First name</label>
                    <input id="fname" name="fname" type="text" required>

                    <label for="lname">Last name</label>
                    <input id="lname" name="lname" type="text" required>

                    <div>
                        <label for="dob">Your date of birth</label>
                        <input id="dob" name="dob" type="date" required>
                    </div>
                    

                    <legend><u>Sing in information</u></legend>
                    <label for="sign-up-email">Email</label>
                    <input id="sign-up-email" name="sign-up-email" type="email" required>
                    <p id="email-error" class="invisible error"></p>

                    <label for="sign-up-pass">Password</label>
                    <input id="sign-up-pass" name="sign-up-pass" type="password" required>
                    <p id="password-error" class="invisible error"></p>

                    <label for="password-confirmation">Confirm your password</label>
                    <input id="password-confirmation" name="password-confirmation" type="password" required>
                    <p id="password-confirmation-error" class="invisible error"></p>

                    <div>
                        <label for="terms">I agree with terms and conditions</label>
                        <input id="terms" name="terms" type="checkbox" required>
                    </div>
                    
                    <button id="register-submit" type="submit" class="main-button" disabled>Sign up</button>
                </form>
                <p>Already have an account? <a href="/Coding School Final Project/pages/login.php">Sing in</a></p>
            </div>
        </main>

        <?php include '../partial/footer.php'; ?>
    </div>
    <script src="../js/register.js"></script>
</body>
</html>