<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>PGN Media inc | Dashboard</title>

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        @include('admin.layouts.navbar')
        <div id="page-wrapper" class="gray-bg dashbard-1">
            @include('admin.layouts.topbar')
            @yield('content')
        </div>
        @include('admin.layouts.rightbar')
        <!-- Mainly scripts -->
        <script src="{{asset('assets/js/jquery-2.1.1.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
        <script src="{{asset('assets/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

        <!-- Custom and plugin javascript -->
        <script src="{{asset('assets/js/inspinia.js')}}"></script>
        <script src="{{asset('assets/js/plugins/pace/pace.min.js')}}"></script>

        <!-- jQuery UI -->
        <script src="{{asset('assets/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    </div>
</body>

</html>