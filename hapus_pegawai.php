<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_pegawai = $_GET['id_pegawai'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from pegawai where id_pegawai='$id_pegawai'");
 
// mengalihkan halaman kembali ke index.php
header("location:datapegawai.php");
 
?>