<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Tiket</title>

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
            <h4>Tiket</h4>
            <br>
            <form method="POST" action="tambahjadwal_aksi.php">
                <h4>Register Form</h4>
                <div class="form-group col-md-6">
                    <label for="inputMaskapai4">Maskapai</label>
                    <br>
                    <select class="selectpicker" data-live-search="true" name="maskapai">
                        <option disabled selected> Maskapai</option>
                        <?php

                        $data = mysqli_query($koneksi, "SELECT * FROM pesawat");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <option value="<?php echo $d['id_maskapai'] ?>"> <?php echo $d['nama_maskapai'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputTujuan4">Bandara Asal</label>
                        <br>
                        <select class="selectpicker" data-live-search="true" name="bandara_asal">
                            <option disabled selected> Bandara Asal</option>
                            <?php

                            $data = mysqli_query($koneksi, "SELECT * FROM bandara_asal");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <option value="<?php echo $d['id_bandara_asal'] ?>"> <?php echo $d['nama_bandara_asal'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputTujuan4">Bandara Tujuan</label>
                        <br>
                        <select class="selectpicker" data-live-search="true" name="bandara_tujuan">
                            <option disabled selected> bandara_tujuan</option>
                            <?php

                            $data = mysqli_query($koneksi, "SELECT * FROM bandara_tujuan");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <option value="<?php echo $d['id_bandara_tujuan'] ?>"> <?php echo $d['nama_bandara_tujuan'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputDate">Tanggal Keberangkatan</label>
                    <input type="date" class="form-control" id="inputDate" name="tanggal">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputNumber">Harga</label>
                    <input type="number" class="form-control" id="inputNumber" name="harga">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputName">Jumlah bangku</label>
                    <input type="number" class="form-control" id="inputName" name="jumlah_tiket">
                </div>

                <button type="submit" class="btn btn-primary">Register</button>
            </form>
            <br>

            <!-- Table Data jadwal -->
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Maskapai</th>
                        <th scope="col">Nama Bandara Asal</th>
                        <th scope="col">Tempat Bandara Asal</th>
                        <th scope="col">></th>
                        <th scope="col">Nama Bandara Tujuan</th>
                        <th scope="col">Tempat Bandara Tujuan</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah Bangku</th>
                        <th scope="col">Delete / Finish</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM `tampil_jadwal`");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $no++; ?></th>
                            <td><u><?php echo $d['nama_maskapai']; ?></u></td>
                            <td><?php echo $d['nama_bandara_asal']; ?></td>
                            <td><?php echo $d['tempat_bandara_asal']; ?></td>
                            <td>></td>
                            <td><?php echo $d['nama_bandara_tujuan']; ?></td>
                            <td><?php echo $d['tempat_bandara_tujuan']; ?></td>
                            <td><?php echo $d['tanggal']; ?></td>
                            <td>Rp. <?php echo $d['harga']; ?></td>
                            <td><?php echo $d['jumlah_tiket']; ?></td>
                            <td><a href="hapus_jadwal.php?id_jadwal=<?php echo $d['id_jadwal']; ?>">HAPUS/SELESAI</a></td>
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