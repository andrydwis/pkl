@extends('layouts.user')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center" style="background-image:url({{ asset('assets/img/gedung-bnn.png') }}); background-repeat:no-repeat; background-size: cover; background-position: center;">
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
                            <form method="POST" action="{{route('survey.answer', ['token' => $token])}}">
                                @csrf
                                @foreach($pertanyaans as $pertanyaan)
                                <p>{{$pertanyaan->pertanyaan}}</p>
                                <div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="jawaban1-{{$pertanyaan->id}}" name="jawaban[{{$pertanyaan->id}}]" class="custom-control-input" value=5>
                                        <label class="custom-control-label" for="jawaban1-{{$pertanyaan->id}}">Sangat Puas</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="jawaban2-{{$pertanyaan->id}}" name="jawaban[{{$pertanyaan->id}}]" class="custom-control-input" value=4>
                                        <label class="custom-control-label" for="jawaban2-{{$pertanyaan->id}}">Puas</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="jawaban3-{{$pertanyaan->id}}" name="jawaban[{{$pertanyaan->id}}]" class="custom-control-input" value=3>
                                        <label class="custom-control-label" for="jawaban3-{{$pertanyaan->id}}">Cukup Puas</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="jawaban4-{{$pertanyaan->id}}" name="jawaban[{{$pertanyaan->id}}]" class="custom-control-input" value=2>
                                        <label class="custom-control-label" for="jawaban4-{{$pertanyaan->id}}">Kurang Puas</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="jawaban5-{{$pertanyaan->id}}" name="jawaban[{{$pertanyaan->id}}]w" class="custom-control-input" value=1>
                                        <label class="custom-control-label" for="jawaban5-{{$pertanyaan->id}}">Tidak Puas</label>
                                    </div>
                                </div>
                                @endforeach
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