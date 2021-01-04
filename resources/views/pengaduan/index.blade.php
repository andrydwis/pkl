@extends('layouts.user')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center">
        <h1>Form Pengaduan</h1>
    </div>
</section>
<!-- End Hero -->

<main id="main">
    <section id="form" class="d-flex justify-content-center">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Tambah</h4>
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
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">+62</span>
                                    </div>
                                    <input id="telepon" type="number" class="form-control @error('telepon'){{'is-invalid'}}@enderror" name="telepon" value="{{old('telepon') ?? ''}}">
                                    @error('telepon')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
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
    </section>
</main>
@endsection