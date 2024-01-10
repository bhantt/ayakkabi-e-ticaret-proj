<?php
include "giris-islem.php";


$user_name = isset($_SESSION['user']) ? $_SESSION['user']['user_name'] : '';


$products = $db->query("SELECT * FROM products");

// ÜRÜNLERİ GÖSTER
foreach ($products as $product) {
    echo "<div class=\"product\">";
    echo "<img src=\"{$product['image']}\" alt=\"{$product['name']}\">";
    echo "<h2>{$product['name']}</h2>";
    echo "<p>{$product['price']} TL</p>";
    echo "<a href=\"urunler.php?product_id={$product['id']}\" class=\"add-to-cart\">Sepete Ekle</a>";
    echo "</div>";
}

// SEPETE EKLEME
if (isset($_GET['product_id'])) {
    
    $product_id = $_GET['product_id'];

    // ÜÜRÜNLER
    $product_statement = $db->prepare("SELECT * FROM products WHERE id = :product_id");
    $product_statement->bindParam(':product_id', $product_id);
    $product_statement->execute();
    $product = $product_statement->fetch();

    
    $sql = "INSERT INTO cart (user_id, product_id, product_name, price, quantity, added_date)
            VALUES (:user_id, :product_id, :product_name, :product_price, 1, NOW())";
    $statement = $db->prepare($sql);

   
    $user_id = isset($_SESSION['user']) ? $_SESSION['user']['id'] : null;
    $statement->bindParam(':user_id', $user_id);

    $statement->bindParam(':product_id', $product_id);
    $statement->bindParam(':product_name', $product['name']);
    $statement->bindParam(':product_price', $product['price']);
    $statement->execute();

    // MYPROFİLE.PHP YE GİT
    header("Location: myprofile.php");
    exit;
}
?>
