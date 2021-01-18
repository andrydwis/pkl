
@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Data Sosialisasi</h1>
</div>
<div class="section-body">
<div class="card card-primary">
        <div class="card-header flex-row justify-content-between">
            <h4>Export Data</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('data-sosialisasi.export')}}">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="tanggal_dari">Tanggal dari</label>
                            <input id="tanggal_dari" type="date" class="form-control @error('tanggal_dari'){{'is-invalid'}}@enderror" name="tanggal_dari" value="{{old('tanggal_dari') ?? ''}}" autofocus>
                            @error('tanggal_dari')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="tanggal_sampai">Tanggal sampai</label>
                            <input id="tanggal_sampai" type="date" class="form-control @error('tanggal_sampai'){{'is-invalid'}}@enderror" name="tanggal_sampai" value="{{old('tanggal_dari') ?? ''}}">
                            @error('tanggal_sampai')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Export
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="card card-primary">
        <div class="card-header flex-row justify-content-between">
            <h4>Sosialisasi</h4>
            <a href="{{route('sosialisasi.create')}}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <table id="users" class="table table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Nama Penyelenggara</th>
                        <th>Tanggal</th>
                        <th>Tempat</th>
                        <th>Nama Pemohon</th>
                        <th>Menu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sosialisasis as $sosialisasi)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$sosialisasi->kategori}}</td>
                        <td>{{$sosialisasi->nama_penyelenggara}}</td>
                        <td>{{ date('d-m-Y', strtotime($sosialisasi->tangal)) }}</td>
                        <td>{{$sosialisasi->tempat}}</td>
                        <td>{{$sosialisasi->nama_pemohon}}</td>
                        <td>
                            <a href="{{route('data-sosialisasi.show', ['sosialisasi' => $sosialisasi])}}" class="btn btn-primary btn-icon"><i class="fas fa-exclamation"></i></a>
                            <a href="{{route('data-sosialisasi.edit', ['sosialisasi' => $sosialisasi])}}" class="btn btn-primary btn-icon"><i class="fas fa-edit"></i></a>
                            <button class="btn btn-icon btn-danger" id="modal-destroy-{{$sosialisasi->id}}" data-toggle="modal" data-target="#modal-destroy-{{$sosialisasi->id}}"><i class="fas fa-trash"></i></button>
                            <a href="{{route('data-sosialisasi.process-view', ['sosialisasi' => $sosialisasi])}}" class="btn btn-success btn-icon"><i class="fas fa-play"></i></a>
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
@foreach($sosialisasis as $sosialisasi)
<div class="modal fade" tabindex="-1" role="dialog" id="modal-destroy-{{$sosialisasi->id}}" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Sosialisasi</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span><i class="fas fa-times-circle"></i></span></button>
            </div>
            <div class="modal-body">
                Apa anda yakin ingin menghapus sosialisasi ini ?
            </div>
            <div class="modal-footer flex justify-content-center">
                <form action="{{route('data-sosialisasi.destroy', ['sosialisasi' => $sosialisasi])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger btn-icon" data-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                    <button type="submit" class="btn btn-primary btn-icon"><i class="fas fa-check"></i></button>
                </form>
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
            columns: [{
                    width: '5%'
                },
                null,
                null,
                null,
                null,
                null,
                {
                    searchable: false,
                    orderable: false
                }
            ]
        });
    });
</script>
@endsection