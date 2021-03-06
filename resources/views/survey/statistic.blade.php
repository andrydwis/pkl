@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Survey Kepuasan Pelayanan</h1>
</div>
<div class="section-body">
    <div class="card card-primary">
        <div class="card-header flex-row justify-content-between">
            <h4>Statistik Keseluruhan</h4>
            <a href="{{ route('survey.statistic-export') }}" class="btn btn-primary">Export</a>
        </div>
        <div class="card-body">
            <div class="alert alert-primary" role="alert">
                <strong>Total Responden : {{$responden}}</strong>
            </div>
            <div class="row">
                @foreach($stats as $stat)
                <div class="col-sm-6">
                    <div class="card card-primary">
                        <div class="card-header flex-row justify-content-between">
                            <h4>{{$stat->pertanyaan}}</h4>
                        </div>
                        <div class="card-body">
                            <canvas class="mt-5" id="{{$stat->id}}"></canvas>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="card card-primary">
        <div class="card-header flex-row justify-content-between">
            <h4>Statistik Spesifik</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('survey.statistic-specific')}}">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="tanggal_dari">Tanggal dari</label>
                            <input id="tanggal_dari" type="date" class="form-control @error('tanggal_dari'){{'is-invalid'}}@enderror" name="tanggal_dari" value="{{old('tanggal_dari') ?? ''}}">
                            @error('tanggal_dari')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="tanggal_sampai">Tanggal sampai</label>
                            <input id="tanggal_sampai" type="date" class="form-control @error('tanggal_sampai'){{'is-invalid'}}@enderror" name="tanggal_sampai" value="{{old('tanggal_dari') ?? ''}}">
                            @error('tanggal_sampai')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Cek
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('customJS')
@foreach ($stats as $stat)
@php
$sangat_puas = $stat->jawabans->where('jawaban', 5)->count();
$puas = $stat->jawabans->where('jawaban', 4)->count();
$cukup_puas = $stat->jawabans->where('jawaban', 3)->count();
$kurang_puas = $stat->jawabans->where('jawaban', 2)->count();
$tidak_puas = $stat->jawabans->where('jawaban', 1)->count();
@endphp
<script>
    console.log({{$stat->pertanyaans}});
    var ctx = document.getElementById('{{$stat->id}}').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Sangat Puas', 'Puas', 'Cukup Puas', 'Kurang Puas', 'Tidak Puas'],
            datasets: [{
                label: '# of Survey',
                data: [{{$sangat_puas}}, {{$puas}}, {{$cukup_puas}}, {{$kurang_puas}}, {{$tidak_puas}}],
                backgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
@endforeach

@endsection