@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Data Kepala BNN</h1>
</div>
<div class="section-body">
    <div class="card card-primary">
        <div class="card-header flex-row justify-content-between">
            <h4>Tambah data</h4>
            <a href="{{route('data-kepala-bnn.index')}}" class="btn btn-primary">Kembali</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('data-kepala-bnn.store')}}">
                @csrf
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input id="nama_lengkap" type="text" class="form-control @error('nama_lengkap'){{'is-invalid'}}@enderror" name="nama_lengkap" value="{{old('nama_lengkap') ?? ''}}">
                    @error('nama_lengkap')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nrp">NRP</label>
                    <input id="nrp" type="text" class="form-control @error('nrp'){{'is-invalid'}}@enderror" name="nrp" value="{{old('nrp') ?? ''}}">
                    @error('nrp')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">
                    Kirim
                </button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection