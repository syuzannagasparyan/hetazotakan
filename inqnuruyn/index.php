<?php
session_start();
require_once 'classes/Database.php';
require_once 'classes/Product.php';

$db = (new Database())->getConnection();
$productObj = new Product($db);
$result = $productObj->getAll();
?>

<!DOCTYPE html>
<html lang="hy">
<head>
    <meta charset="UTF-8">
    <title>Ապրանքների Կատալոգ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Բարի գալուստ մեր խանութ</h1>
        <nav>
            <?php if(isset($_SESSION['user_id'])): ?>
                <span>Բարև, <strong><?php echo $_SESSION['username']; ?></strong> | </span>
                <a href="addproduct.php">Ավելացնել Ապրանք</a> | 
                <a href="logout.php">Ելք</a>
            <?php else: ?>
                <a href="login.php">Մուտք</a> | 
                <a href="register.php">Գրանցվել</a>
            <?php endif; ?>
        </nav>
    </header>

    <hr>

    <h2>Ապրանքների ցանկ</h2>

    <div class="products-container">
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <div class="product-card">
                    <?php if(!empty($row['image'])): ?>
                        <img src="uploads/<?php echo $row['image']; ?>" alt="product">
                    <?php else: ?>
                        <div style="background:#eee; height:150px; display:flex; align-items:center; justify-content:center;">Նկար չկա</div>
                    <?php endif; ?>
                    
                    <h3><?php echo $row['title']; ?></h3>
                    <p class="price">Գին՝ <?php echo $row['price']; ?> AMD</p>
                    <p class="seller">Վաճառող՝ <?php echo $row['username']; ?></p>
                    <p class="desc"><?php echo $row['description']; ?></p>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Ապրանքներ դեռ չկան։</p>
        <?php endif; ?>
    </div>

</body>
</html>
