                    <?php $page = 'form_roda_2'; include("layout/header.php"); ?> 
                    <div class="col-12 mt-5 pt-2">
                        <div class="card text-left checkout-area pt-100 pb-70">
                            <div class="card-body">
                                <h3 class="text-center">Form Kendaraan Roda 2</h3>
                                <div class="col-lg-8 mx-auto">
                                    <form method="POST" action="function/tambah_form_kendaraan_roda_2.php">
                                        <div class="checkout-billing">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="nama_karyawan" placeholder="Nama karyawan:" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="number" class="form-control" name="nip" placeholder="NIP:" required>
                                            </div>
                                            <div class="form-group">
                                                <?php
                                                $kendaraan = mysqli_query($conn, "SELECT * FROM kendaraan WHERE jenis='roda_2'");
                                                ?>
                                                <select class="select2 col-12 form-control" name="kendaraan" required>
                                                    <option>Pilih Kendaraan</option>
                                                    <?php
                                                    foreach($kendaraan as $roda_dua)
                                                    {
                                                    ?>
                                                    <option value="<?php echo $roda_dua['id']; ?>"><?php echo $roda_dua['type'].' - '.$roda_dua['no_polisi']; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-select" name="bahan_bakar" aria-label="Default select example" required>
                                                    <option>Pilih Bahan Kendaraan</option>
                                                    <option>Pertalite</option>
                                                    <option>Pertamax</option>
                                                    <option>Solar</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="volume" placeholder="Volume:" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="pelumas" placeholder="Pelumas:" required>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn common-btn">
                                                    Place Order
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