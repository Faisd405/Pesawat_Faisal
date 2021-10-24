<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_bandara = $_POST['id_bandara'];
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];

// mengedit data ke database
mysqli_query($koneksi,"update bandara_tujuan set nama_bandara_tujuan='$nama', tempat_bandara_tujuan='$tempat' where id_bandara_tujuan='$id_bandara'");
mysqli_query($koneksi,"update bandara_asal set nama_bandara_asal='$nama', tempat_bandara_asal='$tempat' where id_bandara_asal='$id_bandara'");

// mengalihkan halaman kembali ke index.php
header("location:tujuan.php");

?>