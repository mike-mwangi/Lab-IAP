<?php
session_start();
require_once 'user.php';

$currentUser = new User();

if (!isset($_SESSION['user'])) {
    header('location:login.php');
    die();
}

$currentEmail = $_SESSION['user'];

$data = $currentUser->currentUser($currentEmail);


?>