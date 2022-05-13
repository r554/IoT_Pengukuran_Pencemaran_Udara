<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <?php $this->load->view('Template/head') ?>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">

        <!--sidebar wrapper -->
        <?php $this->load->view('Template/sidebar') ?>
        <!--end sidebar wrapper -->

        <!--start header -->
        <?php $this->load->view('Template/header') ?>
        <!--end header -->

        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!-- scipt here -->
            </div>
        </div>
        <!--end page wrapper -->

        <!--start overlay-->
        <div class="search-overlay"></div>
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->

        <!--start Footer -->
        <?php $this->load->view('Template/footer') ?>
        <!-- end footer -->

    </div>
    <!--end wrapper-->

    <!--start Js -->
    <?php $this->load->view('Template/js') ?>
    <!--end Js -->

</body>

</html>