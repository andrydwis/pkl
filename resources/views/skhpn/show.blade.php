@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Data SKHPN</h1>
</div>
@include('layouts.alert')
<div class="section-body">
    <div class="card card-primary">
        <div class="card-header flex-row justify-content-between">
            <h4>Detail data</h4>
            <a href="{{route('data-skhpn.index')}}" class="btn btn-primary">Kembali</a>
        </div>
        <div class="card-body">
            <form method="" action="" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nomer_ktp">Nomer KTP / NIK</label>
                    <input id="nomer_ktp" type="number" class="form-control" name="nomer_ktp" value="{{$skhpn->nomer_ktp}}" readonly>
                </div>
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input id="nama_lengkap" type="text" class="form-control" name="nama_lengkap" value="{{$skhpn->nama_lengkap}}" readonly>
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input id="tempat_lahir" type="text" class="form-control" name="tempat_lahir" value="{{$skhpn->tempat_lahir}}" readonly>
                </div>
                <div class="form-group">
                    <label for="ttl">Tanggal Lahir</label>
                    <input id="ttl" type="text" class="form-control" name="ttl" value="{{ date('d-m-Y', strtotime($skhpn->ttl)) }}" readonly>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <input id="jenis_kelamin" type="text" class="form-control" name="jenis_kelamin" value="{{$skhpn->jenis_kelamin}}" readonly>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" readonly>{{$skhpn->alamat}}</textarea>
                </div>
                <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input id="telepon" type="number" class="form-control" name="telepon" value="{{$skhpn->telepon}}" readonly>
                </div>
                <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input id="pekerjaan" type="text" class="form-control" name="pekerjaan" value="{{$skhpn->pekerjaan}}" readonly>
                </div>
                <div class="form-group">
                    <label for="tanggal_permohonan">Tanggal Permohonan</label>
                    <input id="tanggal_permohonan" type="text" class="form-control" name="tanggal_permohonan" value="{{ date('d-m-Y', strtotime($skhpn->tanggal_permohonan)) }}" readonly>
                </div>
                <div class="form-group">
                    <label for="keperluan">Keperluan</label>
                    <textarea name="keperluan" id="keperluan" class="form-control" readonly>{{$skhpn->keperluan}}</textarea>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection