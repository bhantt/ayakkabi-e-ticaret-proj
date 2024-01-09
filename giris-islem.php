<?php

// Veritabanına bağlan
$sunucu = "192.168.1.101";
$database = "eticaret";
$username = "serverbatu";
$password = "123456";

$pdo = new PDO("mysql:host=$sunucu;dbname=$database", $username, $password);

// Kullanıcı girişini kontrol et
if ($_POST) {
  // Kullanıcı adı ve şifreyi al
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Kullanıcıyı kontrol et
  $statement = $pdo->prepare('SELECT * FROM users WHERE user_name = ? AND user_password = ?');
  $statement->execute([$username, $password]);
  $user = $statement->fetch();

  // Kullanıcı bulunduysa
  if ($user) {
    // Kullanıcıyı oturum aç
    $_SESSION['user'] = $user;

    // Kullanıcıya özel sayfaya yönlendir
    header('Location: user.php');
  } else {
    // Kullanıcı bulunamadıysa
    echo '<div class="error">Giriş bilgileri yanlış.</div>'; // Hata mesajı HTML yapısına uygun şekilde eklendi
  }
}

?>