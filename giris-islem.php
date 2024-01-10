<?php

$sunucu = "192.168.1.102";
$database = "eticaret";
$username = "serverbatu";
$password = "123456";

try {
    $db = new PDO("mysql:host=$sunucu;dbname=$database", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Bağlantı hatası: " . $e->getMessage());
}


session_start();


if ($_POST) {
    
    $user_name = $_POST['username'];
    $pass_word = $_POST['password'];

    
    $statement = $db->prepare('SELECT * FROM users WHERE user_name = ? AND user_password = ?');
    $statement->execute([$user_name, $pass_word]);
    $user = $statement->fetch();

    
    if ($user) {
        
        $_SESSION['user'] = $user;

        
        header('Location: urunler.php');
        exit;
    } else {
        
        echo '<div class="error">Giriş bilgileri yanlış.</div>'; 
    }
}
?>
