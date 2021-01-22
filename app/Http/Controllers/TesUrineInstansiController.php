<?php

namespace App\Http\Controllers;

use App\Exports\TesUrineInstansiExport;
use App\Models\TesUrineInstansi;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class TesUrineInstansiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'tes_urine_instansis' => TesUrineInstansi::orderBy('id', 'desc')->get()
        ];

        return view('tes-urine-instansi.index', $data);
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
        $request->validate([
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
        $tesUrineInstansi->contact_person = $request->contact_person;
        $tesUrineInstansi->jumlah_peserta_laki = $request->jumlah_peserta_laki;
        $tesUrineInstansi->jumlah_peserta_perempuan = $request->jumlah_peserta_perempuan;
        $tesUrineInstansi->lokasi_pemeriksaan = $request->lokasi_pemeriksaan;
        $tesUrineInstansi->save();

        Alert::success('Tes urine instansi berhasil diajukan');
        
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
        $data = [
            'tes_urine_instansi' => $tesUrineInstansi
        ];

        return view('tes-urine-instansi.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TesUrineInstansi  $tesUrineInstansi
     * @return \Illuminate\Http\Response
     */
    public function edit(TesUrineInstansi $tesUrineInstansi)
    {
        $data = [
            'tes_urine_instansi' => $tesUrineInstansi
        ];

        return view('tes-urine-instansi.edit', $data);
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
        $request->validate([
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

        $tesUrineInstansi->nama_instansi = $request->nama_instansi;
        $tesUrineInstansi->nama_pemohon = $request->nama_pemohon;
        $tesUrineInstansi->alamat_instansi = $request->alamat_instansi;
        $tesUrineInstansi->tanggal_pelaksanaan_pemeriksaan = $request->tanggal_pelaksanaan_pemeriksaan;
        $tesUrineInstansi->waktu_pelaksanaan_pemeriksaan = $request->waktu_pelaksanaan_pemeriksaan;
        $tesUrineInstansi->contact_person = $request->contact_person;
        $tesUrineInstansi->jumlah_peserta_laki = $request->jumlah_peserta_laki;
        $tesUrineInstansi->jumlah_peserta_perempuan = $request->jumlah_peserta_perempuan;
        $tesUrineInstansi->lokasi_pemeriksaan = $request->lokasi_pemeriksaan;
        $tesUrineInstansi->save();

        Alert::success('Tes urine instansi berhasil diupdate');

        return back()->withSuccess('Tes urine instansi berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TesUrineInstansi  $tesUrineInstansi
     * @return \Illuminate\Http\Response
     */
    public function destroy(TesUrineInstansi $tesUrineInstansi)
    {
        $tesUrineInstansi->delete();

        Alert::success('Tes urine instansi berhasil dihapus');
        
        return back();
    }

    public function export(Request $request)
    {
        $request->validate([
            'tanggal_dari' => ['required'],
            'tanggal_sampai' => ['required', 'after_or_equal:tanggal_dari']
        ]);

        return Excel::download(new TesUrineInstansiExport($request->tanggal_dari . ' 00:00:00', $request->tanggal_sampai . ' 23:59:59'), 'permohonan_test_urine_instansi ' . $request->tanggal_dari . ' - ' . $request->tanggal_sampai . '.xlsx');
    }
}
