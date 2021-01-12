<?php

namespace App\Http\Controllers;

use App\Exports\RehabilitasiInstansiExport;
use App\Models\RehabilitasiInstansi;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RehabilitasiInstansiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'rehabilitasis' => RehabilitasiInstansi::all(),
        ];

        return view('rehabilitasi-instansi.index', $data);
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
            'jumlah_yang_dicurigai' => ['required', 'numeric'],
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

        return back()->withSuccess('Rehabilitasi instansi berhasil diajukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RehabilitasiInstansi  $rehabilitasiInstansi
     * @return \Illuminate\Http\Response
     */
    public function show(RehabilitasiInstansi $rehabilitasiInstansi)
    {
        $data = ['rehabilitasi' => $rehabilitasiInstansi];

        return view('rehabilitasi-instansi.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RehabilitasiInstansi  $rehabilitasiInstansi
     * @return \Illuminate\Http\Response
     */
    public function edit(RehabilitasiInstansi $rehabilitasiInstansi)
    {
        $data = [
            'rehabilitasi' => $rehabilitasiInstansi
        ];

        return view('rehabilitasi-instansi.edit', $data);
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
        $request->validate([
            'nama_lengkap_pelapor' => ['required', 'string',],
            'nama_instansi' => ['required', 'string',],
            'alamat_instansi' => ['required', 'string',],
            'nomor_telepon' => ['required'],
            'jumlah_yang_dicurigai' => ['required', 'numeric'],
            'jenis_penyalahgunaan' => ['required']
        ]);

        $rehabilitasiInstansi->nama_lengkap_pelapor = $request->nama_lengkap_pelapor;
        $rehabilitasiInstansi->nama_instansi = $request->nama_instansi;
        $rehabilitasiInstansi->alamat_instansi = $request->alamat_instansi;
        $rehabilitasiInstansi->nomor_telepon = $request->nomor_telepon;
        $rehabilitasiInstansi->jumlah_yang_dicurigai = $request->jumlah_yang_dicurigai;
        $rehabilitasiInstansi->jenis_penyalahgunaan = $request->jenis_penyalahgunaan;
        $rehabilitasiInstansi->save();

        return back()->withSuccess('Rehabilitasi instansi berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RehabilitasiInstansi  $rehabilitasiInstansi
     * @return \Illuminate\Http\Response
     */
    public function destroy(RehabilitasiInstansi $rehabilitasiInstansi)
    {
        $rehabilitasiInstansi->delete();
        
        return back()->withSuccess('Rehabilitasi instansi berhasil dihapus');
    }
    public function export(Request $request)
    {
        $request->validate([
            'tanggal_dari' => ['required'],
            'tanggal_sampai' => ['required', 'after_or_equal:tanggal_dari']
        ]);

        return Excel::download(new RehabilitasiInstansiExport($request->tanggal_dari . ' 00:00:00', $request->tanggal_sampai . ' 23:59:59'), 'rehabilitasi-instansi ' . $request->tanggal_dari . ' - ' . $request->tanggal_sampai . '.xlsx');
    }
}
