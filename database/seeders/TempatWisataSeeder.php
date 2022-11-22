<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TempatWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tempat_wisatas')->insert([
            [
                'nama_tempat'=>'Masjid Merah',
                'deskripsi'=>'Masjid merah yang berani berdiri dengan tegak yang berada pada tengah permukiman Warga Pandaan',
                'harga'=>'20000',
            ],
            [
                'nama_tempat'=>'Masjid Biru',
                'deskripsi'=>'Masjid biru yang menyejukkan hati berada pada keramaian hiruk pikuk warga pusat Negara Turki',
                'harga'=>'40000',
            ],
            [
                'nama_tempat'=>'Masjid Putih',
                'deskripsi'=>'Masjid putih yang elegan sebersih mata memandang yang berada pada keindahan Negara Pakistan',
                'harga'=>'30000',
            ]
        ]);
    }
}
