<?php
session_start();

include 'dbConnection.php';

$email = $_POST['sign-in-email'];
$login_password = $_POST['sign-in-pass'];

$sql = $connection->prepare("SELECT `fname`, `password`, `is_admin` FROM `users` WHERE `email` = ? ");
$sql->bind_param("s", $email);
$sql->execute();
$sql->bind_result($fname, $user_password, $isAdmin);
$sql->fetch();

$connection->close();

if(password_verify($login_password, $user_password))
{
    setcookie('user', $email, time() + 3600, "/"); 
    setcookie('isAdmin', $isAdmin, time() + 3600, "/");
    setcookie('name', $fname, time() + 3600, "/");
    header("Location: ../pages/profile.php");

} else{

    $_SESSION['error'] = 'The email or password is incorrect!';
    header("Location: ../pages/login.php");

}
exit;
?>