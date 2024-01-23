<?php
include "baglanti.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $user_name = $_POST['username'];
    $pass_word = $_POST['password'];


    
    $statement = $baglanti->prepare('SELECT * FROM users WHERE user_name = ? AND user_password = ?');
    $statement->execute([$user_name, $pass_word]);
    $user = $statement->fetch();

    if ($user) {
        
        session_start();
        $_SESSION['user_name'] = $user_name;

       
        header('Location: urunler.php');
        exit;
    } else {
        echo '<div class="error">Giriş bilgileri yanlış.</div>'; 
    }
}

?>
