<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Tujuan</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="dist/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="dist/js/bootstrap-select.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="dist/css/simple-sidebar.css" rel="stylesheet">
    <?php
    include 'koneksi.php';
    ?>

</head>

<body>
    <?php
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if ($_SESSION['level'] == "") {
        header("location:loginadmin.php?pesan=gagal");
    }

    ?>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Menu Navigasi </div>
            <div class="list-group list-group-flush">
                <a href="indexadmin.php" class="list-group-item list-group-item-action bg-light">Home</a>
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
            <h4>ENTRY TUJUAN</h4>

            <!-- Form Daftar/Nambah Data maskapai --><!-- Form Daftar/Nambah Data Konsumen -->
            <?php
	            include 'koneksi.php';
	            $id_bandara = $_GET['id_bandara_asal'];
	            $data = mysqli_query($koneksi,"select * from bandara_asal where id_bandara_asal='$id_bandara'");
	            while($d = mysqli_fetch_array($data)){
		    ?>
            <form method="POST" action="updatebandara_aksi.php">
                <h4>Tujuan Form</h4>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputNama4">Nama Bandara</label>
                        <input type="text" class="form-control" id="inputNama4" name="nama" value="<?php echo $d['nama_bandara_asal']; ?>">
                        <input type="hidden" name="id_bandara" value="<?php echo $d['id_bandara_asal']; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPlace4">Tempat Bandara</label>
                        <input type="text" class="form-control" id="inputPlace4" name="tempat" value="<?php echo $d['tempat_bandara_asal']; ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data Lokasi</button>
            </form>
            <?php } ?>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

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