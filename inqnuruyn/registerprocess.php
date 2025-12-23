<?php
session_start();
require_once 'classes/Database.php';
require_once 'classes/User.php';

$db = (new Database())->getConnection();
$userObj = new User($db);

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if($userObj->isExists($username, $email)){
    $_SESSION['error'] = "Օգտատեր կամ Email արդեն գոյություն ունի";
    header("Location: register.php");
    exit();
}
if($userObj->register($username, $email, $password)){
    $_SESSION['success'] = "Գրանցումը հաջողությամբ կատարվեց";
    header("Location: login.php");
} else {
    $_SESSION['error'] = "Տեղի է ունեցել սխալ";
    header("Location: register.php");
}
?>
