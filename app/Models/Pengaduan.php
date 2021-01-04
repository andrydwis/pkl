<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomer_ktp',
        'nama_lengkap',
        'ttl',
        'alamat',
        'telepon',
        'pekerjaan',
        'tanggal_kejadian',
        'waktu_kejadian',
        'kategori',
        'isi_pengaduan',
        'foto_bukti_kejadian'
    ];
}
