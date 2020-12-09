<?php

require 'functions.php';
$conn = mysqli_connect("localhost", "root", "", "toko_online");


if(isset($_POST["submit"])){

if(tambah($_POST) > 0){
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
include_once 'index.php';
?>

<?php
if(!isset($_SESSION["admin"])){  echo "
    <script>
    alert('Anda Tidak Mempunyai Hak Akses!');
    document.location.href = 'pegawai.php';
   </script>
   ";
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
    <h2 class="dash-tittle">Tambah Data</h2>

<form actions="" method="post" enctype="multipart/form-data">
<div class="col-md-6">
<div class="form-group">
<label for="id_pegawai">ID Pegawai : </label>
    <input type="text" name="id_pegawai" id="id_pegawai" class="form-control" required>
</div><br>
<div class="form-group">
<label for="nama_pegawai">Nama : </label>
    <input type="text" name="nama_pegawai" id="nama_pegawai" class="form-control" required>
</div><br>
<div class="form-group">
<label for="alamat_pegawai">Alamat : </label>
    <input type="text" name="alamat_pegawai" id="alamat_pegawai" class="form-control" required>
</div><br>
<div class="form-group">
<label for="notelp_pegawai">Nomor Telepon : </label>
    <input type="text" name="notelp_pegawai" id="notelp_pegawai" class="form-control" required>
</div><br>
<div class="form-group">
<label for="jabatan">Jabatan : </label>
    <input type="text" name="jabatan" id="jabatan" class="form-control" required>
</div><br>
<div class="form-group">
<label for="jabatan">Gambar : </label>
    <input type="file" name="gambar" id="gambar" class="form-control">
</div><br>
<div class="form-group">
<button type="submit" class="btn btn-primary" name="submit">Tambah</button>
</div>
</div>
</form>
</main>
</div>

