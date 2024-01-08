<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>@yield('title')</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="{{asset('img/icon.png')}}">


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet" />
    
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet" />
    <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet" />
    <link href="{{asset('vendor/remixicon/remixicon.css')}}" rel="stylesheet" />
    <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('css')
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header class="navbar navbar-expand-lg fixed-top">
      <nav id="header" class="navbar fixed-top">
        <div class="container container-fluid">
          <a class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark" href="index.html">
            <img src="{{asset('img/Logo.svg')}}" alt="" />
          </a>
          <button class="navbar-toggler mobile-nav-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="ms-4"></div>
          <div  class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-lg-5 me-auto mb-2 mb-lg-0" >
              <li class="nav-item"><a href={{ route('index') }} class="ms-4 nav-link {{ request()->is('/') ? 'active' : '' }}">Beranda</a></li>
              <li class="nav-item"><a href={{ route('user-info') }} class="ms-4 nav-link {{ request()->is('info-kegiatan') ? 'active' : '' }}">Informasi Kegiatan</a></li>
              <li class="nav-item"><a href={{ route('user-profil') }} class="ms-4 nav-link {{ request()->is('profil') ? 'active' : '' }}">Profil</a></li>
              <li class="nav-item"><a href={{ route('user-berita') }} class="ms-4 nav-link {{ request()->is('berita') ? 'active' : '' }}">Berita</a></li>
            </ul>
    
            <div class="col-md-3 text-end">
              <button type="button" class="btn btn-outline-success me-2">Login</button>
              <button type="button" class="btn btn-success">Sign-up</button>
            </div>
          </div>
        </div>
      </nav>
    </header>

    @yield('content')
    <!-- End Header -->
  
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('vendor/aos/aos.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('js/main.js')}}"></script>
    @yield('js')
  </body>
</html>