<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Halaman Admin</title>

  <!-- Bootstrap core CSS -->
  <link href="dist/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="dist/css/simple-sidebar.css" rel="stylesheet">

</head>

<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:loginadmin.php?pesan=gagal");
	}
  else if($_SESSION['level']=="konsumen"){
		header("location:index.php");
   }
 
	?>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Menu Navigasi </div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">Home</a>
        <a href="datakonsumen.php" class="list-group-item list-group-item-action bg-light">Konsumen</a>
        <a href="datapegawai.php" class="list-group-item list-group-item-action bg-light">Pegawai</a>
        <a href="tujuan.php" class="list-group-item list-group-item-action bg-light">Tujuan</a>
        <a href="tiket.php" class="list-group-item list-group-item-action bg-light">Tiket</a>
        <a href="pembayaran.php" class="list-group-item list-group-item-action bg-light">Pembayaran</a>
        <a href="logoutadmin.php" class="list-group-item list-group-item-action bg-light">Logout</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
      <div class="container-fluid">
        <h1 class="mt-4">Halaman Admin E-Ticketing Bandung</h1>
        <p>Selamat Beroperasi </p>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
