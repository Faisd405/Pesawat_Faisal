<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$maskapai = $_POST['maskapai'];
$bandara_asal = $_POST['bandara_asal'];
$bandara_tujuan = $_POST['bandara_tujuan'];
$tanggal = $_POST['tanggal'];
$harga = $_POST['harga'];
$jumlah_tiket = $_POST['jumlah_tiket'];

// menginput data ke database
mysqli_query($koneksi,"INSERT INTO `jadwal` (`id_jadwal`, `id_maskapai`, `id_bandara_tujuan`, `id_bandara_asal`, `tanggal`, `harga`, `jumlah_tiket`) VALUES (NULL, '$maskapai', '$bandara_asal', '$bandara_tujuan', '$tanggal', '$harga','$jumlah_tiket');");

// mengalihkan halaman kembali ke index.php
header("location:tiket.php");

?>