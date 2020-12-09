<?php

require 'functions.php';
 $pegawai = query("SELECT * FROM notabelanja");

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
<h2 class="dash-tittle">Nota Belanja</h2>
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
        <a href="tambahnota.php">
        <button class="btn btn-success btn-block">Tambah Data</button>
            
        </a>
</td>
       


</div>

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
    <th>ID Nota</th>
    <th>Tanggal</th>
    <th>Total Belanja</th>
    <th>ID Pegawai</th>
    <th>ID Pelanggan</th>
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
<td><?= $row["id_nota"]; ?></td>
<td><?= $row["tgl"]; ?></td>
<td><?= $row["total_belanja"]; ?></td>
<td><?= $row["id_pegawai"]; ?></td>
<td><?= $row["id_pelanggan"]; ?></td>
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
