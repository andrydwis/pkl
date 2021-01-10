@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Data Rhabilitasi Instansi</h1>
</div>
@include('layouts.alert')
<div class="section-body">
    <div class="card card-primary">
        <div class="card-header flex-row justify-content-between">
            <h4>Detail data</h4>
            <a href="{{route('data-rehabilitasi-instansi.index')}}" class="btn btn-primary">Kembali</a>
        </div>
        <div class="card-body">
            <form method="" action="" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama_lengkap_pelapor">Nama Lengkap Pelapor</label>
                    <input id="nama_lengkap_pelapor" type="text" class="form-control" name="nama_lengkap_pelapor" value="{{$rehabilitasi->nama_lengkap_pelapor}}" readonly>
                </div>
                <div class="form-group">
                    <label for="nama_instansi">Nama Instansi</label>
                    <input id="nama_instansi" type="text" class="form-control" name="nama_instansi" value="{{$rehabilitasi->nama_instansi}}" readonly>
                </div>                
                <div class="form-group">
                    <label for="alamat_instansi">Alamat Instansi</label>
                    <textarea name="alamat_instansi" id="alamat_instansi" class="form-control" readonly>{{$rehabilitasi->alamat_instansi}}</textarea>
                </div>

                <div class="form-group">
                    <label for="nomor_telepon">Nomor Telepon</label>
                    <input id="nomor_telepon" type="number" class="form-control" name="nomor_telepon" value="{{$rehabilitasi->nomor_telepon}}" readonly>
                </div>
                <div class="form-group">
                    <label for="jumlah_yang_dicurigai">Jumlah Yang Dicurigai</label>
                    <input id="jumlah_yang_dicurigai" type="number" class="form-control" name="jumlah_yang_dicurigai" value="{{$rehabilitasi->jumlah_yang_dicurigai}}" readonly>
                </div>
                <div class="form-group">
                    <label for="jenis_penyalahgunaan">Jenis Penyalahgunaan</label>
                    <input id="jenis_penyalahgunaan" type="text" class="form-control" name="jenis_penyalahgunaan" value="{{$rehabilitasi->jenis_penyalahgunaan}}" readonly>
                </div>     
            </form>
        </div>
    </div>
</div>
@endsection