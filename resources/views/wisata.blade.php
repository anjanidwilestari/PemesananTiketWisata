@extends('layouts.main')

@section('title')
    Tempat Wisata
@endsection

@section('tempatwisata', 'active')

@section('content')
<!-- food -->
<div class="food">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2> <strong class="yellow">Tempat </strong>Wisata</h2>
                <span>Berlibur terkadang terlihat seperti kegiatan yang tidak terlalu diperlukan, namun sebenarnya liburan itu perlu apalagi setelah anda berkutat dengan pekerjaan yang membuat rasa penat menumpuk di pikiran. Fungsi liburan sendiri yang bermanfaat adalah yang memang untuk menyegarkan pikiran dan bukan menghambur-hamburkan uang.</span>
             </div>
          </div>
       </div>
       <div class="row">
         @foreach($tempatwisata as $t)
          <div class="col-md-4">
            
             <div class="food_box">
                <i><img src="{{ asset('style/images/masjid.png')}}" alt="" /></i>
                <a href="https://www.youtube.com/embed/JA0hIpJCs-k"><h4>{{$t->nama_tempat}}</h4></a>
                <h4><span>
                  Rp
              </span>
              {{number_format($t->harga)}}</h4>
                <p>{{$t->deskripsi}}</p>
             </div>
          </div>
          @endforeach
       </div>
    </div>
 </div>
 <!-- end food -->

 <!-- works -->
<div class="works">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <span>Tips Liburan</span>
               <h2> <strong class="yellow">3 Langkah Untuk </strong>Liburan Menyenangkan</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4">
            <div id="white_bg" class="works_box">
               <h4>01</h4>
               <p>Jaga Kesehatan. Tidak ada liburan yang menyenangkan jika dijalani dalam keadaan sakit. Oleh karena itu, penting bagi Anda untuk tetap menjaga kesehatan tubuh menjelang dan selama liburan agar tetap bahagia.</p>
            </div>
         </div>
         <div class="col-md-4">
            <div id="white_bg" class="works_box ">
               <h4>02</h4>
               <p>Atur Jadwal Berlibur. Menentukan jadwal liburan bisa membantu menyiapkan keperluan dengan lebih baik. Contohnya seperti untuk mempersiapkan dana, memilih destinasi, serta memesan transportasi dan akomodasi.</p>
            </div>
         </div>
         <div class="col-md-4">
            <div id="white_bg" class="works_box">
               <h4>03</h4>
               <p>Gunakan peralatan yang nyaman. Peralatan nyaman disini seperti pakaian, topi, tas ransel, dan yang lainnya. alangkah lebih baik jika menggunakan peralatan yang bertipe ultralight atau sangat ringan.</p>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end works -->
@endsection