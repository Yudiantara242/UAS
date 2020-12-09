<?php
require 'functions.php';
if(isset($_POST["register"])){


    if(registrasi($_POST) > 0 ){
        echo "
        <script>
            alert('User baru berrhasil ditambah');
        </script>
        ";

        
    }else{
        echo mysqli_error($conn);
    }
 
  
}



  

?>



<!DOCTYPE html>
<html>
<head>
<title>Registrasi</title>
  <meta charset="UTF-8">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

  
<style>
    label {
        display: block;
    }
    </style>
</head>
<body>

</form>
<div class="kotak-login">
<h1 class="ti-user" style="text-align: center;"></h1>
<h2 class="tulisan_login" style="text-align: center;">Registrasi</h2>

  <form action="" method="post">
    <div class="form-group">
    <label for="username">Username : </label>
      <input class="form_login" type="text" name="username" id="username" required>
    </div>
    <div class="form-group">
    <label for="jabatan">Jabatan : </label>
      <input class="form_login" type="text" name="jabatan" id="jabatan" required>
    </div>
    <div class="form-group">
    <label for="password">Password : </label>
    <input class="form_login" type="password" name="password" id="password" required>
    <div class="form-group">
    <label for="password">Ulangi: </label>
    <input class="form_login" type="password" name="password2" id="password2" required>
    </div>
    <button class="tombol_login" type="submit" name="register">Register</button>
  </form>
</div>
</body>
</html>