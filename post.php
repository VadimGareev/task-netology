<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['username'] = htmlspecialchars($_POST['username']);
    header('Location: index.php');
    exit();
}
?>
