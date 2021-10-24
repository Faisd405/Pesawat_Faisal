<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_konsumen = $_GET['id_konsumen'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from konsumen where id_konsumen='$id_konsumen'");
 
// mengalihkan halaman kembali ke index.php
header("location:datakonsumen.php");
 
?>