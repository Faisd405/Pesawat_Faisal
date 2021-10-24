<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_jadwal = $_POST['id_jadwal'];
$maskapai = $_POST['maskapai'];
$bandara = $_POST['bandara'];
$tanggal = $_POST['tanggal'];

// mengedit data ke database
mysqli_query($koneksi,"update jadwal set id_maskapai='$maskapai', id_bandara='$bandara', tanggal='$tanggal' where id_jadwal='$id_jadwal'");

// mengalihkan halaman kembali ke index.php
header("location:tujuan.php");

?>