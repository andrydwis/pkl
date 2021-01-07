@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Edit Profil</h1>
</div>
@include('layouts.alert')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-5 col-lg-6">
            <div class="card profile-widget">
                <div class="profile-widget-header">
                    <img alt="image" src="https://ui-avatars.com/api/?name={{auth()->user()->name}}" width="100" height="100" class="rounded-circle profile-widget-picture">
                </div>
                <div class="profile-widget-description">
                    <form action="{{route('edit-profile.update')}}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input class="form-control @error('nama'){{'is-invalid'}}@enderror" type="text" name="nama" id="nama" value="{{old('nama') ?? auth()->user()->name}}">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control @error('email'){{'is-invalid'}}@enderror" type="email" name="email" id="email" value="{{old('email') ?? auth()->user()->email}}">
                            @error('emmail')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon</label>
                            <input id="telepon" type="number" class="form-control @error('telepon'){{'is-invalid'}}@enderror" name="telepon" value="{{old('telepon') ?? auth()->user()->phone}}">
                            @error('telepon')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>
@endsection