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

    .carousel-cell {
        width: 50%;
        padding: 1rem;
    }
</style>
@endsection
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h1>Better Solutions For Your Business</h1>
                <h2>
                    We are team of talanted designers making websites with Bootstrap
                </h2>
                <div class="d-lg-flex">
                    <a href="https://bnn.go.id/" class="btn-get-started scrollto">Web BNN Pusat</a>
                    <a href="https://www.youtube.com/watch?v=c0-5Oxb5oyE" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true">
                        Watch Video <i class="icofont-play-alt-2"></i></a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="assets/img/bg.svg" class="img-fluid animated" alt="" />
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
                        <h4><a href="{{ route('pengaduan.create') }}">Pengaduan Masyarakat</a></h4>
                        <p>
                            Voluptatum deleniti atque corrupti quos dolores et quas
                            molestias excepturi
                        </p>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box" id="permohonan-sosialisasi">
                        <div class="icon"><i class="fas fa-scroll"></i></div>
                        <h4><a href="{{ route('sosialisasi.create') }}">Permohonan Sosialisasi</a></h4>
                        <p>
                            Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore
                        </p>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box" id="permohonan-rehabilitasi-pribadi">
                        <div class="icon"><i class="fas fa-scroll"></i></div>
                        <h4><a href="{{route('rehabilitasi-pribadi.create')}}">Permohonan Rehabilitasi Pribadi</a></h4>
                        <p>
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa
                            qui officia
                        </p>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box" id="permohonan-rehabilitasi-instansi">
                        <div class="icon"><i class="fas fa-scroll"></i></div>
                        <h4><a href="{{route('rehabilitasi-instansi.create')}}">Permohonan Rehabilitasi Instansi</a></h4>
                        <p>
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa
                            qui officia
                        </p>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="500">
                    <div class="icon-box" id="skhpn">
                        <div class="icon"><i class="far fa-id-card"></i></div>
                        <h4><a href="{{route('skhpn.create')}}">SKHPN</a></h4>
                        <p>
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa
                            qui officia
                        </p>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="500">
                    <div class="icon-box" id="permohonan-tes-urine-mandiri">
                        <div class="icon"><i class="far fa-id-card"></i></div>
                        <h4><a href="{{route('permohonan-tes-urine-instansi.create')}}">Permohonan Tes Urine Instansi</a></h4>
                        <p>
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa
                            qui officia
                        </p>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="600">
                    <div class="icon-box" id="survey-kepuasan-pasien">
                        <div class="icon"><i class="fas fa-chart-pie"></i></div>
                        <h4><a href="">Survey Kepuasan Pasien</a></h4>
                        <p>
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa
                            qui officia
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= SOP Services Section ======= -->
    <section id="sop-services" class="services section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Alur SOP Layanan</h2>
            </div>

            <div class="carousel" data-flickity='{ "autoPlay": true }'>
                <div class="carousel-cell">
                    <a href="assets/img/rehab_rawat_jalan.jpeg"><img src="assets/img/rehab_rawat_jalan.jpeg"></a>
                </div>
                <div class="carousel-cell">
                    <a href="assets/img/rehab_rawat_jalan.jpeg"><img src="assets/img/rehab_rawat_jalan.jpeg"></a>
                </div>
                <div class="carousel-cell">
                    <a href="assets/img/rehab_rawat_jalan.jpeg"><img src="assets/img/rehab_rawat_jalan.jpeg"></a>
                </div>
                <div class="carousel-cell">
                    <a href="assets/img/rehab_rawat_jalan.jpeg"><img src="assets/img/rehab_rawat_jalan.jpeg"></a>
                </div>
                <div class="carousel-cell">
                    <a href="assets/img/rehab_rawat_jalan.jpeg"><img src="assets/img/rehab_rawat_jalan.jpeg"></a>
                </div>
            </div>

        </div>
    </section>
    <!-- End SOP Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Tentang Kami</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <ul>
                        <li>
                            <i class="ri-check-double-line"></i> Ullamco laboris nisi ut
                            aliquip ex ea commodo consequat
                        </li>
                        <li>
                            <i class="ri-check-double-line"></i> Duis aute irure dolor in
                            reprehenderit in voluptate velit
                        </li>
                        <li>
                            <i class="ri-check-double-line"></i> Ullamco laboris nisi ut
                            aliquip ex ea commodo consequat
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                        aute irure dolor in reprehenderit in voluptate velit esse cillum
                        dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum.
                    </p>
                    <a href="#" class="btn-learn-more">Learn More</a>
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
                            <p>info@example.com</p>
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