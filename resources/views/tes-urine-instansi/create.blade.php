@extends('layouts.user')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center"
        style="background-image:url({{ asset('assets/img/gedung-bnn.png') }}); background-repeat:no-repeat; background-size: cover; background-position: center;">
        <div class="container d-flex justify-content-center">
            <h1>Permohonan Tes Urine Instansi</h1>
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
                                <form method="POST" action="{{ route('permohonan-tes-urine-instansi.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama_instansi">Nama Instansi / Perusahaan / Lembaga</label>
                                        <input id="nama_instansi" type="nama_instansi"
                                            class="form-control @error('nama_instansi'){{ 'is-invalid' }}@enderror"
                                            name="nama_instansi" value="{{ old('nama_instansi') ?? '' }}">
                                        @error('nama_instansi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_pemohon">Nama Pemohon</label>
                                        <input id="nama_pemohon" type="nama_pemohon"
                                            class="form-control @error('nama_pemohon'){{ 'is-invalid' }}@enderror"
                                            name="nama_pemohon" value="{{ old('nama_pemohon') ?? '' }}">
                                        @error('nama_pemohon')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat_instansi" class="control-label">Alamat Instansi</label>
                                        <textarea id="alamat_instansi"
                                            class="form-control @error('alamat_instansi'){{ 'is-invalid' }}@enderror"
                                            name="alamat_instansi">{{ old('alamat_instansi') ?? '' }}</textarea>
                                        @error('alamat_instansi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_pelaksanaan_pemeriksaan" class="control-label">Tanggal
                                            Pelaksanaan Pemeriksaan</label>
                                        <input id="tanggal_pelaksanaan_pemeriksaan" type="Date"
                                            class="form-control @error('tanggal_pelaksanaan_pemeriksaan'){{ 'is-invalid' }}@enderror"
                                            name="tanggal_pelaksanaan_pemeriksaan">
                                        @error('tanggal_pelaksanaan_pemeriksaan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="waktu_pelaksanaan_pemeriksaan" class="control-label">Waktu Pelaksanaan
                                            Pemeriksaan</label>
                                        <input id="waktu_pelaksanaan_pemeriksaan" type="time"
                                            class="form-control @error('waktu_pelaksanaan_pemeriksaan'){{ 'is-invalid' }}@enderror"
                                            name="waktu_pelaksanaan_pemeriksaan">
                                        @error('waktu_pelaksanaan_pemeriksaan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="contact_person">Contact Person</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">+62</span>
                                            </div>
                                            <input id="contact_person" type="number"
                                                class="form-control @error('contact_person'){{ 'is-invalid' }}@enderror"
                                                name="contact_person" value="{{ old('contact_person') ?? '' }}">
                                            @error('contact_person')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah_peserta_laki">Jumlah Peserta Laki-Laki</label>
                                        <div class="input-group">
                                            <input id="jumlah_peserta_laki" type="number"
                                                class="form-control @error('jumlah_peserta_laki'){{ 'is-invalid' }}@enderror"
                                                name="jumlah_peserta_laki" value="{{ old('jumlah_peserta_laki') ?? '' }}">
                                            @error('jumlah_peserta_laki')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah_peserta_perempuan">Jumlah Peserta Perempuan</label>
                                        <div class="input-group">
                                            <input id="jumlah_peserta_perempuan" type="number"
                                                class="form-control @error('jumlah_peserta_perempuan'){{ 'is-invalid' }}@enderror"
                                                name="jumlah_peserta_perempuan"
                                                value="{{ old('jumlah_peserta_perempuan') ?? '' }}">
                                            @error('jumlah_peserta_perempuan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="lokasi_pemeriksaan" class="control-label">Lokasi Pemeriksaan</label>
                                        <textarea id="lokasi_pemeriksaan"
                                            class="form-control @error('lokasi_pemeriksaan'){{ 'is-invalid' }}@enderror"
                                            name="lokasi_pemeriksaan">{{ old('lokasi_pemeriksaan') ?? '' }}</textarea>
                                        @error('lokasi_pemeriksaan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Simpan
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
