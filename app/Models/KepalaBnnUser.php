<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KepalaBnnUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'nrp'
    ];
}
