@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Data Sosialisasi</h1>
</div>
<div class="section-body">
    <div class="card card-primary">
        <div class="card-header flex-row justify-content-between">
            <h4>Edit data</h4>
            <a href="{{route('data-sosialisasi.index')}}" class="btn btn-primary">Kembali</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('data-sosialisasi.update', ['sosialisasi' => $sosialisasi])}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select name="kategori" id="kategori" class="form-control @error('kategori'){{'is-invalid'}}@enderror">
                        <option value="" @if(old('kategori')==null){{'selected'}}@endif disabled>-- Pilih Kategori --</option>
                        <option value="masyarakat" @if(old('kategori')=='masyarakat' ){{'selected'}}@elseif($sosialisasi->kategori=='masyarakat'){{'selected'}}@endif>Masyarakat</option>
                        <option value="pemerintah" @if(old('kategori')=='pemerintah' ){{'selected'}}@elseif($sosialisasi->kategori=='pemerintah'){{'selected'}}@endif>Pemerintah</option>
                        <option value="swasta" @if(old('kategori')=='swasta' ){{'selected'}}@elseif($sosialisasi->kategori=='swasta'){{'selected'}}@endif>Swasta</option>
                        <option value="pendidikan" @if(old('kategori')=='pendidikan' ){{'selected'}}@elseif($sosialisasi->kategori=='pendidikan'){{'selected'}}@endif>Pendidikan</option>
                    </select>
                    @error('kategori')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama_penyelenggara">Nama Penyelenggara</label>
                    <input id="nama_penyelenggara" type="text" class="form-control @error('nama_penyelenggara'){{'is-invalid'}}@enderror" name="nama_penyelenggara" value="{{old('nama_penyelenggara') ?? $sosialisasi->nama_penyelenggara}}">
                    @error('nama_penyelenggara')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input id="tanggal" type="date" class="form-control @error('tanggal'){{'is-invalid'}}@enderror" name="tanggal" value="{{old('tanggal') ?? $sosialisasi->tanggal}}">
                    @error('tanggal')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jam_pukul">Jam Pukul</label>
                    <input id="jam_pukul" type="time" class="form-control @error('jam_pukul'){{'is-invalid'}}@enderror" name="jam_pukul" value="{{old('jam_pukul') ?? $sosialisasi->jam_pukul}}">
                    @error('jam_pukul')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tempat">Tempat</label>
                    <textarea name="tempat" id="tempat" class="form-control @error('tempat'){{'is-invalid'}}@enderror">{{old('tempat') ?? $sosialisasi->tempat}}</textarea>
                    @error('tempat')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama_pemohon">Nama Pemohon</label>
                    <input id="nama_pemohon" type="text" class="form-control @error('nama_pemohon'){{'is-invalid'}}@enderror" name="nama_pemohon" value="{{old('nama_pemohon') ?? $sosialisasi->nama_pemohon}}">
                    @error('nama_pemohon')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="no_hp_pemohon">No Hp Pemohon</label>
                    <input id="no_hp_pemohon" type="number" class="form-control @error('no_hp_pemohon'){{'is-invalid'}}@enderror" name="no_hp_pemohon" value="{{old('no_hp_pemohon') ?? $sosialisasi->no_hp_pemohon}}">
                    @error('no_hp_pemohon')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jumlah_peserta">Jumlah Peserta</label>
                    <div class="input-group">
                        <input id="jumlah_peserta" type="number" class="form-control @error('jumlah_peserta'){{ 'is-invalid' }}@enderror" name="jumlah_peserta" value="{{ old('jumlah_peserta') ?? $sosialisasi->jumlah_peserta }}">
                        @error('jumlah_peserta')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="tema_kegiatan">Tema Kegiatan</label>
                    <textarea name="tema_kegiatan" id="tema_kegiatan" class="form-control @error('tema_kegiatan'){{'is-invalid'}}@enderror">{{old('tema_kegiatan') ?? $sosialisasi->tema_kegiatan}}</textarea>
                    @error('tema_kegiatan')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="lampiran_surat_undangan">Lampiran Surat Undangan</label>
                    @if($sosialisasi->lampiran_surat_undangan)
                    <br>
                    <img src="{{asset('storage/'.$sosialisasi->lampiran_surat_undangan)}}" alt="" class="rounded mx-auto d-block img-fluid img-thumbnail">
                    @else
                    <div class="alert alert-dark show fade">
                        <div class="alert-body">
                            Lampiran Surat Undangan tidak dicantumkan
                        </div>
                    </div>
                    @endif
                    <input id="lampiran_surat_undangan" type="file" class="form-control @error('lampiran_surat_undangan'){{'is-invalid'}}@enderror" name="lampiran_surat_undangan">
                    @error('lampiran_surat_undangan')
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