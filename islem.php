<?php
require "baglanti.php";

if (isset($_POST['kayit-btn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_again = $_POST['password-again'];

    if (!$username) {
        echo "Kullanıcı adı girin.";
    } elseif (!$password || !$password_again) {
        echo "Şifre giriniz.";
    } elseif ($password != $password_again) {
        echo "Şifreler uyuşmuyor.";
    } else {
        // Kullanıcıyı veritabanına ekleme
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Önce aynı kullanıcı adının olup olmadığını kontrol etmek isteyebilirsiniz
        $stmt = $baglanti->prepare("SELECT * FROM users WHERE user_name = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $existingUser = $stmt->fetch();

        if ($existingUser) {
            echo "Bu kullanıcı adı zaten alınmış.";
        } else {
            // Kullanıcıyı veritabanına ekle
            $insertStmt = $baglanti->prepare("INSERT INTO users (user_name, user_password) VALUES (:username, :password)");
            $insertStmt->bindParam(':username', $username);
            $insertStmt->bindParam(':password', $hashedPassword);
            $insertStmt->execute();
            echo "Kayıt başarıyla tamamlandı. Hoş geldin, $username!";
        }
    }
}
?>
