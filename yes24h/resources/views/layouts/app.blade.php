<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Mua sắm Online Phong cách Hàn Quốc Uy Tín, Giá tốt Nhất - Yes24.vn</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">

    <!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Cusom css -->
  <!--   <link rel="stylesheet" href="{{ asset('css/custom.css') }}"> -->

    <!-- Modernizer js -->
    <script src="{{ asset('js/vendor/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
</head>
<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Main wrapper -->
    <div>
        <!-- Header -->
        @include('layouts.partials.header')
    
        
        <main class="py-4">
            @yield('content')
        </main>


        <!-- @include('layouts.partials.footer') -->
        
    </div>
    <!-- //Main wrapper -->

    <!-- JS Files -->
    <script>
        jQuery(document).ready(function($) {
            $('#btn-search').on('click', function(event) {
                event.preventDefault();
                
                $('#search_mini_form').submit();
            });
        });
    </script>

    @yield('javascript')

</body>
</html>
