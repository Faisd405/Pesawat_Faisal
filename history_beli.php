<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/desain.css" rel="stylesheet">
    <title>Tiket Pesawat</title>
</head>

<body><?php
        session_start();

        // cek apakah yang mengakses halaman ini sudah login
        if ($_SESSION['level'] == "") {
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
                    <a class="nav-item nav-link" href="beli_jadwal_konsumen.php">Beli Tiket</a>
                    <a class="nav-item nav-link active" href="history_beli.php">History Beli</a>
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
                        <th scope="col">Cancel</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $id_konsumen = $_SESSION['id_konsumen'];
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM `tampil_pembayaran`where id_konsumen=$id_konsumen");
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
                                <td><a href="Finish_bayar.php?id_pembayaran=<?php echo $d['id_pembayaran']; ?>">SELESAI</a></td>
                            </tr>
                        <?php
                        }
                        ?>
                </tbody>
            </table>
    </div>
</body>

</html>