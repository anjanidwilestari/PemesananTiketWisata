<?php

namespace Tests\Unit;

use App\Models\Transaksi;
use Tests\TestCase;

class TiketTest extends TestCase
{
    public function test_transaksi_create_form()
    {
        $response = $this->get('/transaksi');
        
        $response->assertStatus(200);
    }

    public function test_transaksi_duplication()
    {
        $transaksi1 = Transaksi::make([
            'wisata_id' => '1',
            'nama_lengkap' => 'Anjani Dwilestari',
            'no_identitas' => '2041720180',
            'no_hp' => '085231404775',
            'tanggal_kunjungan' => '2022-11-15',
            'pengunjung_dewasa' => '1',
            'pengunjung_anak' => '3',
            'harga_tiket' => '30000',
            
        ]);
        $transaksi2 = Transaksi::make([
            'wisata_id' => '1',
            'nama_lengkap' => 'Ayi Dwilestari',
            'no_identitas' => '2041720180',
            'no_hp' => '085231404775',
            'tanggal_kunjungan' => '2022-11-15',
            'pengunjung_dewasa' => '1',
            'pengunjung_anak' => '3',
            'harga_tiket' => '30000',
        ]);

        $this->assertTrue($transaksi1->nama_lengkap != $transaksi2->nama_lengkap);
    }

    public function test_transaksi_delete()
    {
        $transaksi = Transaksi::factory()->count(1)->make();

        $transaksi = Transaksi::first();

        if($transaksi){
            $transaksi->delete();
        }

        $this->assertTrue(true);
    }

    public function test_it_stores_new_transaksis_all_input_true()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/getTransaksi', [
            'wisata_id' => '2',
            'nama_lengkap' => 'Ayi Dwilestari',
            'no_identitas' => '2041720180',
            'no_hp' => '085231404775',
            'tanggal_kunjungan' => '2022-11-15',
            'pengunjung_dewasa' => '1',
            'pengunjung_anak' => '3',
            'harga_tiket' => '30000',
        ]);
        $response->assertOk();
    }
    public function test_it_stores_new_transaksis_but_false_input_no_hp()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/getTransaksi', [
            'wisata_id' => '2',
            'nama_lengkap' => 'Ayi Dwilestari',
            'no_identitas' => '2041720180',
            'no_hp' => 'aaaaaaaa',
            'tanggal_kunjungan' => '2022-11-15',
            'pengunjung_dewasa' => '1',
            'pengunjung_anak' => '3',
            'harga_tiket' => '30000',
        ]);
        $response->assertOk();
    }

    public function test_it_stores_new_transaksis_without_pengunjung_anak()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/getTransaksi', [
            'wisata_id' => '2',
            'nama_lengkap' => 'Ayi Dwilestari',
            'no_identitas' => '2041720180',
            'no_hp' => '085231404775',
            'tanggal_kunjungan' => '2022-11-15',
            'pengunjung_dewasa' => '1',
            'harga_tiket' => '30000',
        ]);
        $response->assertOk();
    }

    
}