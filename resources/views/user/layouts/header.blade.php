<html lang="en">

<head>

    <link rel="shortcut icon" href="{{asset('user/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('user/favicon.ico')}}" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-phscale=1.0">
    <title>{{ env('APP_NAME') }}</title>

    <meta content="{{ env('APP_DESC') }}" name="description">
    <meta content="hmjti, hmjti polije, himpunan mahasiswa jurusan teknologi informasi, hima, himpunan mahasiswa, jti, jti polije, polije" name="keywords">

    <meta property="og:title" content="{{ env('APP_NAME') }}">
	<meta property="og:description" content="{{ env('APP_DESC') }}">
	<meta property="og:image" content="{{ url(asset('img/favicon.png')) }}">
	<meta property="og:url" content="{{ env('APP_URL') }}">






    <!-- Fonts -->
    <!-- Montserrat -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Poppins -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">



    <!-- Fontawesome -->
    <script src="{{asset('js/kit-fontawesome.js')}}" crossorigin="anonymous"></script>

    <!-- BootstrapCSS -->
    <link href="{{asset('css')}}/app.css" rel="stylesheet" crossorigin="anonymous">

    <!-- StyleCSS -->
    @yield('contentcss')
    <link rel="stylesheet" href="{{asset('user/css/style.css')}}">

    <!-- AnimateCSS -->
    {{-- <link href="{{asset('css/aos.css')}}" rel="stylesheet"> --}}

</head>

