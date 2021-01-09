@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Data Rhabilitasi Pribadi</h1>
</div>
@include('layouts.alert')
<div class="section-body">
    <div class="card card-primary">
        <div class="card-header flex-row justify-content-between">
            <h4>Detail data</h4>
            <a href="{{route('data-rehabilitasi-pribadi.index')}}" class="btn btn-primary">Kembali</a>
        </div>
        <div class="card-body">
            <form method="" action="" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nomer_ktp">Nomer KTP / NIK</label>
                    <input id="nomer_ktp" type="number" class="form-control" name="nomer_ktp" value="{{$rehabilitasi->nomer_ktp}}" readonly>
                </div>
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input id="nama_lengkap" type="text" class="form-control" name="nama_lengkap" value="{{$rehabilitasi->nama_lengkap}}" readonly>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input id="alamat" type="text" class="form-control" name="alamat" value="{{$rehabilitasi->alamat}}" readonly>
                </div>
                <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input id="telepon" type="number" class="form-control" name="telepon" value="{{$rehabilitasi->telepon}}" readonly>
                </div>
                <div class="form-group">
                    <label for="jenis_penyalahgunaan">Jenis Penyalahgunaan</label>
                    <input id="jenis_penyalahgunaan" type="text" class="form-control" name="jenis_penyalahgunaan" value="{{$rehabilitasi->jenis_penyalahgunaan}}" readonly>
                </div>
                <div class="form-group">
                    <label for="hubungan_dengan_penyalahguna">Hubungan Dengan Penyalahguna</label>
                    <input id="hubungan_dengan_penyalahguna" type="text" class="form-control" name="hubungan_dengan_penyalahguna" value="{{$rehabilitasi->hubungan_dengan_penyalahguna}}" readonly>
                </div>
                <div class="form-group">
                    <label for="rencana_kedatangan_ke_klinik">Rencana Kedatangan Ke Klinik</label>
                    <input id="rencana_kedatangan_ke_klinik" type="text" class="form-control" name="rencana_kedatangan_ke_klinik" value="{{ date('d-m-Y', strtotime($rehabilitasi->rencana_kedatangan_ke_klinik)) }}" readonly>
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection