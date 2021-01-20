@extends('layouts.user')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center"
        style="background-image:url({{ asset('assets/img/gedung-bnn.png') }}); background-repeat:no-repeat; background-size: cover; background-position: center;">
        <div class="container d-flex justify-content-center">
            <h1>Form Sosialisasi</h1>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <section id="form" class="d-flex justify-content-center">
            <div class="container">
                @include('layouts.alert')
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-8">
                        <div class="card card-primary">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('sosialisasi.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="kategori">Kategori</label>
                                        <select name="kategori" id="kategori"
                                            class="form-control @error('kategori'){{ 'is-invalid' }}@enderror"
                                            name="kategori" value="{{ old('kategori') ?? '' }}" autofocus>
                                            <option selected="true" disabled="disabled">-- Pilih Kategori --</option>
                                            <option value="masyarakat">Masyarakat</option>
                                            <option value="pemerintah">Pemerintah</option>
                                            <option value="swasta">Swasta</option>
                                            <option value="pendidikan">Pendidikan</option>
                                        </select>
                                        @error('kategori')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_penyelenggara">Nama Penyelenggara</label>
                                        <input id="nama_penyelenggara" type="text"
                                            class="form-control @error('nama_penyelenggara'){{ 'is-invalid' }}@enderror"
                                            name="nama_penyelenggara" value="{{ old('nama_penyelenggara') ?? '' }}">
                                        @error('nama_penyelenggara')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal" class="control-label">Tanggal</label>
                                        <input id="tanggal" type="date"
                                            class="form-control @error('tanggal'){{ 'is-invalid' }}@enderror"
                                            name="tanggal">
                                        @error('tanggal')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="jam_pukul" class="control-label">Jam / Pukul</label>
                                        <input id="jam_pukul" type="time"
                                            class="form-control @error('jam_pukul'){{ 'is-invalid' }}@enderror"
                                            name="jam_pukul">
                                        @error('jam_pukul')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat" class="control-label">Tempat</label>
                                        <textarea id="tempat"
                                            class="form-control @error('tempat'){{ 'is-invalid' }}@enderror"
                                            name="tempat">{{ old('tempat') ?? '' }}</textarea>
                                        @error('tempat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_pemohon" class="control-label">Nama Pemohon</label>
                                        <input id="nama_pemohon" type="text"
                                            class="form-control @error('nama_pemohon'){{ 'is-invalid' }}@enderror"
                                            name="nama_pemohon">
                                        @error('nama_pemohon')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="no_hp_pemohon">No Hp Pemohon</label>
                                        <input id="no_hp_pemohon" type="number"
                                            class="form-control @error('no_hp_pemohon'){{ 'is-invalid' }}@enderror"
                                            name="no_hp_pemohon" value="{{ old('no_hp_pemohon') ?? '' }}">
                                        @error('no_hp_pemohon')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah_peserta">Jumlah Peserta</label>
                                        <div class="input-group">
                                            <input id="jumlah_peserta" type="number"
                                                class="form-control @error('jumlah_peserta'){{ 'is-invalid' }}@enderror"
                                                name="jumlah_peserta" value="{{ old('jumlah_peserta') ?? '' }}">
                                            @error('jumlah_peserta')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tema_kegiatan" class="control-label">Tema Kegiatan</label>
                                        <textarea id="tema_kegiatan"
                                            class="form-control @error('tema_kegiatan'){{ 'is-invalid' }}@enderror"
                                            name="tema_kegiatan">{{ old('tema_kegiatan') ?? '' }}</textarea>
                                        @error('tema_kegiatan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="lampiran_surat_undangan">Lampiran Surat Undangan</label>
                                        <input id="lampiran_surat_undangan" type="file"
                                            class="form-control @error('lampiran_surat_undangan'){{ 'is-invalid' }}@enderror"
                                            name="lampiran_surat_undangan">
                                        @error('lampiran_surat_undangan')
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
