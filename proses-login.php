<?php
session_start();
include "koneksi.php";
$username = $koneksi->real_escape_string($_POST['username']); 
$password = $koneksi->real_escape_string(md5($_POST['password']));

$sql=$koneksi->query("SELECT * FROM login WHERE username= '$username' and password='$password'");
$row= $sql->fetch_assoc();

if ($sql->num_rows>0)
{
    
    $_SESSION['user_id']=$row['user_id'];
    $_SESSION['username']=$row['username'];
    $token=md5($username.$password);
    date_default_timezone_set('Asia/Jakarta');
  
    $koneksi->query("UPDATE login set last_login=now(), token='$token' where user_id='$user_id' ");

    header("location:index.php");  
    
} else {

	 echo"<script>alert('Username atau password salah !');document.location.href='login.php';</script>";

}
?>
	