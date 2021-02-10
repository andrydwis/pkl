@extends('layouts.user')
@section('customCSS')
    <style>
        html {
            box-sizing: border-box;
        }

        *,
        *before,
        *:after {
            box-sizing: inherit;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
        }

        .carousel-image {
            display: block;
            height: 300px;
            /* set min-width, allow images to set cell width */
            min-width: 150px;
            max-width: 100%;
            margin-right: 10px;
            /* vertically center */
            top: 50%;
            transform: translateY(-50%)
        }

        .carousel.is-fullscreen .carousel-image {
            height: auto;
            max-height: 100%;
        }

        .icon {
            text-align: center;
        }

        .icon-box {
            height: auto;
            width: 500px;
        }

        .card {
            background-color: #f7f7f7;
        }

    </style>
@endsection
@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1 class="h1 text-white">Layanan Terpadu</h1>
                    <h4 class="h4 text-white">Badan Narkotika Nasional Kota Malang</h4>
                    <div class="d-lg-flex">
                        <a href="https://bnn.go.id/" class="btn-get-started scrollto">Web BNN Pusat</a>
                        <a href="https://www.youtube.com/watch?v=c0-5Oxb5oyE" class="venobox btn-watch-video"
                            data-vbtype="video" data-autoplay="true">
                            Lihat Profil Video <i class="icofont-play-alt-2"></i></a>
                    </div>
                </div>
                <!-- ======= SOP Services ======= -->
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <div class="carousel" data-flickity='{ "autoPlay": true, "lazyLoad": 2 }'>
                        @foreach ($galleries as $gallery)
                            <img class="carousel-image" data-flickity-lazyload="{{ 'storage/' . $gallery->gambar }}">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Layanan</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box" id="pengaduan-masyarakat">
                            <div class="icon"><i class="fas fa-bullhorn"></i></div>
                            <h2 style="text-align: center;">
                                <a href="{{ route('pengaduan.create') }}">Pengaduan Masyarakat</a>
                            </h2>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box" id="permohonan-sosialisasi">
                            <div class="icon"><i class="fas fa-scroll"></i></div>
                            <h2 style="text-align: center;">
                                <a href="{{ route('sosialisasi.create') }}">Permohonan Sosialisasi</a>
                            </h2>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box" id="permohonan-rehabilitasi-pribadi">
                            <div class="icon"><i class="fas fa-scroll"></i></div>
                            <h2 style="text-align: center;">
                                <a href="{{ route('rehabilitasi-pribadi.create') }}">Permohonan Rehabilitasi Pribadi</a>
                            </h2>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box" id="permohonan-rehabilitasi-instansi">
                            <div class="icon"><i class="fas fa-scroll"></i></div>
                            <h2 style="text-align: center;">
                                <a href="{{ route('rehabilitasi-instansi.create') }}">Permohonan Rehabilitasi Instansi</a>
                            </h2>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="500">
                        <div class="icon-box" id="skhpn">
                            <div class="icon"><i class="far fa-id-card"></i></div>
                            <h2 style="text-align: center;">
                                <a href="{{ route('skhpn.create') }}">SKHPN
                                    <br> (Surat Keterangan Hasil Pemeriksaan Narkotika)</a>
                            </h2>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="500">
                        <div class="icon-box" id="permohonan-tes-urine-mandiri">
                            <div class="icon"><i class="far fa-id-card"></i></div>
                            <h2 style="text-align: center;">
                                <a href="{{ route('permohonan-tes-urine-instansi.create') }}">Permohonan Tes Urine
                                    Instansi</a>
                            </h2>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="600">
                        <div class="icon-box" id="survey-kepuasan-pelayanan">
                            <div class="icon"><i class="fas fa-chart-pie"></i></div>
                            <h2 style="text-align: center;">
                                <a href="{{ route('survey.index') }}">Survey Kepuasan Pelayanan</a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Tentang Kami</h2>
                </div>
                <div class="row mb-5">
                    <div class="col">
                        <div class="card bg-white shadow rounded">
                            <div class="card-body">
                                <p>
                                    Badan Narkotika Nasional Kota Malang adalah Lembaga Pemerintah Vertikal yang
                                    berkedudukan di
                                    bawah dan bertanggungjawab kepada Badan Narkotika Nasional Propinsi dan Badan Narkotika
                                    Nasional.
                                    Badan Narkotika Nasional merupakan lembaga yang bertujuan untuk melakukan Program
                                    Pencegahan dan
                                    Pemberantasan Penyalahgunaan dan Peredaran Gelap Narkoba (P4GN) dengan berbagai kegiatan
                                    melalui Bidang Pencegahan, Bidang Pemberdayaan Masyarakat, dan Bidang Pemberantasan.
                                </p>
                                <p>
                                    Sebelum vertikalisasi, Badan Narkotika Nasional Kota Malang merupakan sebuah Badan atau
                                    SKPD
                                    (Satuan Kerja Perangkat Daerah) yang berada di bawah Pemerintah Kota Malang dikepalai
                                    oleh Ketua
                                    Badan Narkotika Kota Malang yang dijabat oleh Wakil Walikota Malang Drs. BAMBANG PRIYO
                                    UTOMO, B.Sc.
                                </p>
                                <p>
                                    Pembeharuan Surat Keputusan tersebut antara lain adalah adanya jabatan Kepala Pelaksana
                                    Harian
                                    (Kalakhar) yang dijabat oleh Komisaris Polisi Drs. BAMBANG ANDJAR SOEPENO, S.H, M.Si.
                                    adapun
                                    tugas sehari-hari adalah melaksanakan fungsi pelaksana harian Ketua Badan Narkotika Kota
                                    Malang.
                                    Sedangkan anggota dari BNK Kota Malang adalah dari berbagai unsur Pemerintahan,
                                    Kepolisian, Kejaksaan,
                                    Pengadilan Negeri, Lapas, dan Militer yang terkait dengan Pencegahan dan Pemberantasan
                                    Narkoba.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Us Section -->

        <!-- ======= Visi Misi Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">
                <div class="row d-flex align-items-start">
                    <div class="col-sm-6 my-3">
                        <div class="section-title">
                            <h2>Visi</h2>
                        </div>
                        <div class="card bg-white shadow rounded">
                            <div class="card-body d-flex align-items-center" style="height: 250px;">
                                <p class="">
                                    Bersama instansi pemerintah daerah, swasta, dan komponen masyarakat di Kota Malang
                                    dengan
                                    melaksanakan Pencegahan, Pemberdayaan masyarakat, Penjangkauan dan pendampingan,
                                    Pemberantasan
                                    serta di dukung tata kelola pemerintahan yang akuntabel dalam rangka P4GN.
                                </p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-sm-6 my-3">
                        <div class="section-title">
                            <h2>Misi</h2>
                        </div>
                        <div class="card bg-white shadow rounded">
                            <div class="card-body d-flex align-items-center" style="height: 250px;">
                                <p>
                                    Mewujudkan Masyarakat Kota Malang yang sehat, bebas dari penyalagunaan dan peredaran
                                    gelap
                                    narkotika, dalam rangka mendukung terciptanya sumber daya manusia Indonesia yang
                                    berkualitas dan
                                    kompetitif di segala bidang.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- End About Us Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Kontak</h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-9 d-inline-flex justify-content-center">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Location:</h4>
                                <p>
                                    Jl. Mayjen Sungkono No.55, Buring, Kec. Kedungkandang, Kota
                                    Malang, Jawa Timur 65135
                                </p>
                            </div>

                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p>bnnkota_malang@bnn.go.id</p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Call:</h4>
                                <p>(0341) 753344</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    </main>
    <!-- End #main -->
@endsection

@section('customJS')

@endsection
