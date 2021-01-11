@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Data Permohonan Tes Urine Instansi</h1>
</div>
@include('layouts.alert')
<div class="section-body">
    <div class="card card-primary">
        <div class="card-header flex-row justify-content-between">
            <h4>Detail data</h4>
            <a href="{{route('data-permohonan-tes-urine-instansi.index')}}" class="btn btn-primary">Kembali</a>
        </div>
        <div class="card-body">
            <form method="" action="" enctype="multipart/form-data">
                @csrf                
                <div class="form-group">
                    <label for="nama_instansi">Nama Instansi</label>
                    <input id="nama_instansi" type="text" class="form-control" name="nama_instansi" value="{{$tes_urine_instansi->nama_instansi}}" readonly>
                </div>                
                <div class="form-group">
                    <label for="nama_pemohon">Nama Pemohon</label>
                    <input id="nama_pemohon" type="text" class="form-control" name="nama_pemohon" value="{{$tes_urine_instansi->nama_pemohon}}" readonly>
                </div>
                <div class="form-group">
                    <label for="lokasi_pemeriksaan">Alamat Instansi</label>
                    <textarea name="lokasi_pemeriksaan" id="alamat_instansi" class="form-control" readonly>{{$tes_urine_instansi->alamat_instansi}}</textarea>
                </div>
                <div class="form-group">
                    <label for="contact_person">Contact Person</label>
                    <input id="contact_person" type="text" class="form-control" name="contact_person" value="{{$tes_urine_instansi->contact_person}}" readonly>
                </div>
                <div class="form-group">
                    <label for="tanggal_pelaksanaan_pemeriksaan">Tanggal Pelaksanaan</label>
                    <input id="tanggal_pelaksanaan_pemeriksaan" type="text" class="form-control" name="tanggal_pelaksanaan_pemeriksaan_pemeriksaan" value="{{ date('d-m-Y', strtotime($tes_urine_instansi->tanggal_pelaksanaan_pemeriksaan)) }}" readonly>
                </div>
                <div class="form-group">
                    <label for="waktu_pelaksanaan_pemeriksaan">Waktu Pemeriksaan</label>
                    <input id="waktu_pelaksanaan_pemeriksaan" type="time" class="form-control" name="waktu_pelaksanaan_pemeriksaan" value="{{$tes_urine_instansi->waktu_pelaksanaan_pemeriksaan}}" readonly>
                </div>                
                <div class="form-group">
                    <label for="jumlah_peserta_laki">Jumlah Peserta Laki-Laki</label>
                    <input id="jumlah_peserta_laki" type="number" class="form-control" name="jumlah_peserta_laki" value="{{$tes_urine_instansi->jumlah_peserta_laki}}" readonly>
                </div>
                <div class="form-group">
                    <label for="jumlah_peserta_perempuan">Jumlah Peserta Perempuan</label>
                    <input id="jumlah_peserta_perempuan" type="number" class="form-control" name="jumlah_peserta_perempuan" value="{{$tes_urine_instansi->jumlah_peserta_perempuan}}" readonly>
                </div>
                <div class="form-group">
                    <label for="lokasi_pemeriksaan">Lokasi Pemeriksaan</label>
                    <textarea name="lokasi_pemeriksaan" id="lokasi_pemeriksaan" class="form-control" readonly>{{$tes_urine_instansi->lokasi_pemeriksaan}}</textarea>
                </div>                
            </form>
        </div>
    </div>
</div>
@endsection