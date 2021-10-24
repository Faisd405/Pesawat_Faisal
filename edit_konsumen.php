<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Edit Data E-Ticket</title>

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
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div class="container-fluid">
            <h4>ENTRY CONSUMENT</h4>
            
            <!-- Form Daftar/Nambah Data Konsumen -->
            <?php
	            include 'koneksi.php';
	            $id_konsumen = $_GET['id_konsumen'];
	            $data = mysqli_query($koneksi,"select * from konsumen where id_konsumen='$id_konsumen'");
	            while($d = mysqli_fetch_array($data)){
		    ?>
            <form method="POST" action="updatekonsumen_aksi.php">
                <h4>Edit Data</h4>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" name="email" value="<?php echo $d['email']; ?>">
				        <input type="hidden" name="id_konsumen" value="<?php echo $d['id_konsumen']; ?>">

                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" name="password" value="<?php echo $d['password']; ?>">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputName">Nama Lengkap</label>
                    <input type="text" class="form-control" id="inputName" name="nama" value="<?php echo $d['nama_konsumen']; ?>">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Alamat</label>
                        <input type="text" class="form-control" id="inputAddress" name="alamat" value="<?php echo $d['alamat']; ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputNumber">Nomor Telepon/Handphone</label>
                        <input type="text" class="form-control" id="inputNumber" name="telepon" value="<?php echo $d['no_telp']; ?>">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputSex">Kelamin</label>
                    <select id="inputSex" class="form-control" name="kelamin">
                        <option selected><?php echo $d['kelamin']; ?></option>
                        <option>Pria</option>
                        <option>Wanita
                        </option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputDate">Tempat Tanggal Lahir</label>
                    <input type="text" class="form-control" id="inputPlace" name="TTL" value="<?php echo $d['TTL']; ?>"> 
                </div>

                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
            <?php 
	    }
	?>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>