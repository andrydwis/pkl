<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Pengaduan;
use App\Models\Product;
use App\Models\RehabilitasiInstansi;
use App\Models\RehabilitasiPribadi;
use App\Models\Skhpn;
use App\Models\Sosialisasi;
use App\Models\TesUrineInstansi;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
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
        $data = [
            'pengaduan' => [
                'total_all' => Pengaduan::all()->count(),
                'total_year' => Pengaduan::whereYear('created_at', Carbon::now()->year)->get()->count(),
                'total_month' => Pengaduan::whereMonth('created_at', Carbon::now()->month)->get()->count(),
                'total_day' => Pengaduan::whereDay('created_at', Carbon::now()->day)->get()->count()
            ],
            'sosialisasi' => [
                'total_all' => Sosialisasi::all()->count(),
                'total_year' => Sosialisasi::whereYear('created_at', Carbon::now()->year)->get()->count(),
                'total_month' => Sosialisasi::whereMonth('created_at', Carbon::now()->month)->get()->count(),
                'total_day' => Sosialisasi::whereDay('created_at', Carbon::now()->day)->get()->count()
            ],
            'rehabilitasi_pribadi' => [
                'total_all' => RehabilitasiPribadi::all()->count(),
                'total_year' => RehabilitasiPribadi::whereYear('created_at', Carbon::now()->year)->get()->count(),
                'total_month' => RehabilitasiPribadi::whereMonth('created_at', Carbon::now()->month)->get()->count(),
                'total_day' => RehabilitasiPribadi::whereDay('created_at', Carbon::now()->day)->get()->count()
            ],
            'rehabilitasi_instansi' => [
                'total_all' => RehabilitasiInstansi::all()->count(),
                'total_year' => RehabilitasiInstansi::whereYear('created_at', Carbon::now()->year)->get()->count(),
                'total_month' => RehabilitasiInstansi::whereMonth('created_at', Carbon::now()->month)->get()->count(),
                'total_day' => RehabilitasiInstansi::whereDay('created_at', Carbon::now()->day)->get()->count()
            ],
            'skhpn' => [
                'total_all' => Skhpn::all()->count(),
                'total_year' => Skhpn::whereYear('created_at', Carbon::now()->year)->get()->count(),
                'total_month' => Skhpn::whereMonth('created_at', Carbon::now()->month)->get()->count(),
                'total_day' => Skhpn::whereDay('created_at', Carbon::now()->day)->get()->count()
            ],
            'tes_urine_instansi' => [
                'total_all' => TesUrineInstansi::all()->count(),
                'total_year' => TesUrineInstansi::whereYear('created_at', Carbon::now()->year)->get()->count(),
                'total_month' => TesUrineInstansi::whereMonth('created_at', Carbon::now()->month)->get()->count(),
                'total_day' => TesUrineInstansi::whereDay('created_at', Carbon::now()->day)->get()->count()
            ],
        ];

        return view('dashboard', $data);
    }
}
