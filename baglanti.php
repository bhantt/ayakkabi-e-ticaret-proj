<?php

$sunucu = "192.168.1.101";
$database = "eticaret";
$username = "pardusbatu";
$password = "123456";


$conn = mysqli_connect($sunucu, $username, $password, $database);

if(!$conn){

   die("Baglanti Hatasi!" . mysqli_connect_error());

}
echo "Baglanti Basarili!";




?>