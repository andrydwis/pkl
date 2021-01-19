<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SurveyController extends Controller
{
    //
    public function index()
    {
        return view('survey.index');
    }


    public function verify(Request $request)
    {
        $request->validate([
            'token' => ['required']
        ]);

        $verify = Survey::where('token', $request->token)->first();
        if ($verify == null) {
            Alert::error('Token tidak valid');
            return back();
        } elseif ($verify->status == 'used') {
            Alert::error('Token telah dipakai');
            return back();
        }
    }
}
