<?php

$sunucu = "192.168.1.101";
$database = "eticaret";
$username = "serverbatu";
$password = "123456";

try {
    $baglanti = new PDO("mysql:host=$sunucu;dbname=$database", $username, $password);
    
    if ($baglanti->getAttribute(PDO::ATTR_CONNECTION_STATUS)) {
        echo "Bağlantı başarılı!";
    }
} catch (PDOException $e) {
    
    echo "Bağlanti hatası: " . $e->getMessage();
}