<body id="home">
    <div class="loader">
        <div class="preload-animation">
            <div class="preload-image">
                <center><img src="{{asset('user/img/logo.png')}}" alt=""></center>
            </div>
            <div class="loading-bar">
                <div class="blue-bar"></div>
            </div>
        </div>
    </div>
    {{-- <div class="loader">
        <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" width="320px" height="87px" viewBox="0 0 108 40"
            xml:space="preserve">
            <g>
                <path fill="#0066ff" fill-opacity="1"
                    d="M-80.265.241h8.122A1.951,1.951,0,0,1-70.18,2.18V41.845a1.951,1.951,0,0,1-1.963,1.939h-8.122a1.951,1.951,0,0,1-1.963-1.939V2.18A1.951,1.951,0,0,1-80.265.241Zm16.468,0h8.122A1.951,1.951,0,0,1-53.712,2.18V41.845a1.951,1.951,0,0,1-1.963,1.939H-63.8a1.951,1.951,0,0,1-1.963-1.939V2.18A1.951,1.951,0,0,1-63.8.241Zm16.468,14.6h8.122a1.951,1.951,0,0,1,1.963,1.939V41.845a1.951,1.951,0,0,1-1.963,1.939h-8.122a1.951,1.951,0,0,1-1.963-1.939V16.784A1.951,1.951,0,0,1-47.329,14.845Zm16.468,15.728h8.122a1.951,1.951,0,0,1,1.963,1.939v9.333a1.951,1.951,0,0,1-1.963,1.939h-8.122a1.951,1.951,0,0,1-1.963-1.939V32.512A1.951,1.951,0,0,1-30.861,30.573Zm16.655-15.728h8.122a1.951,1.951,0,0,1,1.963,1.939V41.845a1.951,1.951,0,0,1-1.963,1.939h-8.122a1.951,1.951,0,0,1-1.963-1.939V16.784A1.951,1.951,0,0,1-14.206,14.845ZM2.074,0.241H10.2A1.951,1.951,0,0,1,12.159,2.18V41.845A1.951,1.951,0,0,1,10.2,43.784H2.074A1.951,1.951,0,0,1,.112,41.845V2.18A1.951,1.951,0,0,1,2.074.241Zm16.655,0h8.122A1.951,1.951,0,0,1,28.814,2.18V41.845a1.951,1.951,0,0,1-1.963,1.939H18.729a1.951,1.951,0,0,1-1.963-1.939V2.18A1.951,1.951,0,0,1,18.729.241Zm16.468,0h8.122A1.951,1.951,0,0,1,45.282,2.18V41.845a1.951,1.951,0,0,1-1.963,1.939H35.2a1.951,1.951,0,0,1-1.963-1.939V2.18A1.951,1.951,0,0,1,35.2.241Zm16.377,0H59.7A1.951,1.951,0,0,1,61.659,2.18V41.845A1.951,1.951,0,0,1,59.7,43.784H51.574a1.951,1.951,0,0,1-1.963-1.939V2.18A1.951,1.951,0,0,1,51.574.241Zm16.655,0h8.122A1.951,1.951,0,0,1,78.314,2.18V41.845a1.951,1.951,0,0,1-1.963,1.939H68.229a1.951,1.951,0,0,1-1.963-1.939V2.18A1.951,1.951,0,0,1,68.229.241Zm16.468,0h8.122A1.951,1.951,0,0,1,94.782,2.18V41.845a1.951,1.951,0,0,1-1.963,1.939H84.7a1.951,1.951,0,0,1-1.963-1.939V2.18A1.951,1.951,0,0,1,84.7.241Zm16.532,0h8.122a1.951,1.951,0,0,1,1.963,1.939V41.845a1.951,1.951,0,0,1-1.963,1.939h-8.122a1.951,1.951,0,0,1-1.963-1.939V2.18A1.951,1.951,0,0,1,101.229.241Zm16.468,0h8.122a1.951,1.951,0,0,1,1.963,1.939V41.845a1.951,1.951,0,0,1-1.963,1.939H117.7a1.951,1.951,0,0,1-1.963-1.939V2.18A1.951,1.951,0,0,1,117.7.241Zm-230.962,0h8.122A1.951,1.951,0,0,1-103.18,2.18V41.845a1.951,1.951,0,0,1-1.963,1.939h-8.122a1.951,1.951,0,0,1-1.963-1.939V2.18A1.951,1.951,0,0,1-113.265.241Zm16.468,0h8.122A1.951,1.951,0,0,1-86.712,2.18V41.845a1.951,1.951,0,0,1-1.963,1.939H-96.8a1.951,1.951,0,0,1-1.963-1.939V2.18A1.951,1.951,0,0,1-96.8.241Zm-49.468,0h8.122A1.951,1.951,0,0,1-136.18,2.18V41.845a1.951,1.951,0,0,1-1.963,1.939h-8.122a1.951,1.951,0,0,1-1.963-1.939V2.18A1.951,1.951,0,0,1-146.265.241Zm16.468,0h8.122a1.951,1.951,0,0,1,1.963,1.939V41.845a1.951,1.951,0,0,1-1.963,1.939H-129.8a1.951,1.951,0,0,1-1.963-1.939V2.18A1.951,1.951,0,0,1-129.8.241Zm-49.468,0h8.122A1.951,1.951,0,0,1-169.18,2.18V41.845a1.951,1.951,0,0,1-1.963,1.939h-8.122a1.951,1.951,0,0,1-1.963-1.939V2.18A1.951,1.951,0,0,1-179.265.241Zm16.468,0h8.122a1.951,1.951,0,0,1,1.963,1.939V41.845a1.951,1.951,0,0,1-1.963,1.939H-162.8a1.951,1.951,0,0,1-1.963-1.939V2.18A1.951,1.951,0,0,1-162.8.241Z" />
                <animateTransform attributeName="transform" type="translate"
                    values="16.5 0;33 0;49.5 0;66 0;82.5 0;99 0;115.5 0;132 0;148.5 0;165 0;181.5 0" calcMode="discrete"
                    dur="1210ms" repeatCount="indefinite" />
            </g>
        </svg>
    </div> --}}
    <div id="scrollUp" title="Scroll To Top" style="display: block;">
        <a href="#home">
            <svg class="svg-inline--fa fa-arrow-up fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas"
                data-icon="arrow-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                data-fa-i2svg="">
                <path fill="currentColor"
                    d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z">
                </path>
            </svg>
        </a>
    </div>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <div class="d-flex">
                        <a href="https://hmjti-polije.com/">
                            <img src="{{asset('user/img/logo.png')}}" class="navbar-logo" alt="Logo" width="36" height="50">
                        </a>

                        <a class="navbar-brand" href="https://hmjti-polije.com/">Himpunan Mahasiswa <br> Jurusan Teknologi Informasi</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link   {{ request()->is('/') || request()->is('beranda') ? 'active' : '' }}"
                                    href="https://hmjti-polije.com/beranda">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  {{ request()->is('blog*') ? 'active' : '' }}" href="https://hmjti-polije.com/blog">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  {{ request()->is('profile') ? 'active' : '' }}"
                                    href="https://hmjti-polije.com/profile">Profil HMJTI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://hmjti-polije.com/proker">Proker & Agenda</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="https://bso.hmjti-polije.com/" target="_blank">BSO HMJTI</a>
                            </li> --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link  {{ request()->is('about-us') ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    tentang kami
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Sejarah</a>
                                    <a class="dropdown-item" href="#">Program Kerja HMJ TI</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="https://hmjti-polije.com/kritik-saran">Kritik dan Saran</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <form id="form_cari" action="{{route('blog.cari')}}" method="GET">
                                    {{-- @csrf --}}
                                <div class="searchbar">
                                    <input class="search_input" type="text" name="q" placeholder="Search...">
                                    <a href="javascript:{}" onclick="document.getElementById('form_cari').submit();" class="search_icon"><?php echo '<?xml version="1.0" encoding="utf-8" ?>'; ?><svg xmlns="http://www.w3.org/2000/svg" fill="none" height="24" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"><circle cx="10.5" cy="10.5" r="7.5"/><line x1="21" x2="15.8" y1="21" y2="15.8"/></svg></a>
                                </div>
                            </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
