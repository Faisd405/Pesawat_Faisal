<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap core CSS -->
    <link href="dist/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="dist/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="dist/js/bootstrap-select.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="dist/css/simple-sidebar.css" rel="stylesheet">
    <title>Tiket Pesawat</title>
    <?php 
        include 'koneksi.php';
    ?>
</head>

<body><?php 
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
                    <a class="nav-item nav-link" href="konsumen_beli.php">Index Konsumen</a>
                    <a class="nav-item nav-link" href="jadwal_konsumen.php">Jadwal <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link active" href="beli_jadwal_konsumen.php">Beli Tiket</a>
                    <a class="nav-item nav-link" href="history_beli.php">History Beli</a>
                    <a class="nav-item nav-link" href="logout.php">Logout</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="wrap">
        <div class="jumbotron">
            <h1 class="display-4">Selamat Datang Di E-Ticketing Pesawat Bandung</h1>
            <p class="lead">Ini adalah website E-Ticketing Pesawat Di Bandung yang dapat memudahkan anda membeli tiket</p>
        </div>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div class="container-fluid">
            <h4>ENTRY Pembayaran</h4>

            <!-- Form Daftar/Nambah Data maskapai -->
            <form method="POST" action="pembayaran_aksi.php">
                <h4>Pembayaran Form</h4>

                    <div class="form-group col-md-3">
                        <label for="inputbandara4">Jadwal</label>
                        <br>
                        <select class="selectpicker" data-live-search="true" name="jadwal">
                            <option disabled selected> PILIH Jadwal</option>
                            <?php
                            $data = mysqli_query($koneksi, "SELECT * FROM jadwal where jumlah_tiket > 0");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <option value="<?php echo $d['id_jadwal'] ?>"> <?php echo $d['id_jadwal'] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                <div class="form-group col-md-3">
                    <label for="inputName">Jumlah tiket</label>
                    <input type="number" class="form-control" id="inputName" name="tiket">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputKelas4">Kelas</label>
                    <br>
                    <select class="selectpicker" data-live-search="true" name="kelas">
                        <option disabled selected> PILIH Kelas</option>
                        <?php
                        $data = mysqli_query($koneksi, "SELECT * FROM kelas");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <option value="<?php echo $d['id_kelas'] ?>"> <?php echo $d['kelas_pesawat'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputText4">Metode</label>
                    <br>
                    <select class="selectpicker" data-live-search="true" name="metode">
                        <option disabled selected> PILIH Metode</option>
                        <?php
                        $data = mysqli_query($koneksi, "SELECT * FROM metode");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <option value="<?php echo $d['id_metode'] ?>"> <?php echo $d['metode'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <br>

        </div>
        <!-- Bootstrap core JavaScript -->
        <script src="dist/js/jquery-3.3.1.slim.min.js"></script>
        <script src="dist/js/popper.min.js"></script>
        <script src="dist/js/bootstrap.min.js"></script>
        <script src="dist/js/bootstrap-select.min.js"></script>
        <script src="dist/js/i18n/defaults-*.min.js"></script>

        <script>
            $(function() {
                $('.selectpicker').selectpicker();
            });
        </script>

</body>

</html>