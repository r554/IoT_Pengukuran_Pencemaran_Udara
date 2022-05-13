<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <h6 class="mb-0 text-uppercase">Data rule</h6>
        <hr />
        <div class="card">
            <div class="card-body">
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