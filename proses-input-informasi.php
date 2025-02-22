<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$Id=$_POST['id'];
$Nama_Laut=$_POST['Nama_Laut'];
$Nama_Peneliti=$_POST['nama_peneliti'];
$Tahun_Penemuan=$_POST['tahun_penemuan'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into informasi(id,nama_laut,nama_peneliti,tahun_penemuan) 
                        values ('$id', '$nama_laut', '$nama_peneliti', '$tahun_penemuan')");

if($simpan==true){

    header("location:laut.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>