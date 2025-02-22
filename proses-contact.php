<?php

include "koneksi.php";
$Id = $koneksi->real_escape_string($_POST['id']);
$Nama_laut = $koneksi->real_escape_string($_POST['nama_laut']); 
$Nama_peneliti = $koneksi->real_escape_string($_POST['nama_peneliti']); 
$Tahun_penemuan = $koneksi->real_escape_string($_POST['tahun_penemuan']); 


$simpan=$koneksi->query("insert into komentar values ('$Id', '$Nama_laut', '$Nama_peneliti', '$Tahun_penemuan')");

if($simpan==true){

    header("location:info_laut.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>