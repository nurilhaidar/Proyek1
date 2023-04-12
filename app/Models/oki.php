<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oki extends Model
{
    use HasFactory;
    protected $table = 'oki';
    // protected $primaryKey = 'id';
    // protected $keyType = 'int';
    protected $fillable = [
        'kode',
        'nama_oki',
        'ketua_oki',
        'jumlah_anggota',
        'akun',
    ];
}
