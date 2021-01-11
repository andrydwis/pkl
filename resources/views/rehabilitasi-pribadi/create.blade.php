@extends('layouts.user')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center" style="background-image:url({{ asset('assets/img/gedung-bnn.png') }}); background-repeat:no-repeat; background-size: cover; background-position: center;">
    <div class="container d-flex justify-content-center">
        <h1>Form Pengajuan Rehabilitasi Pribadi</h1>
    </div>
</section>
<!-- End Hero -->

<div class="container mt-3">
    @include('layouts.alert')
</div>

<main id="main">
    <section id="form" class="d-flex justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-8">
                    <div class="card card-primary">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('rehabilitasi-pribadi.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="nomer_ktp">Nomer KTP / NIK</label>
                                    <input id="nomer_ktp" type="number" class="form-control @error('nomer_ktp'){{ 'is-invalid' }}@enderror" name="nomer_ktp" value="{{ old('nomer_ktp') ?? '' }}" autofocus>
                                    @error('nomer_ktp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <input id="nama_lengkap" type="text" class="form-control @error('nama_lengkap'){{ 'is-invalid' }}@enderror" name="nama_lengkap" value="{{ old('nama_lengkap') ?? '' }}">
                                    @error('nama_lengkap')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea name="alamat" id="alamat" class="form-control @error('alamat'){{ 'is-invalid' }}@enderror">{{ old('alamat') ?? '' }}</textarea>
                                    @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="telepon">Telepon</label>
                                    <input id="telepon" type="number" class="form-control @error('telepon'){{ 'is-invalid' }}@enderror" name="telepon" value="{{ old('telepon') ?? '' }}">
                                    @error('telepon')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="jenis_penyalahgunaan">Jenis Penyalahgunaan</label>
                                    <input id="jenis_penyalahgunaan" type="text" class="form-control @error('jenis_penyalahgunaan'){{ 'is-invalid' }}@enderror" name="jenis_penyalahgunaan" value="{{ old('jenis_penyalahgunaan') ?? '' }}">
                                    @error('jenis_penyalahgunaan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="hubungan_dengan_penyalahguna">Hubungan dengan penyalahguna</label>
                                    <input id="hubungan_dengan_penyalahguna" type="text" class="form-control @error('hubungan_dengan_penyalahguna'){{ 'is-invalid' }}@enderror" name="hubungan_dengan_penyalahguna" value="{{ old('hubungan_dengan_penyalahguna') ?? '' }}">
                                    @error('hubungan_dengan_penyalahguna')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="rencana_kedatangan_ke_klinik">Rencana kedatangan ke klinik</label>
                                    <input id="rencana_kedatangan_ke_klinik" type="date" class="form-control @error('rencana_kedatangan_ke_klinik'){{ 'is-invalid' }}@enderror" name="rencana_kedatangan_ke_klinik" value="{{ old('rencana_kedatangan_ke_klinik') ?? '' }}">
                                    @error('rencana_kedatangan_ke_klinik')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
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