<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RehabilitasiPribadi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomer_ktp',
        'nama_lengkap',
        'alamat',
        'telepon',
        'jenis_penyalahgunaan',
        'hubungan_dengan_penyalahguna',
        'rencana_kedatangan_ke_klinik'
    ];
}
