
<h4 class="mb-3 mt-3">Data Pengaduan Anda</h4>

<a href="index.php?page=tambahaduan" class="btn btn-primary btn-sm mb-3">+Tambah Pengaduan</a>
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
</table>


