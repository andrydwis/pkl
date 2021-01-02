@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Daftar Kontak</h1>
</div>
@include('layouts.alert')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Kontak</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('contact.update', ['contact' => $contact])}}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="whatsapp">Whatsapp</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">+62</span>
                                </div>
                                <input id="whatsapp" type="number" class="form-control @error('whatsapp'){{'is-invalid'}}@enderror" name="whatsapp" value="{{old('whatsapp') ?? substr($contact->whatsapp, 3)}}">
                                @error('whatsapp')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control @error('email'){{'is-invalid'}}@enderror" name="email" value="{{old('email') ?? $contact->email}}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="facebook">Faebook</label>
                            <input id="facebook" type="text" class="form-control @error('facebook'){{'is-invalid'}}@enderror" name="facebook" value="{{old('facebook') ?? $contact->facebook}}">
                            @error('facebook')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="twitter">Twitter</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input id="twitter" type="text" class="form-control @error('twitter'){{'is-invalid'}}@enderror" name="twitter" value="{{old('twitter') ?? substr($contact->twitter, 1)}}">
                                @error('twitter')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="instagram">Instagram</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input id="instagram" type="text" class="form-control @error('instagram'){{'is-invalid'}}@enderror" name="instagram" value="{{old('instagram') ?? substr($contact->instagram, 1)}}">
                                @error('instagram')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection