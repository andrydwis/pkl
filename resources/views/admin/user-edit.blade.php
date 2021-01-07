@extends('layouts.app')
@section('content')
<div class="section-header" data-aos="fade-up" data-aos-delay="500">
    <h1>Update Pegawai</h1>
</div>
@include('layouts.alert')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
            <div class="card card-primary">
                <div class="card-header flex flex-row justify-content-between">
                    <h4>Update</h4>
                    <a href="{{route('users.index')}}" class="btn btn-primary">Kembali</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('users.update', ['user' => $user])}}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input id="nama" type="text" class="form-control @error('nama'){{'is-invalid'}}@enderror" name="nama" value="{{old('nama') ?? $user->name}}" autofocus>
                            @error('nama')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control @error('email'){{'is-invalid'}}@enderror" name="email" value="{{old('email') ?? $user->email}}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon</label>
                            <input id="telepon" type="number" class="form-control @error('telepon'){{'is-invalid'}}@enderror" name="telepon" value="{{old('telepon') ?? $user->phone}}">
                            @error('telepon')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select name="role" id="role" class="form-control @error('role'){{'is-invalid'}}@enderror">
                                <option value="" disabled>-- Pilih Role --</option>
                                <option value="tu" @if($user->role == 'tu'){{'selected'}}@endif>TU</option>
                                <option value="p2m" @if($user->role == 'p2m'){{'selected'}}@endif>P2M</option>
                                <option value="rehabilitasi" @if($user->role == 'rehabilitasi'){{'selected'}}@endif>Rehabilitasi</option>
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