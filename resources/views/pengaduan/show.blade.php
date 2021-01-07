@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Data Pengaduan</h1>
</div>
@include('layouts.alert')
<div class="section-body">
    <div class="card card-primary">
        <div class="card-header flex-row justify-content-between">
            <h4>Detail data</h4>
            <a href="{{route('data-pengaduan.index')}}" class="btn btn-primary">Kembali</a>
        </div>
        <div class="card-body">
            <form method="" action="" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nomer_ktp">Nomer KTP / NIK</label>
                    <input id="nomer_ktp" type="number" class="form-control" name="nomer_ktp" value="{{$pengaduan->nomer_ktp}}" readonly>
                </div>
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input id="nama_lengkap" type="text" class="form-control" name="nama_lengkap" value="{{$pengaduan->nama_lengkap}}" readonly>
                </div>
                <div class="form-group">
                    <label for="ttl">Tanggal Lahir</label>
                    <input id="ttl" type="date" class="form-control" name="ttl" value="{{$pengaduan->ttl}}" readonly>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input id="alamat" type="text" class="form-control" name="alamat" value="{{$pengaduan->alamat}}" readonly>
                </div>
                <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input id="telepon" type="number" class="form-control" name="telepon" value="{{$pengaduan->telepon}}" readonly>
                </div>
                <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input id="pekerjaan" type="text" class="form-control" name="pekerjaan" value="{{$pengaduan->pekerjaan}}" readonly>
                </div>
                <div class="form-group">
                    <label for="tanggal_kejadian">Tanggal Kejadian</label>
                    <input id="tanggal_kejadian" type="date" class="form-control" name="tanggal_kejadian" value="{{$pengaduan->tanggal_kejadian}}" readonly>
                </div>
                <div class="form-group">
                    <label for="waktu_kejadian">Waktu Kejadian</label>
                    <input id="waktu_kejadian" type="time" class="form-control" name="waktu_kejadian" value="{{$pengaduan->waktu_kejadian}}" readonly>
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input id="kategori" type="text" class="form-control" name="kategori" value="{{$pengaduan->kategori}}" readonly>
                </div>
                <div class="form-group">
                    <label for="isi_pengaduan">Isi Pengaduan</label>
                    <textarea name="isi_pengaduan" id="isi_pengaduan" cols="30" rows="5" class="form-control" readonly>{{$pengaduan->isi_pengaduan}}</textarea>
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
                </div>
            </form>
        </div>
    </div>
</div>
@endsection