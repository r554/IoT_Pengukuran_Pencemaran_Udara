<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <h6 class="mb-0 text-uppercase">Data rule</h6>
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="col-lg-6 col-5 text-left">
                    <a href="<?php echo site_url('Data_rule/tambah'); ?>" class="btn btn-sm btn-primary"><i
                            class="fa fa-plus"></i>Tambah</a>
                </div>
                <br>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Gas CO</th>
                                <th></th>
                                <th>Gas NO</th>
                                <th></th>
                                <th>Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data_rule as $rdata_rule) : ?>
                            <tr>
                                <td class="text-center"><?= $no++; ?></td>
                                <td><?= $rdata_rule->co; ?></td>
                                <th class="text-center" scope="col" style="font-size: 12px; color:red;">AND</th>
                                <td><?= $rdata_rule->no; ?></td>
                                <th class="text-center" scope="col" style="font-size: 12px; color:red;">THEN</th>
                                <td><?= $rdata_rule->nilai; ?></td>
                                <td>
                                    <a href="<?php echo base_url() . 'Data_rule/edit/' . $rdata_rule->id_rule ?>"><button
                                            class="btn btn-sm btn-success"><i class="fa fa-edit"></i> </button>
                                    </a>
                                    <a class="btn btn-sm btn-danger"
                                        href="<?php echo base_url() . 'Data_rule/hapus/' . $rdata_rule->id_rule ?>"><i
                                            class="fa fa-trash">
                                        </i> </a>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Gas CO</th>
                                <th></th>
                                <th>Gas NO</th>
                                <th></th>
                                <th>Hasil</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end page wrapper -->