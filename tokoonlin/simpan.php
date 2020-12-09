<?php
include 'function.php';
if(isset($_POST["id_nota"])){
$idnota = htmlspecialchars($data["id_nota"]);
    $tgl = htmlspecialchars($data["tgl"]);
    $total = htmlspecialchars($data["total_belanja"]);
    $idpegawai = htmlspecialchars($data["id_pegawai"]);
    $idpelanggan = htmlspecialchars($data["id_pelanggan"]);

  
    $query = "INSERT INTO notabelanja VALUES ('$idnota', '$tgl', '$total', '$idpegawai', '$idpelanggan')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>