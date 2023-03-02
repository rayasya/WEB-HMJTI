<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <link rel="shortcut icon" href="{{asset('user/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('user/favicon.ico')}}" type="image/x-icon">
    <title>@yield('title')</title>

<!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('backend/modules/fontawesome/css/all.min.css')}}">
    <script src="https://kit.fontawesome.com/f5a87b5464.js" crossorigin="anonymous"></script>

    <!-- CSS Libraries -->
    @stack('css-libraries')

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('dist/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/css/components.css') }}">

    <!-- Start GA -->
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>


</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>

            {{-- NAVBAR / TOP BAR --}}
            @include('admin.layouts.navbar')

            {{-- SIDEBAR --}}
            @include('admin.layouts.sidebar')
