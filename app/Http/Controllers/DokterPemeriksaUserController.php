<?php

namespace App\Http\Controllers;

use App\Models\DokterPemeriksaUser;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DokterPemeriksaUserController extends Controller
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
            'users' => DokterPemeriksaUser::orderBy('id', 'desc')->get()
        ];

        return view('dokter-pemeriksa.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dokter-pemeriksa.create');
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
            'nama_lengkap' => ['required'],
            'sip' => ['required'],
            'nip' => ['required'],
        ]);

        $user = new DokterPemeriksaUser();
        $user->nama_lengkap = $request->nama_lengkap;
        $user->sip = $request->sip;
        $user->nip = $request->nip;
        $user->save();

        Alert::success('Data Dokter Pemeriksa ' . $user->nama_lengkap . ' berhasil dibuat');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DokterPemeriksaUser  $dokterPemeriksaUser
     * @return \Illuminate\Http\Response
     */
    public function show(DokterPemeriksaUser $dokterPemeriksaUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DokterPemeriksaUser  $dokterPemeriksaUser
     * @return \Illuminate\Http\Response
     */
    public function edit(DokterPemeriksaUser $dokterPemeriksaUser)
    {
        //
        $data = [
            'user' => $dokterPemeriksaUser
        ];

        return view('dokter-pemeriksa.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DokterPemeriksaUser  $dokterPemeriksaUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DokterPemeriksaUser $dokterPemeriksaUser)
    {
        //
        $request->validate([
            'nama_lengkap' => ['required'],
            'sip' => ['required'],
            'nip' => ['required'],
        ]);

        $dokterPemeriksaUser->nama_lengkap = $request->nama_lengkap;
        $dokterPemeriksaUser->sip = $request->sip;
        $dokterPemeriksaUser->nip = $request->nip;
        $dokterPemeriksaUser->save();

        Alert::success('Data Dokter Pemeriksa ' . $dokterPemeriksaUser->nama_lengkap . ' berhasil dibuat');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DokterPemeriksaUser  $dokterPemeriksaUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(DokterPemeriksaUser $dokterPemeriksaUser)
    {
        //
        Alert::success('Data Dokter Pemeriksa ' . $dokterPemeriksaUser->nama_lengkap . ' berhasil dihapus');

        $dokterPemeriksaUser->delete();

        return back();
    }
}
