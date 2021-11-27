                    <?php $page = 'kendaraan'; include("layout/header.php"); ?> 
                    <?php
                    $id = $_GET['id'];
                    $kendaraan_sql = mysqli_query($conn, "SELECT * FROM kendaraan WHERE id=$id");
                    $kendaraan = mysqli_fetch_array($kendaraan_sql);
                    ?>
                    <div class="col-12 mt-5 pt-2">
                        <div class="card text-left checkout-area pt-100 pb-70">
                            <div class="card-body">
                                <h3 class="text-center">Edit Kendaraan</h3>
                                <div class="col-lg-8 mx-auto">
                                    <form method="POST" action="function/edit_kendaraan.php">
                                        <div class="checkout-billing">
                                            <input type="hidden" name="id" value="<?php echo $kendaraan['id']; ?>">
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="<?php echo $kendaraan['nama_pemegang']; ?>" name="nama_pemegang" required placeholder="Nama Pemagang:">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="<?php echo $kendaraan['type']; ?>" name="type" required placeholder="Merk/Type:">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="<?php echo $kendaraan['no_polisi']; ?>" name="no_polisi" required placeholder="Nomor Polisi:">
                                            </div>
                                            <div class="form-group">
                                                <select class="form-select" name="jenis" aria-label="Default select example">
                                                    <option>Jenis Kendaraan</option>
                                                    <option value="roda_2" <?php if($kendaraan['jenis'] == 'roda_2') echo 'selected'; ?>>Roda 2</option>
                                                    <option value="roda_4" <?php if($kendaraan['jenis'] == 'roda_4') echo 'selected'; ?>>Roda 4</option>
                                                </select>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn common-btn">
                                                    Edit
                                                    <img src="assets/assets/images/shape1.png" alt="Shape">
                                                    <img src="assets/assets/images/shape2.png" alt="Shape">
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include("layout/footer.php"); ?>