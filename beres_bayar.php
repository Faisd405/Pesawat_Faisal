<?php

include 'koneksi.php';

$id_pembayaran = $_GET['id_pembayaran'];

mysqli_query($koneksi,"update pembayaran set status = 'sudah dibayar' where id_pembayaran=$id_pembayaran");

header("location:pembayaran.php");

?>