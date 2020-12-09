<?php
require '../functions.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM pegawai WHERE nama_pegawai LIKE '%$keyword%' OR id_pegawai LIKE '%$keyword%' OR jabatan LIKE '%$keyword%'";

$pegawai = query($query);
?>
<div class="row">
    <table class="table">
        <thead>
            <tr>
            <th>No.</th>
    <th>Aksi</th>
    <th>ID</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>No. Telepon</th>
    <th>Jabatan</th>
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
<a href="edit.php?id=<?= $row["id_pegawai"]; ?>"><i class="fa fa-pencil"></i></a> 
<a href="hapus.php?id=<?= $row["id_pegawai"]; ?>" onclick="return confirm('yakin?');"><i class="fa fa-trash"></i></a>
</td>
<td><?= $row["id_pegawai"]; ?></td>
<td><?= $row["nama_pegawai"]; ?></td>
<td><?= $row["alamat_pegawai"]; ?></td>
<td><?= $row["notelp_pegawai"]; ?></td>
<td><?= $row["jabatan"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>