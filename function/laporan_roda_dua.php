<?php include('connection.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Laporan Kendaraan Roda 2</title>
    
    <style>
      @media print{@page {size: landscape}}
    </style>

    <script>
        window.print();
    </script>
  </head>
  <body>
    <h1 class="text-center">Laporan Kendaraan Roda 2</h1>

    <?php
    $kendaraan = mysqli_query($conn, "SELECT nootedtasi.nama_karyawan, nootedtasi.nip, nootedtasi.bahan_bakar, nootedtasi.volume, nootedtasi.pelumas, kendaraan.type, kendaraan.no_polisi FROM nootedtasi LEFT JOIN kendaraan ON nootedtasi.id_kendaraan = kendaraan.id WHERE kendaraan.jenis='roda_2'");
    ?>
    <table class="table table-striped datatable" style="width:100%">
        <thead>
            <tr>
                <th>Nama Karyawan</th>
                <th>NIP</th>
                <th>Kendaraan [Nomor Polisi]</th>
                <th>Bahan Bakar</th>
                <th>Volume</th>
                <th>Pelumas</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($kendaraan as $a) {
            ?>
            <tr>
                <td><?php echo $a['nama_karyawan']; ?></td>
                <td><?php echo $a['nip']; ?></td>
                <td><?php echo $a['type'].' ['.$a['no_polisi'].']'; ?></td>
                <td><?php echo $a['bahan_bakar']; ?></td>
                <td><?php echo $a['volume']; ?></td>
                <td><?php echo $a['pelumas']; ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>