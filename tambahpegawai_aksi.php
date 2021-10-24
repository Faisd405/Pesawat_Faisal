<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$kelamin = $_POST['kelamin'];

// menginput data ke database
mysqli_query($koneksi,"insert into pegawai values('','$nama','$kelamin', '$telepon','$username', '$password')");

// mengalihkan halaman kembali ke index.php
header("location:datapegawai.php");

?>