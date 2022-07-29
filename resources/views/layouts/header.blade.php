<!-- header -->
<header>
    <!-- header inner -->
    <div class="header">
       <div class="container">
          <div class="row">
             <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                <div class="full">
                   <div class="center-desk">
                      <div class="logo">
                         <a href="/"><img src="{{ asset('style/images/logo.png')}}" alt="Logo" /></a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                <nav class="navigation navbar navbar-expand-md navbar-dark ">
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="navbarsExample04">
                      <ul class="navbar-nav mr-auto">
                         <li class="nav-item">
                            <a class="nav-link" href="/">Beranda </a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="{{route('tempatwisata.index')}}">Wisata</a>
                         </li>
                        <li class="nav-item">
                           <a class="nav-link" href="/testimoni">Testimoni</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="{{route('transaksi.create')}}">Pesan</a>
                         </li>
                      </ul>
                      <div class="Call"><a href="https://wa.me/6285231404775"> <span class="yellow">Call : </span>085231404775</a></div>
                   </div>
                </nav>
             </div>
          </div>
       </div>
    </div>
 </header>
 <!-- end header inner -->
 <!-- end header -->