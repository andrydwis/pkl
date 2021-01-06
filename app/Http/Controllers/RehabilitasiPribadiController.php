<?php

namespace App\Http\Controllers;

use App\Models\RehabilitasiPribadi;
use Illuminate\Http\Request;

class RehabilitasiPribadiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = [];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('rehabilitasi-pribadi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nomer_ktp' => ['required', 'numeric'],
            'nama_lengkap' => ['required', 'string', 'max:255'],
            'alamat' => ['required'],
            'telepon' => ['required'],
            'jenis_penyalahgunaan' => ['required'],
            'hubungan_dengan_penyalahguna' => ['required'],
            'rencana_kedatangan_ke_klinik' => ['required']
        ]);

        $rehabilitasi =  new RehabilitasiPribadi();
        $rehabilitasi->nomer_ktp = $request->nomer_ktp;
        $rehabilitasi->nama_lengkap = $request->nama_lengkap;
        $rehabilitasi->alamat = $request->alamat;
        $rehabilitasi->telepon = '+62' . $request->telepon;
        $rehabilitasi->jenis_penyalahgunaan = $request->jenis_penyalahgunaan;
        $rehabilitasi->hubungan_dengan_penyalahguna = $request->hubungan_dengan_penyalahguna;
        $rehabilitasi->rencana_kedatangan_ke_klinik = $request->rencana_kedatangan_ke_klinik;
        $rehabilitasi->save();

        session()->flash('status', 'Rehabilitasi pribadi berhasil diajukan');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RehabilitasiPribadi  $rehabilitasiPribadi
     * @return \Illuminate\Http\Response
     */
    public function show(RehabilitasiPribadi $rehabilitasiPribadi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RehabilitasiPribadi  $rehabilitasiPribadi
     * @return \Illuminate\Http\Response
     */
    public function edit(RehabilitasiPribadi $rehabilitasiPribadi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RehabilitasiPribadi  $rehabilitasiPribadi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RehabilitasiPribadi $rehabilitasiPribadi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RehabilitasiPribadi  $rehabilitasiPribadi
     * @return \Illuminate\Http\Response
     */
    public function destroy(RehabilitasiPribadi $rehabilitasiPribadi)
    {
        //
    }
}
