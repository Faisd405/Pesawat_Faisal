<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login E-Ticket</title>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/desain.css" rel="stylesheet">
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
                    <a class="nav-item nav-link active" href="#">Login</a>
                    <a class="nav-item nav-link" href="register.php">Register</a>
                    <a class="nav-item nav-link" href="jadwal.php">Jadwal</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="content">

        <div class="wrap">
            <div class="jumbotron">
                <h1 class="display-4">Selamat Datang Di E-Ticketing Pesawat Bandung</h1>
                <p class="lead">Ini adalah website E-Ticketing Pesawat Di Bandung yang dapat memudahkan anda membeli tiket</p>
            </div>

            <form method="post" action="ceklogin_konsumen.php">
                <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "gagal") {
                        echo "<div class='alert'>Email dan Password tidak sesuai !</div>";
                    }
                }
                ?>
                <h4>Login Form</h4>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <div>
                    <p>Belum Punya Akun ?<a href="register.php">Daftar Disini</a>
                    <p>
                </div>
            </form>
        </div>
</body>

</html>