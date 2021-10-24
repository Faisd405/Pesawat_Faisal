<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_konsumen = $_POST['id_konsumen'];
$email = $_POST['email'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];
$kelamin = $_POST['kelamin'];
$TTL = $_POST['TTL'];

// mengedit data ke database
mysqli_query($koneksi,"update konsumen set nama_konsumen='$nama', alamat='$alamat', no_telp='$telepon', kelamin='$kelamin', TTL='$TTL', 
email='$email', password='$password' where id_konsumen='$id_konsumen'");

// mengalihkan halaman kembali ke index.php
header("location:datakonsumen.php");

?>