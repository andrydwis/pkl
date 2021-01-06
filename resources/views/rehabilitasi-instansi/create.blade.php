@extends('layouts.user')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center">
        <h1>Form Pengajuan Rehabilitasi Instansi</h1>
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
                            <form method="POST" action="{{route('rehabilitasi-instansi.store')}}">
                                @csrf                               
                                <div class="form-group">
                                    <label for="nama_lengkap_pelapor">Nama Lengkap Pengadu / Pelapor</label>
                                    <input id="nama_lengkap_pelapor" type="nama_lengkap_pelapor"
                                        class="form-control @error('nama_lengkap_pelapor'){{'is-invalid'}}@enderror"
                                        name="nama_lengkap_pelapor" value="{{old('nama_lengkap_pelapor') ?? ''}}">
                                    @error('nama_lengkap_pelapor')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nama_instansi">Nama Instansi</label>
                                    <input id="nama_instansi" type="nama_instansi"
                                        class="form-control @error('nama_instansi'){{'is-invalid'}}@enderror"
                                        name="nama_instansi" value="{{old('nama_instansi') ?? ''}}">
                                    @error('nama_instansi')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="alamat_instansi" class="control-label">Alamat Instansi</label>
                                    <textarea id="alamat_instansi" class="form-control @error('alamat_instansi'){{'is-invalid'}}@enderror" name="alamat_instansi">{{old('alamat_instansi') ?? ''}}</textarea>
                                    @error('alamat_instansi')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>                                                                                             
                                <div class="form-group">
                                    <label for="nomor_telepon">Nomor Telepon</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">+62</span>
                                        </div>
                                        <input id="nomor_telepon" type="number"
                                            class="form-control @error('nomor_telepon'){{'is-invalid'}}@enderror"
                                            name="nomor_telepon" value="{{old('nomor_telepon') ?? ''}}">
                                        @error('nomor_telepon')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_yang_dicurigai">Jumlah Yang Dicurigai</label>
                                    <div class="input-group">
                                        <input id="jumlah_yang_dicurigai" type="number"
                                            class="form-control @error('jumlah_yang_dicurigai'){{'is-invalid'}}@enderror"
                                            name="jumlah_yang_dicurigai" value="{{old('jumlah_yang_dicurigai') ?? ''}}">
                                        @error('jumlah_yang_dicurigai')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_penyalahgunaan" class="control-label">Jenis Penyalahgunaan</label>
                                    <textarea id="jenis_penyalahgunaan" class="form-control @error('jenis_penyalahgunaan'){{'is-invalid'}}@enderror" name="jenis_penyalahgunaan">{{old('jenis_penyalahgunaan') ?? ''}}</textarea>
                                    @error('jenis_penyalahgunaan')
                                    <div class="invalid-feedback">
                                        {{$message}}
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