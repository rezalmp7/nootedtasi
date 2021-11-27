<?php
include("connection.php");

print_r($_POST);

$nama_pemegang = $_POST['nama_pemegang'];
$type = $_POST['type'];
$no_polisi = $_POST['no_polisi'];
$jenis = $_POST['jenis'];

$sql = mysqli_query($conn, "INSERT INTO kendaraan (nama_pemegang, type, no_polisi, jenis) VALUES ('$nama_pemegang', '$type', '$no_polisi', '$jenis')");

echo $sql;

header("Location: ../kendaraan.php");