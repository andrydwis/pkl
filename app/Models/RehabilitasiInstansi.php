<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RehabilitasiInstansi extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nama_lengkap_pelapor',
        'nama_instansi',
        'alamat_instansi',
        'nomor_telepon',
        'jumlah_yang_dicurigai',
        'jenis_penyalahgunaan',
    ];
}
