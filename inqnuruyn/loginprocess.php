<?php
session_start();
require_once 'classes/Database.php';
require_once 'classes/User.php';

$db = (new Database())->getConnection();
$userObj = new User($db);

$username = $_POST['username'];
$password = $_POST['password'];

$user_id = $userObj->login($username, $password);

if($user_id){
    $_SESSION['user_id'] = $user_id;
    $_SESSION['username'] = $username;
    header("Location: index.php");
} else {
    $_SESSION['error'] = "Սխալ օգտանուն կամ գաղտնաբառ";
    header("Location: login.php");
}
?>
