@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Data Sosialisasi</h1>
</div>
<div class="section-body">

    <div class="card card-primary">
        <div class="card-header flex-row justify-content-between">
            <h4>Detail data</h4>
            <a href="{{route('data-sosialisasi.index')}}" class="btn btn-primary">Kembali</a>
        </div>
        <div class="card-body">
            <form method="" action="" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input id="kategori" type="text" class="form-control" name="kategori" value="{{$sosialisasi->kategori}}" readonly>
                </div>
                <div class="form-group">
                    <label for="nama_penyelenggara">Nama Penyelenggara</label>
                    <input id="nama_penyelenggara" type="text" class="form-control" name="nama_penyelenggara" value="{{$sosialisasi->nama_penyelenggara}}" readonly>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input id="tanggal" type="text" class="form-control" name="tanggal" value="{{ date('d-m-Y', strtotime($sosialisasi->tangal)) }}" readonly>
                </div>
                <div class="form-group">
                    <label for="jam_pukul">Jam Pukul</label>
                    <input id="jam_pukul" type="text" class="form-control" name="jam_pukul" value="{{$sosialisasi->jam_pukul}}" readonly>
                </div>
                <div class="form-group">
                    <label for="nama_pemohon">Nama Pemohon</label>
                    <input id="nama_pemohon" type="text" class="form-control" name="nama_pemohon" value="{{$sosialisasi->nama_pemohon}}" readonly>
                </div>
                <div class="form-group">
                    <label for="no_hp_pemohon">No HP Pemohon</label>
                    <input id="no_hp_pemohon" type="number" class="form-control" name="no_hp_pemohon" value="{{$sosialisasi->no_hp_pemohon}}" readonly>
                </div>
                <div class="form-group">
                    <label for="jumlah_peserta">Jumlah Peserta</label>
                    <input id="jumlah_peserta" type="number" class="form-control" name="jumlah_peserta" value="{{$sosialisasi->jumlah_peserta}}" readonly>
                </div>
                <div class="form-group">
                    <label for="tema_kegiatan">Tema Kegiatan</label>
                    <textarea id="tema_kegiatan" type="text" class="form-control" name="tema_kegiatan" readonly>{{$sosialisasi->tema_kegiatan}}</textarea>
                </div>
                <div class="form-group">
                    <label for="lampiran_surat_permohonan">Lampiran Surat Permohonan</label>
                    @if($sosialisasi->lampiran_surat_permohonan)
                    <br>
                    <a href="{{asset('storage/'.$sosialisasi->lampiran_surat_permohonan)}}" class="btn btn-primary btn-icon"><i class="fas fa-download"></i> Download</a> 
                    @else
                    <div class="alert alert-dark show fade">
                        <div class="alert-body">
                            Lampiran surat permohonan tidak dicantumkan
                        </div>
                    </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection