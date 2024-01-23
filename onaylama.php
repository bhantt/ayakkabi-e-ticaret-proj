<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Siparişiniz onaylandı</title>
</head>
<body>
  
</body>
</html>


<?php
include "giris-islem.php";

session_start();
$user_name = $_SESSION['user_name'];

$cart_statement = $baglanti->prepare("SELECT * FROM cart WHERE user_id = :user_name");
$cart_statement->bindParam(':user_name', $user_name);
$cart_statement->execute();
$cart_items = $cart_statement->fetchAll();

foreach ($cart_items as $item) {
    echo "<div class=\"cart-item\">";
    echo "<h2>{$item['product_name']}</h2>";
    echo "<p>{$item['quantity']} adet</p>";
    echo "<p>{$item['price']} TL</p>";
    echo "</div>";
}


echo "----Siparişiniz Onaylandı!----";


?>