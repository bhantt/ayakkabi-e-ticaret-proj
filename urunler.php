<?php
include "giris-islem.php";


$products = $baglanti->query("SELECT * FROM products");


foreach ($products as $product) {
    echo "<div class=\"product\">";
    echo "<img src=\"{$product['image']}\" alt=\"{$product['name']}\">";
    echo "<h2>{$product['name']}</h2>";
    echo "<p>{$product['price']} TL</p>";
    echo "<a href=\"urunler.php?product_id={$product['id']}\" class=\"add-to-cart\">Sepete Ekle</a>";
    echo "</div>";
}


if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];

  
    $product_statement = $baglanti->prepare("SELECT * FROM products WHERE id = :product_id");
    $product_statement->bindParam(':product_id', $product_id);
    $product_statement->execute();
    $product = $product_statement->fetch();
    session_start();
    $user_name = $_SESSION['user_name'];

    
    $sql = "INSERT INTO cart (user_id, product_id, product_name, price, quantity, added_date)
            VALUES (:user_name, :product_id, :product_name, :product_price, 1, NOW())";
    $statement = $baglanti->prepare($sql);

    $statement->bindParam(':user_name', $user_name);
    $statement->bindParam(':product_id', $product_id);
    $statement->bindParam(':product_name', $product['name']);
    $statement->bindParam(':product_price', $product['price']);
    $statement->execute();

    
    header("Location: myprofile.php");
    exit;
}

echo "<form method='post'>";
echo "<button type='submit' name='sepeti-gor'>Sepeti Gör</button>";
echo "</form>";

if(isset($_POST['sepeti-gor'])){
    header("Location: myprofile.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>urunler</title>
    <link rel="stylesheet" href="urunler.css">
</head>
<body>
    
</body>
</html>
