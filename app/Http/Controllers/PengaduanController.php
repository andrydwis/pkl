<?php

namespace App\Http\Controllers;

use App\Exports\PengaduansExport;
use App\Models\Pengaduan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

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
            'pengaduans' => Pengaduan::orderBy('id', 'desc')->get()
        ];

        return view('pengaduan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pengaduan.create');
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
        if ($request->file('foto_bukti_kejadian') != null) {
            $request->validate([
                'nomer_ktp' => ['required', 'min:16', 'max:16'],
                'nama_lengkap' => ['required', 'string', 'max:255'],
                'ttl' => ['required'],
                'alamat' => ['required'],
                'telepon' => ['required'],
                'pekerjaan' => ['required'],
                'tanggal_kejadian' => ['required'],
                'waktu_kejadian' => ['required'],
                'kategori' => ['required'],
                'isi_pengaduan' => ['required'],
                'foto_bukti_kejadian' => ['mimes:jpg,png,pdf', 'max:2048'],
            ]);
        } else {
            $request->validate([
                'nomer_ktp' => ['required', 'min:16', 'max:16'],
                'nama_lengkap' => ['required', 'string', 'max:255'],
                'ttl' => ['required'],
                'alamat' => ['required'],
                'telepon' => ['required'],
                'pekerjaan' => ['required'],
                'tanggal_kejadian' => ['required'],
                'waktu_kejadian' => ['required'],
                'kategori' => ['required'],
                'isi_pengaduan' => ['required'],
            ]);
        }

        $pengaduan = new Pengaduan();
        $pengaduan->nomer_ktp = $request->nomer_ktp;
        $pengaduan->nama_lengkap = $request->nama_lengkap;
        $pengaduan->ttl = $request->ttl;
        $pengaduan->alamat = $request->alamat;
        $pengaduan->telepon = $request->telepon;
        $pengaduan->pekerjaan = $request->pekerjaan;
        $pengaduan->tanggal_kejadian = $request->tanggal_kejadian;
        $pengaduan->waktu_kejadian = $request->waktu_kejadian;
        $pengaduan->kategori = $request->kategori;
        $pengaduan->isi_pengaduan = $request->isi_pengaduan;
        if ($request->file('foto_bukti_kejadian') != null) {
            $pengaduan->foto_bukti_kejadian = $request->file('foto_bukti_kejadian')->storeAs('pengaduan', 'foto_bukti_kejadian' . '_' . Str::slug($request->nama_lengkap) . '_' . Carbon::now()->toDateString() . '.' . $request->file('foto_bukti_kejadian')->extension());
        } else {
            $pengaduan->foto_bukti_kejadian = null;
        }
        $pengaduan->status = 'diajukan';
        $pengaduan->save();

        Alert::success('Pengaduan berhasil diajukan');

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
        $data = [
            'pengaduan' => $pengaduan
        ];

        return view('pengaduan.show', $data);
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
        $data = [
            'pengaduan' => $pengaduan
        ];

        return view('pengaduan.edit', $data);
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
        if ($request->file('foto_bukti_kejadian') != null) {
            $request->validate([
                'nomer_ktp' => ['required', 'min:16', 'max:16'],
                'nama_lengkap' => ['required', 'string', 'max:255'],
                'ttl' => ['required'],
                'alamat' => ['required'],
                'telepon' => ['required'],
                'pekerjaan' => ['required'],
                'tanggal_kejadian' => ['required'],
                'waktu_kejadian' => ['required'],
                'kategori' => ['required'],
                'isi_pengaduan' => ['required'],
                'foto_bukti_kejadian' => ['mimes:jpg,png,pdf', 'max:2048'],
            ]);
        } else {
            $request->validate([
                'nomer_ktp' => ['required', 'min:16', 'max:16'],
                'nama_lengkap' => ['required', 'string', 'max:255'],
                'ttl' => ['required'],
                'alamat' => ['required'],
                'telepon' => ['required'],
                'pekerjaan' => ['required'],
                'tanggal_kejadian' => ['required'],
                'waktu_kejadian' => ['required'],
                'kategori' => ['required'],
                'isi_pengaduan' => ['required'],
            ]);
        }

        $pengaduan->nomer_ktp = $request->nomer_ktp;
        $pengaduan->nama_lengkap = $request->nama_lengkap;
        $pengaduan->ttl = $request->ttl;
        $pengaduan->alamat = $request->alamat;
        $pengaduan->telepon = $request->telepon;
        $pengaduan->pekerjaan = $request->pekerjaan;
        $pengaduan->tanggal_kejadian = $request->tanggal_kejadian;
        $pengaduan->waktu_kejadian = $request->waktu_kejadian;
        $pengaduan->kategori = $request->kategori;
        $pengaduan->isi_pengaduan = $request->isi_pengaduan;
        if ($pengaduan->foto_bukti_kejadian) {
            if ($request->file('foto_bukti_kejadian') != null) {
                Storage::delete($pengaduan->foto_bukti_kejadian);
                $pengaduan->foto_bukti_kejadian = $request->file('foto_bukti_kejadian')->storeAs('pengaduan', 'foto_bukti_kejadian' . '_' . Str::slug($request->nama_lengkap) . '_' . Carbon::now()->toDateString() . '.' . $request->file('foto_bukti_kejadian')->extension());
            } else {
                $pengaduan->foto_bukti_kejadian = $pengaduan->foto_bukti_kejadian;
            }
        } else {
            if ($request->file('foto_bukti_kejadian') != null) {
                $pengaduan->foto_bukti_kejadian = $request->file('foto_bukti_kejadian')->storeAs('pengaduan', 'foto_bukti_kejadian' . '_' . Str::slug($request->nama_lengkap) . '_' . Carbon::now()->toDateString() . '.' . $request->file('foto_bukti_kejadian')->extension());
            } else {
                $pengaduan->foto_bukti_kejadian = null;
            }
        }
        $pengaduan->save();

        Alert::success('Pengaduan berhasil diupdate');

        return back();
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
        if ($pengaduan->foto_bukti_kejadian) {
            Storage::delete($pengaduan->foto_bukti_kejadian);
            $pengaduan->delete();
        } else {
            $pengaduan->delete();
        }

        Alert::success('Pengaduan berhasil dihapus');

        return back();
    }

    public function export(Request $request)
    {
        $request->validate([
            'tanggal_dari' => ['required'],
            'tanggal_sampai' => ['required', 'after_or_equal:tanggal_dari']
        ]);

        return Excel::download(new PengaduansExport($request->tanggal_dari . ' 00:00:00', $request->tanggal_sampai . ' 23:59:59'), 'pengaduan ' . $request->tanggal_dari . ' - ' . $request->tanggal_sampai . '.xlsx');
    }

    public function processView(Pengaduan $pengaduan)
    {
        $data = [
            'pengaduan' => $pengaduan
        ];

        return view('pengaduan.process', $data);
    }

    public function process(Pengaduan $pengaduan, Request $request)
    {
        $request->validate([
            'status' => ['required'],
            'keterangan' => ['required']
        ]);

        $pengaduan->status = $request->status;
        $pengaduan->keterangan = $request->keterangan;
        $pengaduan->save();

        Alert::success('Pengaduan berhasil diproses');

        return back();
    }
}
