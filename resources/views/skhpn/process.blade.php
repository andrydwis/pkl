@extends('layouts.app')
@section('content')
    <div class="section-header">
        <h1>Data SKHPN</h1>
    </div>
    <div class="section-body">
        <div class="card card-primary">
            <div class="card-header flex-row justify-content-between">
                <h4>Proses data</h4>
                <a href="{{ route('data-skhpn.index') }}" class="btn btn-primary">Kembali</a>
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    @csrf
                    <div class="form-group">
                        <label for="nomer_surat">Nomer Surat</label>
                        <input id="nomer_surat" type="text"
                            class="form-control @error('nomer_surat'){{ 'is-invalid' }}@enderror" name="nomer_surat"
                            value="{{ old('nomer_surat') ?? '' }}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            Proses
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
