<?php

namespace App\Http\Controllers;

use App\Models\Sosialisasi;
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
        //
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
