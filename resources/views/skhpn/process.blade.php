@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Data SKHPN</h1>
</div>
<div class="section-body">
    <div class="card card-primary">
        <div class="card-header flex-row justify-content-between">
            <h4>Proses data</h4>
            <a href="{{ route('data-skhpn.index') }}" class="btn btn-primary">Kembali</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('data-skhpn.process', ['skhpn' => $skhpn])}}">
                @csrf
                <input type="hidden" name="nomer" value="{{$nomer}}">
                <div class="form-group">
                    <label for="nomer_surat">Nomer Surat</label>
                    <input id="nomer_surat" type="text" class="form-control @error('nomer_surat'){{ 'is-invalid' }}@enderror" name="nomer_surat" value="{{ old('nomer_surat') ?? $detail->nomer_surat ?? $nomer_surat }}" autofocus>
                    @error('nomer_surat')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nomer_ktp">Nomer KTP / NIK</label>
                    <input id="nomer_ktp" type="number" class="form-control @error('nomer_ktp'){{'is-invalid'}}@enderror" name="nomer_ktp" value="{{old('nomer_ktp') ?? $skhpn->nomer_ktp}}">
                    @error('nomer_ktp')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input id="nama_lengkap" type="text" class="form-control @error('nama_lengkap'){{'is-invalid'}}@enderror" name="nama_lengkap" value="{{old('nama_lengkap') ?? $skhpn->nama_lengkap}}">
                    @error('nama_lengkap')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input id="tempat_lahir" type="text" class="form-control @error('tempat_lahir'){{'is-invalid'}}@enderror" name="tempat_lahir" value="{{old('tempat_lahir') ?? $skhpn->tempat_lahir}}">
                            @error('tempat_lahir')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="ttl">Tanggal Lahir</label>
                            <input id="ttl" type="date" class="form-control @error('ttl'){{'is-invalid'}}@enderror" name="ttl" value="{{old('ttl') ?? $skhpn->ttl}}">
                            @error('ttl')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control @error('jenis_kelamin'){{'is-invalid'}}@enderror">
                        <option value="" @if(old('jenis_kelamin')==null){{'selected'}}@endif disabled>-- Jenis Kelamin --</option>
                        <option value="laki-laki" @if(old('jenis_kelamin')=='laki-laki' ){{'selected'}}@elseif($skhpn->jenis_kelamin=='laki-laki'){{'selected'}}@endif>Laki - Laki</option>
                        <option value="perempuan" @if(old('jenis_kelamin')=='perempuan' ){{'selected'}}@elseif($skhpn->jenis_kelamin=='perempuan'){{'selected'}}@endif>Perempuan</option>
                    </select>
                    @error('jenis_kelamin')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control @error('alamat'){{'is-invalid'}}@enderror">{{old('alamat') ?? $skhpn->alamat}}</textarea>
                    @error('alamat')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input id="pekerjaan" type="text" class="form-control @error('pekerjaan'){{'is-invalid'}}@enderror" name="pekerjaan" value="{{old('pekerjaan') ?? $skhpn->pekerjaan}}">
                    @error('pekerjaan')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="keperluan">Keperluan</label>
                    <textarea name="keperluan" id="keperluan" class="form-control @error('keperluan'){{'is-invalid'}}@enderror">{{old('keperluan') ?? $skhpn->keperluan}}</textarea>
                    @error('keperluan')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="hasil_tes">Hasil Tes</label>
                    <select name="hasil_tes" id="hasil_tes" class="form-control @error('hasil_tes'){{'is-invalid'}}@enderror">
                        <option value="" @if(old('hasil_tes')==null){{'selected'}}@endif disabled>-- Pilih Hasil --</option>
                        <option value="TIDAK TERINDIKASI" @if(old('hasil_tes')=='TIDAK TERINDIKASI' ){{'selected'}}@elseif($detail && $detail->hasil_tes == 'TIDAK TERINDIKASI'){{'selected'}}@endif>TIDAK TERINDIKASI</option>
                        <option value="TERINDIKASI" @if(old('hasil_tes')=='TERINDIKASI' ){{'selected'}}@elseif($detail && $detail->hasil_tes == 'TERINDIKASI'){{'selected'}}@endif>TERINDIKASI</option>
                    </select>
                    @error('hasil_tes')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="dast_10">DAST-10</label>
                    <input id="dast_10" type="text" class="form-control @error('dast_10'){{'is-invalid'}}@enderror" name="dast_10" value="{{old('dast_10') ?? $detail->dast_10 ?? ''}}" placeholder="Score 0 ( tidak ada masalah )">
                    @error('dast_10')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="rapid_test">Rapid Test</label>
                    <br>
                    <label class="custom-switch mt-2">
                        <input type="checkbox" name="amphetamine" class="custom-switch-input">
                        <span class="custom-switch-indicator"></span>
                        <span class="custom-switch-description">Amphetamine</span>
                    </label>
                    <br>
                    <label class="custom-switch mt-2">
                        <input type="checkbox" name="methaphetamine" class="custom-switch-input">
                        <span class="custom-switch-indicator"></span>
                        <span class="custom-switch-description">Methaphetamine</span>
                    </label>
                    <br>
                    <label class="custom-switch mt-2">
                        <input type="checkbox" name="cocaine" class="custom-switch-input">
                        <span class="custom-switch-indicator"></span>
                        <span class="custom-switch-description">Cocaine</span>
                    </label>
                    <br>
                    <label class="custom-switch mt-2">
                        <input type="checkbox" name="morphine" class="custom-switch-input">
                        <span class="custom-switch-indicator"></span>
                        <span class="custom-switch-description">Morphine</span>
                    </label>
                    <br>
                    <label class="custom-switch mt-2">
                        <input type="checkbox" name="thc" class="custom-switch-input">
                        <span class="custom-switch-indicator"></span>
                        <span class="custom-switch-description">THC</span>
                    </label>
                    <br>
                    <label class="custom-switch mt-2">
                        <input type="checkbox" name="benzodiazepine" class="custom-switch-input">
                        <span class="custom-switch-indicator"></span>
                        <span class="custom-switch-description">Benzodiazepine</span>
                    </label>
                </div>
                <div class="form-group">
                    <label for="kepala_bnn">Kepala BNN</label>
                    <select name="kepala_bnn" id="kepala_bnn" class="form-control @error('kepala_bnn'){{'is-invalid'}}@enderror">
                        <option value="" @if(old('kepala_bnn')==null){{'selected'}}@endif disabled>-- Pilih Data --</option>
                        @foreach($kepala_bnns as $kepala_bnn)
                        <option value="{{$kepala_bnn->id}}" @if(old('kepala_bnn')==$kepala_bnn->id){{'selected'}}@endif>{{$kepala_bnn->nama_lengkap}}</option>
                        @endforeach
                    </select>
                    @error('kepala_bnn')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="dokter_pemeriksa">Dokter Pemeriksa</label>
                    <select name="dokter_pemeriksa" id="dokter_pemeriksa" class="form-control @error('dokter_pemeriksa'){{'is-invalid'}}@enderror">
                        <option value="" @if(old('dokter_pemeriksa')==null){{'selected'}}@endif disabled>-- Pilih Data --</option>
                        @foreach($dokter_pemeriksas as $dokter_pemeriksa)
                        <option value="{{$dokter_pemeriksa->id}}" @if(old('dokter_pemeriksa')==$dokter_pemeriksa->id){{'selected'}}@endif>{{$dokter_pemeriksa->nama_lengkap}}</option>
                        @endforeach
                    </select>
                    @error('dokter_pemeriksa')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="petugas_pemeriksa">Petugas Pemeriksa</label>
                    <select name="petugas_pemeriksa" id="petugas_pemeriksa" class="form-control @error('petugas_pemeriksa'){{'is-invalid'}}@enderror">
                        <option value="" @if(old('petugas_pemeriksa')==null){{'selected'}}@endif disabled>-- Pilih Data --</option>
                        @foreach($petugas_pemeriksas as $petugas_pemeriksa)
                        <option value="{{$petugas_pemeriksa->id}}" @if(old('petugas_pemeriksa')==$petugas_pemeriksa->id){{'selected'}}@endif>{{$petugas_pemeriksa->nama_lengkap}}</option>
                        @endforeach
                    </select>
                    @error('petugas_pemeriksa')
                    <div class="invalid-feedback">
                        {{$message}}
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