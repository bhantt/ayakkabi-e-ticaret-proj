<?php

$sunucu = "xxx";
$database = "xxx";
$username = "xxx";
$password = "xxx";

try {
    $baglanti = new PDO("mysql:host=$sunucu;dbname=$database", $username, $password);
    
    if ($baglanti->getAttribute(PDO::ATTR_CONNECTION_STATUS)) {
        echo "Bağlantı başarılı!";
    }
} catch (PDOException $e) {
    
    echo "Bağlanti hatası: " . $e->getMessage();
}

