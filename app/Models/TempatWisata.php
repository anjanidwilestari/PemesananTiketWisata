<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempatWisata extends Model
{
    use HasFactory;
    protected $table ='tempat_wisatas';

    protected $fillable =[
        'nama_tempat',
        'deskripsi',
        'gambar',
        'harga',
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
