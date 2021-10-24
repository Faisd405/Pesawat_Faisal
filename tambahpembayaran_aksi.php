<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$konsumen = $_POST['konsumen'];
$jadwal = $_POST['jadwal'];
$tiket = $_POST['tiket'];
$kelas = $_POST['kelas'];
$metode = $_POST['metode'];

$data = mysqli_query($koneksi, "SELECT kelas.harga_kelas,jadwal.harga
FROM kelas,jadwal
WHERE kelas.id_kelas = $kelas AND jadwal.id_jadwal = $jadwal");
while ($d = mysqli_fetch_array($data)) {
    $harga = ($d['harga_kelas'] + $d['harga']) * $tiket;
    // menginput data ke database
}

// menginput data ke database
mysqli_query($koneksi,"insert into pembayaran values('',$konsumen,$jadwal, $tiket,$kelas,$harga,$metode,'belum dibayar')");
// mengalihkan halaman kembali ke index.php
header("location:pembayaran.php");

?>