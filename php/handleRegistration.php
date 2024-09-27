<?php
session_start();
include 'dbConnection.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$email = $_POST['sign-up-email'];
$password = $_POST['sign-up-pass'];
$isAdmin = false;
$date = new DateTime($dob);
$formatted_date = $date->format('Y-m-d');
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = $connection->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
$sql->bind_param("s", $email);
$sql->execute();
$sql->bind_result($count);
$sql->fetch();
$sql->close();

if ($count > 0) {
    // Email already exists, set an error message
    $_SESSION['error'] = 'Email already used. Please try another one.';
    header('Location: ../pages/register.php');
    exit();
}


$sql = $connection->prepare("INSERT INTO `users`(`fname`, `lname`, `email`, `password`, `dob`, `is_admin`) VALUES (?,?,?,?,?,?)");
$sql->bind_param("sssssi", $fname, $lname, $email, $hashedPassword, $formatted_date, $isAdmin);


$sql->execute();

$connection->close();
header("Location: ../pages/login.php");
exit;
?>