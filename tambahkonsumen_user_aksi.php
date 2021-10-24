<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$email = $_POST['email'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];
$kelamin = $_POST['kelamin'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];

// menginput data ke database
mysqli_query($koneksi,"insert into konsumen values('','$nama','$alamat','$telepon','$kelamin','$tempat, $tanggal', '$email', '$password')");

// mengalihkan halaman kembali ke index.php
header("location:login.php");

?>