<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Sepet</title>
</head>
<body>
  <h1>Sepet</h1>

  <?php
  
    $cart = $db->query("SELECT * FROM carts WHERE user_id = {$_SESSION['user_id']}");

    
    $total_price = 0;
    $total_quantity = 0;
    foreach ($cart as $item) {
      echo "<div class=\"cart-item\">";
      echo "<img src=\"{$item['product_image']}\" alt=\"{$item['product_name']}\">";
      echo "<h2>{$item['product_name']}</h2>";
      echo "<p>{$item['quantity']} adet";
      echo "<p>{$item['price']} TL</p>";
      echo "</div>";

      $total_price += $item['price'] * $item['quantity'];
      $total_quantity += $item['quantity'];
    }
  ?>
  <?php
  
  if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
  }

  
  $product_id = $_GET['product_id'];

  
  $sql = "DELETE FROM carts WHERE user_id = {$_SESSION['user_id']} AND product_id = {$product_id}";
  $db->query($sql);

  
  header("Location: cart.php");
?>


  <div class="cart-total">
    <h2>Toplam Tutar</h2>";
    <p><?php echo $total_price; ?> TL</p>";
  </div>

  <div class="cart-quantity">
    <h2>Toplam Adet</h2>";
    <p><?php echo $total_quantity; ?> adet</p>";
  </div>
</body>
</html>
