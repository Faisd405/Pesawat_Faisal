<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_bandara = $_GET['id_bandara_asal'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from bandara_asal where id_bandara_asal='$id_bandara'");
mysqli_query($koneksi,"delete from bandara_tujuan where id_bandara_tujuan='$id_bandara'");
 
// mengalihkan halaman kembali ke index.php
header("location:tujuan.php");
 
?>