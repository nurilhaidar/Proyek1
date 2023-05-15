<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'jumlah_barang',
        'kondisi'
    ];
}
