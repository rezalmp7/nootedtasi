<?php
include("connection.php");

$id = $_GET['id'];

$sql = mysqli_query($conn, "DELETE FROM kendaraan WHERE id=$id");

echo $sql;

header("Location: ../kendaraan.php");