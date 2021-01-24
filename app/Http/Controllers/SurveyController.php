<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Pertanyaan;
use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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

            return redirect()->route('survey.index');
        } elseif ($verify->status == 'used') {
            Alert::error('Token telah dipakai');

            return redirect()->route('survey.index');
        }

        return redirect()->route('survey.answer-view', ['token' => $request->token]);
    }

    public function answerView($token)
    {
        $verify = Survey::where('token', $token)->first();
        if ($verify == null) {
            Alert::error('Token tidak valid');

            return redirect()->route('survey.index');
        } elseif ($verify->status == 'used') {
            Alert::error('Token telah dipakai');

            return redirect()->route('survey.index');
        }

        $data = [
            'pertanyaans' => Pertanyaan::all(),
            'token' => $token,
        ];

        return view('survey.create', $data);
    }

    public function answer($token, Request $request)
    {
        $jumlah = Pertanyaan::all()->count();

        $rules = [
            'jawaban' => ['required', 'array', 'min:'.$jumlah],
        ];

        $messages = [
            'jawaban.min' => 'Seluruh pertanyaan wajib diisi',
        ];

        $validator = Validator::make($request->all(), $rules, $messages, [
        ]);

        $validator->validate();

        $verify = Survey::where('token', $token)->first();
        $verify->status = 'used';
        $verify->save();
        
        foreach($request->jawaban as $key => $value){
            $jawaban = new Jawaban();
            $jawaban->pertanyaan_id = $key;
            $jawaban->jawaban = $value;
            $jawaban->save();
        }

        Alert::success('Survey berhasil tersimpan');

        return redirect()->route('survey.index');
    }

    public function statistic()
    {
        $data = [
            'stats' => Pertanyaan::with('jawabans')->get(),
            'survey' => Jawaban::get(),
            'jumlah' => Pertanyaan::with('jawabans')->count(),
        ];

        // ['stats'][0]->jawabans[0];
        //return $data;
        // ['stats'][0]->jawabans->count();
        return view('survey.statistic', $data);
    }
}
