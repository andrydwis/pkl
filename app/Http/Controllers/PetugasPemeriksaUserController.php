<?php

namespace App\Http\Controllers;

use App\Models\PetugasPemeriksaUser;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PetugasPemeriksaUserController extends Controller
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
            'users' => PetugasPemeriksaUser::orderBy('id', 'desc')->get()
        ];

        return view('petugas-pemeriksa.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('petugas-pemeriksa.create');
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
        ]);

        $user = new PetugasPemeriksaUser();
        $user->nama_lengkap = $request->nama_lengkap;
        $user->sip = $request->sip;
        $user->save();

        Alert::success('Data Dokter Pemeriksa ' . $user->nama_lengkap . ' berhasil dibuat');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PetugasPemeriksaUser  $petugasPemeriksaUser
     * @return \Illuminate\Http\Response
     */
    public function show(PetugasPemeriksaUser $petugasPemeriksaUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PetugasPemeriksaUser  $petugasPemeriksaUser
     * @return \Illuminate\Http\Response
     */
    public function edit(PetugasPemeriksaUser $petugasPemeriksaUser)
    {
        //
        $data = [
            'user' => $petugasPemeriksaUser
        ];

        return view('petugas-pemeriksa.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PetugasPemeriksaUser  $petugasPemeriksaUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PetugasPemeriksaUser $petugasPemeriksaUser)
    {
        //
        $request->validate([
            'nama_lengkap' => ['required'],
            'sip' => ['required'],
        ]);

        $petugasPemeriksaUser->nama_lengkap = $request->nama_lengkap;
        $petugasPemeriksaUser->sip = $request->sip;
        $petugasPemeriksaUser->save();

        Alert::success('Data Dokter Pemeriksa ' . $petugasPemeriksaUser->nama_lengkap . ' berhasil diupdate');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PetugasPemeriksaUser  $petugasPemeriksaUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(PetugasPemeriksaUser $petugasPemeriksaUser)
    {
        //
        Alert::success('Data Petugas Pemeriksa ' . $petugasPemeriksaUser->nama_lengkap . ' berhasil dihapus');

        $petugasPemeriksaUser->delete();

        return back();
    }
}
