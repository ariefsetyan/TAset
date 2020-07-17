<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('admin')->middleware('is_admin')->group(function () {
    Route::get('daftar-barang','BarangController@index');
    Route::get('form-barang','BarangController@create');
    Route::post('simpan-barang','BarangController@store');
    Route::get('edit-barang/{id}','BarangController@edit');
    Route::post('update-barang/{id}','BarangController@update');
    Route::get('delete-barang/{id}','BarangController@destroy');

    Route::get('pengajuan-pinjam', 'PeminjamanController@daftarPengajuan');
    Route::post('proses-peminjaman','PeminjamanController@prosesPeminjaman');
    Route::get('daftar-peminjaman','PeminjamanController@Peminjaman');
    Route::post('proses-kembali','PeminjamanController@kembali');

    Route::get('daftar-pengajuan', 'DistribusiController@daftarPengajuan');
    Route::get('daftar-distribusi', 'DistribusiController@daftarPengajuanDsitribusi');
    Route::get('ajukekepala/{id}', 'DistribusiController@ajuKepala');
});


//karyawan
Route::prefix('karyawan')->group(function () {
    Route::get('form-peminjaman','PeminjamanController@create');
    Route::post('simpan-peminjaman','PeminjamanController@store');
    Route::get('daftar-peminjaman','PeminjamanController@index');
    Route::get('censel-peminjaman/{id}','PeminjamanController@censel');
    Route::get('distribusi', 'DistribusiController@create');
    Route::post('simpan-distribusi', 'DistribusiController@store');
    Route::get('daftar-distribusi', 'DistribusiController@index');
//Route::get('/form-pinjam', function () {
//    return view('karyawan/peminjaman/formPeminjaman');
//});
});

Route::prefix('kepala')->middleware('is_admin')->group(function () {
    //kepala
    Route::get('daftar-barang-masuk', 'BarangController@daftarBarang');
    Route::get('pengajuan-distribusi', 'DistribusiController@daftarPengajuanDistribusi');
    Route::get('setujui-distribusi/{id}', 'DistribusiController@setujuiDistribusi');
    Route::get('daftar-distribusi', 'DistribusiController@daftarDistribusi');
    Route::get('daftar-peminjaman', 'PeminjamanController@daftarPeminjaman');
});




Route::get('/', function () {
//    return view('welcome');
    return redirect('login');
});

Route::get('/cari', function () {
    return view('admin/cari/formCari');
});



Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

Route::get('kepala/home', 'HomeController@kepalaHome')->name('kepala.home')->middleware('is_admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
