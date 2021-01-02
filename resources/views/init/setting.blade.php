@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Pengaturan</h1>
</div>
<div class="section-body">
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="card card-large-icons w-100">
                <div class="card-icon bg-primary text-white">
                    <i class="fas fa-user"></i>
                </div>
                <div class="card-body">
                    <h4>Profil</h4>
                    <p>Ubah profil anda</p>
                    <a href="{{route('edit-profile.edit')}}" class="card-cta">Ubah <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="card card-large-icons w-100">
                <div class="card-icon bg-primary text-white">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="card-body">
                    <h4>Password</h4>
                    <p>Ubah password anda</p>
                    <a href="{{route('change-password')}}" class="card-cta">Ubah <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection