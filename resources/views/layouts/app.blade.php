<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Gaston delimond By - Millenium Horizon ">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>waza + {{ $title }}</title>

    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">


    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/feather/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables/datatables.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fullcalendar/fullcalendar.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @yield('styles')

    <script src="{{ asset('assets/js/layout.js') }}" type="text/javascript"></script>
</head>

<body>

    <div class="main-wrapper">
        {{--  HEADER  --}}
        @include('components.header')
        {{--  END HEADER  --}}

        {{--  SIDEBAR  --}}
        @include('components.sidebar')
        {{--  END SIDEBAR   --}}

        {{--  MAIN CONTENT PAGES  --}}
        <div class="page-wrapper">
            @yield('content')
        </div>
        {{--  END MAIN CONTENT PAGES  --}}
    </div>



    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/moment/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/apexchart/chart-data.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/theme-settings.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/greedynav.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/script.js') }}" type="text/javascript"></script>
    @yield('scripts')
</body>


</html>
