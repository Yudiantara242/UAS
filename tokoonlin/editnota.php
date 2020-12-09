<?php
include_once 'index.php';
require 'functions.php';


$id = $_GET["id"];


$pgw = query("SELECT * FROM notabelanja WHERE id_nota = '$idnota'")[0];


$conn = mysqli_connect("localhost", "root", "", "toko_online");


if(isset($_POST["submit"])){

if(editbarang($_POST) > 0){
    echo "
    <script>
        alert('berhasil');
        document.location.href = 'nota.php';
    </script>
    ";
}else{
    echo "
    <script>
        alert('gagal');
        document.location.href = 'nota.php';
    </script>
    ";
}
}
}

?>




<div class="main-content">

    <header>
    <div class="search-wrapper">
        
    </div>
<div class="social-icons">
<span class="ti-bell"></span>
<span class="ti-comment"></span>
<div></div>
</div>
</header>

<main>
    <h2 class="dash-tittle">Edit Data</h2>

<form actions="" method="post" enctype="multipart/form-data">
<input type="hidden" name="id_nota" value="<?= $pgw["id_nota"]; ?>">

<div class="col-md-6">
<div class="form-group">
<label for="tgl">Tanggal : </label>
    <input type="text" name="tgl" id="tgl" required value="<?= $pgw["tgl"]; ?>">
    </div><br>
<div class="form-group">
<label for="total_belanja">Total Belanja : </label>
    <input type="text" name="total_belanja" id="total_belanja" required value="<?= $pgw["total_belanja"]; ?>">
    </div><br>
<div class="form-group">
<label for="id_pegawai">ID Pegawai : </label>
    <input type="text" name="id_pegawai" id="id_pegawai" required value="<?= $pgw["id_pegawai"]; ?>">
    </div><br>
<div class="form-group">
<label for="id_pelanggan">ID Pelanggan : </label>
    <input type="text" name="id_pelanggan" id="id_pelanggan" required value="<?= $pgw["id_pelanggan"]; ?>">
    </div><br>

<div class="form-group">
<button type="submit" name="submit">ubah</button>
</div>
</div>
</form>
</main>
</div>
