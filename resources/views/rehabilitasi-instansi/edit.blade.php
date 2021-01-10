@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Data Rehabilitasi Instansi</h1>
</div>
@include('layouts.alert')
<div class="section-body">
    <div class="card card-primary">
        <div class="card-header flex-row justify-content-between">
            <h4>Edit data</h4>
            <a href="{{route('data-rehabilitasi-instansi.index')}}" class="btn btn-primary">Kembali</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('data-rehabilitasi-instansi.update', ['rehabilitasiInstansi' => $rehabilitasi])}}">
                @csrf
                @method('PATCH')                
                <div class="form-group">
                    <label for="nama_lengkap_pelapor">Nama Lengkap Pelapor</label>
                    <input id="nama_lengkap_pelapor" type="text" class="form-control @error('nama_lengkap_pelapor'){{'is-invalid'}}@enderror" name="nama_lengkap_pelapor" value="{{old('nama_lengkap_pelapor') ?? $rehabilitasi->nama_lengkap_pelapor}}">
                    @error('nama_lengkap_pelapor')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama_instansi">Nama Instansi</label>
                    <input id="nama_instansi" type="text" class="form-control @error('nama_instansi'){{'is-invalid'}}@enderror" name="nama_instansi" value="{{old('nama_instansi') ?? $rehabilitasi->nama_instansi}}">
                    @error('nama_instansi')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamat_instansi">Alamat Instansi</label>
                    <textarea name="alamat_instansi" id="alamat_instansi" class="form-control @error('alamat_instansi'){{'is-invalid'}}@enderror">{{old('alamat_instansi') ?? $rehabilitasi->alamat_instansi}}</textarea>
                    @error('alamat_instansi')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nomor_telepon">Nomor Telepon</label>
                    <input id="nomor_telepon" type="number" class="form-control @error('nomor_telepon'){{'is-invalid'}}@enderror" name="nomor_telepon" value="{{old('nomor_telepon') ?? $rehabilitasi->nomor_telepon}}">
                    @error('nomor_telepon')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jenis_penyalahgunaan">Jenis Penyalahgunaan</label>
                    <input id="jenis_penyalahgunaan" type="text" class="form-control @error('jenis_penyalahgunaan'){{'is-invalid'}}@enderror" name="jenis_penyalahgunaan" value="{{old('jenis_penyalahgunaan') ?? $rehabilitasi->jenis_penyalahgunaan}}">
                    @error('jenis_penyalahgunaan')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jumlah_yang_dicurigai">Jumlah Yang Dicurigai</label>
                    <input id="jumlah_yang_dicurigai" type="number" class="form-control @error('jumlah_yang_dicurigai'){{'is-invalid'}}@enderror" name="jumlah_yang_dicurigai" value="{{old('jumlah_yang_dicurigai') ?? $rehabilitasi->jumlah_yang_dicurigai}}" >
                    @error('jumlah_yang_dicurigai')
                    <div class="invalid-feedback">
                        {{$message}}
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
@endsection