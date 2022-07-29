<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table ='transaksis';

    protected $fillable =[
        'wisata_id',
        'nama_lengkap',
        'no_identitas',
        'no_hp',
        'tanggal_kunjungan',
        'pengunjung_dewasa',
        'pengunjung_anak',
        'harga_tiket',
        'total_bayar',
    ];
    public function tempatwisata()
    {
        return $this->belongsTo(TempatWisata::class, 'wisata_id', 'id');
    }
}
