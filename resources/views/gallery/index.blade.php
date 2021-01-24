@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Data Galeri</h1>
</div>
<div class="section-body">
    <div class="card card-primary">
        <div class="card-header flex-row justify-content-between">
            <h4>Data</h4>
            <a href="{{route('galeri.create')}}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <table id="users" class="table table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Menu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($galleries as $gallery)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>
                            <a href="{{asset('storage/'.$gallery->gambar)}}">
                                <img src="{{asset('storage/'.$gallery->gambar)}}" alt="" class="img-thumbnail rounded" style="width:100 ; height:100; object-fit: cover; object-position: center">
                            </a>
                        </td>
                        <td>
                            <a href="{{route('galeri.edit', ['gallery' => $gallery])}}" class="btn btn-primary btn-icon"><i class="fas fa-edit"></i></a>
                            <button class="btn btn-icon btn-danger" id="modal-destroy-{{$gallery->id}}" data-toggle="modal" data-target="#modal-destroy-{{$gallery->id}}"><i class="fas fa-trash"></i></button>
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
@foreach($galleries as $gallery)
<div class="modal fade" tabindex="-1" role="dialog" id="modal-destroy-{{$gallery->id}}" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Data Galeri</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span><i class="fas fa-times-circle"></i></span></button>
            </div>
            <div class="modal-body">
                Apa anda yakin ingin menghapus data galeri ini ?
            </div>
            <div class="modal-footer flex justify-content-center">
                <form action="{{route('galeri.destroy', ['gallery' => $gallery])}}" method="post">
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
                {
                    searchable: false,
                    orderable: false
                }
            ]
        });
    });
</script>
@endsection