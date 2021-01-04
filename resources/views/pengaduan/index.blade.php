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
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('pengaduan.store')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="nomer_ktp">Nomer KTP / NIK</label>
                                    <input id="nomer_ktp" type="number" class="form-control @error('nomer_ktp'){{'is-invalid'}}@enderror" name="nomer_ktp" value="{{old('nomer_ktp') ?? ''}}" autofocus>
                                    @error('nama_lengkap')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <input id="nama_lengkap" type="text" class="form-control @error('nama_lengkap'){{'is-invalid'}}@enderror" name="nama_lengkap" value="{{old('nama_lengkap') ?? ''}}">
                                    @error('nama_lengkap')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="ttl">Tempat, Tanggal Lahir</label>
                                    <input id="ttl" type="date" class="form-control @error('ttl'){{'is-invalid'}}@enderror" name="ttl" value="{{old('ttl') ?? ''}}">
                                    @error('ttl')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input id="alamat" type="text" class="form-control @error('alamat'){{'is-invalid'}}@enderror" name="alamat" value="{{old('alamat') ?? ''}}">
                                    @error('alamat')
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
                                    <label for="pekerjaan">Pekerjaan</label>
                                    <input id="pekerjaan" type="text" class="form-control @error('pekerjaan'){{'is-invalid'}}@enderror" name="pekerjaan" value="{{old('pekerjaan') ?? ''}}">
                                    @error('pekerjaan')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_kejadian">Tanggal Kejadian</label>
                                    <input id="tanggal_kejadian" type="date" class="form-control @error('tanggal_kejadian'){{'is-invalid'}}@enderror" name="tanggal_kejadian" value="{{old('tanggal_kejadian') ?? ''}}">
                                    @error('tanggal_kejadian')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="waktu_kejadian">Waktu Kejadian</label>
                                    <input id="waktu_kejadian" type="time" class="form-control @error('waktu_kejadian'){{'is-invalid'}}@enderror" name="waktu_kejadian" value="{{old('waktu_kejadian') ?? ''}}">
                                    @error('waktu_kejadian')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <select name="kategori" id="kategori" class="form-control @error('kategori'){{'is-invalid'}}@enderror">
                                        <option value="" selected disabled>-- Pilih Kategori --</option>
                                        <option value="masyarakat">Masyarakat</option>
                                        <option value="pemerintah">pemerintah</option>
                                        <option value="swasta">Swasta</option>
                                        <option value="pendidikan">Pendidikan</option>
                                    </select>
                                    @error('kategori')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="isi_pengaduan">Isi Pengaduan</label>
                                    <textarea name="isi_pengaduan" id="isi_pengaduan" cols="30" rows="5" class="form-control @error('isi_pengaduan'){{'is-invalid'}}@enderror"></textarea>
                                    @error('isi_pengaduan')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="foto_bukti_kejadian">Foto / Bukti Kejadian</label>
                                    <input id="foto_bukti_kejadian" type="file" class="form-control @error('foto_bukti_kejadian'){{'is-invalid'}}@enderror" name="foto_bukti_kejadian">
                                    @error('foto_bukti_kejadian')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        Kirim
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