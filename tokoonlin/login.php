<?php
session_start();

if(isset($_SESSION["login"])){
    header("Location: dashboard.php");
}
require 'functions.php';
if(isset($_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

   $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");


   if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])){
		if($row['jabatan'] == "admin"){
			$_SESSION['admin']=$username;
			echo '<script language="javascript">alert("Anda berhasil Login Admin!"); document.location="dashboard.php";</script>';
    }else if($row['jabatan'] == "kasir"){
			$_SESSION['kasir']=$username;
      echo '<script language="javascript">alert("Anda berhasil Login Kasir!"); document.location="dashboard.php";</script>';
    }
    else{
			$_SESSION['pramu']=$username;
			echo '<script language="javascript">alert("Anda berhasil Login Pramu!"); document.location="dashboard.php";</script>';
		}
	}
        }$error = true;
    }
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Halaman Login</title>
  <meta charset="UTF-8">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

  

</head>
<body>

<div class="kotak-login">
<h1 class="ti-user" style="text-align: center;"></h1>
<h2 class="tulisan_login" style="text-align: center;">Login</h2>
  <?php if(isset($error)) : ?>
<p style="color: red; font-stle: italic;">username dan password tidak cocok</p>
<?php endif; ?>
  <form action="" method="post">
    <div class="form-group">
    <label for="username">Username : </label>
      <input class="form_login" type="text" name="username" id="username" placeholder="Enter Username" required>
    </div>
    <div class="form-group">
    <label for="password">Password : </label>
    <input class="form_login" type="password" name="password" id="password" placeholder="Enter Password" required>
     
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div><br>
    <div style="text-align: center;">
    <a href="registrasi.php">Registrasi Akun</a></div><br>
    <button class="tombol_login" type="submit" name="login">Login</button>
  </form>
</div>
</body>
</html>
