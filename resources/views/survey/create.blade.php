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
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios1" value="option1">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Sangat Puas
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Puas
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios3" value="option3">
                                            <label class="form-check-label" for="exampleRadios3">
                                                Cukup Puas
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios4" value="option4">
                                            <label class="form-check-label" for="exampleRadios4">
                                                Kurang Puas
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios5" value="option5">
                                            <label class="form-check-label" for="exampleRadios5">
                                                Tidak Puas
                                            </label>
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
