<?php
include "giris-islem.php";

$user_name


$cart_statement = $db->prepare("SELECT * FROM cart WHERE user_name = :user_name");
$cart_statement->bindParam(':user_name', $user_name);
$cart_statement->execute();
$cart_items = $cart_statement->fetchAll();


foreach ($cart_items as $item) {
    echo "<div class=\"cart-item\">";
    echo "<img src=\"{$item['product_image']}\" alt=\"{$item['product_name']}\">";
    echo "<h2>{$item['product_name']}</h2>";
    echo "<p>{$item['quantity']} adet</p>";
    echo "<p>{$item['price']} TL</p>";
    echo "</div>";
}


echo "<form action=\"siparis.php\" method=\"post\">";
echo "<button type=\"submit\" class=\"btn-confirm\" name=\"confirm_order\">Siparişi Onayla</button>";
echo "</form>";
?>
