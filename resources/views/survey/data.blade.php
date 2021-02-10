@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Survey Kepuasan Pelayanan</h1>
</div>
<div class="section-body">
    <div class="card card-primary">
        <div class="card-header flex-row justify-content-between">
            <h4>Data</h4>
        </div>
        <div class="card-body">
            <table id="users" class="table table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pertanyaan</th>
                        <th>Sangat Puas</th>
                        <th>Puas</th>
                        <th>Cukup Puas</th>
                        <th>Kurang Puas</th>
                        <th>Tidak Puas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pertanyaans as $pertanyaan)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$pertanyaan->pertanyaan}}</td>
                        <td>{{$pertanyaan->sangat_puas}}</td>
                        <td>{{$pertanyaan->puas}}</td>
                        <td>{{$pertanyaan->cukup_puas}}</td>
                        <td>{{$pertanyaan->kurang_puas}}</td>
                        <td>{{$pertanyaan->tidak_puas}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

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
                null,
            ]
        });
    });
</script>
@endsection