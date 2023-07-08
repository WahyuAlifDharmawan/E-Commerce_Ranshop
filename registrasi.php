
<?php

include 'koneksi.php';
// Menghandle form submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mendapatkan data dari form registrasi
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];

    // Menghubungkan ke database
    $servername = "localhost"; // Ganti dengan nama host server MySQL Anda
    $username = "root"; // Ganti dengan username MySQL Anda
    $password = ""; // Ganti dengan password MySQL Anda
    $dbname = "ranshop"; // Ganti dengan nama database yang Anda gunakan

    $koneksi = new mysqli($servername, $username, $password, $dbname);

    // Memeriksa koneksi database
    if ($koneksi->connect_error) {
        die("Koneksi database gagal: " . $koneksi->connect_error);
    }

    // Menjalankan query untuk memasukkan data ke database
    $sql = "INSERT INTO pelanggan (email_pelanggan, password_pelanggan, nama_pelanggan, telepon_pelanggan, alamat_pelanggan) VALUES ('$email', '$password', '$nama', '$telepon', '$alamat')";

    if ($koneksi->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

    $koneksi->close();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi Pelanggan</title>
  <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>
<?php include 'templates/navbar.php'; ?>

<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
        <div class="panel-heading">
    <h2>Registrasi Pelanggan</h2>

    <form method="POST" action="">
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="text" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="">Nama Lengkap</label>
              <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
              <label for="">Telepon</label>
              <input type="text" class="form-control" name="telepon" placeholder="Telepon">
            </div>
            <div class="form-group">
              <label for="">Alamat</label>
              <input type="text" class="form-control" name="alamat" placeholder="Alamat">
            </div>
            <button type="submit" name="login" class="btn btn-primary">Registrasi</button>
            Sudah punya akun? <a href="login.php" >click here </a> 

    </form>
    </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
