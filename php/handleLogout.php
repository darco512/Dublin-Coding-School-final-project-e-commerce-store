<?php 
if (isset($_COOKIE['user'])) {
    setcookie('user', '', time() - 3600, '/');
}
if (isset($_COOKIE['isAdmin'])) {
    setcookie('isAdmin', '', time() - 3600, '/');
}
if (isset($_COOKIE['name'])) {
    setcookie('name', '', time() - 3600, '/');
}

header("Location: ../pages/login.php");
exit;
?>