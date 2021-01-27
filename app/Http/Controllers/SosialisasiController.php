<?php

namespace App\Http\Controllers;

use App\Exports\SosialisasiExport;
use App\Models\Sosialisasi;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

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
            'sosialisasis' => Sosialisasi::orderBy('id', 'desc')->get()
        ];

        // return $data;
        return view('sosialisasi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sosialisasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('lampiran_surat_permohonan' != null)) {
            $request->validate([
                'kategori' => ['required'],
                'nama_penyelenggara' => ['required'],
                'tanggal' => ['required'],
                'jam_pukul' => ['required'],
                'tempat' => ['required'],
                'nama_pemohon' => ['required'],
                'no_hp_pemohon' => ['required'],
                'jumlah_peserta' => ['required'],
                'tema_kegiatan'  => ['required'],
                'lampiran_surat_permohonan' => ['mimes:jpg,png,pdf', 'max:2048']
            ]);
        } else {
            $request->validate([
                'kategori' => ['required'],
                'nama_penyelenggara' => ['required'],
                'tanggal' => ['required'],
                'jam_pukul' => ['required'],
                'tempat' => ['required'],
                'nama_pemohon' => ['required'],
                'no_hp_pemohon' => ['required'],
                'jumlah_peserta' => ['required'],
                'tema_kegiatan'  => ['required'],
            ]);
        }

        $sosialisasi = new Sosialisasi();
        $sosialisasi->kategori = $request->kategori;
        $sosialisasi->nama_penyelenggara = $request->nama_penyelenggara;
        $sosialisasi->tanggal = $request->tanggal;
        $sosialisasi->jam_pukul = $request->jam_pukul;
        $sosialisasi->tempat = $request->tempat;
        $sosialisasi->nama_pemohon = $request->nama_pemohon;
        $sosialisasi->no_hp_pemohon = $request->no_hp_pemohon;
        $sosialisasi->jumlah_peserta = $request->jumlah_peserta;
        $sosialisasi->tema_kegiatan = $request->tema_kegiatan;
        if ($request->file('lampiran_surat_permohonan') != null) {
            $sosialisasi->lampiran_surat_permohonan = $request->file('lampiran_surat_permohonan')->storeAs('lampiran_surat_permohonan', 'permohonan_sosialisasi' . '_' . Str::slug($request->nama_pemohon) . '_' . Carbon::now()->toDateString() . '.' . $request->file('lampiran_surat_permohonan')->extension());
        } else {
            $sosialisasi->lampiran_surat_permohonan = null;
        }
        $sosialisasi->save();

        Alert::success('Sosialisasi berhasil diajukan');

        return redirect();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sosialisasi  $sosialisasi
     * @return \Illuminate\Http\Response
     */
    public function show(Sosialisasi $sosialisasi)
    {
        $data = [
            'sosialisasi' => $sosialisasi
        ];

        return view('sosialisasi.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sosialisasi  $sosialisasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Sosialisasi $sosialisasi)
    {
        $data = [
            'sosialisasi' => $sosialisasi
        ];

        return view('sosialisasi.edit', $data);
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
        if ($request->file('lampiran_surat_permohonan' != null)) {
            $request->validate([
                'kategori' => ['required'],
                'nama_penyelenggara' => ['required'],
                'tanggal' => ['required'],
                'jam_pukul' => ['required'],
                'tempat' => ['required'],
                'nama_pemohon' => ['required'],
                'no_hp_pemohon' => ['required'],
                'jumlah_peserta' => ['required'],
                'tema_kegiatan'  => ['required'],
                'lampiran_surat_permohonan' => ['mimes:jpg,png,pdf', 'max:2048']
            ]);
        } else {
            $request->validate([
                'kategori' => ['required'],
                'nama_penyelenggara' => ['required'],
                'tanggal' => ['required'],
                'jam_pukul' => ['required'],
                'tempat' => ['required'],
                'nama_pemohon' => ['required'],
                'no_hp_pemohon' => ['required'],
                'jumlah_peserta' => ['required'],
                'tema_kegiatan'  => ['required'],
            ]);
        }

        $sosialisasi->kategori = $request->kategori;
        $sosialisasi->nama_penyelenggara = $request->nama_penyelenggara;
        $sosialisasi->tanggal = $request->tanggal;
        $sosialisasi->jam_pukul = $request->jam_pukul;
        $sosialisasi->tempat = $request->tempat;
        $sosialisasi->nama_pemohon = $request->nama_pemohon;
        $sosialisasi->no_hp_pemohon = $request->no_hp_pemohon;
        $sosialisasi->jumlah_peserta = $request->jumlah_peserta;
        $sosialisasi->tema_kegiatan = $request->tema_kegiatan;

        if ($request->lampiran_surat_permohonan) {
            if ($sosialisasi->lampiran_surat_permohonan != null) {
                Storage::delete($sosialisasi->lampiran_surat_permohonan);
                $sosialisasi->lampiran_surat_permohonan = $request->file('lampiran_surat_permohonan')->storeAs('lampiran_surat_permohonan', 'permohonan_sosialisasi' . '_' . Str::slug($request->nama_pemohon) . '_' . Carbon::now()->toDateString() . '.' . $request->file('lampiran_surat_permohonan')->extension());
            } else {
                $sosialisasi->lampiran_surat_permohonan = $request->lampiran_surat_permohonan;
            }
        } else {
            if ($request->file('lampiran_surat_permohonan') != null) {
                $sosialisasi->lampiran_surat_permohonan = $request->file('lampiran_surat_permohonan')->storeAs('lampiran_surat_permohonan', 'permohonan_sosialisasi' . '_' . Str::slug($request->nama_pemohon) . '_' . Carbon::now()->toDateString() . '.' . $request->file('lampiran_surat_permohonan')->extension());
            } else {
                $sosialisasi->lampiran_surat_permohonan = null;
            }
        }
        $sosialisasi->status = 'diajukan';
        $sosialisasi->save();

        Alert::success('Sosialisasi berhasil diupdate');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sosialisasi  $sosialisasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sosialisasi $sosialisasi)
    {
        if ($sosialisasi->lampiran_surat_permohonan) {
            Storage::delete($sosialisasi->lampiran_surat_permohonan);
            $sosialisasi->delete();
        } else {
            $sosialisasi->delete();
        }

        Alert::success('Sosialisasi berhasil dihapus');

        return redirect()->route('survey.index');
    }

    public function export(Request $request)
    {
        $request->validate([
            'tanggal_dari' => ['required'],
            'tanggal_sampai' => ['required', 'after_or_equal:tanggal_dari']
        ]);
        
        return Excel::download(new SosialisasiExport($request->tanggal_dari . ' 00:00:00', $request->tanggal_sampai . ' 23:59:59'), 'permohonan sosialisasi ' . $request->tanggal_dari . ' - ' . $request->tanggal_sampai . '.xlsx');
    }

    public function processView(Sosialisasi $sosialisasi)
    {
        $data = [
            'sosialisasi' => $sosialisasi
        ];

        return view('sosialisasi.process', $data);
    }

    public function process(Sosialisasi $sosialisasi, Request $request)
    {
        $request->validate([
            'status' => ['required'],
            'keterangan' => ['required']
        ]);

        $sosialisasi->status = $request->status;
        $sosialisasi->keterangan = $request->keterangan;
        $sosialisasi->save();

        Alert::success('Sosialisasi berhasil diproses');

        return back();
    }
}
