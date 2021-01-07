<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Badan Narkotika Nasional Kota Malang</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{ asset('assets/user/assets/img/logo.png') }}" rel="icon" />
    <link href="{{ asset('assets/user/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/user/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/user/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/user/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/user/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/user/assets//vendor/venobox/venobox.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/user/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/user/assets/vendor/aos/aos.css') }}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/user/assets/css/style.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!-- =======================================================
  * Template Name: Arsha - v2.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ 
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    {{-- customCSS --}}
    @yield('customCSS')

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <!-- <h1 class="logo mr-auto"><a href="index.html">Arsha</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="{{ route('init') }}" class="logo mr-auto"><img src="{{ asset('assets/user/assets/img/logo.png') }}" alt="" class="img-fluid" />
                <span class="d-none d-xl-inline">BNN Kota Malang</span>
            </a>

            <nav class="nav-menu d-none d-lg-block">
                @if (Route::is('init'))
                <ul>
                    <li class="active"><a href="{{ route('init') }}">Beranda</a></li>
                    @auth
                    <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                    @endauth
                    <li class="drop-down"><a href="#">Layanan</a>
                        <ul>
                            <li><a href="{{ route('pengaduan.create') }}">Pengaduan Masyarakat</a></li>
                            <li><a href="{{ route('sosialisasi.create') }}">Permohonan Sosialisasi</a></li>
                            <li><a href="{{ route('rehabilitasi-pribadi.create') }}">Permohonan Rehabilitas
                                    Pribadi</a></li>
                            <li><a href="{{ route('rehabilitasi-instansi.create') }}">Permohonan Rehabilitas
                                    Instansi</a></li>
                            <li><a href="{{ route('permohonan-tes-urine-pribadi.create') }}">Permohonan Tes Urine
                                    Pribadi</a>
                            </li>
                            <li><a href="{{ route('permohonan-tes-urine-instansi.create') }}">Permohonan Tes Urine
                                    Instansi</a></li>
                            <li><a href="#survey-kepuasan-pasien">Survey Kepuasan Pasien</a></li>
                        </ul>
                    <li><a href="#sop-services">Alur SOP Layanan</a></li>
                    <li><a href="#about">Tentang Kami</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
                @else
                <ul class="mr-5">
                    <li><a href="{{ route('init') }}">Beranda</a></li>
                    @auth
                    <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                    @endauth
                    <li class="drop-down mr-5"><a href="#">Layanan</a>
                        <ul>
                            <li><a href="{{ route('pengaduan.create') }}">Pengaduan Masyarakat</a></li>
                            <li><a href="{{ route('sosialisasi.create') }}">Permohonan Sosialisasi</a></li>
                            <li><a href="{{ route('rehabilitasi-pribadi.create') }}">Permohonan Rehabilitas
                                    Pribadi</a></li>
                            <li><a href="{{ route('rehabilitasi-instansi.create') }}">Permohonan Rehabilitas
                                    Instansi</a></li>
                            <li><a href="{{ route('permohonan-tes-urine-pribadi.create') }}">Permohonan Tes Urine
                                    Pribadi</a>
                            </li>
                            <li><a href="{{ route('permohonan-tes-urine-instansi.create') }}">Permohonan Tes Urine
                                    Instansi</a></li>
                            <li><a href="#survey-kepuasan-pasien">Survey Kepuasan Pasien</a></li>
                        </ul>
                    </li>
                </ul>
                @endif

            </nav>
            <!-- .nav-menu -->
        </div>
    </header>
    <!-- End Header -->
    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>BNN Kota Malang</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/user/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/user/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/user/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/user/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/user/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/user/assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/user/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/user/assets/vendor/aos/aos.js') }}"></script>

    @yield('CustomJS')

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/user/assets/js/main.js') }}"></script>

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>


</body>

</html>