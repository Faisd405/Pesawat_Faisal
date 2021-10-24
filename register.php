<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register E-Ticket</title>
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
                    <a class="nav-item nav-link" href="login.php">Login</a>
                    <a class="nav-item nav-link active" href="#">Register</a>
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

            <form method="POST" action="tambahkonsumen_user_aksi.php">
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
                        <input type="text" class="form-control" id="inputNumber" name="telepon" placeholder="0123456789">
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


                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>

</body>

</html>