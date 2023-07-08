<?php
$ambil = $koneksi->query("SELECT * FROM kategori WHERE id_kategori = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

?>

<h2>Ubah kategori</h2>

<div class="row">
	<div class="col-md-8">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="">Nama Kategori</label>
        <input type="text" name="nama_kategori" class="form-control" value="<?= $pecah['nama_kategori']; ?>">
      </div>
      
      <button name="ubah" class="btn btn-primary">Ubah</button>
    </form>
  </div>
</div>




