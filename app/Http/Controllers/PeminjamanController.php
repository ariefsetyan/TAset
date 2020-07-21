<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

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
        $datas = Peminjaman::where('id_karyawan',Auth::user()->id)->get();
        return view('karyawan.peminjaman.daftarPeminjaman',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (session('success')){
            Alert::success('Success', 'Permintaan terkirim');
        }
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
        return redirect()->back()->withSuccess('Successfully!');
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
        if (session('success')){
            Alert::success('Success Title', 'Success Message');
        }elseif (session('error')){
            alert()->info('Info','Jumlah Stok Lebih Kecil dari Jumlah Pinjam');
        }
        $data = Peminjaman::where('id_status',1)->get();
        return view('admin/peminjaman/daftarPinjam',compact('data'));
    }
    public function prosesPeminjaman(Request $request)
    {
        $data = Peminjaman::find($request->id);
        $data->id_status = 3;
        $kondisi = Barang::find($request->id_barang);
        $kondisi->kondisi = $request->kondisi;
        $stok = $kondisi['stok'];
        $jumlah = $data['jumlah'];
        $updateStok = $stok-$jumlah;
        if ($updateStok <= $stok){
            $data->save();
            $kondisi->save();
            return redirect()->back()->withSuccess('Successfully!');
        }else{
            return redirect()->back()->with('error','Stok Kurang');
        }

    }

    public function historyPeminjaman()
    {
        $data = Peminjaman::where('id_status',6)->get();
        return view('admin/peminjaman/historiPeminjaman',compact('data'));
    }

    public function Peminjaman()
    {
        if (session('success')){
            alert()->success('Success','Lorem ipsum dolor sit amet.');
        }
        $data = Peminjaman::where('id_status',5)->get();
        return view('admin/pengembalian/kembali',compact('data'));
    }

    public function kembali(Request $request)
    {
        $data = Peminjaman::find($request->id);
        $data->id_status = 6;
        $jumlah = $data['jumlah'];

        $barang = Barang::find($request->id_barang);
        $stok = $barang['stok'];
        $updateStok = $jumlah+$stok;
        $barang->stok = $updateStok;
        $data->save();
        $barang->save();
        return redirect()->back()->with('success','Data berhasil diperbarui');
    }

//


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
