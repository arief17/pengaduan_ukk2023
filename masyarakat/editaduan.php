
<h4 class="mt-2 mb-3">Form Edit Pengaduan Masyarakat</h4>
<?= $ds['id'] ?>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Isi Pengaduan</label>
    <textarea type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Foto</label>
    <input type="file" class="form-control col-sm-5" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-warning btn-sm">Update</button>
</form>