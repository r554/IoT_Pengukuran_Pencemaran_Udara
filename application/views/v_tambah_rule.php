<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <h6 class="mb-0 text-uppercase">Tambah Rule</h6>
        <hr />
        <div class="card">
            <div class="card-body">
                <section class="content-header">
                    <div class="modal-body">
                        <form method="post" action="<?php echo base_url(). 'Data_rule/tambah_data';?>">

                            <div class="form-group">

                                <input type="hidden" class="form-control" name="id_rule">
                            </div>
                            <div class="form-group">
                                <label> Gas CO</label>
                                <input type="text" class="form-control" name="co" required>
                            </div>

                            <div class="form-group">
                                <label> Gas NO</label>
                                <input type="text" class="form-control" name="no" required>
                            </div>

                            <div class="form-group">
                                <label>Hasil</label>
                                <input type="text" class="form-control" name="nilai" required>
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