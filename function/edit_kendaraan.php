<?php
include("connection.php");

print_r($_POST);

$id = $_POST['id'];
$nama_pemegang = $_POST['nama_pemegang'];
$type = $_POST['type'];
$no_polisi = $_POST['no_polisi'];
$jenis = $_POST['jenis'];

$sql = mysqli_query($conn, "UPDATE kendaraan SET nama_pemegang='$nama_pemegang', type='$type', no_polisi='$no_polisi', jenis='$jenis' WHERE id=$id");

echo $sql;

header("Location: ../kendaraan.php");