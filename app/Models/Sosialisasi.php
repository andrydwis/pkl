<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sosialisasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_sosialisasi',
        'nama_penyelenggara',
        'tanggal',
        'jam_pukul',
        'tempat',
        'nama_penanggung_jawab',
        'no_hp_penanggung_jawab',
        'jumlah_peserta',
        'keterangan',
        'lampiran_surat_undangan',
    ];
}
