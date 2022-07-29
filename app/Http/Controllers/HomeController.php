<?php

namespace App\Http\Controllers;

use App\Models\TempatWisata;
use App\Models\Transaksi;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }

    public function testimoni()
    {
        return view('testimoni');
    }

    public function wisata()
    {
        return view('wisata');
    }

    public function indextransaksi(Request $request)
    {
        $pagination = 5;
        $transaksi = Transaksi::when($request->keyword, function ($query) use ($request) {
            $query
                ->where('nama_lengkap', 'like', "%{$request->keyword}%")
                ->orWhere('nomor_identitas', 'like', "%{$request->keyword}%")
                ->orWhere('no_hp', 'like', "%{$request->keyword}%")
                ->orWhere('tanggal_kunjungan', 'like', "%{$request->keyword}%")
                ->orWhere('pengunjung_dewasa', 'like', "%{$request->keyword}%")
                ->orWhere('pengunjung_anak', 'like', "%{$request->keyword}%")
                ->orWhere('harga_tiket', 'like', "%{$request->keyword}%")
                ->orWhereHas('tempatwisata',function(Builder $tempatwisata) use ($request){
                    $tempatwisata->where('nama_tempat','like',"%{$request->keyword}%");
                });
        })->orderBy('tanggal_kunjungan')->paginate($pagination);

        return view('history', compact('transaksi'))
            ->with('i', (request()->input('page', 1) - 1) * $pagination);
    }

    public function createtransaksi()
    {
        $tempatwisata = TempatWisata::all();
        return view('transaksi',['tempatwisata'=>$tempatwisata]);
    }

    public function storetransaksi(Request $request)
    {
        $request -> validate([
            'wisata_id' => 'required',
            'nama_lengkap' => 'required',
            'no_identitas' => 'required',
            'no_hp' => 'required',
            'tanggal_kunjungan' => 'required',
            'pengunjung_dewasa' => 'required',
            'pengunjung_anak' => 'required',
            'harga_tiket' => 'required',
        ]);

        $transaksi = new Transaksi();
        $transaksi->wisata_id = $request->wisata_id;
        $transaksi->nama_lengkap = $request->nama_lengkap;
        $transaksi->no_identitas = $request->no_identitas;
        $transaksi->no_hp = $request->no_hp;
        $transaksi->tanggal_kunjungan = $request->tanggal_kunjungan;
        $transaksi->pengunjung_dewasa = $request->pengunjung_dewasa;
        $transaksi->pengunjung_anak = $request->pengunjung_anak;
        $transaksi->harga_tiket = $request->harga_tiket;
        $transaksi->total_bayar = $request->total_bayar;
        
        $transaksi->save();
        
        Alert::success('Permintaan Anda Sedang Diproses');
        return view('tandaterima');
    
    }

    public function showtransaksi($id)
    {
        $transaksi = Transaksi::find($id);
        $tempatwisata = TempatWisata::all();
        return view('detail',compact('transaksi','tempatwisata'));
    }
}
