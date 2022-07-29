@extends('layouts.main')

@section('title')
    Pesan Tiket
@endsection

@section('transaksi', 'active')

@section('content')
<!-- banner -->
<section class="banner_main" style="background:white;">
    <div class="container" >
    <div class="row d_flex">
       <div class="col-md-12" >
         <div class="titlepage">
            <h2 align="center"> <strong class="yellow">Form </strong>Pemesanan</h2>
         </div>
         @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong>There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
          <form id="request" class="main_form" method="POST" action="{{ route('transaksi.store') }}">
            @csrf
             <div class="row">
                <div class="col-md-12 ">
                   <input class="contactus" placeholder="Nama Lengkap" type="type" id="nama_lengkap" name="nama_lengkap" required> 
                </div>
                <div class="col-md-12">
                   <input class="contactus" placeholder="No Identitas" type="type" id="no_identitas" name="no_identitas" required> 
                </div>
                <div class="col-md-12">
                   <input class="contactus" placeholder="No. HP" type="type" id="no_hp" name="no_hp" required>                          
                </div>
                <div class="col-md-12">
                  
                  <select class="contactus" id="wisata_id" name="wisata_id">
                      <option value="">--Pilih Tempat Wisata--</option>
                      @foreach ($tempatwisata as $t)
                          <option value="{{ $t->id }}"
                              {{ old('wisata_id') == $t->id ? 'selected' : '' }}>{{ $t->nama_tempat }}
                          </option>
                      @endforeach
                  </select>
                  @if ($errors->has('wisata_id'))
                      <div class="error">{{ $errors->first('wisata_id') }}</div>
                  @endif
              </div>
                <div class="col-md-12">
                   <input class="contactus" placeholder="Tanggal Kunjungan" type="date" id="tanggal_kunjungan" name="tanggal_kunjungan"  required>
                </div>
                <div class="col-md-12" id="pengunjungDewasa">
                  <input class="contactus" placeholder="Pengunjung Dewasa" type="number" id="pengunjung_dewasa" name="pengunjung_dewasa"  required value="{{ old('pengunjung_dewasa') }}" min="1"
                  onkeyup="hitungHarga()">
                  @if ($errors->has('pengunjung_dewasa'))
                    <div class="error">{{ $errors->first('pengunjung_dewasa') }}</div>
                @endif
               </div>
               <div class="col-md-12" id="pengunjungAnak">
                <input class="contactus" placeholder="Pengunjung Anak-Anak" type="number" id="pengunjung_anak" name="pengunjung_anak"  required value="{{ old('pengunjung_anak') }}" min="1"
                onkeyup="hitungHarga()">
                @if ($errors->has('pengunjung_anak'))
                  <div class="error">{{ $errors->first('pengunjung_anak') }}</div>
              @endif
             </div>

             <div class="col-md-12" id="hargaTiket">
                <input class="contactus" placeholder="Harga Tiket" type="number" id="harga_tiket" name="harga_tiket"  required value="{{ old('harga_tiket') }}" min="1"
                onkeyup="hitungHarga()">
                @if ($errors->has('harga_tiket'))
                  <div class="error">{{ $errors->first('harga_tiket') }}</div>
              @endif
             </div>
               
               <div class="col-md-12" id="totalBayar">
                  <input class="contactus" type="number" id="total_bayar"
                      name="total_bayar" required value="{{ old('total_bayar') }}"
                      placeholder="Total Bayar" readonly>
                  @if ($errors->has('total_bayar'))
                      <div class="error">{{ $errors->first('total_bayar') }}</div>
                  @endif
              </div>
                <div class="col-sm-12">
                   
                   <a class="btn btn-warning" href="{{ route('transaksi.create') }}">Hitung Total Bayar</a>
                   <button type="submit" class="btn btn-warning">Pesan Tiket</button>
                   <a class="btn btn-warning" href="{{ route('transaksi.create') }}">Cancel</a>
                </div>
             </div>
          </form>
       </div>
    </div>
 </section>
 <!-- end banner -->
 @endsection

 @section('js')
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $('select#wisata_id').on('change',function(e){
            var selected_wisata = $(this).children("option:selected").val();
            $.ajax({
                type:"GET",
                dataType:"json",
                url:'/getTransaksi/'+selected_wisata,
                success:function(response){
                    console.log(response);
                    $('#harga_tiket').val(response.harga);
                    hitungHarga();
                }
            })
        });

        // calculate price
        hitungHarga();
        function hitungHarga() {
            var totalBayar = $('#total_bayar');
            var pengunjungDewasa = $('#pengunjung_dewasa').val();
            var pengunjungAnak = $('#pengunjung_anak').val();
            var hargaTiket = $('#harga_tiket').val();

            var hitungTotal = (parseFloat(hargaTiket) * parseFloat(pengunjungDewasa)) + (parseFloat(hargaTiket)*0.5*parseFloat(pengunjungAnak)) ;
            totalBayar.val(hitungTotal);
        }
</script>
@endsection