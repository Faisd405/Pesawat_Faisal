<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Data Konsumen - E-Ticket</title>

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
            <h4>ENTRY CONSUMENT</h4>

            <!-- Form Daftar/Nambah Data Konsumen -->
            <form method="POST" action="tambahkonsumen_aksi.php">
                <h4>Register Form</h4>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" name="email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" name="password">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputName">Nama Lengkap</label>
                    <input type="text" class="form-control" id="inputName" name="nama">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Alamat</label>
                        <input type="text" class="form-control" id="inputAddress" name="alamat" placeholder="1234 Main St">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputNumber">Nomor Telepon/Handphone</label>
                        <input type="number" class="form-control" id="inputNumber" name="telepon" placeholder="0123456789">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputSex">Kelamin</label>
                    <select id="inputSex" class="form-control" name="kelamin">
                        <option selected disabled>Choose...</option>
                        <option>Pria</option>
                        <option>Wanita
                        </option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputDate">Tempat Tanggal Lahir</label>
                    <input type="text" class="form-control" id="inputPlace" name="tempat" placeholder="Tempat">
                </div>
                <div class="form-group col-md-4">
                    <input type="date" class="form-control" id="inputDate" name="tanggal">
                </div>

                <button type="submit" class="btn btn-primary">Register</button>
            </form>
            <br>


            <!-- Table Data Konsumen -->
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Nomor Telepon</th>
                        <th scope="col">Kelamin</th>
                        <th scope="col">Tempat, Tanggal Lahir</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "select * from konsumen");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $no++; ?></th>
                            <td><?php echo $d['nama_konsumen']; ?></td>
                            <td><?php echo $d['alamat']; ?></td>
                            <td><?php echo $d['no_telp']; ?></td>
                            <td><?php echo $d['kelamin']; ?></td>
                            <td><?php echo $d['TTL']; ?></td>
                            <td><?php echo $d['email']; ?></td>
                            <td><?php echo $d['password']; ?></td>
                            <td><a href="edit_konsumen.php?id_konsumen=<?php echo $d['id_konsumen']; ?>">EDIT</a></td>
                            <td><a href="hapus_konsumen.php?id_konsumen=<?php echo $d['id_konsumen']; ?>">HAPUS</a></td>
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>

</body>

</html>