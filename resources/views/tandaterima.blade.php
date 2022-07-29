@extends('layouts.main')

@section('title')
    Tanda Terima
@endsection

@section('tandaterima', 'active')

@section('content')
<!-- banner -->
<section class="banner_main">
    <div class="container">
    <div class="row d_flex">
       <div class="col-md-12">
          <div class="text-bg">
             <h1>Terima Kasih</h1>
          </div>
       </div>
       <div class="col-sm-12">

         <a class="btn btn-warning" href="{{ route('transaksi.index') }}">Lihat History</a>
   
 </section>
 <!-- end banner -->
 @endsection


