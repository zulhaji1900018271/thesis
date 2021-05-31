<?php
$server = "localhost";
$database = "datalogin";
$username = "root";
$password = "";
$tb = "anggota";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
mysqli_close($conn);
?>