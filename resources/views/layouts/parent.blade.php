<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <title>@yield('judul')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->

  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex justify-content-between">
      <div class="contact-info">
        <i class="icofont-envelope"></i><a href="#">dekleinswitzeland@email.com</a>
        <i class="icofont-phone"></i> +62 8575 5238 045
      </div>
      <div class="social-links">
        <a href="https://twitter.com/disparta_batu?s=20" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="https://web.facebook.com/Dinas-Pariwisata-Kota-Batu-315219375559896" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://instagram.com/disparta_batu?igshid=136go0izzwaa4" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UCQXusk338O6h8WLgdaxvftQ" class="youtube"><i class="icofont-youtube-play"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="#">De Klein Switzerland</a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
            <a href="/home">Home</a>
          </li>

          <li class="nav-item {{ Route::is('about') ? 'active' : '' }}">
            @can('user')
            <a href="/about">About Us</a>
            @endcan
          </li>
            
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
          @endif
          @else
          <li class="drop-down"><a href="#">{{ Auth::user()->name }} <span class="caret"></span></a>
            <ul>
              <li>
                @can('user')
                <a href="/comments">tell ur story</a>
                @endcan
              </li>

              <li>
                @can('manage')
                <a href="/manageDestinasi">Manage Destinasi</a>
                @endcan
              </li>

              <li>
                @can('manage')
                <a href="/manageComment">Manage Comment</a>
                @endcan
              </li>

              <li>
                @can('manage')
                <a href="/manageUser">Manage User</a>
                @endcan
              </li>
              
              <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </li>
            </ul>
          </li>
        @endguest 
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    @yield('konten')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3>De Klein Switzerland</h3>
            <p>ditengah lembah lereng gunung bersinar kota batu</p>
          </div>
        </div>

        <div class="social-links">
          <a href="https://twitter.com/disparta_batu?s=20" class="twitter"><i class="icofont-twitter"></i></a>
          <a href="https://web.facebook.com/Dinas-Pariwisata-Kota-Batu-315219375559896" class="facebook"><i class="icofont-facebook"></i></a>
          <a href="https://instagram.com/disparta_batu?igshid=136go0izzwaa4" class="instagram"><i class="icofont-instagram"></i></a>
          <a href="https://www.youtube.com/channel/UCQXusk338O6h8WLgdaxvftQ" class="youtube"><i class="icofont-youtube-play"></i></a>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Nafis _ Silvia</span></strong>. MI 2F
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>