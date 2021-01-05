@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Data Pengaduan</h1>
</div>
@include('layouts.alert')
<div class="section-body">
    <div class="card card-primary">
        <div class="card-header flex-row justify-content-between">
            <h4>Pengaduan</h4>
            <a href="" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <table id="users" class="table table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomer KTP</th>
                        <th>Nama Lengkap</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Menu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pengaduans as $pengaduan)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$pengaduan->nomer_ktp}}</td>
                        <td>{{$pengaduan->nama_lengkap}}</td>
                        <td>{{$pengaduan->ttl}}</td>
                        <td>{{$pengaduan->alamat}}</td>
                        <td>{{$pengaduan->telepon}}</td>
                        <td>
                            <button class="btn btn-icon btn-primary" id="modal-show-{{$pengaduan->id}}" data-toggle="modal" data-target="#modal-show-{{$pengaduan->id}}"><i class="fas fa-exclamation"></i></button>
                            <a href="" class="btn btn-primary btn-icon"><i class="fas fa-edit"></i></a>
                            <button class="btn btn-icon btn-danger" id="modal-destroy-{{$pengaduan->id}}" data-toggle="modal" data-target="#modal-destroy-{{$pengaduan->id}}"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
<!-- modal -->
@foreach($pengaduans as $pengaduan)
<div class="modal fade" tabindex="-1" role="dialog" id="modal-destroy-{{$pengaduan->id}}" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Pengaduan</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span><i class="fas fa-times-circle"></i></span></button>
            </div>
            <div class="modal-body">
                Apa anda yakin ingin menghapus pengaduan ini ?
            </div>
            <div class="modal-footer flex justify-content-center">
                <form action="" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger btn-icon" data-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                    <button type="submit" class="btn btn-primary btn-icon"><i class="fas fa-check"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="modal-show-{{$pengaduan->id}}" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Data Pengaduan</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span><i class="fas fa-times-circle"></i></span></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="" enctype="multipart/form-data">
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
                        <label for="ttl">Tempat, Tanggal Lahir</label>
                        <input id="ttl" type="date" class="form-control" name="ttl" value="$pengaduan->ttl}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input id="alamat" type="text" class="form-control" name="alamat" value="{{$pengaduan->alamat}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">+62</span>
                            </div>
                            <input id="telepon" type="number" class="form-control @error('telepon'){{'is-invalid'}}@enderror" name="telepon" value="{{substr($pengaduan->telepon, 3)}}" readonly>
                        </div>
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
                        
                    </div>
                </form>
            </div>
            <div class="modal-footer flex justify-content-center">
                <button type="button" class="btn btn-danger btn-icon" data-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- custom -->
@section('customCSS')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/r-2.2.6/datatables.min.css" />
@endsection
@section('customJS')
<script src="{{asset('assets/js/bootstrap-modal.js')}}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/r-2.2.6/datatables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#users').DataTable({
            responsive: true,

        });
    });
</script>
@endsection