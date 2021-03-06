<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ChangePasswordController extends Controller
{
    //
    public function edit(User $user)
    {
        $data = [
            'user' => $user
        ];
        return view('init.edit-password', $data);
    }

    public function update(Request $request)
    {
        $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = auth()->user();
        $user->password = Hash::make($request->password);
        $user->save();

        Alert::success('Password berhasil diganti');

        return redirect()->route('change-password');
    }
}
