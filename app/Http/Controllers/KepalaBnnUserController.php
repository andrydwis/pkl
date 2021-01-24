<?php

namespace App\Http\Controllers;

use App\Models\KepalaBnnUser;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KepalaBnnUserController extends Controller
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
            'users' => KepalaBnnUser::orderBy('id', 'desc')->get()
        ];

        return view('kepala-bnn.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kepala-bnn.create');
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
            'nrp' => ['required']
        ]);

        $user = new KepalaBnnUser();
        $user->nama_lengkap = $request->nama_lengkap;
        $user->nrp = $request->nrp;
        $user->save();

        Alert::success('Data Kepala BNN ' . $user->nama_lengkap . ' berhasil dibuat');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KepalaBnnUser  $kepalaBnnUser
     * @return \Illuminate\Http\Response
     */
    public function show(KepalaBnnUser $kepalaBnnUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KepalaBnnUser  $kepalaBnnUser
     * @return \Illuminate\Http\Response
     */
    public function edit(KepalaBnnUser $kepalaBnnUser)
    {
        //
        $data = [
            'user' => $kepalaBnnUser
        ];

        return view('kepala-bnn.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KepalaBnnUser  $kepalaBnnUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KepalaBnnUser $kepalaBnnUser)
    {
        //
        $request->validate([
            'nama_lengkap' => ['required'],
            'nrp' => ['required']
        ]);

        $kepalaBnnUser->nama_lengkap = $request->nama_lengkap;
        $kepalaBnnUser->nrp = $request->nrp;
        $kepalaBnnUser->save();

        Alert::success('Data Kepala BNN ' . $kepalaBnnUser->nama_lengkap . ' berhasil diupdate');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KepalaBnnUser  $kepalaBnnUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(KepalaBnnUser $kepalaBnnUser)
    {
        //
        Alert::success('Data Kepala BNN ' . $kepalaBnnUser->nama_lengkap . ' berhasil dihapus');

        $kepalaBnnUser->delete();

        return back();
    }
}
