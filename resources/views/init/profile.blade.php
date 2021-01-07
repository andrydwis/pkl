@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Profil</h1>
</div>
<div class="section-body">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-5 col-lg-6">
            <div class="card profile-widget">
                <div class="profile-widget-header">
                    <img alt="image" src="https://ui-avatars.com/api/?name={{auth()->user()->name}}" width="100" height="100" class="rounded-circle profile-widget-picture">
                </div>
                <div class="profile-widget-description">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input class="form-control" type="text" name="name" id="name" value="{{auth()->user()->name}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" id="email" value="{{auth()->user()->email}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="phone">Telepon</label>
                        <input id="phone" type="number" class="form-control" name="phone" value="{{auth()->user()->phone}}" readonly>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">+62</span>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>
@endsection