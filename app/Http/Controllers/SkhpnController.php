<?php

namespace App\Http\Controllers;

use App\Exports\SkhpnExport;
use App\Models\DokterPemeriksaUser;
use App\Models\KepalaBnnUser;
use App\Models\PetugasPemeriksaUser;
use App\Models\Skhpn;
use App\Models\SkhpnDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpWord\TemplateProcessor;
use RealRashid\SweetAlert\Facades\Alert;

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
            'skhpns' => Skhpn::all()
        ];

        return view('skhpn.index', $data);
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

        Alert::success('SKHPN berhasil diajukan');

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
        $data = [
            'skhpn' => $skhpn
        ];

        return view('skhpn.show', $data);
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
        $data = [
            'skhpn' => $skhpn
        ];

        return view('skhpn.edit', $data);
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

        Alert::success('SKHPN berhasil diupdate');

        return back();
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
        $skhpn->delete();

        Alert::success('SKHPN berhasil dihapus');

        return back();
    }

    public function export(Request $request)
    {
        $request->validate([
            'tanggal_dari' => ['required'],
            'tanggal_sampai' => ['required', 'after_or_equal:tanggal_dari']
        ]);

        return Excel::download(new SkhpnExport($request->tanggal_dari . ' 00:00:00', $request->tanggal_sampai . ' 23:59:59'), 'skhpn ' . $request->tanggal_dari . ' - ' . $request->tanggal_sampai . '.xlsx');
    }

    public function processView(Skhpn $skhpn)
    {
        $tahun = Carbon::now()->year;
        $bulan = Carbon::now()->month;
        $bulanRomawi = array("", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X", "XI", "XII");
        $nomer_max = SkhpnDetail::where('tahun', $tahun)->max('nomer');
        $nomer_awal = 1;

        if ($nomer_max) {
            $nomer_surat = 'SKHPN-' . sprintf("%04s", abs($nomer_max + 1)) . '/' . $bulanRomawi[$bulan] . '/' . '35-73' . '/' . 'Kota Malang' . '/' . $tahun . '/' . 'BNN';
        } else {
            $nomer_surat = 'SKHPN-' . sprintf("%04s", $nomer_awal) . '/' . $bulanRomawi[$bulan] . '/' . '35-73' . '/' . 'Kota Malang' . '/' . $tahun . '/' . 'BNN';
        }

        $skhpnDetail = $skhpn->detail;
        $nomer = abs($nomer_max + 1) ?? $nomer_awal;

        $data = [
            'nomer' => $nomer,
            'nomer_surat' => $nomer_surat,
            'skhpn' => $skhpn,
            'detail' => $skhpnDetail,
            'kepala_bnns' => KepalaBnnUser::all(),
            'dokter_pemeriksas' => DokterPemeriksaUser::all(),
            'petugas_pemeriksas' => PetugasPemeriksaUser::all()
        ];

        return view('skhpn.process', $data);
    }

    public function process(Skhpn $skhpn, Request $request)
    {
        $request->validate([
            'nomer_surat' => ['required', Rule::unique('skhpn_details')->ignore($skhpn->detail)],
            'nama_lengkap' => ['required', 'string', 'max:255'],
            'tempat_lahir' => ['required'],
            'ttl' => ['required'],
            'jenis_kelamin' => ['required'],
            'alamat' => ['required'],
            'keperluan' => ['required'],
            'hasil_tes' => ['required'],
            'dast_10' => ['required'],
            'kepala_bnn' => ['required'],
            'dokter_pemeriksa' => ['required'],
            'petugas_pemeriksa' => ['required']
        ]);

        $check = SkhpnDetail::where('nomer_surat', $request->nomer_surat)->first();
        if ($check) {
            $check->nomer_surat = $request->nomer_surat;
            $check->hasil_tes = $request->hasil_tes;
            $check->dast_10 =  $request->dast_10;
            $check->tanggal_terbit = Carbon::now()->isoFormat('Y-M-D');
            $check->kepala_bnn_id = $request->kepala_bnn;
            $check->dokter_pemeriksa_id = $request->dokter_pemeriksa;
            $check->petugas_pemeriksa_id = $request->petugas_pemeriksa;
            $check->save();
        } else {
            $detail =  new SkhpnDetail();
            $detail->skhpn_id = $skhpn->id;
            $detail->nomer = $request->nomer;
            $detail->nomer_surat = $request->nomer_surat;
            $detail->tahun = Carbon::now()->year;
            $detail->hasil_tes = $request->hasil_tes;
            $detail->dast_10 =  $request->dast_10;
            $detail->tanggal_terbit = Carbon::now()->isoFormat('Y-M-D');
            $detail->kepala_bnn_id = $request->kepala_bnn;
            $detail->dokter_pemeriksa_id = $request->dokter_pemeriksa;
            $detail->petugas_pemeriksa_id = $request->petugas_pemeriksa;
            $detail->save();
        }

        $template = public_path('template/template.docx');

        $templateProcessor = new TemplateProcessor($template);

        $templateProcessor->setValue('nomer_surat', $request->nomer_surat);
        $templateProcessor->setValue('nama_lengkap', $request->nama_lengkap);
        $templateProcessor->setValue('nomer_ktp', $request->nomer_ktp);
        $templateProcessor->setValue('jenis_kelamin', $request->jenis_kelamin);
        $templateProcessor->setValue('tempat_lahir', $request->tempat_lahir);
        $templateProcessor->setValue('tanggal_lahir', Carbon::createFromFormat('Y-m-d', $request->ttl)->isoFormat('D MMMM Y'));
        $templateProcessor->setValue('nama_lengkap', $request->nama_lengkap);
        $templateProcessor->setValue('pekerjaan', $request->pekerjaan);
        $templateProcessor->setValue('alamat', $request->alamat);
        $templateProcessor->setValue('dast_10', $request->dast_10);
        $templateProcessor->setValue('hasil_tes', $request->hasil_tes);
        $templateProcessor->setValue('nama_lengkap', $request->nama_lengkap);
        $templateProcessor->setValue('keperluan', $request->keperluan);
        $templateProcessor->setValue('tanggal_terbit', Carbon::now()->isoFormat('D MMMM Y'));

        if($request->has('amphetamine')){
            $templateProcessor->setValue('amphetamine', '+ ( Positif )');
        }else{
            $templateProcessor->setValue('amphetamine', '- ( Negatif )');
        }

        if($request->has('methaphetamine')){
            $templateProcessor->setValue('methaphetamine', '+ ( Positif )');
        }else{
            $templateProcessor->setValue('methaphetamine', '- ( Negatif )');
        }

        if($request->has('cocaine')){
            $templateProcessor->setValue('cocaine', '+ ( Positif )');
        }else{
            $templateProcessor->setValue('cocaine', '- ( Negatif )');
        }

        if($request->has('morphine')){
            $templateProcessor->setValue('morphine', '+ ( Positif )');
        }else{
            $templateProcessor->setValue('morphine', '- ( Negatif )');
        }

        if($request->has('thc')){
            $templateProcessor->setValue('thc', '+ ( Positif )');
        }else{
            $templateProcessor->setValue('thc', '- ( Negatif )');
        }

        if($request->has('benzodiazepine')){
            $templateProcessor->setValue('benzodiazepine', '+ ( Positif )');
        }else{
            $templateProcessor->setValue('benzodiazepine', '- ( Negatif )');
        }

        $filename = $request->nomer_surat . '.docx';
        header("Content-Description: File Transfer");
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        header('Content-Transfer-Encoding: binary');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Expires: 0');
        ob_clean();
        $templateProcessor->saveAs('php://output');
        exit;
        
        return back();
    }
}
