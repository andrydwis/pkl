@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Dashboard</h1>
</div>
@include('layouts.alert')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="hero bg-primary text-white">
                <div class="hero-inner">
                    <h2>Selamat datang, {{auth()->user()->name}}</h2>
                    <p class="lead">Bagaimana kabar hari ini ?</p>
                </div>
            </div>
        </div>
    </div>
    <div class="my-5"></div>
   
</div>
@endsection