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
            <div class="titlepage">
                <h2 align="center"> <strong class="yellow">History </strong>Pemesanan</h2>
            </div>
        
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">No</th>
                            <th scope="col" class="text-center">Pemesan</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($transaksi as $data)
                        <tr>
                            <td scope="row">{{ ++$i }}</td>
                            <td>{{ $data->nama_lengkap }}</td>
                            <td>
                                <form method="POST">
                                    <a class="btn btn-icons btn-dark" href="{{ route('transaksi.show', $data->id) }}">Lihat Detail</a>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection