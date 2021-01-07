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
    <h2>Rangkuman data pengaduan</h2>
    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
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
        <div class="col-12 col-sm-6">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-bullhorn"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Pengaduan Tahun Ini</h4>
                    </div>
                    <div class="card-body">
                        {{$pengaduan['total_year']}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-bullhorn"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Pengaduan Bulan Ini</h4>
                    </div>
                    <div class="card-body">
                        {{$pengaduan['total_month']}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-bullhorn"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Pengaduan Hari Ini</h4>
                    </div>
                    <div class="card-body">
                        {{$pengaduan['total_day']}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection