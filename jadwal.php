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

<body>
    <div class="navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link " href="jadwal.php">Login</a>
                    <a class="nav-item nav-link" href="register.php">Register</a>
                    <a class="nav-item nav-link active" href="jadwal.php">Jadwal</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="wrap">
        <div class="jumbotron">
            <h1 class="display-4">Selamat Datang Di E-Ticketing Pesawat Bandung</h1>
            <p class="lead">Ini adalah website E-Ticketing Pesawat Di Bandung yang dapat memudahkan anda membeli tiket</p>
            <hr class="my-4">
            <p>Silahkan Memulai Pengalaman Anda.</p>
            <a class="btn btn-primary btn-lg" href="login.php" role="button">Mulai</a>
        </div>

        <!-- Table Data jadwal -->
        <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Maskapai</th>
                        <th scope="col">Nama Bandara Asal</th>
                        <th scope="col">Tempat Bandara Asal</th>
                        <th scope="col">--></th>
                        <th scope="col">Nama Bandara Tujuan</th>
                        <th scope="col">Tempat Bandara Tujuan</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Bangku Tersedia</th>
                        <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM `tampil_jadwal` where jumlah_tiket > 0");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $no++; ?></th>
                            <td><u><?php echo $d['nama_maskapai']; ?></u></td>
                            <td><?php echo $d['nama_bandara_asal']; ?></td>
                            <td><?php echo $d['tempat_bandara_asal']; ?></td>
                            <td>--></td>
                            <td><?php echo $d['nama_bandara_tujuan']; ?></td>
                            <td><?php echo $d['tempat_bandara_tujuan']; ?></td>
                            <td><?php echo $d['tanggal']; ?></td>
                            <td><?php echo $d['jumlah_tiket']; ?></td>
                            <td>Rp. <?php echo $d['harga']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
</body>

</html>