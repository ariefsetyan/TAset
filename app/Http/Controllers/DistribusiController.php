<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Distribusi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class DistribusiController extends Controller
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
        $datas = Distribusi::all();
        return view('karyawan/distribusi/daftarDistribusi',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (session('success')){
            Alert::success('Success', 'Permintaan Sedang di Proses');
        }
        $data = Barang::all();
        return view('karyawan/distribusi/formDistribusi',compact('data'));
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
        $barang = $request->barang;
        $jumlah = $request->jumlah;
        $prioritas = $request->prioritas;
//        dd($prioritas);
        $datas = new Distribusi();
        for($count = 0; $count < count($barang); $count++) {
            $data = array(
                'tanggal' => $waktuSNow,
                'landasan_permintaan' => $request->landasan,
                'id_penerima' => Auth::user()->id,
                'tempat_penerima' => $request->tempat,
                'id_barang' => $barang[$count],
                'jumlah' => $jumlah[$count],
                'prioritas' => $prioritas,
                'id_status' => 1,
            );

            Distribusi::insert($data);
        }
        return redirect()->back()->withSuccess('Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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


    //admin
    public function daftarPengajuan()
    {
        if (session('success')){
            alert()->success('SuccessAlert','Lorem ipsum dolor sit amet.');
        }
        $datas = Distribusi::where('id_status','1')->get();
        return view('admin.distribusi.daftarDistribusi',compact('datas'));
    }

    public function ajuKepala($id)
    {
        $datas = Distribusi::find($id);
        $datas->id_admin = Auth::user()->id;
        $datas->id_status = 2;
        $datas->save();
        return redirect()->back()->whit('success','Proses berhasil');
    }
    public function daftarPengajuanDsitribusi()
    {
        $datas = Distribusi::where('id_status',2)->get();
        return view('admin.distribusi.historiDsitribusi',compact('datas'));
    }

//    public function daftarPengajuanDsitribusi()
//    {
//        $datas = Distribusi::where('id_status',2)->get();
//        return view('admin.distribusi.historiDsitribusi',compact('datas'));
//    }

//kepala
    public function daftarPengajuanDistribusi()
    {
        if (session('success')){
            alert()->success('SuccessAlert','Lorem ipsum dolor sit amet.');
        }
        $datas = Distribusi::where('id_status',2)->get();
        return view('kepala.distribusi',compact('datas'));
    }
    public function setujuiDistribusi($id)
    {
        $datas = Distribusi::find($id);
        $datas->id_kepala = Auth::user()->id;
        $datas->id_status = 3;
        $datas->save();
        return redirect()->back()->with('success','proses success');
    }
    public function daftarDistribusi()
    {
        $datas = Distribusi::all();
        return view('kepala.daftarDistribusi',compact('datas'));
    }
}
