<!-- cek apakah sudah login -->
<?php 
session_start();
if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
}


?>



<h4 class="mt-3">Selamat Datang <b><?= $_SESSION['username']?></b> di Aplikasi Pengaduan Masyarakat</h4>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, atque a odio asperiores quo velit quasi voluptatum labore cumque quod quaerat dolores quibusdam provident quis explicabo, accusamus possimus ipsum ipsam?</p>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, atque a odio asperiores quo velit quasi voluptatum labore cumque quod quaerat dolores quibusdam provident quis explicabo, accusamus possimus ipsum ipsam?</p>