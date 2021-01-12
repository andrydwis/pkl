@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Data Pengaduan</h1>
</div>
<div class="section-body">
    <div class="card card-primary">
        <div class="card-header flex-row justify-content-between">
            <h4>Edit data</h4>
            <a href="{{route('data-pengaduan.index')}}" class="btn btn-primary">Kembali</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('data-pengaduan.update', ['pengaduan' => $pengaduan])}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="nomer_ktp">Nomer KTP / NIK</label>
                    <input id="nomer_ktp" type="number" class="form-control @error('nomer_ktp'){{'is-invalid'}}@enderror" name="nomer_ktp" value="{{old('nomer_ktp') ?? $pengaduan->nomer_ktp}}" autofocus>
                    @error('nomer_ktp')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input id="nama_lengkap" type="text" class="form-control @error('nama_lengkap'){{'is-invalid'}}@enderror" name="nama_lengkap" value="{{old('nama_lengkap') ?? $pengaduan->nama_lengkap}}">
                    @error('nama_lengkap')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="ttl">Tanggal Lahir</label>
                    <input id="ttl" type="date" class="form-control @error('ttl'){{'is-invalid'}}@enderror" name="ttl" value="{{old('ttl') ?? $pengaduan->ttl}}">
                    @error('ttl')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control @error('alamat'){{'is-invalid'}}@enderror">{{old('alamat') ?? $pengaduan->alamat}}</textarea>
                    @error('alamat')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input id="telepon" type="number" class="form-control @error('telepon'){{'is-invalid'}}@enderror" name="telepon" value="{{old('telepon') ?? $pengaduan->telepon}}">
                    @error('telepon')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input id="pekerjaan" type="text" class="form-control @error('pekerjaan'){{'is-invalid'}}@enderror" name="pekerjaan" value="{{old('pekerjaan') ?? $pengaduan->pekerjaan}}">
                    @error('pekerjaan')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal_kejadian">Tanggal Kejadian</label>
                    <input id="tanggal_kejadian" type="date" class="form-control @error('tanggal_kejadian'){{'is-invalid'}}@enderror" name="tanggal_kejadian" value="{{old('tanggal_kejadian') ?? $pengaduan->tanggal_kejadian}}">
                    @error('tanggal_kejadian')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="waktu_kejadian">Waktu Kejadian</label>
                    <input id="waktu_kejadian" type="time" class="form-control @error('waktu_kejadian'){{'is-invalid'}}@enderror" name="waktu_kejadian" value="{{old('waktu_kejadian') ?? $pengaduan->waktu_kejadian}}">
                    @error('waktu_kejadian')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select name="kategori" id="kategori" class="form-control @error('kategori'){{'is-invalid'}}@enderror">
                        <option value="" @if(old('kategori')==null){{'selected'}}@endif disabled>-- Pilih Kategori --</option>
                        <option value="masyarakat" @if(old('kategori')=='masyarakat' ){{'selected'}}@elseif($pengaduan->kategori=='masyarakat'){{'selected'}}@endif>Masyarakat</option>
                        <option value="pemerintah" @if(old('kategori')=='pemerintah' ){{'selected'}}@elseif($pengaduan->kategori=='pemerintah'){{'selected'}}@endif>Pemerintah</option>
                        <option value="swasta" @if(old('kategori')=='swasta' ){{'selected'}}@elseif($pengaduan->kategori=='swasta'){{'selected'}}@endif>Swasta</option>
                        <option value="pendidikan" @if(old('kategori')=='pendidikan' ){{'selected'}}@elseif($pengaduan->kategori=='pendidikan'){{'selected'}}@endif>Pendidikan</option>
                    </select>
                    @error('kategori')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="isi_pengaduan">Isi Pengaduan</label>
                    <textarea name="isi_pengaduan" id="isi_pengaduan" class="form-control @error('isi_pengaduan'){{'is-invalid'}}@enderror">{{old('isi_pengaduan') ?? $pengaduan->isi_pengaduan}}</textarea>
                    @error('isi_pengaduan')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="foto_bukti_kejadian">Foto / Bukti Kejadian</label>
                    @if($pengaduan->foto_bukti_kejadian)
                    <br>
                    <img src="{{asset('storage/'.$pengaduan->foto_bukti_kejadian)}}" alt="" class="rounded mx-auto d-block img-fluid img-thumbnail">
                    @else
                    <div class="alert alert-dark show fade">
                        <div class="alert-body">
                            Foto bukti kejadian tidak dicantumkan
                        </div>
                    </div>
                    @endif
                    <input id="foto_bukti_kejadian" type="file" class="form-control @error('foto_bukti_kejadian'){{'is-invalid'}}@enderror" name="foto_bukti_kejadian">
                    @error('foto_bukti_kejadian')
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