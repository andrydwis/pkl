@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Survey Kepuasan Pelayanan</h1>
</div>
<div class="section-body">
    <div class="card card-primary">
        <div class="card-header flex-row justify-content-between">
            <h4>Statistik</h4>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach($stats as $stat)
                <div class="col-sm-4">

                    <div class="card card-primary">
                        <div class="card-header flex-row justify-content-between">
                            <h4>{{$stat->pertanyaan}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Sangat Puas</label>
                                <button class="btn btn-light">{{$stat->jawabans->where('jawaban', 5)->count()}}</button>
                            </div>
                            <div class="form-group">
                                <label for="">Puas</label>
                                <button class="btn btn-light">{{$stat->jawabans->where('jawaban', 4)->count()}}</button>
                            </div>
                            <div class="form-group">
                                <label for="">Cukup Puas</label>
                                <button class="btn btn-light">{{$stat->jawabans->where('jawaban', 3)->count()}}</button>
                            </div>
                            <div class="form-group">
                                <label for="">Kurang Puas</label>
                                <button class="btn btn-light">{{$stat->jawabans->where('jawaban', 2)->count()}}</button>
                            </div>
                            <div class="form-group">
                                <label for="">Tidak Puas</label>
                                <button class="btn btn-light">{{$stat->jawabans->where('jawaban', 1)->count()}}</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection