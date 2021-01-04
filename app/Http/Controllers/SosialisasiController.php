<?php

namespace App\Http\Controllers;

use App\Models\Sosialisasi;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SosialisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'sosialisasis' => Sosialisasi::all()
        ];

        return view('');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis_sosialisasi' => ['required'],
            'nama_penyelenggara' => ['required'],
            'tanggal' => ['required'],
            'jam_pukul' => ['required'],
            'tempat' => ['required'],
            'nama_penanggung_jawab' => ['required'],
            'no_hp_penanggung_jawab' => ['required'],
            'jumlah_peserta' => ['required'],            
            'lampiran_surat_undangan' => ['required,mimes:jpeg,png,jpg,pdf,max:2048']
        ]);

        $sosialisasi = new Sosialisasi();
        $sosialisasi->jenis_sosialisasi = $request->jenis_sosialisasi;
        $sosialisasi->tanggal = $request->nama_penyelenggara;
        $sosialisasi->jam_pukul = $request->jam_pukul;
        $sosialisasi->tempat = $request->tempat;
        $sosialisasi->nama_penanggung_jawab = $request->nama_penanggung_jawab;
        $sosialisasi->no_hp_penanggung_jawab = $request->no_hp_penanggung_jawab;
        $sosialisasi->jumlah_peserta = $request->jumlah_peserta;
        $sosialisasi->keterangan = $request->keterangan;
        $sosialisasi->lampiran_surat_undangan = $request->file('lampiran_surat_undangan')->storeAs('lampiran_surat_undangan', 'permohonan_sosialisasi'.'_'.Str::slug($request->nama_lengkap) . '_' . Carbon::now() . '_' . $request->file('lampiran_identitas')->extension()) ?? null ;;
        $sosialisasi->save();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sosialisasi  $sosialisasi
     * @return \Illuminate\Http\Response
     */
    public function show(Sosialisasi $sosialisasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sosialisasi  $sosialisasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Sosialisasi $sosialisasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sosialisasi  $sosialisasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sosialisasi $sosialisasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sosialisasi  $sosialisasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sosialisasi $sosialisasi)
    {
        //
    }
}
