<?php
include_once 'index.php';
require 'functions.php';
if(!isset($_SESSION["admin"])){  echo "
    <script>
    alert('Anda Tidak Mempunyai Hak Akses!');
    document.location.href = 'pegawai.php';
   </script>
   ";

$id = $_GET["id"];


$pgw = query("SELECT * FROM pegawai WHERE id_pegawai = '$id'")[0];


$conn = mysqli_connect("localhost", "root", "", "toko_online");


if(isset($_POST["submit"])){

if(ubah($_POST) > 0){
    echo "
    <script>
        alert('berhasil');
        document.location.href = 'index.php';
    </script>
    ";
}else{
    echo "
    <script>
        alert('gagal');
        document.location.href = 'index.php';
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
<input type="hidden" name="id_pegawai" value="<?= $pgw["id_pegawai"]; ?>">
<input type="hidden" name="gambarlama" value="<?= $pgw["gambar"]; ?>">
<div class="col-md-6">
<div class="form-group">
<label for="nama_pegawai">Nama : </label>
    <input type="text" name="nama_pegawai" id="nama_pegawai" required value="<?= $pgw["nama_pegawai"]; ?>">
    </div><br>
<div class="form-group">
<label for="alamat_pegawai">Alamat : </label>
    <input type="text" name="alamat_pegawai" id="alamat_pegawai" required value="<?= $pgw["alamat_pegawai"]; ?>">
    </div><br>
<div class="form-group">
<label for="notelp_pegawai">Nomor Telepon : </label>
    <input type="text" name="notelp_pegawai" id="notelp_pegawai" required value="<?= $pgw["notelp_pegawai"]; ?>">
    </div><br>
<div class="form-group">
<label for="jabatan">Jabatan : </label>
    <input type="text" name="jabatan" id="jabatan" required value="<?= $pgw["jabatan"]; ?>">
    </div><br>
<div class="form-group">
<label for="jabatan">Gambar : </label>
    <img src="img/<?= $pgw["gambar"]; ?>">
    <input type="file" name="gambar" id="gambar">
    </div><br>
<div class="form-group">
<button type="submit" name="submit">ubah</button>
</div>
</div>
</form>
</main>
</div>
