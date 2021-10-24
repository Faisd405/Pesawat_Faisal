<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Index Konsumen</title>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/desain.css" rel="stylesheet">
</head>

<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:login.php?pesan=gagal");
	}
 
	?>
    <div class="navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="index.php">Home </a>
                    <a class="nav-item nav-link active" href="konsumen_beli.php">Index Konsumen <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="jadwal_konsumen.php">Jadwal</a>
                    <a class="nav-item nav-link" href="beli_jadwal_konsumen.php">Beli Tiket</a>
                    <a class="nav-item nav-link" href="history_beli.php">History Beli</a>
                    <a class="nav-item nav-link" href="logout.php">Logout</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="content">

        <div class="wrap">
            <div class="jumbotron">
                <h1 class="display-4">Selamat Datang Di E-Ticketing Pesawat Bandung</h1>
                <p class="lead">Ini adalah website E-Ticketing Pesawat Di Bandung yang dapat memudahkan anda membeli tiket</p><hr class="my-4">
                <p>Silahkan Memulai Pengalaman Anda dengan membeli tiket secara online.</p>
            <a class="btn btn-primary btn-lg" href="jadwal_konsumen.php" role="button">Mulai</a>
            </div>

        </div>
</body>

</html>