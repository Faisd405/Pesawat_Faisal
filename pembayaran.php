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
        header("location:loginadmin.php?pesan=gagal");
    } else if ($_SESSION['level'] == "konsumen") {
        header("location:index.php");
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
            <h4>ENTRY Pembayaran</h4>

            <!-- Form Daftar/Nambah Data maskapai -->
            <form method="POST" action="tambahpembayaran_aksi.php">
                <h4>Pembayaran Form</h4>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputmaskapai4">Nama Konsumen</label>
                        <br>
                        <select class="selectpicker" data-live-search="true" name="konsumen">
                            <option disabled selected> Konsumen</option>
                            <?php

                            $data = mysqli_query($koneksi, "SELECT * FROM konsumen");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <option value="<?php echo $d['id_konsumen'] ?>"> <?php echo $d['nama_konsumen'] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="inputbandara4">Jadwal</label>
                        <br>
                        <select class="selectpicker" data-live-search="true" name="jadwal">
                            <option disabled selected> PILIH Jadwal</option>
                            <?php
                            $data = mysqli_query($koneksi, "SELECT * FROM jadwal");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <option value="<?php echo $d['id_jadwal'] ?>"> <?php echo $d['id_jadwal'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
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
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
            <br>


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
                        <th scope="col">Metode</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                        <th scope="col">Cancel</th>
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
                            <td><?php echo $d['metode']; ?></td>
                            <td><?php echo $d['status']; ?></td>
                            <td><a href="beres_bayar.php?id_pembayaran=<?php echo $d['id_pembayaran']; ?>">Beres</a></td>
                            <td><a href="Finish_bayar.php?id_pembayaran=<?php echo $d['id_pembayaran']; ?>">Cancel</a></td>
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