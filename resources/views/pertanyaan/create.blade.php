@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Data Pertanyaan Survey</h1>
</div>
<div class="section-body">
    <div class="card card-primary">
        <div class="card-header flex-row justify-content-between">
            <h4>Tambah pertanyaan</h4>
            <a href="{{route('pertanyaan-survey.index')}}" class="btn btn-primary">Kembali</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('pertanyaan-survey.store')}}">
                @csrf
                <div class="form-group">
                    <label for="pertanyaan">Pertanyaan</label>
                    <textarea name="pertanyaan" id="pertanyaan" class="form-control @error('pertanyaan'){{'is-invalid'}}@enderror">{{old('pertanyaan') ?? ''}}</textarea>
                    @error('pertanyaan')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Kirim
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection