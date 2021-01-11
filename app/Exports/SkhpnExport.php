<?php

namespace App\Exports;

use App\Models\Skhpn;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class SkhpnExport implements FromView, ShouldAutoSize
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
        return view('skhpn.export', [
            'skhpns' => Skhpn::whereBetween('created_at', [$this->date_from, $this->date_to])->get()
        ]);
    }
}
