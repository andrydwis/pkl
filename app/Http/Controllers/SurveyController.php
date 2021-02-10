<?php

namespace App\Http\Controllers;

use App\Exports\StatisticExport;
use App\Exports\StatisticSpecificExport;
use App\Models\Jawaban;
use App\Models\Pertanyaan;
use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
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
            'jawaban' => ['required', 'array', 'min:' . $jumlah],
        ];

        $messages = [
            'jawaban.min' => 'Seluruh pertanyaan wajib diisi',
        ];

        $validator = Validator::make($request->all(), $rules, $messages, []);

        $validator->validate();

        $verify = Survey::where('token', $token)->first();
        $verify->status = 'used';
        $verify->save();

        foreach ($request->jawaban as $key => $value) {
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
            'responden' => Survey::where('status', 'used')->count(),
        ];

        return view('survey.statistic', $data);
    }

    public function statisticSpecific(Request $request)
    {
        $request->validate([
            'tanggal_dari' => ['required'],
            'tanggal_sampai' => ['required', 'after_or_equal:tanggal_dari']
        ]);

        $data = [
            'stats' => Pertanyaan::with('jawabans')->get(),
            'responden' => Survey::whereBetween('created_at', [$request->tanggal_dari . ' 00:00:00', $request->tanggal_sampai . ' 23:59:59'])->where('status', 'used')->count(),
            'tanggal_dari' => $request->tanggal_dari . ' 00:00:00',
            'tanggal_sampai' => $request->tanggal_sampai . ' 23:59:59'
        ];

        return view('survey.statistic-specific', $data);
    }

    public function export()
    {
        return Excel::download(new StatisticExport(), 'survey keseluruhan.xlsx');
    }

    public function exportSpecific($tanggal_dari, $tanggal_sampai)
    {
        return Excel::download(new StatisticSpecificExport($tanggal_dari, $tanggal_sampai), 'survey ' . $tanggal_dari . ' - ' . $tanggal_sampai . '.xlsx');
    }
}
