<?php

require 'functions.php';
 $pegawai = query("SELECT * FROM supplier");
if(isset($_POST["cari"])){
    $pegawai = cari($_POST["keyword"]);
}
include_once 'index.php';
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
<h2 class="dash-tittle">Data Supplier</h2>
<div class="container ">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                          </button>
                   
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                </div>
            </div>
        </nav>
        <div class="content" >
              <ul class="list-group col-md-3 col-xs-2">
              <div class="col-md-9 col-xs-10">
              
    <div class="row">
    <div class="center" width="auto">
    
    </div>
    <div>
    <table class="table"> 
        <td >
        <a href="tambah.php">
        <button class="btn btn-success btn-block">Tambah Data</button>
            
        </a>
</td>
       
 <td style= "padding-left: 690px;">
<form action="" method="post">
<span class="ti-search"></span>
    <input type="search" name="keyword" autofocus placeholder="Masukan keyword.." autocomplete="off" id="keyword">
    <button type="submit" name="cari" id="tombolcari">Cari</button>
</form>
</div>
</td>
</table>
</div>


<br>
<div class="activity-card">
<div id="container">
<div class="row">
    <div class="card-body">
    <table class="table">
        <thead>
            <tr>
            <th>No.</th>
    <th>Aksi</th>
    <th>ID Supplier</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Nomor Telepon</th>
            </tr>
        </thead>

            </div>
            
        </div>

    </div>


<?php $i = 1; ?>
<?php foreach($pegawai as $row) : ?>
<tr>
<td><?= $i; ?></td>
<td>
<a href="edit.php?id=<?= $row["id_pegawai"]; ?>"><button class="ti-pencil"></button></a> |
<a href="hapus.php?id=<?= $row["id_pegawai"]; ?>" onclick="return confirm('yakin?');"><button class="ti-trash"></button></a>
</td>
<td><?= $row["id_supp"]; ?></td>
<td><?= $row["nama_supp"]; ?></td>
<td><?= $row["alamat_supp"]; ?></td>
<td><?= $row["notelp_supp"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>
</div>
</div>
</div>
<script src="js/script.js"></script>
</main>
</div>
</body>
</html>
