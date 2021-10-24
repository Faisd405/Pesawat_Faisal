<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];

// menginput data ke database
mysqli_query($koneksi,"insert into bandara_asal values('','$nama','$tempat')");
mysqli_query($koneksi,"insert into bandara_tujuan values('','$nama','$tempat')");

// mengalihkan halaman kembali ke index.php
header("location:tujuan.php");

?>