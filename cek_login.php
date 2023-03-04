<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
 
// menyeleksi data admin dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from masyarakat where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	$data = mysqli_fetch_assoc($login);
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	$_SESSION['nik'] = $data['nik'];
	$_SESSION['nama'] = $data['nama'];
	header("location:masyarakat/index.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>


