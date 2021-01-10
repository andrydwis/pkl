@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Data SKHPN</h1>
</div>
@include('layouts.alert')
<div class="section-body">
    <div class="card card-primary">
        <div class="card-header flex-row justify-content-between">
            <h4>Edit data</h4>
            <a href="{{route('data-skhpn.index')}}" class="btn btn-primary">Kembali</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('data-skhpn.update', ['skhpn' => $skhpn])}}">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="nomer_ktp">Nomer KTP / NIK</label>
                    <input id="nomer_ktp" type="number" class="form-control @error('nomer_ktp'){{'is-invalid'}}@enderror" name="nomer_ktp" value="{{old('nomer_ktp') ?? $skhpn->nomer_ktp}}" autofocus>
                    @error('nomer_ktp')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input id="nama_lengkap" type="text" class="form-control @error('nama_lengkap'){{'is-invalid'}}@enderror" name="nama_lengkap" value="{{old('nama_lengkap') ?? $skhpn->nama_lengkap}}">
                    @error('nama_lengkap')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input id="tempat_lahir" type="text" class="form-control @error('tempat_lahir'){{'is-invalid'}}@enderror" name="tempat_lahir" value="{{old('tempat_lahir') ?? $skhpn->tempat_lahir}}">
                    @error('tempat_lahir')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="ttl">Tanggal Lahir</label>
                    <input id="ttl" type="text" class="form-control @error('ttl'){{'is-invalid'}}@enderror" name="ttl" value="{{old('ttl') ?? $skhpn->ttl}}">
                    @error('ttl')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control @error('jenis_kelamin'){{'is-invalid'}}@enderror">
                        <option value="" @if(old('jenis_kelamin')==null){{'selected'}}@endif disabled>-- Jenis Kelamin --</option>
                        <option value="laki-laki" @if(old('jenis_kelamin')=='laki-laki' ){{'selected'}}@elseif($skhpn->jenis_kelamin=='laki-laki'){{'selected'}}@endif>Laki - Laki</option>
                        <option value="perempuan" @if(old('jenis_kelamin')=='perempuan' ){{'selected'}}@elseif($skhpn->jenis_kelamin=='perempuan'){{'selected'}}@endif>Perempuan</option>
                    </select>
                    @error('jenis_kelamin')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control @error('alamat'){{'is-invalid'}}@enderror">{{old('alamat') ?? $skhpn->alamat}}</textarea>
                    @error('alamat')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input id="telepon" type="number" class="form-control @error('telepon'){{'is-invalid'}}@enderror" name="telepon" value="{{old('telepon') ?? $skhpn->telepon}}">
                    @error('telepon')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input id="pekerjaan" type="text" class="form-control @error('pekerjaan'){{'is-invalid'}}@enderror" name="pekerjaan" value="{{old('pekerjaan') ?? $skhpn->pekerjaan}}">
                    @error('pekerjaan')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal_permohonan">Tanggal Permohonan</label>
                    <input id="tanggal_permohonan" type="date" class="form-control @error('tanggal_permohonan'){{'is-invalid'}}@enderror" name="tanggal_permohonan" value="{{old('tanggal_permohonan') ?? $skhpn->tanggal_permohonan}}">
                    @error('tanggal_permohonan')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="keperluan">Keperluan</label>
                    <textarea name="keperluan" id="keperluan" class="form-control @error('keperluan'){{'is-invalid'}}@enderror">{{old('keperluan') ?? $skhpn->keperluan}}</textarea>
                    @error('keperluan')
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