<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Gaston delimond - By Millenium Horizon">
    <title>waza login</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/app-import.jpg') }}">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/layout.js" type="text/javascript"></script>
</head>

<body>


    @yield('content')



    {{--  SCRIPTS  --}}

    <script src="assets/js/jquery-3.7.1.min.js" type="text/javascript"></script>

    <script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>

    <script src="assets/js/theme-settings.js" type="text/javascript"></script>
    <script src="assets/js/greedynav.js" type="text/javascript"></script>

    <script src="assets/js/script.js" type="text/javascript"></script>
    @yield('scripts')
    {{--  <!-- END SECTION SCRIPTS -->  --}}

</body>


</html>
