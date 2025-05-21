<?php
// Koneksi Ke MySQL
$cnn = mysqli_connect('localhost', 'root', '','db_kampus');
if(!$cnn){
    die("koneksi gagal".mysqli_connect_errno());
}

$sql="CREATE table siswa(
        nim CHAR(10) NULL,
        nama VARCHAR(25) NULL,
        alamat VARCHAR(50) NULL,
        telp VARCHAR(15) NULL,
        CONSTRAINT pk_datasiswa PRIMARY KEY(nim)
        )";

mysqli_query($cnn,$sql);

?>
