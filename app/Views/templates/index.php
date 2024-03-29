<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Annex - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <base href="<?= base_url(); ?>">
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="assets/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/assets/css/style.css" rel="stylesheet" type="text/css">

</head>


<body class="fixed-left">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="wrapper">
        <?= $menu; ?>
        <!-- Start right Content here -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <?= $header; ?>

                <?= $page; ?>

            </div> <!-- content -->

            <footer class="footer">
                © <?= date('Y') ?> Inventory By Lhyant Teams.
            </footer>

        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->


    <!-- jQuery  -->
    <script src="assets/assets/js/jquery.min.js"></script>
    <script src="assets/assets/js/popper.min.js"></script>
    <script src="assets/assets/js/bootstrap.min.js"></script>
    <script src="assets/assets/js/modernizr.min.js"></script>
    <script src="assets/assets/js/detect.js"></script>
    <script src="assets/assets/js/fastclick.js"></script>
    <script src="assets/assets/js/jquery.slimscroll.js"></script>
    <script src="assets/assets/js/jquery.blockUI.js"></script>
    <script src="assets/assets/js/waves.js"></script>
    <script src="assets/assets/js/jquery.nicescroll.js"></script>
    <script src="assets/assets/js/jquery.scrollTo.min.js"></script>

    <!-- App js -->
    <script src="assets/assets/js/app.js"></script>

</body>

</html>