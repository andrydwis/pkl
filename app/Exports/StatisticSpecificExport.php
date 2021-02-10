<?php

namespace App\Exports;

use App\Models\Pertanyaan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class StatisticSpecificExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct(string $date_from, string $date_to)
    {
        $this->date_from = $date_from;
        $this->date_to = $date_to;
    }

    public function view(): View
    {
        $data = [
            'stats' => Pertanyaan::with('jawabans')->get(),
            'tanggal_dari' => $this->date_from,
            'tanggal_sampai' => $this->date_to,
        ];

        return view('survey.export-specific', $data);
    }
}
