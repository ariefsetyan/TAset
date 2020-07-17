<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        return view('karyawan.home');
        return redirect('karyawan/form-peminjaman');
    }

    public function adminHome()
    {
//        return view('admin.adminHome');
        return redirect('admin/daftar-barang');
    }
    public function kepalaHome()
    {
//        return view('kepala.kepalaHome');
        return redirect('kepala/daftar-barang-masuk');
    }
}
