<?php

namespace App\Http\Controllers;

use App\Models\Skhpn;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;

class SkhpnController extends Controller
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
            'skhpn' => Skhpn::all()
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('skhpn.create');
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
            'nomer_ktp' => ['required', 'min:16', 'max:16'],
            'nama_lengkap' => ['required', 'string', 'max:255'],
            'tempat_lahir' => ['required'],
            'ttl' => ['required'],
            'jenis_kelamin' => ['required'],
            'alamat' => ['required'],
            'telepon' => ['required'],
            'pekerjaan' => ['required'],
            'tanggal_permohonan' => ['required'],
            'keperluan' => ['required']
        ]);

        $skhpn = new Skhpn();
        $skhpn->nomer_ktp = $request->nomer_ktp;
        $skhpn->nama_lengkap = $request->nama_lengkap;
        $skhpn->tempat_lahir = $request->tempat_lahir;
        $skhpn->ttl = $request->ttl;
        $skhpn->jenis_kelamin = $request->jenis_kelamin;
        $skhpn->alamat = $request->alamat;
        $skhpn->telepon = $request->telepon;
        $skhpn->pekerjaan = $request->pekerjaan;
        $skhpn->tanggal_permohonan = $request->tanggal_permohonan;
        $skhpn->keperluan = $request->keperluan;
        $skhpn->save();

        session()->flash('status', 'SKHPN berhasil diajukan');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TesUrinePribadi  $tesUrinePribadi
     * @return \Illuminate\Http\Response
     */
    public function show(Skhpn $skhpn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TesUrinePribadi  $tesUrinePribadi
     * @return \Illuminate\Http\Response
     */
    public function edit(Skhpn $skhpn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TesUrinePribadi  $tesUrinePribadi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skhpn $skhpn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TesUrinePribadi  $tesUrinePribadi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skhpn $skhpn)
    {
        //
    }

    public function word()
    {
        $template = public_path('template/template.docx');

        $templateProcessor = new TemplateProcessor($template);

        $templateProcessor->setValue('nama_lengkap', 'Andry Dwi S');
        $templateProcessor->setValue('nim', '0123');

        $filename = 'output.docx';
        header("Content-Description: File Transfer");
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        header('Content-Transfer-Encoding: binary');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Expires: 0');
        $templateProcessor->saveAs('php://output');
    }
}
