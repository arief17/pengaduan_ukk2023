<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$nik = $_POST['nik'];
$tgl = $_POST['tgl'];
$isi = $_POST['isi'];






$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	header("location:index.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], '../assets/img/'.$rand.'_'.$filename);
        mysqli_query($koneksi,"insert into pengaduan values('','$tgl','$nik','$isi','$xx','0')");
		header("location:index.php?page=datapengaduan");
	}else{
		header("location:index.php?page=datapengaduan");
	}
}

