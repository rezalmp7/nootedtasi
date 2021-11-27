                    <?php $page='report'; include("layout/header.php"); ?> 
                    <div class="col-12 mt-5 pt-2">
                        <div class="card text-left pt-100 pb-70">
                            <div class="card-body">
                                <h3 class="text-center">Laporan</h3>
                                <div class="col-lg-10 mx-auto">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Kendaraan Roda 2</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Kendaraan Roda 4</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active pt-4 pb-4" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                                        </div>
                                        <div class="tab-pane fade pt-4 pb-4" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <?php
                                            $kendaraan4 = mysqli_query($conn, "SELECT nootedtasi.nama_karyawan, nootedtasi.nip, nootedtasi.bahan_bakar, nootedtasi.volume, nootedtasi.pelumas, kendaraan.type, kendaraan.no_polisi FROM nootedtasi LEFT JOIN kendaraan ON nootedtasi.id_kendaraan = kendaraan.id WHERE kendaraan.jenis='roda_4'");
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
                                                    foreach($kendaraan4 as $b) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $b['nama_karyawan']; ?></td>
                                                        <td><?php echo $b['nip']; ?></td>
                                                        <td><?php echo $b['type'].' ['.$b['no_polisi'].']'; ?></td>
                                                        <td><?php echo $b['bahan_bakar']; ?></td>
                                                        <td><?php echo $b['volume']; ?></td>
                                                        <td><?php echo $b['pelumas']; ?></td>
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include("layout/footer.php"); ?>