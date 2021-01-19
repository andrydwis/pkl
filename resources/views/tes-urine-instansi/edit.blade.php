@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Data Permohonan Tes Urine Instansi</h1>
</div>
<div class="section-body">
    <div class="card card-primary">
        <div class="card-header flex-row justify-content-between">
            <h4>Edit data</h4>
            <a href="{{route('data-permohonan-tes-urine-instansi.index')}}" class="btn btn-primary">Kembali</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('data-permohonan-tes-urine-instansi.update', ['tesUrineInstansi' => $tes_urine_instansi])}}">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="nama_instansi">Nama Instansi</label>
                    <input id="nama_instansi" type="text" class="form-control @error('nama_instansi'){{'is-invalid'}}@enderror" name="nama_instansi" value="{{old('nama_instansi') ?? $tes_urine_instansi->nama_instansi}}">
                    @error('nama_instansi')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama_pemohon">Nama Pemohon</label>
                    <input id="nama_pemohon" type="text" class="form-control @error('nama_pemohon'){{'is-invalid'}}@enderror" name="nama_pemohon" value="{{old('nama_pemohon') ?? $tes_urine_instansi->nama_pemohon}}">
                    @error('nama_pemohon')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamat_instansi">Alamat Instansi</label>
                    <textarea name="alamat_instansi" id="alamat_instansi" class="form-control @error('alamat_instansi'){{'is-invalid'}}@enderror">{{old('alamat_instansi') ?? $tes_urine_instansi->alamat_instansi}}</textarea>
                    @error('alamat_instansi')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal_pelaksanaan_pemeriksaan">Tanggal Pelaksanaan Pemeriksaan</label>
                    <input id="tanggal_pelaksanaan_pemeriksaan" type="text" class="form-control @error('tanggal_pelaksanaan_pemeriksaan'){{'is-invalid'}}@enderror" name="tanggal_pelaksanaan_pemeriksaan" value="{{old('tanggal_pelaksanaan_pemeriksaan') ?? $tes_urine_instansi->tanggal_pelaksanaan_pemeriksaan}}">
                    @error('tanggal_pelaksanaan_pemeriksaan')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="waktu_pelaksanaan_pemeriksaan">Waktu Pelaksanaan Pemeriksaan</label>
                    <input id="waktu_pelaksanaan_pemeriksaan" type="time" class="form-control @error('waktu_pelaksanaan_pemeriksaan'){{'is-invalid'}}@enderror" name="waktu_pelaksanaan_pemeriksaan" value="{{old('waktu_pelaksanaan_pemeriksaan') ?? $tes_urine_instansi->waktu_pelaksanaan_pemeriksaan}}">
                    @error('waktu_pelaksanaan_pemeriksaan')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="contact_person">Contact Person</label>
                    <input id="contact_person" type="text" class="form-control @error('contact_person'){{'is-invalid'}}@enderror" name="contact_person" value="{{old('contact_person') ?? $tes_urine_instansi->contact_person}}">
                    @error('contact_person')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jumlah_peserta_laki">Jumlah Peserta Laki-Laki</label>
                    <input id="jumlah_peserta_laki" type="number" class="form-control @error('jumlah_peserta_laki'){{'is-invalid'}}@enderror" name="jumlah_peserta_laki" value="{{old('jumlah_peserta_laki') ?? $tes_urine_instansi->jumlah_peserta_laki}}">
                    @error('jumlah_peserta_laki')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jumlah_peserta_perempuan">Jumlah Peserta Perempuan</label>
                    <input id="jumlah_peserta_perempuan" type="number" class="form-control @error('jumlah_peserta_perempuan'){{'is-invalid'}}@enderror" name="jumlah_peserta_perempuan" value="{{old('jumlah_peserta_perempuan') ?? $tes_urine_instansi->jumlah_peserta_perempuan}}">
                    @error('jumlah_peserta_perempuan')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="lokasi_pemeriksaan">Lokasi Pemeriksaan</label>
                    <textarea name="lokasi_pemeriksaan" id="lokasi_pemeriksaan" class="form-control @error('lokasi_pemeriksaan'){{'is-invalid'}}@enderror">{{old('lokasi_pemeriksaan') ?? $tes_urine_instansi->lokasi_pemeriksaan}}</textarea>
                    @error('lokasi_pemeriksaan')
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