<?php

namespace App\Http\Controllers;

use App\Models\Sosialisasi;
use Carbon\Carbon;
use Illuminate\Support\Str;
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
        $data = [
            'sosialisasis' => Sosialisasi::all()
        ];

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
        if ($request->file('lampiran_surat_undangan' != null)) {
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
                'lampiran_surat_undangan' => ['mimes:jpg,png,pdf', 'max:2048']
            ]);

        }else{
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
        if ($request->file('lampiran_surat_undangan') != null) {
            $sosialisasi->lampiran_surat_undangan = $request->file('lampiran_surat_undangan')->storeAs('lampiran_surat_undangan', 'permohonan_sosialisasi' . '_' . Str::slug($request->nama_lengkap) . '_' . Carbon::now()->toDateString() . '.' . $request->file('lampiran_surat_undangan')->extension());
        }else{
            $sosialisasi->lampiran_surat_undangan = null;
        }
        $sosialisasi->save();

        session()->flash('status', 'Sosialisasi berhasil diajukan');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sosialisasi  $sosialisasi
     * @return \Illuminate\Http\Response
     */
    public function show(Sosialisasi $sosialisasi)
    {
        
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
