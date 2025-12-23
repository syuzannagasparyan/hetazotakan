<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="hy">
<head>
    <meta charset="UTF-8">
    <title>Ավելացնել Ապրանք</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Ավելացնել Ապրանք</h2>
    <form method="POST" action="submitproduct.php" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Անվանում" required>
        <textarea name="description" placeholder="Նկարագրություն"></textarea>
        <input type="number" step="0.01" name="price" placeholder="Գին" required>
        
        <label>Ապրանքի նկար:</label>
        <input type="file" name="image" accept="image/*">
        
        <button type="submit">Ավելացնել</button>
    </form>
    <a href="index.php">Վերադառնալ գլխավոր էջ</a>
</body>
</html>
