<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <h6 class="mb-0 text-uppercase">Edit Kriteria</h6>
        <hr />
        <div class="card">
            <div class="card-body">
                <section class="content-header">
                    <?php foreach($data_kriteria as $rdata_kriteria) { ?>
                    <form action="<?php echo base_url().'Data_kriteria/update';?>" method="post">
                        <div class="form-group">
                            <label>Nama Kriteria</label>
                            <input type="hidden" class="form-control" name="id_kriteria"
                                value="<?php echo $rdata_kriteria->id_kriteria ?>">
                            <input type="text" class="form-control" name="nama_kriteria"
                                value="<?php echo $rdata_kriteria->nama_kriteria ?>">
                        </div>

                        <div class="form-group">
                            <label>Himpunan 1</label>
                            <input type="text" class="form-control" name="himpunan1"
                                value="<?php echo $rdata_kriteria->himpunan1 ?>">
                        </div>

                        <div class="form-group">
                            <label>Himpunan 2</label>
                            <input type="text" class="form-control" name="himpunan2"
                                value="<?php echo $rdata_kriteria->himpunan2 ?>">
                        </div>

                        <div class="form-group">
                            <label>Himpunan 3</label>
                            <input type="text" class="form-control" name="himpunan3"
                                value="<?php echo $rdata_kriteria->himpunan3 ?>">
                        </div>

                        <div class="form-group">
                            <label>Himpunan 4</label>
                            <input type="text" class="form-control" name="himpunan4"
                                value="<?php echo $rdata_kriteria->himpunan4 ?>">
                        </div>

                        <div class="form-group">
                            <label>Himpunan 5</label>
                            <input type="text" class="form-control" name="himpunan5"
                                value="<?php echo $rdata_kriteria->himpunan5 ?>">
                        </div>

                        <div class="form-group">
                            <label>Batas Rendah</label>
                            <input type="text" class="form-control" name="batas_rendah"
                                value="<?php echo $rdata_kriteria->batas_rendah ?>">
                        </div>

                        <div class="form-group">
                            <label>Batas Sedang</label>
                            <input type="text" class="form-control" name="batas_sedang"
                                value="<?php echo $rdata_kriteria->batas_sedang ?>">
                        </div>

                        <div class="form-group">
                            <label>Batas Tinggi</label>
                            <input type="text" class="form-control" name="batas_tinggi"
                                value="<?php echo $rdata_kriteria->batas_tinggi ?>">
                        </div>

                        <br>
                        <button type="Reset" class="btn btn-danger"> Reset
                        </button>
                        <button type="submit" class="btn btn-primary"> Simpan
                        </button>


                    </form>
                    <?php } ?>
                </section>

            </div>
        </div>
    </div>
</div>
<!--end page wrapper -->