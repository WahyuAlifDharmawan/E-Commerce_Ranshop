<?php
$datakategori = [];
$ambil = $koneksi->query("SELECT * FROM kategori");
while($tiap = $ambil->fetch_assoc()){
	$datakategori[] = $tiap;
}

// echo "<pre>";
// print_r($datakategori);
// echo "</pre>";

?>


<h2>Tambah Kategori</h2>

<div class="row">
	<div class="col-md-8">
		<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Nama Kategori</label>
					<input type="text" name="nama_kategori" class="form-control">
				</div>
			<button name="submit" class="btn btn-primary">Simpan Kategori</button>
		</form>
	</div>
</div>

<?php  
if(isset($_POST["submit"])){
	

	// menyimpan ke database
	$result = $koneksi->query("INSERT INTO kategori VALUES('', '$_POST[nama_kategori]')");

	// Mendapatkan id_kategori barusan
	$id_kategori_barusan = $koneksi->insert_id;

	// Membuat perulangan untuk memasukkan nama nama foto ke tabel
    

	if($result){
		echo "<script>alert('Data kategori berhasil ditambahkan');window.location='index.php?halaman=kategori';</script>";
	}

	// echo "<pre>";
	// print_r($_FILES['foto']);
	// echo "</pre>";
}
?>


<script>
	$(document).ready(function(){
		$(".btn-tambah").on("click", function(){
			$(".letak-input").append("<input type='file' name='foto[]' class='form-control'>");
		})
	})
</script>



















 