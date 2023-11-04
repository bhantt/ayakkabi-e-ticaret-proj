<?php

$sunucu = "192.168.1.101";
$database = "eticaret";
$username = "pardusbatu";
$password = "123456";


try {
     $baglanti = new PDO("mysql:host=$sunucu;dbname=$database", "$username", "$password");
     if($baglanti){
      echo "basarili";

    
     }
     
} catch ( PDOException $e ){
     print "Baglanti hatasi: " . $e->getMessage();
}
$conn = null;






?>