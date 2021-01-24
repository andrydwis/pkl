@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Data Galeri</h1>
</div>
<div class="section-body">
    <div class="card card-primary">
        <div class="card-header flex-row justify-content-between">
            <h4>Tambah data</h4>
            <a href="{{route('galeri.index')}}" class="btn btn-primary">Kembali</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('galeri.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input id="gambar" type="file" class="form-control @error('gambar'){{'is-invalid'}}@enderror" name="gambar">
                    @error('gambar')
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