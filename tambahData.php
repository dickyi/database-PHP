<?php
$cnn = mysqli_connect('localhost', 'root', '', 'db_kampus');
if(!$cnn){
    die("Koneksi Gagal : " . mysqli_connect_error());
}
echo "Koneksi Berhasil<br/>";

$nim = "1";
$nama = "Dicky";
$alamat = "Jl. Letjen Sutoyo 34";
$telp = "081345473876";

// Cek apakah NIM sudah ada di database
$cek_query = "SELECT nim FROM mahasiswa WHERE nim = '$nim'";
$cek_hasil = mysqli_query($cnn, $cek_query);
if(mysqli_num_rows($cek_hasil) > 0){
    echo "Data dengan NIM $nim sudah ada, tidak bisa menambahkan data duplikat.<br/>";
} else {
    // Jika tidak ada, lakukan INSERT
    $sql = "INSERT INTO mahasiswa (nim, nama, alamat, telp) VALUES ('$nim', '$nama', '$alamat', '$telp')";

    if (mysqli_query($cnn, $sql)) {
        echo "Data BERHASIL Disimpan!<br/>";
        echo "NIM : $nim<br/>";
        echo "Nama : $nama<br/>";
        echo "Alamat : $alamat<br/>";
        echo "Telp : $telp<br/>";
    } else {
        echo "Data GAGAL Disimpan: " . mysqli_error($cnn) . "<br/>";
    }
}

// Tutup koneksi database
mysqli_close($cnn);
?>
