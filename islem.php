
<?php
require "baglanti.php";



if(isset($_POST['acc-kayit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $password_again = $_POST['password_again'];

  if(!$username){
    echo "Kullanıcı adı girin.";
  }
  elseif(!$password || !$password_again){
    echo "Şifre giriniz.";
  }
  elseif($password != $password_again){
    echo "Şifreler uyuşmuyor.";
  }
}


?>