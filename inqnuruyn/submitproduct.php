<?php
session_start();
require_once 'classes/Database.php';
require_once 'classes/Product.php';

$db = (new Database())->getConnection();
$productObj = new Product($db);

$imageName = null;
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    $imageName = time() . "_" . $_FILES["image"]["name"];
    move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $imageName);
}

if($productObj->add($_SESSION['user_id'], $_POST['title'], $_POST['description'], $_POST['price'], $imageName)){
    header("Location: index.php");
} else {
    echo "Սխալ ապրանքն ավելացնելիս";
}
?>
