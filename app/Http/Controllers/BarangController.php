<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;
Use Alert;

class BarangController extends Controller
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
        if (session('success')){
        alert()->success('Success','Data berhasil di Perbaruhi');
        }
//        elseif (session('success')){
//            alert()->success('Success','Data berhasil di Perbaruhi');
//        }
        $datas = Barang::all();
        return view('admin/barang/table',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (session('success')){
            Alert::success('Success', session('success_messege'));
        }
        return view('admin/barang/form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama = str_split($request->nama,1);
        $merak = str_split($request->merek,2);
        $serial = $nama[0].$merak[0].$request->type;
        $dataStok = Barang::where('serial',$serial)->get();
//        dd($dataStok[0]['stok']);
        if (!empty($dataStok[0]['stok'])){
            $data = Barang::updateOrCreate(
                ['serial' => $serial],
                ['nama' => $request->nama,
                    'merek' => $request->merek,
                    'type' => $request->type,
                    'tahun_keluaran' => $request->tkeluaran,
                    'tahun_datang' => $request->tdatang,
                    'kondisi' => $request->kondisi,
                    'stok' => $request->stok+$dataStok[0]['stok']]
            );
        }else{
            $data = Barang::updateOrCreate(
                ['serial' => $serial],
                ['nama' => $request->nama,
                    'merek' => $request->merek,
                    'type' => $request->type,
                    'tahun_keluaran' => $request->tkeluaran,
                    'tahun_datang' => $request->tdatang,
                    'kondisi' => $request->kondisi,
                    'stok' => $request->stok]
            );
        }
        return redirect()->back()->withSuccess('Succsesfully');
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
        $datas = Barang::where('id',$id)->get();
        return view('admin/barang/formEdit', compact('datas'));
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
        $data = Barang::find($id);
        $nama = str_split($request->nama,1);
        $merak = str_split($request->merek,2);
        $serial = $nama[0].$merak[0].$request->type;
        $data->nama = $request->nama;
        $data->merek = $request->merek;
        $data->type = $request->type;
        $data->tahun_keluaran = $request->tkeluaran;
        $data->tahun_datang = $request->tdatang;
        $data->kondisi = $request->kondisi;
        $data->serial = $serial;
        $data->stok = $request->stok;
        $data->save();
        return redirect('daftar-barang')->withSuccess('Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datas = Barang::find($id)->delete();
        return redirect()->back()->withSuccess('Successfully!');;
    }

    //kepala
    public function daftarBarang()
    {
        $datas = Barang::all();
        return view('kepala.barangMasuk',compact('datas'));
    }
}
