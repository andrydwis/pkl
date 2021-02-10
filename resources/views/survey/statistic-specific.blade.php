@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Survey Kepuasan Pelayanan</h1>
</div>
<div class="section-body">
    <div class="card card-primary">
        <div class="card-header flex-row justify-content-between">
            <h4>Statistik Spesifik {{ date('d-m-Y', strtotime($tanggal_dari)) }} sampai {{ date('d-m-Y', strtotime($tanggal_sampai)) }}</h4>
            <div class="btn-group-vertical">
                <a href="{{ route('survey.statistic-specific-export', ['tanggal_dari' => $tanggal_dari, 'tanggal_sampai' => $tanggal_sampai]) }}" class="btn btn-primary">Export</a>
                <a href="{{ route('survey.statistic') }}" class="btn btn-primary">Kembali</a>
            </div>
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
</div>
@endsection
@section('customJS')
@foreach ($stats as $stat)
@php
$sangat_puas = $stat->jawabans->where('jawaban', 5)->whereBetween('created_at', [$tanggal_dari , $tanggal_sampai])->count();
$puas = $stat->jawabans->where('jawaban', 4)->whereBetween('created_at', [$tanggal_dari , $tanggal_sampai])->count();
$cukup_puas = $stat->jawabans->where('jawaban', 3)->whereBetween('created_at', [$tanggal_dari , $tanggal_sampai])->count();
$kurang_puas = $stat->jawabans->where('jawaban', 2)->whereBetween('created_at', [$tanggal_dari , $tanggal_sampai])->count();
$tidak_puas = $stat->jawabans->where('jawaban', 1)->whereBetween('created_at', [$tanggal_dari , $tanggal_sampai])->count();
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