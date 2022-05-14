<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <h6 class="mb-0 text-uppercase">Data Nilai Sensor</h6>
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nilai Gas No</th>
                                <th>Nilai Gas CO</th>
                                <th>Start Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data_nilai as $rdata_nilai) : ?>
                            <tr class="text-center">
                                <td><?= $no++; ?></td>
                                <td><?= $rdata_nilai->nilai_no; ?></td>
                                <td><?= $rdata_nilai->nilai_co; ?></td>
                                <td><?= $rdata_nilai->tanggal_input; ?></td>
                                <td>
                                    <a class="btn btn-sm btn-danger"
                                        href="<?php echo base_url() . 'Nilai_sensor/hapus/' . $rdata_nilai->id_nilai ?>"><i
                                            class="fa fa-trash">
                                        </i> </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nilai Gas No</th>
                                <th>Nilai Gas CO</th>
                                <th>Start Date</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end page wrapper -->