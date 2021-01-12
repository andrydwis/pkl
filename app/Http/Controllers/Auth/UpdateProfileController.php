<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UpdateProfileController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
        $user = User::find(auth()->user()->id);
        $request->validate([
            'nama' => ['required','string','max:255'],
            'email' => ['required','string','email','max:255', Rule::unique(User::class)->ignore($user->id)],
            'telepon' => ['required','numeric']
        ]);

        $user->name = $request->nama;
        $user->email = $request->email;
        $user->phone = $request->telepon;
        $user->save();

        session()->flash('status', 'Profil berhasil diupdate');

        return redirect()->route('edit-profile.edit')->withSuccess('Profil berhasil diupdate');
    }
}
