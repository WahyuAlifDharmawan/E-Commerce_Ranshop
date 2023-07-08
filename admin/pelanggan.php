<?php
$semuadata = [];
$ambil = $koneksi->query("SELECT * FROM pelanggan");
while($tiap = $ambil->fetch_assoc()){
  $semuadata[] = $tiap;
}

// echo "<pre>";
// print_r($semuadata);
// echo "</pre>";

?>


<h3>Data Pelanggan</h3>
<hr>

<table class="table table-bordered">
  <thead>
    <tr>
	<th>No</th>
	<th>Nama Pelanggan</th>
	<th>Email</th>
	<th>No Telepon</th>
    </tr>
  </thead>
  <tbody>
    
    <?php foreach($semuadata as $key => $value): ?>
      
    <tr>
      <td><?= $key+1; ?>.</td>
      <td><?= $value['nama_pelanggan']; ?></td>
	  <td><?= $value['email_pelanggan']; ?></td>
	  <td><?= $value['telepon_pelanggan']; ?></td>
    </tr>
   
    <?php endforeach; ?>
  </tbody>
</table>






