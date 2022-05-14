<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <h6 class="mb-0 text-uppercase">Edit Rule</h6>
        <hr />
        <div class="card">
            <div class="card-body">
                <section class="content-header">
                    <?php foreach($data_rule as $rdata_rule) { ?>
                    <form action="<?php echo base_url().'Data_rule/update';?>" method="post">
                        <div class="form-group">
                            <label>Gas CO</label>
                            <input type="hidden" class="form-control" name="id_rule"
                                value="<?php echo $rdata_rule->id_rule ?>">
                            <input type="text" class="form-control" name="co" value="<?php echo $rdata_rule->co ?>">
                        </div>

                        <div class="form-group">
                            <label>Gas NO</label>
                            <input type="text" class="form-control" name="no" value="<?php echo $rdata_rule->no ?>">
                        </div>

                        <div class="form-group">
                            <label>Hasil</label>
                            <input type="text" class="form-control" name="nilai"
                                value="<?php echo $rdata_rule->nilai ?>">
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