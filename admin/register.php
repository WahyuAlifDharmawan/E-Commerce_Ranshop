<?php
// Membuat koneksi ke database
$servername = "localhost"; // Ganti dengan nama host server MySQL Anda
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$dbname = "ranshop"; // Ganti dengan nama database yang Anda gunakan

$koneksi = new mysqli("localhost", "root", "", "ranshop");


// Memeriksa koneksi database
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Mendapatkan data dari form registrasi
$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Memeriksa apakah password dan konfirmasi password sesuai
if ($password !== $confirm_password) {
    die("Konfirmasi password tidak sesuai.");
}

// Menjalankan query untuk memasukkan data ke database
$sql = "INSERT INTO nama_tabel (nama, username, email, password) VALUES ('$nama', '$username', '$email', '$password')";

if (mysqli_query($koneksi, $sql)) {
    echo "Registrasi berhasil!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
