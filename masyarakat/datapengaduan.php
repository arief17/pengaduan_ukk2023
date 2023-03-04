<?php 
session_start();
if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
}
$tanggal = date("Y-m-d");

?>


<h4 class="mb-3 mt-3">Data Pengaduan Anda</h4>

<a class="btn btn-primary btn-sm mb-3" data-toggle="modal" data-target="#exampleModal">+Tambah Pengaduan</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Aksi</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Isi Laporan</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include '../koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi,"Select * From Pengaduan");
    while($ds = mysqli_fetch_array($data)){    
    ?>
    <tr>
      <th scope="row"><?= $no++ ?></th>
      <td><a href="#">Edit</a> | <a href="#">Hapus</a> | <a href="#">View</a></td>
      <td><?= $ds['tgl_pengaduan']?></td>
      <td><?= $ds['isi_laporan']?></td>
      <td><?= $ds['status']?></td>
    </tr>
    <?php
      }
    ?>
  </tbody>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan Pengaduan</button>
        </div>
      </form>
      </div>
      
    </div>
  </div>
</div>
</table>


