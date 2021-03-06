<!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/synadmin/demo/vertical/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Apr 2022 19:26:34 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="<?= base_url() ?>assets/admin/assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="<?= base_url() ?>assets/admin/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css"
        rel="stylesheet" />
    <link href="<?= base_url() ?>assets/admin/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="<?= base_url() ?>assets/admin/assets/css/pace.min.css" rel="stylesheet" />
    <script src="<?= base_url() ?>assets/admin/assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="<?= base_url() ?>assets/admin/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/assets/css/app.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/assets/css/icons.css" rel="stylesheet">
    <title>Login | Air Quality</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <div class="authentication-header"></div>
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="mb-4 text-center">
                            <img src="<?= base_url() ?>assets/admin/assets/images/logo-img.png" width="180" alt="" />
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="p-4 rounded">
                                    <?php
                                    // Cek apakah terdapat session nama message
                                    if ($this->session->flashdata('message')) { // Jika ada
                                        echo '<div class="alert alert-danger">' . $this->session->flashdata('message') . '</div>'; // Tampilkan pesannya
                                    }
                                    ?>
                                    <div class="text-center">

                                        <h5>Sistem Pengukuran Tingkat Pencemaran Udara Sektor Pertanian
                                        </h5>
                                    </div>
                                    <!-- <div class="d-grid">
                                        <a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
                                                <img class="me-2" src="<?= base_url() ?>assets/admin/assets/images/icons/search.svg" width="16" alt="Image Description">
                                                <span>Sign in with Google</span>
                                            </span>
                                        </a>
                                       
                                    </div> -->
                                    <div class="login-separater text-center mb-4"> <span> SIGN IN </span>
                                        <hr />
                                    </div>
                                    <div class="form-body">
                                        <form class="row g-3" action="<?= base_url('Auth/login') ?>" method="POST">
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Username</label>
                                                <input type="text" class="form-control" id="inputEmailAddress"
                                                    placeholder="Username" name="username" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Password</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" class="form-control border-end-0"
                                                        name="password" id="inputChoosePassword"
                                                        placeholder="Enter Password" required> <a href="javascript:;"
                                                        class="input-group-text bg-transparent"><i
                                                            class='bx bx-hide'></i></a>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary"><i
                                                            class="bx bxs-lock-open"></i>Sign in</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <!--end wrapper-->
    <!-- Bootstrap JS -->
    <script src="<?= base_url() ?>assets/admin/assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="<?= base_url() ?>assets/admin/assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <!--Password show & hide js -->
    <script>
    $(document).ready(function() {
        $("#show_hide_password a").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("bx-hide");
                $('#show_hide_password i').removeClass("bx-show");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("bx-hide");
                $('#show_hide_password i').addClass("bx-show");
            }
        });
    });
    </script>
    <!--app JS-->
    <script src="<?= base_url() ?>assets/admin/assets/js/app.js"></script>
</body>


<!-- Mirrored from codervent.com/synadmin/demo/vertical/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Apr 2022 19:26:35 GMT -->

</html>