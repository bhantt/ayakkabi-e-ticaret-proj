<?php

include("baglanti.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>E-Ticaret Ayakkabı</title>
   <link rel="stylesheet" href="style.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;1,700&display=swap" rel="stylesheet">
</head>
<body>



   <div class="header">

      <div class="container">
         <div class="navbar">
          <div class="logo">
             <img src="images/logo.png" width = "125px">
          </div>
            <nav>
             <ul>
                <li><a href="">Ana Sayfa</a></li>
                <li><a href="">Hakkımızda</a></li>
                <li><a href="">İletişim</a></li>
               <li><a href="acc.php">Hesap</a></li>

                </ul>
            </nav>
            <img src="images/sepet.png" width ="30px" height="30px">
         </div>
         <div class="row">
          <div class="col-2">
            <h1>İyilerin Adresi!</h1>
          <p>Adımlarınızı özel kılan, tarzınızı tamamlayan bir adım daha attınız. Biz, ayakkabı tutkunlarının kalbinde yer edinmeyi hedefleyen bir aileyiz.<br> Her adımınızda sizi desteklemek, tarzınıza uygun bir adım sunmak için buradayız.</p>
            <a href="" class = "anabtn">Şimdi Keşfet &#8594;</a>
            </div>
            <div class="col-2">
               <img src="images/mainshoe.jpg">
            </div>
         </div>
      </div>   
      
   </div>


      <!-------- öne çıkan kategoriler ------>
      <div class="categories">
         <div class="small-container">
            <h2 class="onecikankategori">Öne Çıkan Kategoriler</h2>
            <div class="row">
               <div class="col-3">
                  <img src="images/kategori1.jpg">
               </div>
               <div class="col-3">
                  <img src="images/kategori2.jpg">
               </div>
               <div class="col-3">
                  <img src="images/kategori3.jpg">
               </div>
               </div>
            </div>
           
      </div>             

      <!-------- öne çıkanlar ------>
         <div class="small-container">
            <h2>Öne Çıkanlar</h2>
            <div class="row">
               <div class="col-4">
                  <img src="images/onecikan.jpg" alt="">
                  <h4>Pembe Koşu Ayakkabısı</h4>
                  <p>1200TL</p>
               </div>
            </div>
         </div>

</body>
</html>