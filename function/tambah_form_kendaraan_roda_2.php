<?php
include("connection.php");

print_r($_POST);

$nama_karyawan = $_POST['nama_karyawan'];
$nip = $_POST['nip'];
$id_kendaraan = $_POST['kendaraan'];
$bahan_bakar = $_POST['bahan_bakar'];
$volume = $_POST['volume'];
$pelumas = $_POST['pelumas'];

$sql = mysqli_query($conn, "INSERT INTO nootedtasi (nama_karyawan, nip, id_kendaraan, bahan_bakar, volume, pelumas) VALUES ('$nama_karyawan', '$nip', '$id_kendaraan', '$bahan_bakar', '$volume', '$pelumas')");

header("Location: ../report.php");