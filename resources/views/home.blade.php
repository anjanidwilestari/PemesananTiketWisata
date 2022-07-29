@extends('layouts.main')

@section('title')
    Beranda
@endsection

@section('beranda', 'active')

@section('content')
<!-- banner -->
<section class="banner_main">
    <div class="container">
    <div class="row d_flex">
       <div class="col-md-12">
          <div class="text-bg">
             <h1>Booking Tempat Wisata</h1>
             
             <p>E-Wisata adalah online website yang memberikan info tempat wisata Indonesia. E-Wisata melayani pemesanan tiket wisata secara online dengan harga transparan dan proses pembelian mudah serta aman. E-Wisata juga memberikan aftersales service yang baik dengan tim profesional yang telah berpengalaman di industri travel.</p>
             <p>Akhir-akhir ini sedang mengalami yang namanya bosan akut? Jika ya, kamu bisa mencari suasana baru dengan pergi ke tempat yang segar-segar.</p>
             <a class="read_more" href="{{route('transaksi.create')}}">Book Now</a>
          </div>
       </div>
       
       </div>
    </div>
 </section>
 <!-- end banner -->
 @endsection