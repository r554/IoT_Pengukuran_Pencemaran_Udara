<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <h6 class="mb-0 text-uppercase">Data Kriteria</h6>
        <hr />
        <?php if ($this->session->flashdata('flash')):?>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Kriteria Berhasil <?=$this->session->flashdata('flash'); ?>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <?php endif;?>
        <div class="card">
            <div class="card-body">
                <div class="col-lg-6 col-5 text-left">
                    <a href="<?php echo site_url('Data_kriteria/tambah'); ?>" class="btn btn-sm btn-primary"><i
                            class="fa fa-plus"></i>Tambah</a>
                </div>
                <br>
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
                                <th>Action </th>
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
                                <td>
                                    <a
                                        href="<?php echo base_url() . 'Data_kriteria/edit/' . $rdata_kriteria->id_kriteria ?>"><button
                                            class="btn btn-sm btn-success"><i class="fa fa-edit"></i> </button>
                                    </a>
                                    <a class="btn btn-sm btn-danger"
                                        href="<?php echo base_url() . 'Data_kriteria/hapus/' . $rdata_kriteria->id_kriteria ?>"
                                        onclick="return confirm('Apakah anda yakin?');"><i class="fa fa-trash">
                                        </i> </a>
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
                                <th>Action </th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end page wrapper -->