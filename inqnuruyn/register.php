<?php session_start(); ?>
<!DOCTYPE html>
<html lang="hy">
<head>
    <meta charset="UTF-8">
    <title>Գրանցվել</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Գրանցվել</h2>
<?php
if(isset($_SESSION['error'])) { echo "<p style='color:red'>".$_SESSION['error']."</p>"; unset($_SESSION['error']); }
if(isset($_SESSION['success'])) { echo "<p style='color:green'>".$_SESSION['success']."</p>"; unset($_SESSION['success']); }
?>
<form method="POST" action="registerprocess.php">
    <input type="text" name="username" placeholder="Օգտանուն" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Գաղտնաբառ" required><br>
    <button type="submit">Գրանցվել</button>
</form>
<p>Արդեն գրանցված եք? <a href="login.php">Մուտք</a></p>
</body>
</html>
