<?php

namespace App\Exports;

use App\Models\Pertanyaan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class StatisticExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('survey.export', [
            'stats' => Pertanyaan::with('jawabans')->get()
        ]);
    }
}
