<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokterPemeriksaUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'sip',
        'nip'
    ];
}
