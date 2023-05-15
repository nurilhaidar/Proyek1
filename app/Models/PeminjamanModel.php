<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanModel extends Model
{
    use HasFactory;
    protected $table = 'form_peminjaman';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $fillable = [
        'nama_peminjam',
        'asal_oki',
        'kode_barang',
        'nama_barang',
        'jumlah_barang',
        'tanggal_pinjam',
        'tanggal_kembali',
        'surat',
        'jaminan',
        'kondisi',
        'status'
    ];
}
