<?php 
session_start();


include 'dbConnection.php';

$email = $_POST['email'];
$subject = $_POST['subject'];
$massage = $_POST['message'];


$sql = $connection->prepare("INSERT INTO `messages`(`email`, `subject`, `message`) VALUES (?,?,?)");
$sql->bind_param("sss", $email, $subject, $massage);

if ($sql->execute()) {
    $_SESSION['message'] = 'The message have been sent!';
    $_SESSION['message_type'] = 'success';
} else {
    $_SESSION['message'] = 'Error sending message: ' . $sql->error;
    $_SESSION['message_type'] = 'error';
}

$connection->close();

header("Location: ../pages/contact.php");
exit;
?>