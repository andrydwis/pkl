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

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

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

    <!-- =======================================================
  * Template Name: Arsha - v2.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ 
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <!-- <h1 class="logo mr-auto"><a href="index.html">Arsha</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html" class="logo mr-auto"><img src="{{ asset('assets/user/assets/img/logo.png') }}" alt=""
                    class="img-fluid" />
                <span class="d-none d-xl-inline">BNN Kota Malang</span>
            </a>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.html">Beranda</a></li>
                    <li><a href="#about">Tentang Kami</a></li>
                    <li><a href="#sop-services">Alur SOP Layanan</a></li>
                    <li class="drop-down"><a href="#services">Layanan</a>
                        <ul>
                            <li><a href="#services">Pengaduan Masyarakat</a></li>
                            <li><a href="#services">Permohonan Sosialisasi</a></li>
                            <li><a href="#services">Permohonan Rehabilitas</a></li>
                            <li><a href="#services">Permohonan Tes Urine Instansi</a></li>
                            <li><a href="#services">Permohonan Tes Urine Mandiri</a></li>
                            <li><a href="#services">Survey Kepuasan Pasien</a></li>
                        </ul>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
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

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/user/assets/js/main.js') }}"></script>
</body>

</html>
