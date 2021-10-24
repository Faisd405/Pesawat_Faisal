<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_pembayaran = $_GET['id_pembayaran'];

// mengedit data ke database
mysqli_query($koneksi,"delete from pembayaran where id_pembayaran='$id_pembayaran'");

// mengalihkan halaman kembali ke index.php
header("location:pembayaran.php");

?>