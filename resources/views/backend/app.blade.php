<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Zegva - Responsive Admin & Dashboard Template | Themesdesign</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="images/favicon.ico">

    <link href="plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="plugins/morris/morris.css">

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="css/icons.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        @include('backend.parts.topbar')
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        @include('backend.parts.leftbar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            @yield('content')
            <!-- content -->

            <footer class="footer">
                © 2019 Zegva <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign</span>.
            </footer>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/metismenu.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/waves.min.js"></script>
    <script src="plugins/apexchart/apexcharts.min.js"></script>
    <script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <!--Morris Chart-->
    <script src="plugins/morris/morris.min.js"></script>
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="pages/dashboard.init.js"></script>
    <!-- App js -->
    <script src="js/app.js"></script>

</body>
</html>