<?php
include_once 'index.php';

require 'functions.php';
$id = $_GET["id"];


if(hapus($id) > 0 ){
    echo "
    <script>
        alert('berhasil');
        document.location.href = 'pegawai.php';
    </script>
    ";
}else{
    echo "
    <script>
        alert('gagal');
        document.location.href = 'pegawai.php';
    </script>
    ";
}


?>