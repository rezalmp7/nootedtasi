                    <?php $page='home'; include("layout/header.php"); ?> 
                    <div class="col-12 mt-5 pt-2">
                        <div class="card text-left pt-100 pb-70">
                            <div class="card-body">
                                <h1 class="text-center">Home</h1>
                                <h3 class="text-center">Data Kendaraan</h3>
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
                                            $kendaraan = mysqli_query($conn, "SELECT * FROM kendaraan WHERE jenis='roda_2'");
                                            ?>
                                            <table class="table table-striped datatable" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Nama Pemegang</th>
                                                        <th>Merk/ Type</th>
                                                        <th>Nomor Polisi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach($kendaraan as $a) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $a['nama_pemegang']; ?></td>
                                                        <td><?php echo $a['type']; ?></td>
                                                        <td><?php echo $a['no_polisi']; ?></td>
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade pt-4 pb-4" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <?php
                                            $kendaraan4 = mysqli_query($conn, "SELECT * FROM kendaraan WHERE jenis='roda_4'");
                                            ?>
                                            <table class="table table-striped datatable" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Nama Pemegang</th>
                                                        <th>Type</th>
                                                        <th>Nomor Polisi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach($kendaraan4 as $b) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $b['nama_pemegang']; ?></td>
                                                        <td><?php echo $b['type']; ?></td>
                                                        <td><?php echo $b['no_polisi']; ?></td>
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