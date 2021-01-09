<?php

namespace App\Http\Controllers;

use App\Exports\RehabilitasiPribadiExport;
use App\Models\RehabilitasiPribadi;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

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
        $data = [
            'rehabilitasis' => RehabilitasiPribadi::all()
        ];

        return view('rehabilitasi-pribadi.index', $data);
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
            'nomer_ktp' => ['required', 'min:16', 'max:16'],
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
        $rehabilitasi->telepon = $request->telepon;
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
        $data = [
            'rehabilitasi' => $rehabilitasiPribadi
        ];

        return view('rehabilitasi-pribadi.show', $data);
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
        $data = [
            'rehabilitasi' => $rehabilitasiPribadi
        ];

        return view('rehabilitasi-pribadi.edit', $data);
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
        $request->validate([
            'nomer_ktp' => ['required', 'min:16', 'max:16'],
            'nama_lengkap' => ['required', 'string', 'max:255'],
            'alamat' => ['required'],
            'telepon' => ['required'],
            'jenis_penyalahgunaan' => ['required'],
            'hubungan_dengan_penyalahguna' => ['required'],
            'rencana_kedatangan_ke_klinik' => ['required']
        ]);

        $rehabilitasiPribadi->nomer_ktp = $request->nomer_ktp;
        $rehabilitasiPribadi->nama_lengkap = $request->nama_lengkap;
        $rehabilitasiPribadi->alamat = $request->alamat;
        $rehabilitasiPribadi->telepon = $request->telepon;
        $rehabilitasiPribadi->jenis_penyalahgunaan = $request->jenis_penyalahgunaan;
        $rehabilitasiPribadi->hubungan_dengan_penyalahguna = $request->hubungan_dengan_penyalahguna;
        $rehabilitasiPribadi->rencana_kedatangan_ke_klinik = $request->rencana_kedatangan_ke_klinik;
        $rehabilitasiPribadi->save();

        session()->flash('status', 'Rehabilitasi pribadi berhasil diupdate');

        return back();
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
        $rehabilitasiPribadi->delete();

        session()->flash('status', 'Rehabilitasi pribadi berhasil dihapus');

        return back();
    }

    public function export(Request $request)
    {
        $request->validate([
            'tanggal_dari' => ['required'],
            'tanggal_sampai' => ['required', 'after_or_equal:tanggal_dari']
        ]);

        return Excel::download(new RehabilitasiPribadiExport($request->tanggal_dari . ' 00:00:00', $request->tanggal_sampai . ' 23:59:59'), 'rehabilitasi-pribadi ' . $request->tanggal_dari . ' - ' . $request->tanggal_sampai . '.xlsx');
    }
}
