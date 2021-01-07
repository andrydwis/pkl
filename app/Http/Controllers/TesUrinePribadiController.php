<?php

namespace App\Http\Controllers;

use App\Models\TesUrinePribadi;
use Illuminate\Http\Request;

class TesUrinePribadiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = [
            'tests' => TesUrinePribadi::all()
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tes-urine-pribadi.create');
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
            'nomer_ktp' => ['required', 'min:16', 'max:16'],
            'nama_lengkap' => ['required', 'string', 'max:255'],
            'tempat_lahir' => ['required'],
            'ttl' => ['required'],
            'jenis_kelamin' => ['required'],
            'alamat' => ['required'],
            'telepon' => ['required'],
            'pekerjaan' => ['required'],
            'tanggal_permohonan' => ['required'],
            'keperluan' => ['required']
        ]);

        $test = new TesUrinePribadi();
        $test->nomer_ktp = $request->nomer_ktp;
        $test->nama_lengkap = $request->nama_lengkap;
        $test->tempat_lahir = $request->tempat_lahir;
        $test->ttl = $request->ttl;
        $test->jenis_kelamin = $request->jenis_kelamin;
        $test->alamat = $request->alamat;
        $test->telepon = $request->telepon;
        $test->pekerjaan = $request->pekerjaan;
        $test->tanggal_permohonan = $request->tanggal_permohonan;
        $test->keperluan = $request->keperluan;
        $test->save();

        session()->flash('status', 'Tes urine pribadi berhasil diajukan');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TesUrinePribadi  $tesUrinePribadi
     * @return \Illuminate\Http\Response
     */
    public function show(TesUrinePribadi $tesUrinePribadi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TesUrinePribadi  $tesUrinePribadi
     * @return \Illuminate\Http\Response
     */
    public function edit(TesUrinePribadi $tesUrinePribadi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TesUrinePribadi  $tesUrinePribadi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TesUrinePribadi $tesUrinePribadi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TesUrinePribadi  $tesUrinePribadi
     * @return \Illuminate\Http\Response
     */
    public function destroy(TesUrinePribadi $tesUrinePribadi)
    {
        //
    }
}
