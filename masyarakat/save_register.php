<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$nik        = $_POST['nik'];
$nama       = $_POST['nama'];
$username   = $_POST['username'];
$password   = MD5($_POST['password']);
$no_hp   = $_POST['no_hp'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into masyarakat values('$nik','$nama','$username','$password','$no_hp')");
 
// mengalihkan halaman kembali ke index.php
header("location:../index.php");
 
?>


