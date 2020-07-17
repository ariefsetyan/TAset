<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Peminjaman::where('id',Auth::user()->id)->get();
        return view('karyawan.peminjaman.daftarPeminjaman',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barangs = Barang::all();
        return view('karyawan.peminjaman.formPeminjaman',compact('barangs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $waktuSNow = date('Y-m-d');
        $datas = new Peminjaman();
        $barang = $request->barang;
        $jumlah = $request->jumlah;
        $tujuan = $q1=implode(',',$request->tujuan);
        for($count = 0; $count < count($barang); $count++) {
            $data = array(
                'tanggal_pinjam' => $waktuSNow,
                'tujuan_pinjam' => $tujuan,
                'estimasi_waktu' => $request->lamaPinjam,
                'diskripsi_barang' => $request->deskripsi,
                'id_karyawan' => Auth::user()->id,
                'id_barang' => $barang[$count],
                'jumlah' => $jumlah[$count],
                'id_status' => 1,
            );
            Peminjaman::insert($data);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function censel($id)
    {
        $data = Peminjaman::find($id);
        $data->id_status = 4;
        $data->save();
    }

    /**
     * proses for admin.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function daftarPengajuan()
    {
        $data = Peminjaman::where('id_status',1)->get();
        return view('admin/peminjaman/daftarPinjam',compact('data'));
    }
    public function prosesPeminjaman(Request $request)
    {
        $data = Peminjaman::find($request->id);
        $data->id_status = 3;
        $kondisi = Barang::find($request->id_barang);
        $kondisi->kondisi = $request->kondisi;

        $data->save();
        $kondisi->save();

    }
//    public function historyPeminjaman()
//    {
//        $data = Peminjaman::where('id_status',5)->get();
//        return view('admin/peminjaman/historiPeminjaman',compact('data'));
//    }

    public function Peminjaman()
    {
        $data = Peminjaman::where('id_status',5)->get();
        return view('admin/pengembalian/kembali',compact('data'));
    }
    public function kembali(Request $request)
    {
        $data = Peminjaman::find($request->id);
        $data->id_status = 6;
        $data->save();
        $barang = Barang::where('id',$request->id_barang)->update(['kondisi' => $request->kondisi]);
//        return view('admin/peminjaman/historiPeminjaman',compact('data'));
    }

    /**
     * proses for kepala.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function daftarPeminjaman()
    {
        $datas = Peminjaman::all();
        return view('kepala/peminjaman',compact('datas'));
    }
}
