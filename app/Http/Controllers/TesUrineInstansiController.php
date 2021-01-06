<?php

namespace App\Http\Controllers;

use App\Models\TesUrineInstansi;
use Illuminate\Http\Request;

class TesUrineInstansiController extends Controller
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
        return view('tes-urine-instansi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_instansi' => ['required'],
            'nama_pemohon' => ['required'],
            'alamat_instansi' => ['required'],
            'tanggal_pelaksanaan_pemeriksaan' => ['required'],
            'waktu_pelaksanaan_pemeriksaan' => ['required'],
            'contact_person' => ['required'],
            'jumlah_peserta_laki' => ['required'],
            'jumlah_peserta_perempuan' => ['required'],
            'lokasi_pemeriksaan' => ['required'],
        ]);

        $tesUrineInstansi = new TesUrineInstansi();
        $tesUrineInstansi->nama_instansi = $request->nama_instansi;
        $tesUrineInstansi->nama_pemohon = $request->nama_pemohon;
        $tesUrineInstansi->alamat_instansi = $request->alamat_instansi;
        $tesUrineInstansi->tanggal_pelaksanaan_pemeriksaan = $request->tanggal_pelaksanaan_pemeriksaan;
        $tesUrineInstansi->waktu_pelaksanaan_pemeriksaan = $request->waktu_pelaksanaan_pemeriksaan;
        $tesUrineInstansi->contact_person = '+62'.$request->contact_person;
        $tesUrineInstansi->jumlah_peserta_laki = $request->jumlah_peserta_laki;
        $tesUrineInstansi->jumlah_peserta_perempuan = $request->jumlah_peserta_perempuan;
        $tesUrineInstansi->lokasi_pemeriksaan = $request->lokasi_pemeriksaan;
        $tesUrineInstansi->save();
        session()->flash('status', 'Tes urine Instansi Berhasil Diajukan');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TesUrineInstansi  $tesUrineInstansi
     * @return \Illuminate\Http\Response
     */
    public function show(TesUrineInstansi $tesUrineInstansi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TesUrineInstansi  $tesUrineInstansi
     * @return \Illuminate\Http\Response
     */
    public function edit(TesUrineInstansi $tesUrineInstansi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TesUrineInstansi  $tesUrineInstansi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TesUrineInstansi $tesUrineInstansi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TesUrineInstansi  $tesUrineInstansi
     * @return \Illuminate\Http\Response
     */
    public function destroy(TesUrineInstansi $tesUrineInstansi)
    {
        //
    }
}
