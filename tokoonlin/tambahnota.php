<?php

require 'functions.php';
$conn = mysqli_connect("localhost", "root", "", "toko_online");


if(isset($_POST["submit"])){

if(tambahbarang($_POST) > 0){
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



<div class="main-content">

    <header>
    <div class="search-wrapper">
        <span class="ti-search"></span>
        <input type="search" placeholder="Search">
    </div>
<div class="social-icons">
<span class="ti-bell"></span>
<span class="ti-comment"></span>
<div></div>
</div>
</header>

<main>
    <h2 class="dash-tittle">Tambah Data</h2>

<form actions="" method="post">
<div class="col-md-6">
<div class="form-group">
<label for="id_nota">ID Nota : </label>
    <input type="text" name="id_nota" id="id_nota" class="form-control" required>
</div><br>
<div class="form-group">
<label for="tgl">Tanggal : </label>
    <input type="text" name="tgl" id="tgl" class="form-control" required>
</div><br>
<div class="form-group">
<label for="total_belanja">Total Belanja : </label>
    <input type="text" name="total_belanja" id="total_belanja" class="form-control" required>
</div><br>
<div class="form-group">
<label for="id_pegawai">ID Pegawai : </label>
    <input type="text" name="id_pegawai" id="id_pegawai" class="form-control" required>
</div><br>
<div class="form-group">
<label for="id_pelanggan">ID Pelanggan : </label>
    <input type="text" name="id_pelanggan" id="id_pelanggan" class="form-control" required>
</div><br>
<div class="form-group">
<button type="submit" class="btn btn-primary" name="submit">Tambah</button>
</div>
</div>
</form>
</main>
</div>


