<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <h6 class="mb-0 text-uppercase">Edit Profile</h6>
        <hr />
        <div class="card">
            <div class="card-body">
                <section class="content-header">
                    <?php foreach($data_admin as $rdata_admin) { ?>
                    <form action="<?php echo base_url().'Profil/update';?>" method="post">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="hidden" class="form-control" name="id_admin"
                                value="<?php echo $rdata_admin->id_admin ?>">
                            <input type="text" class="form-control" name="nama_admin"
                                value="<?php echo $rdata_admin->nama_admin ?>">
                        </div>

                        <div class="form-group">
                            <label>Telpon</label>
                            <input type="text" class="form-control" name="telp_admin"
                                value="<?php echo $rdata_admin->telp_admin ?>">
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat_admin"
                                value="<?php echo $rdata_admin->alamat_admin ?>">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email_admin"
                                value="<?php echo $rdata_admin->email_admin ?>">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <br> <a data-toggle="modal" type="submit" data-target="#editdata"
                                class="btn-sm btn-primary">Ubah Password</a>

                        </div>



                        <br>
                        <button type="Reset" class="btn btn-danger"> Reset
                        </button>
                        <button type="submit" class="btn btn-primary"> Simpan
                        </button>


                    </form>
                    <?php } ?>
                </section>


                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="editdata"
                    class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <!-- <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button> -->
                                <h4 class="modal-title text-center text-bold text-warning">UBAH PASSWORD</h4>
                            </div>
                            <form class="form-horizontal"
                                action="<?php echo base_url('admin/Admin/ubah_password/' . $edit->id_admin) ?>"
                                method="post" enctype="multipart/form-data" role="form">
                                <div class="modal-body">
                                    <input type="text" hidden name="id_admin" id="id_admin"
                                        value="<?= $edit->id_admin ?>">
                                    <div class="form-group">
                                        <div class="text-center">
                                            <label class="">Password Baru</label>
                                        </div>
                                        <div class="text-center">
                                            <input type="password" class="form-control" name="pabar"
                                                placeholder="Masukkan password baru" size="40">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="text-center">
                                            <label class="">Ulang Password</label>
                                        </div>
                                        <div class="text-center">
                                            <input type="password" class="form-control" name="ulpa"
                                                placeholder="Masukkan ulang password baru" size="40">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="btn-sm btn-info" type="submit"> Simpan&nbsp;</button>
                                    <button type="button" class="btn-sm btn-warning" data-dismiss="modal">
                                        Batal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>





            </div>
        </div>
    </div>
</div>
<!--end page wrapper -->