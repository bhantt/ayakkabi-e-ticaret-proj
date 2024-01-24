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


echo "<form method='post'>";
echo "<button type='submit' name='temizle'>Sepeti Temizle</button>";
echo "</form>";

// Sepeti Temizleme İşlemi
if (isset($_POST['temizle'])) {
    $clear_cart_statement = $baglanti->prepare("DELETE FROM cart WHERE user_id = :user_name");
    $clear_cart_statement->bindParam(':user_name', $user_name);
    $clear_cart_statement->execute();
    header("Location: myprofile.php");
    echo "<p>Sepetiniz temizlendi!</p>";
   
}


echo "<form method='post'>";
echo "<button type='submit' name='onayla'>Sepeti Onayla</button>";
echo "</form>";

if(isset($_POST['onayla'])){
  
    header("Location: onaylama.php");
}

?>

