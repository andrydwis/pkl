@extends('layouts.user')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center"
        style="background-image:url({{ asset('assets/img/gedung-bnn.png') }}); background-repeat:no-repeat; background-size: cover; background-position: center;">
        <div class="container d-flex justify-content-center">
            <h1>Survey Kepuasan Pelayanan</h1>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <section id="form" class="d-flex justify-content-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-8">
                        <div class="card card-primary">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <form method="" action="">
                                    <label for="Pengaduan Masyarakat">1. Bagaimana dengan pelayanan pengaduan
                                        masyarakat</label>
                                    <div class="form-group">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="customRadio"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio1">Sangat Puas</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="customRadio"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio2">Puas</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio3" name="customRadio"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio3">Cukup Puas</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio4" name="customRadio"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio4">Kurang Puas</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio5" name="customRadio"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio5">Tidak Puas</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Kirim
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
