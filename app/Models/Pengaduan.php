<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'ttl',
        'alamat',
        'telepon',
        'email',
        'lampiran_identitas',
        'pekerjaan',
        'alamat_instansi',
        'telepon_instansi',
        'tanggal_kejadian',
        'waktu_kejadian',
        'keterangan',
        'lampiran_pendukung'
    ];
}
