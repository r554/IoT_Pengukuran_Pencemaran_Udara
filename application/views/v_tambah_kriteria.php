<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <h6 class="mb-0 text-uppercase">Tambah Kriteria</h6>
        <hr />
        <div class="card">
            <div class="card-body">
                <section class="content-header">
                    <div class="modal-body">
                        <form method="post" action="<?php echo base_url(). 'Data_kriteria/tambah_data';?>">

                            <div class="form-group">

                                <input type="hidden" class="form-control" name="id_kriteria">
                            </div>
                            <div class="form-group">
                                <label> Nama Kriteria</label>
                                <input type="text" class="form-control" name="nama_kriteria" required>
                            </div>

                            <div class="form-group">
                                <label>Himpunan 1</label>
                                <input type="text" class="form-control" name="himpunan1" required>
                            </div>

                            <div class="form-group">
                                <label>Himpunan 2</label>
                                <input type="text" class="form-control" name="himpunan2" required>
                            </div>

                            <div class="form-group">
                                <label>Himpunan 3</label>
                                <input type="text" class="form-control" name="himpunan3" required>
                            </div>

                            <div class="form-group">
                                <label>Himpunan 4</label>
                                <input type="text" class="form-control" name="himpunan4" required>
                            </div>

                            <div class="form-group">
                                <label>Himpunan 5</label>
                                <input type="text" class="form-control" name="himpunan5" required>
                            </div>

                            <div class="form-group">
                                <label>Batas Rendah</label>
                                <input type="text" class="form-control" name="batas_rendah" required>
                            </div>

                            <div class="form-group">
                                <label>Batas Sedang</label>
                                <input type="text" class="form-control" name="batas_sedang" required>
                            </div>

                            <div class="form-group">
                                <label>Batas Tinggi</label>
                                <input type="text" class="form-control" name="batas_tinggi" required>
                            </div>

                            <br>
                            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>
                    </div>
                </section>

            </div>
        </div>
    </div>
</div>
<!--end page wrapper -->