<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkhpnDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'skhpn_id',
        'nomer',
        'year',
        'nomer_surat',
        'hasil_tes',
        'dast-10',
        'tanggal_terbit'
    ];
}
