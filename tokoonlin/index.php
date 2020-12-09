<?php
session_start();

if(isset($_SESSION[""])){
header("Location: login.php");
exit;
}



?>
<!DOCTYPE html>
<html>
<head>
<title>Halaman Admin</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/template.css">

</head>
<body>
    <input type="checkbox" id="sidebar-toggle">
<div class="sidebar">
<div class="sidebar-header">
    <h3 class="brand">
    <span class="ti-unlink"></span>
    <span>TokoKu</span>
    </h3>
    <label for="sidebar-toggle" class="ti-menu-alt"></label>
</div>
<div class="sidebar-menu">
<ul>

<li><a href="dashboard.php">
        <span class="ti-home"></span>
        <span>Dashboard</span>
    </a>
</li>
 
<li><a href="barang.php">
        <span class="ti-folder"></span>
        <span>Data Barang</span>
    </a>
</li>

<li><a href="pegawai.php">
        <span class="ti-clipboard"></span>
        <span>Data Pegawai</span>
    </a>
</li>

<li><a href="nota.php">
        <span class="ti-money"></span>
        <span>Nota Belanja</span>
    </a>
</li>
<?php
if(isset($_SESSION["admin"])){ ?>
<li><a href="supplier.php">
        <span class="ti-face-smile"></span>
        <span>Data Supplier</span>
    </a>
</li>
<?php }
?>
<li><a href="logout.php">
        <span class="ti-arrow-left"></span>
        <span>Logout</span>
    </a>
</li>   
</ul>
</div>
</div>



</body>
</html>
