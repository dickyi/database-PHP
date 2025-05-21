<?php
$dbname = 'db_kampus';
$host = 'localhost';
$password = '';
$username = 'root';

// Koneksi Ke MySQL
$cnn = mysqli_connect($host, $username, $password, $dbname);

// Membuat Koneksi
if(!$cnn){
    die("Koneksi Failed : ".mysqli_connect_error());
}

// Membuat Tabel
$sql = "CREATE TABLE mahasiswa (
    nim CHAR(10) NULL,
    nama VARCHAR(25) NULL,
    alamat VARCHAR(50) NULL,
    telp VARCHAR(15) NULL,
    constraint pk_datasiswa primary key(nim)
)";

if (mysqli_query($cnn, $sql)) {
    echo "Table Berhasil di Buat";
} else {
    echo "Table Gagal di Buat: ".mysqli_error($cnn);
}

mysqli_close($cnn);
?>
