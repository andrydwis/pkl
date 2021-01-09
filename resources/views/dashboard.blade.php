@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Dashboard</h1>
</div>
@include('layouts.alert')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="hero text-white hero-bg-image hero-bg-parallax" style="background-image: url({{ asset('assets/img/gedung-bnn.png') }});">
                <div class="hero-inner">
                    <h2>Selamat datang, {{auth()->user()->name}}</h2>
                    <p class="lead">Bagaimana kabar hari ini ?</p>
                </div>
            </div>
        </div>
    </div>
    <div class="my-5"></div>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-stats">
                    <div class="card-stats-title">
                        Rangkuman Data Pengaduan
                    </div>
                    <div class="card-stats-items">
                        <div class="card-stats-item">
                            <div class="card-stats-item-count">{{$pengaduan['total_day']}}</div>
                            <div class="card-stats-item-label">Hari ini</div>
                        </div>
                        <div class="card-stats-item">
                            <div class="card-stats-item-count">{{$pengaduan['total_month']}}</div>
                            <div class="card-stats-item-label">Bulan ini</div>
                        </div>
                        <div class="card-stats-item">
                            <div class="card-stats-item-count">{{$pengaduan['total_year']}}</div>
                            <div class="card-stats-item-label">Tahun ini</div>
                        </div>
                    </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                    <i class="fas fa-bullhorn"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Pengaduan</h4>
                    </div>
                    <div class="card-body">
                        {{$pengaduan['total_all']}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-stats">
                    <div class="card-stats-title">
                        Rangkuman Data Rehabilitasi Pribadi
                    </div>
                    <div class="card-stats-items">
                        <div class="card-stats-item">
                            <div class="card-stats-item-count">{{$rehabilitasi_pribadi['total_day']}}</div>
                            <div class="card-stats-item-label">Hari ini</div>
                        </div>
                        <div class="card-stats-item">
                            <div class="card-stats-item-count">{{$rehabilitasi_pribadi['total_month']}}</div>
                            <div class="card-stats-item-label">Bulan ini</div>
                        </div>
                        <div class="card-stats-item">
                            <div class="card-stats-item-count">{{$rehabilitasi_pribadi['total_year']}}</div>
                            <div class="card-stats-item-label">Tahun ini</div>
                        </div>
                    </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                    <i class="fas fa-ambulance"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Rehabilitasi Pribadi</h4>
                    </div>
                    <div class="card-body">
                        {{$rehabilitasi_pribadi['total_all']}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection