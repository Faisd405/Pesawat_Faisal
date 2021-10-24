<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$email = $_POST['email'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "select * from konsumen where email='$email' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

	$data = mysqli_fetch_assoc($login);
	// buat session login dan username

	include 'koneksi.php';
	$no = 1;
	$data = mysqli_query($koneksi, "select * from konsumen where email='$email' and password='$password'");
	while ($d = mysqli_fetch_array($data)) {
		$_SESSION['email'] = $email;
		$_SESSION['id_konsumen'] = $d['id_konsumen'];
		$_SESSION['nama_konsumen'] = $d['nama_konsumen'];
		$_SESSION['level'] = "konsumen";
	}

	// alihkan ke halaman dashboard admin
	header("location:konsumen_beli.php");
} else {
	header("location:login.php?pesan=gagal");
}
