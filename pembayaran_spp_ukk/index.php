<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Admin / Petugas - Pembayaran SPP.</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <body style="background-image: linear-gradient(to bottom right, #CAF0F8,#0096C7); background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">
    <div class="center">
	<form action="proses-login-siswa.php" method="post">
      <h1>Login Siswa</h1>
        <div class="txt_field">
          <input type="number" name="nisn" required>
          <span></span>
          <label>NISN</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" value="Login">
        <div class="signup_link">
        <a href="../index.html">kembali kehalaman utama?</a>
        </div>
      </form>
    </div>
	<script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>