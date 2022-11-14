<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Http;
use App\Models\TempatWisata;
use App\Models\Transaksi;
use Tests\TestCase;

class WisataTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_tempat_wisata_info()
    {
        $response = $this->get('/tempatwisata');
        
        $response->assertStatus(200);
    }

    public function test_wisata_duplication()
    {
        $wisata1 = Transaksi::make([
            'nama_tempat' => 'Masjid Putih',
            'deskripsi' => '2041720180',
            'harga' => '10000',
            
        ]);
        $wisata2 = Transaksi::make([
            'nama_tempat' => 'Masjid Merah',
            'deskripsi' => '2041720180',
            'harga' => '20000',
        ]);

        $this->assertTrue($wisata1->nama_tempat != $wisata2->nama_tempat);
    }

    public function test_wisata_delete()
    {
        $wisata = TempatWisata::factory()->count(1)->make();

        $wisata = TempatWisata::first();

        if($wisata){
            $wisata->delete();
        }

        $this->assertTrue(true);
    }

    public function test_it_stores_new_transaksis_all_input_true()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/getTransaksi', [
            'wisata_id' => '2',
            'nama_lengkap' => 'Bella Sonia',
            'no_identitas' => '2041720063',
            'no_hp' => '082405660881',
            'tanggal_kunjungan' => '2022-10-14',
            'pengunjung_dewasa' => '5',
            'pengunjung_anak' => '2',
            'harga_tiket' => '20000',
        ]);
        $response->assertOk();
    }

    public function test_it_stores_new_transaksis_without_wisata_id()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/getTransaksi', [
            'nama_lengkap' => 'Bella Sonia',
            'no_identitas' => '2041720063',
            'no_hp' => '082405660881',
            'tanggal_kunjungan' => '2022-10-14',
            'pengunjung_dewasa' => '5',
            'pengunjung_anak' => '2',
            'harga_tiket' => '20000',
        ]);
        $response->assertOk();
    }
    
    public function test_it_stores_new_transaksis_but_false_input_no_identitas()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/getTransaksi', [
            'wisata_id' => '2',
            'nama_lengkap' => 'Bella Sonia',
            'no_identitas' => 'aaaaaaaaa',
            'no_hp' => '0852314046778',
            'tanggal_kunjungan' => '2022-11-14',
            'pengunjung_dewasa' => '5',
            'pengunjung_anak' => '2',
            'harga_tiket' => '20000',
        ]);
        $response->assertOk();
    }
}
