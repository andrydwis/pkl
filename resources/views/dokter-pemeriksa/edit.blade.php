@extends('layouts.app')
@section('content')
    <div class="section-header">
        <h1>Data Dokter Pemeriksa</h1>
    </div>
    <div class="section-body">
        <div class="card card-primary">
            <div class="card-header flex-row justify-content-between">
                <h4>Edit data</h4>
                <a href="{{ route('data-dokter-pemeriksa.index') }}" class="btn btn-primary">Kembali</a>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('data-dokter-pemeriksa.update', ['dokterPemeriksaUser' => $user]) }}">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input id="nama_lengkap" type="text"
                            class="form-control @error('nama_lengkap'){{ 'is-invalid' }}@enderror" name="nama_lengkap"
                                value="{{ old('nama_lengkap') ?? $user->nama_lengkap }}">
                            @error('nama_lengkap')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="sip">SIP</label>
                            <input id="sip" type="text" class="form-control @error('sip'){{ 'is-invalid' }}@enderror"
                                    name="sip" value="{{ old('sip') ?? $user->sip }}">
                                @error('sip')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nip">NIP</label>
                                <input id="nip" type="text" class="form-control @error('nip'){{ 'is-invalid' }}@enderror"
                                        name="nip" value="{{ old('sip') ?? $user->nip }}">
                                    @error('nip')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    Kirim
                                </button>
                        </div>
                        </form>
                    </div>
                </div>
                </div>
            @endsection
