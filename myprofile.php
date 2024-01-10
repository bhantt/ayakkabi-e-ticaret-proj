<?php
include "giris-islem.php";

// SEPETİ GÖSTER
$cart_statement = $db->prepare("SELECT * FROM cart");
$cart_statement->execute();
$cart_items = $cart_statement->fetchAll(PDO::FETCH_ASSOC);

if ($cart_items) {
    echo "<h2>SİPARİŞLERİNİZ</h2>";
    foreach ($cart_items as $cart_item) {
        echo "<p>{$cart_item['product_name']} - {$cart_item['quantity']} adet - {$cart_item['price']} TL</p>";
    }
} else {
    echo "<p>Sepetiniz boş.</p>";
}
?>
