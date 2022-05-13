<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <h6 class="mb-0 text-uppercase">Data Kriteria</h6>
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama Kriteria</th>
                                <th>Himpunan 1</th>
                                <th>Himpunan 2</th>
                                <th>Himpunan 3</th>
                                <th>Himpunan 4</th>
                                <th>Himpunan 5</th>
                                <th>Batas Rendah</th>
                                <th>Batas Sedang</th>
                                <th>Batas Tinggi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data_kriteria as $rdata_kriteria) : ?>
                                <tr class="text-center">
                                    <td><?= $no++; ?></td>
                                    <td><?= $rdata_kriteria->nama_kriteria; ?></td>
                                    <td><?= $rdata_kriteria->himpunan1; ?></td>
                                    <td><?= $rdata_kriteria->himpunan2; ?></td>
                                    <td><?= $rdata_kriteria->himpunan3; ?></td>
                                    <td><?= $rdata_kriteria->himpunan4; ?></td>
                                    <td><?= $rdata_kriteria->himpunan5; ?></td>
                                    <td><?= $rdata_kriteria->batas_rendah; ?></td>
                                    <td><?= $rdata_kriteria->batas_sedang; ?></td>
                                    <td><?= $rdata_kriteria->batas_tinggi; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama Kriteria</th>
                                <th>Himpunan 1</th>
                                <th>Himpunan 2</th>
                                <th>Himpunan 3</th>
                                <th>Himpunan 4</th>
                                <th>Himpunan 5</th>
                                <th>Batas Rendah</th>
                                <th>Batas Sedang</th>
                                <th>Batas Tinggi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end page wrapper -->