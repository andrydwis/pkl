<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skhpn extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomer_ktp',
        'nama_lengkap',
        'tempat_lahir',
        'ttl',
        'jenis_kelamin',
        'alamat',
        'telepon',
        'pekerjaan',
        'tanggal_permohonan',
        'keperluan'
    ];

    public function detail()
    {
        return $this->hasOne(SkhpnDetail::class);
    }
}
