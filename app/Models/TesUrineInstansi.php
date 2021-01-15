<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TesUrineInstansi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_instansi',
        'nama_pemohon',
        'alamat_instansi',
        'tanggal_pelaksanaan_pemeriksaan',
        'waktu_pelaksanaan_pemeriksaan',
        'contact_person',
        'jumlah_peserta_laki',
        'jumlah_peserta_perempuan',
        'lokasi_pemeriksaan'
    ];
}
