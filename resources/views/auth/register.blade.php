@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Tambah Pegawai</h1>
</div>
<div class="section-body">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
            <div class="card card-primary">
                <div class="card-header d-flex d-flex-row justify-content-between">
                    <h4>Tambah</h4>
                    <a href="{{route('users.index')}}" class="btn btn-primary">Kembali</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('create-users')}}">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input id="nama" type="text" class="form-control @error('nama'){{'is-invalid'}}@enderror" name="nama" value="{{old('nama') ?? ''}}" autofocus>
                            @error('nama')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control @error('email'){{'is-invalid'}}@enderror" name="email" value="{{old('email') ?? ''}}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Password</label>
                            <input id="password" type="password" class="form-control @error('password'){{'is-invalid'}}@enderror" name="password">
                            @error('password')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation" class="control-label">Konfirmasi Password</label>
                            <input id="password_confirmation" type="password" class="form-control @error('password_confirmation'){{'is-invalid'}}@enderror" name="password_confirmation">
                            @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon</label>
                            <input id="telepon" type="number" class="form-control @error('telepon'){{'is-invalid'}}@enderror" name="telepon" value="{{old('telepon') ?? ''}}">
                            @error('telepon')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select name="role" id="role" class="form-control @error('role'){{'is-invalid'}}@enderror">
                                <option value="" selected disabled>-- Pilih Role --</option>
                                <option value="tu">TU</option>
                                <option value="p2m">P2M</option>
                                <option value="rehabilitasi">Rehabilitasi</option>
                            </select>
                            @error('role')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection