<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_pegawai = $_POST['id_pegawai'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$kelamin = $_POST['kelamin'];

// mengedit data ke database
mysqli_query($koneksi,"update pegawai set nama_pegawai='$nama', no_telp='$telepon', kelamin='$kelamin', username='$username', password='$password' where id_pegawai='$id_pegawai'");

// mengalihkan halaman kembali ke index.php
header("location:datapegawai.php");

?>