<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanIklan extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'nama_usaha',
        'nomor_telepon',
        'paket_iklan',
        'kategori_iklan',
        'harga',
        'unggah_materi',
        'bukti_pembayaran',
        'catatan_tambahan',
        'status',
    ];
}
