<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>World - @yield('title')</title>
    <link rel="icon" href="{{ asset('assets/img/core-img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>

<body>
<div id="preloader">
    <div class="preload-content">
        <div id="world-load"></div>
    </div>
</div>
@include('public.header-area')
@yield('content')
@include('public.footer-area')

<script src="{{ asset('assets/js/jquery/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/active.js') }}"></script>
</body>
</html>
