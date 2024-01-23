<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giriş Yap</title>
  <link rel="stylesheet" href="accstyle.css">
</head>
<body>
  
  <div class="login">
    <div class="login-screen">
      <div class="app-title">
        <h1>Giriş Yap</h1>
      </div>
    <form action="giris-islem.php" method="post">
      <div class="login-form">
        <div class="control-group">
          <input type="text" name="username" class ="login-field" placeholder="Kullanıcı Adı" id="login-username">
          <label for="login-username" class="login-field-label"></label>
        </div>
        <div class="control-group">
          <input type="password" name="password" id="login-pass" class="login_field" placeholder="Şifre">
          <label for="login-pass" class="login-field-label"></label>
        </div>
        <button type="submit" class="btn-login" name="giris">Giriş Yap</button>
        
      </div>
    </form>
    <a href="acc-kayit.php"><button class="btn-login" name="kayit">Kayıt Ol</button></a>
    </div>
  </div>

</body>
</html>