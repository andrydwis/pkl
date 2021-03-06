<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required','string','max:255'],
            'email' => ['required','string','email','max:255','unique:users'],
            'password' => ['required','string','confirmed','min:8'],
            'telepon' => ['required','numeric'],
            'role' => ['required']
        ]);

        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->telepon,
            'role' => $request->role,
        ]);

        session()->flash('status', 'Pegawai ' . $request->nama . ' berhasil ditambahkan');

        Alert::success('Pegawai ' . $request->nama . ' berhasil ditambahkan');

        return redirect()->route('create-users');
    }
}
