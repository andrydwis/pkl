<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Pengaduan;
use App\Models\Product;
use App\Models\RehabilitasiPribadi;
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
            'rehabilitasi_pribadi' => [
                'total_all' => RehabilitasiPribadi::all()->count(),
                'total_year' => RehabilitasiPribadi::whereYear('created_at', Carbon::now()->year)->get()->count(),
                'total_month' => RehabilitasiPribadi::whereMonth('created_at', Carbon::now()->month)->get()->count(),
                'total_day' => RehabilitasiPribadi::whereDay('created_at', Carbon::now()->day)->get()->count()
            ]
        ];

        return view('dashboard', $data);
    }
}
