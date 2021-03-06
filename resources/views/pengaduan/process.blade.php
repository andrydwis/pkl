@extends('layouts.app')
@section('content')
    <div class="section-header">
        <h1>Data Pengaduan</h1>
    </div>
    <div class="section-body">
        <div class="card card-primary">
            <div class="card-header flex-row justify-content-between">
                <h4>Proses data</h4>
                <a href="{{ route('data-pengaduan.index') }}" class="btn btn-primary">Kembali</a>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('data-pengaduan.process', ['pengaduan' => $pengaduan]) }}">
                    @csrf
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control @error('status'){{ 'is-invalid' }}@enderror">
                            <option value="" @if (old('status') == null) {{ 'selected' }} @endif disabled>Pilih Status</option>
                            <option value="diterima" @if (old('status') == 'diterima') {{ 'selected' }}@elseif($pengaduan->status=='diterima'){{ 'selected' }} @endif>Diterima</option>
                            <option value="ditolak" @if (old('status') == 'ditolak') {{ 'selected' }}@elseif($pengaduan->status=='ditolak'){{ 'selected' }} @endif>Ditolak</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea name="keterangan" id="keterangan"
                            class="form-control @error('keterangan'){{ 'is-invalid' }}@enderror">{{ old('keterangan') ?? $pengaduan->keterangan }}</textarea>
                        @error('keterangan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
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
