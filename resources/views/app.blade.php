<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>
        <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="envens HTML 5 Template " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">



    <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="vendors/envens-icons/style.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/nice-select.css" />
    <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="vendors/timepicker/timePicker.css" />
    <link rel="stylesheet" href="vendors/reey-font/stylesheet.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="css/envens.css" />
    <link rel="stylesheet" href="css/envens-responsive.css" />

        <!-- Scripts -->
        @routes
        @viteReactRefresh
        @vite(['resources/js/app.jsx', "resources/js/Pages/{$page['component']}.jsx"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia

        <script src="vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendors/jarallax/jarallax.min.js"></script>
    <script src="vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="vendors/odometer/odometer.min.js"></script>
    <script src="vendors/swiper/swiper.min.js"></script>
    <script src="vendors/wnumb/wNumb.min.js"></script>
    <script src="vendors/wow/wow.js"></script>
    <script src="vendors/isotope/isotope.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.js"></script>
    <script src="vendors/timepicker/timePicker.js"></script>
    <script src="vendors/jquery.circle-type/jquery.circleType.js"></script>
    <script src="assets/vendors/jquery.circle-type/jquery.lettering.min.js"></script>
    <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
    <script src="vendors/countdown/countdown.min.js"></script>
    <script src="vendors/marque/marquee.min.js"></script>

    <!-- template js -->
    <script src="js/envens.js"></script>

    </body>
</html>
