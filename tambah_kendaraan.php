                    <?php $page = 'form_roda_2'; include("layout/header.php"); ?> 
                    <div class="col-12 mt-5 pt-2">
                        <div class="card text-left checkout-area pt-100 pb-70">
                            <div class="card-body">
                                <h3 class="text-center">Tambah Kendaraan</h3>
                                <div class="col-lg-8 mx-auto">
                                    <form method="POST" action="function/tambah_kendaraan.php">
                                        <div class="checkout-billing">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="nama_pemegang" required placeholder="Nama Pemagang:">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="type" required placeholder="Merk/Type:">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="no_polisi" required placeholder="Nomor Polisi:">
                                            </div>
                                            <div class="form-group">
                                                <select class="form-select" name="jenis" aria-label="Default select example">
                                                    <option>Jenis Kendaraan</option>
                                                    <option value="roda_2">Roda 2</option>
                                                    <option value="roda_4">Roda 4</option>
                                                </select>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn common-btn">
                                                    Tambah
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