@extends('layouts.main')

@section('title')
    Tanda Terima
@endsection

@section('tandaterima', 'active')

@section('content')
<!-- banner -->
<section class="banner_main" style="background:white;">
    <div class="container">
       <div class="col-md-12">
        <div class="titlepage">
            <h2 align="center"> <strong class="yellow">Detail </strong>Pemesanan Tiket</h2>
         </div>
       </div>
       <div class="col-md-12">
          <form id="request" class="main_form">
             <div class="row">
                <div class="col-md-12 ">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nama Pemesan</label>
                        <div class="col-sm-10">
                          <input class="contactus" type="text" readonly class="form-control-plaintext" id="nama_lengkap" value="{{ $transaksi->nama_lengkap }}">
                        </div>
                      </div>
                </div>
                <div class="col-md-12 ">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">No Identitas</label>
                        <div class="col-sm-10">
                          <input class="contactus" type="text" readonly class="form-control-plaintext" id="no_identitas" value="{{ $transaksi->no_identitas }}">
                        </div>
                      </div>
                </div>
                <div class="col-md-12 ">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">No. HP</label>
                        <div class="col-sm-10">
                          <input class="contactus" type="text" readonly class="form-control-plaintext" id="no_hp" value="{{ $transaksi->no_hp }}">
                        </div>
                      </div>
                </div>
                <div class="col-md-12 ">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Tempat Wisata</label>
                        <div class="col-sm-10">
                          <input class="contactus" type="text" readonly class="form-control-plaintext" id="wisata_id" value="{{ $transaksi->tempatwisata->nama_tempat }}">
                        </div>
                      </div>
                </div>
                <div class="col-md-12 ">
                    <div class="form-group row">
                        <label  for="staticEmail" class="col-sm-2 col-form-label" >Pengunjung Dewasa</label>
                        <div class="col-sm-10">
                          <input class="contactus" type="text" readonly class="form-control-plaintext" id="pengunjung_dewasa" value="{{ $transaksi->pengunjung_dewasa }} orang">
                        </div>
                      </div>
                </div>
                <div class="col-md-12 ">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Pengunjung Anak-Anak</label>
                        <div class="col-sm-10">
                          <input class="contactus" type="text" readonly class="form-control-plaintext" id="pengunjung_anak" value="{{ $transaksi->pengunjung_anak }} orang">
                        </div>
                      </div>
                </div>
                <div class="col-md-12 ">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Harga Tiket</label>
                        <div class="col-sm-10">
                          <input class="contactus" type="text" readonly class="form-control-plaintext" id="harga_tiket" value="Rp {{ number_format($transaksi->harga_tiket)}}">
                        </div>
                      </div>
                </div>
                <div class="col-md-12 ">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Total Bayar</label>
                        <div class="col-sm-10">
                          <input class="contactus" type="text" readonly class="form-control-plaintext" id="total_bayar" 
                          value=" @if ($transaksi->total_bayar != null)Rp {{number_format($transaksi->total_bayar)}} @else Rp {{ number_format((($transaksi->tempatwisata->harga)*($transaksi->pengunjung_dewasa))+(($transaksi->tempatwisata->harga)*0.5*($transaksi->pengunjung_anak))) }}@endif">
                        </div>
                      </div>
                </div>
            </div>
          </form>
       </div>
    </div>
 </section>
 <!-- end banner -->
 @endsection


