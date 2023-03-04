
<?php 
session_start();
if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
}
$tanggal = date("Y-m-d");

?>

<?php 
		if(isset($_GET['alert'])){
			if($_GET['alert']=='gagal_ekstensi'){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
					Ekstensi Tidak Diperbolehkan
				</div>								
				<?php
			}elseif($_GET['alert']=="gagal_ukuran"){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Peringatan !</h4>
					Ukuran File terlalu Besar
				</div> 								
				<?php
			}elseif($_GET['alert']=="berhasil"){
				?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Success</h4>
					Berhasil Disimpan
				</div> 								
				<?php
			}
		}
		?>

<h4 class="mt-2 mb-3">Form Tambah Pengaduan Masyarakat</h4>

<form action="save_pengaduan.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <input type="hidden" name="tgl" class="form-control col-sm-5" id="exampleInputPassword1" value="<?= $tanggal?>">
    <input type="hidden" name="nik" class="form-control col-sm-5" id="exampleInputPassword1" value="<?= $_SESSION['nik']?>">
    <label for="exampleInputEmail1">Isi Pengaduan</label>
    <textarea type="text"  name="isi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Foto</label>
    <input type="file" name="foto" class="form-control col-sm-5" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
</form>