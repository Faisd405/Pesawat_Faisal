<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Pembayaran</title>

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
        header("location:loginpegawai.php?pesan=gagal");
    }

    ?>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Menu Navigasi </div>
            <div class="list-group list-group-flush">
                <a href="indexpegawai.php" class="list-group-item list-group-item-action bg-light">Pembayaran</a>
                <a href="logoutpegawai.php" class="list-group-item list-group-item-action bg-light">Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div class="container-fluid">
            <!-- Table Data jadwal -->
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID Pembayaran</th>
                        <th scope="col">ID Konsumen</th>
                        <th scope="col">Nama Konsumen</th>
                        <th scope="col">Bandara Asal</th>
                        <th scope="col">Bandara Tujuan</th>
                        <th scope="col">Maskapai</th>
                        <th scope="col">Jumlah Tiket</th>
                        <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM `tampil_pembayaran`");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?php echo $d['id_pembayaran']; ?></td>
                            <td><?php echo $d['id_konsumen']; ?></td>
                            <td><?php echo $d['nama_konsumen']; ?></td>
                            <td><?php echo $d['nama_bandara_asal']; ?> - <?php echo $d['tempat_bandara_asal'] ?></td>
                            <td><?php echo $d['nama_bandara_tujuan']; ?> - <?php echo $d['tempat_bandara_tujuan'] ?></td>
                            <td><?php echo $d['nama_maskapai']; ?></td>
                            <td><?php echo $d['jumlah_tiket']; ?></td>
                            <td><?php echo $d['harga']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
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