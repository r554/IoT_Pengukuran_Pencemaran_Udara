<!doctype html>
<html lang="en">

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
    <link href="<?= base_url() ?>assets/admin/assets/plugins/highcharts/css/highcharts.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/admin/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/admin/assets/plugins/datatable/css/dataTables.bootstrap5.min.css"
        rel="stylesheet" />
    <!-- loader-->
    <link href="<?= base_url() ?>assets/admin/assets/css/pace.min.css" rel="stylesheet" />
    <script src="<?= base_url() ?>assets/admin/assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="<?= base_url() ?>assets/admin/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/assets/css/app.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/assets/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/assets/css/dark-theme.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/assets/css/semi-dark.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/assets/css/header-colors.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">


    <script type="text/javascript" src="assets/js/jquery-3.4.0.min.js"> </script>
    <script type="text/javascript" src="assets/js/mdb.min.js"> </script>
    <script type="text/javascript" src="assets/jquery-latest.js"> </script>

    </link>
    <title><?= $title; ?></title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">

        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="<?= base_url() ?>assets/admin/assets/images/logo-icon.png" class="logo-icon"
                        alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">air quality</h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="<?= base_url('Dashboard') ?>">
                        <div class="parent-icon"><i class='bx bx-home'></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li class="menu-label">Data Sensor</li>
                <li>
                    <a href="<?= base_url('Nilai_sensor') ?>">
                        <div class="parent-icon"><i class='bx bx-line-chart'></i>
                        </div>
                        <div class="menu-title">Nilai Sensor</div>
                    </a>
                </li>
                <li class="menu-label">Proses Fuzzy</li>
                <li>
                    <a href="<?= base_url('Data_kriteria') ?>">
                        <div class="parent-icon"><i class=' bx bx-command'></i>
                        </div>
                        <div class="menu-title">Data Kriteria</div>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('Data_rule') ?>">
                        <div class="parent-icon"><i class="bx bx-grid-alt"></i>
                        </div>
                        <div class="menu-title">Rule Fuzzy</div>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('Proses_fuzzy') ?>">
                        <div class="parent-icon"><i class='bx bx-hourglass'></i>
                        </div>
                        <div class="menu-title">Proses Fuzzy</div>
                    </a>
                </li>
            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->


        <!--start header -->
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand">
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                    </div>
                    <div class="top-menu-left d-none d-lg-block">

                    </div>
                    <div class="search-bar flex-grow-1">
                        <div class="position-relative search-bar-box">
                            <input type="text" class="form-control search-control" placeholder="Type to search...">
                            <span class="position-absolute top-50 search-show translate-middle-y"><i
                                    class='bx bx-search'></i></span>
                            <span class="position-absolute top-50 search-close translate-middle-y"><i
                                    class='bx bx-x'></i></span>
                        </div>
                    </div>
                    <div class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center">

                        </ul>
                    </div>
                    <div class="user-box dropdown">
                        <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?= base_url() ?>assets/admin/assets/images/avatars/avatar-2.png" class="user-img"
                                alt="user avatar">
                            <div class="user-info ps-3">
                                <p class="user-name mb-0"><?= $this->session->userdata('nama'); ?></p>
                                <p class="designattion mb-0">KA UPT Pertanian</p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item"
                                    href="<?= base_url() ?>Profil/edit/<?= $this->session->userdata('id_admin'); ?>"><i
                                        class="bx bx-user"></i><span>Profile</span></a>
                            </li>
                            <!-- <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Settings</span></a>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-home-circle'></i><span>Dashboard</span></a>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-dollar-circle'></i><span>Earnings</span></a>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-download'></i><span>Downloads</span></a>
                            </li> -->
                            <li>
                                <div class="dropdown-divider mb-0"></div>
                            </li>
                            <li><a class="dropdown-item" href="<?= base_url('Auth/logout') ?>"><i
                                        class='bx bx-log-out-circle'></i><span>Logout</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->