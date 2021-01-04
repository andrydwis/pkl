<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PengaduanController extends Controller
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
            'pengaduans' => Pengaduan::all()
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
            'nama_lengkap' => ['required', 'string', 'max:255'],
            'ttl' => ['required'],
            'alamat' => ['required'],
            'telepon' => ['required'],
            'email' => ['required,email'],
            'lampiran_identitas' => ['required,mimes:jpg,png,pdf,max:2048'],
            'pekerjaan' => ['required'],
            'alamat_instansi' => ['required'],
            'telepon_instansi' => ['required'],
            'tanggal_kejadian' => ['required'],
            'waktu_kejadian' => ['required'],
            'lampiran_pendukung' => ['mimes:jpg,png,pdf,max:2048']
        ]);

        $pengaduan = new Pengaduan();
        $pengaduan->nama_lengkap = $request->nama_lengkap;
        $pengaduan->ttl = $request->ttl;
        $pengaduan->alamat = $request->alamat;
        $pengaduan->telepon = $request->telepon;
        $pengaduan->email = $request->email;
        $pengaduan->lampiran_identitas = $request->file('lampiran_identitas')->storeAs('pengaduan', 'lampiran_identitas'.'_'.Str::slug($request->nama_lengkap) . '_' . Carbon::now() . '_' . $request->file('lampiran_identitas')->extension());
        $pengaduan->pekerjaan = $request->pekerjaan;
        $pengaduan->alamat_instansi = $request->alamat_instansi;
        $pengaduan->telepon_instansi = $request->telepon_instansi;
        $pengaduan->tanggal_kejadian = $request->tanggal_kejadian;
        $pengaduan->waktu_kejadian = $request->waktu_kejadian;
        $pengaduan->keterangan = $request->keterangan;
        $pengaduan->lampiran_pendukung = $request->file('lampiran_pendukung')->storeAs('pengaduan', 'lampiran_pendukung'.'_'.Str::slug($request->nama_lengkap) . '_' . Carbon::now() . '_' . $request->file('lampiran_identitas')->extension()) ?? null ;
        $pengaduan->save();

        session()->flash('status', 'Pengaduan berhasil diajukan');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function show(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengaduan $pengaduan)
    {
        //
    }
}
