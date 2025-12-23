<?php session_start(); ?>
<!DOCTYPE html>
<html lang="hy">
<head>
    <meta charset="UTF-8">
    <title>Մուտք</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Մուտք</h2>
<?php
if(isset($_SESSION['error'])) {
    echo "<p style='color:red'>".$_SESSION['error']."</p>"; unset($_SESSION['error']);
    }
?>
<form method="POST" action="loginprocess.php">
    <input type="text" name="username" placeholder="Օգտանուն" required><br>
    <input type="password" name="password" placeholder="Գաղտնաբառ" required><br>
    <button type="submit">Մուտք</button>
</form>
<p>Գրանցված չեք? <a href="register.php">Գրանցվել</a></p>
</body>
</html>
