@extends('layouts.user')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Better Solutions For Your Business</h1>
                    <h2>
                        We are team of talanted designers making websites with Bootstrap
                    </h2>
                    <div class="d-lg-flex">
                        <a href="https://bnn.go.id/" class="btn-get-started scrollto">Web BNN Pusat</a>
                        <a href="https://www.youtube.com/watch?v=c0-5Oxb5oyE" class="venobox btn-watch-video"
                            data-vbtype="video" data-autoplay="true">
                            Watch Video <i class="icofont-play-alt-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="" />
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
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="{{ route('pengaduan.create') }}">Pengaduan Masyarakat</a></h4>
                            <p>
                                Voluptatum deleniti atque corrupti quos dolores et quas
                                molestias excepturi
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box" id="permohonan-sosialisasi">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="{{ route('sosialisasi.create') }}">Permohonan Sosialisasi</a></h4>
                            <p>
                                Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box" id="permohonan-rehabilitas">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">Permohonan Rehabilitas</a></h4>
                            <p>
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                qui officia
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="400">
                        <div class="icon-box" id="permohonan-tes-urine-instansi">
                            <div class="icon"><i class="bx bx-layer"></i></div>
                            <h4><a href="">Permohonan Tes Urine (Instansi)</a></h4>
                            <p>
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="500">
                        <div class="icon-box" id="permohonan-tes-urine-mandiri">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">Permohonan Tes Urine (Mandiri)</a></h4>
                            <p>
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                qui officia
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="600">
                        <div class="icon-box" id="survey-kepuasan-pasien">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
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
    </main>
    <!-- End #main -->
@endsection
