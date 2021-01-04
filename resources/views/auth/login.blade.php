@extends('layouts.basic')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
                <h1 class="h1">BNN Kota Malang</h1>
            </div>
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Login</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
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
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="simple-footer">
                BNN Kota Malang &copy; 2021
            </div>
        </div>
    </div>
</div>
@endsection