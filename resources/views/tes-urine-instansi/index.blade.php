@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Data Tes Urine Instansi</h1>
</div>
<div class="section-body">
    <div class="card card-primary">
        <div class="card-header flex-row justify-content-between">
            <h4>Export Data</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('data-permohonan-tes-urine-instansi.export')}}">
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
            <a href="{{route('permohonan-tes-urine-instansi.create')}}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <table id="users" class="table table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Instansi</th>
                        <th>Nama Pemohon</th>
                        <th>Alamat Instansi</th>
                        <th>Tanggal Pelaksanaan Pemeriksaan</th>
                        <th>Contact Person</th>
                        <th>Menu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tes_urine_instansis as $tes_urine_instansi)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$tes_urine_instansi->nama_instansi}}</td>
                        <td>{{$tes_urine_instansi->nama_pemohon}}</td>
                        <td>{{$tes_urine_instansi->alamat_instansi}}</td>
                        <td>{{ date('d-m-Y', strtotime($tes_urine_instansi->tanggal_pelaksanaan_pemeriksaan)) }}</td>
                        <td>{{$tes_urine_instansi->contact_person}}</td>
                        <td>
                            <a href="{{route('data-permohonan-tes-urine-instansi.show', ['tesUrineInstansi' => $tes_urine_instansi ])}}" class="btn btn-primary btn-icon"><i class="fas fa-exclamation"></i></a>
                            <a href="{{route('data-permohonan-tes-urine-instansi.edit',  ['tesUrineInstansi' => $tes_urine_instansi ])}}" class="btn btn-primary btn-icon"><i class="fas fa-edit"></i></a>
                            <button class="btn btn-icon btn-danger" id="modal-destroy-{{$tes_urine_instansi->id}}" data-toggle="modal" data-target="#modal-destroy-{{$tes_urine_instansi->id}}"><i class="fas fa-trash"></i></button>
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
@foreach($tes_urine_instansis as $tes_urine_instansi)
<div class="modal fade" tabindex="-1" role="dialog" id="modal-destroy-{{$tes_urine_instansi->id}}" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Data Permohonan Tes Urine Instansi</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span><i class="fas fa-times-circle"></i></span></button>
            </div>
            <div class="modal-body">
                Apa anda yakin ingin menghapus Data Permohonan Tes Urine Instansi ini ?
            </div>
            <div class="modal-footer flex justify-content-center">
                <form action="{{route('data-permohonan-tes-urine-instansi.destroy', ['tesUrineInstansi' => $tes_urine_instansi ])}}" method="post">
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