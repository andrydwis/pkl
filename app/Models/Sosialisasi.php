<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sosialisasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori',
        'nama_penyelenggara',
        'tanggal',
        'jam_pukul',
        'tempat',
        'nama_pemohon',
        'no_hp_pemohon',
        'jumlah_peserta',
        'tema_kegiatan',
        'lampiran_surat_permohonan',
    ];
}
