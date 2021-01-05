<?php

namespace App\Exports;

use App\Models\Pengaduan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PengaduansExport implements FromView, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public function view(): View
    {
        return view('pengaduan.export', [
            'pengaduans' => Pengaduan::all()
        ]);
    }
}
