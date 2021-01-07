<?php

namespace App\Http\Controllers;

use App\Models\RehabilitasiInstansi;
use Illuminate\Http\Request;

class RehabilitasiInstansiController extends Controller
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
        return view('rehabilitasi-instansi.create');
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
            'nama_lengkap_pelapor' => ['required', 'string',],
            'nama_instansi' => ['required', 'string',],
            'alamat_instansi' => ['required', 'string',],
            'nomor_telepon' => ['required'],
            'jumlah_yang_dicurigai' => ['required','numeric'],
            'jenis_penyalahgunaan' => ['required']
        ]);

        $rehabilitasiInstansi = new RehabilitasiInstansi();
        $rehabilitasiInstansi->nama_lengkap_pelapor = $request->nama_lengkap_pelapor;
        $rehabilitasiInstansi->nama_instansi = $request->nama_instansi;
        $rehabilitasiInstansi->alamat_instansi = $request->alamat_instansi;
        $rehabilitasiInstansi->nomor_telepon = $request->nomor_telepon;
        $rehabilitasiInstansi->jumlah_yang_dicurigai = $request->jumlah_yang_dicurigai;
        $rehabilitasiInstansi->jenis_penyalahgunaan = $request->jenis_penyalahgunaan;
        $rehabilitasiInstansi->save();
        session()->flash('status', 'Rehabilitasi Instansi Berhasil Diajukan');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RehabilitasiInstansi  $rehabilitasiInstansi
     * @return \Illuminate\Http\Response
     */
    public function show(RehabilitasiInstansi $rehabilitasiInstansi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RehabilitasiInstansi  $rehabilitasiInstansi
     * @return \Illuminate\Http\Response
     */
    public function edit(RehabilitasiInstansi $rehabilitasiInstansi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RehabilitasiInstansi  $rehabilitasiInstansi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RehabilitasiInstansi $rehabilitasiInstansi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RehabilitasiInstansi  $rehabilitasiInstansi
     * @return \Illuminate\Http\Response
     */
    public function destroy(RehabilitasiInstansi $rehabilitasiInstansi)
    {
        //
    }
}
