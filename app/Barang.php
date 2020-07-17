<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $guarded = [];

    public function Peminjaman()
    {
        return $this->hasMany('App\Peminjaman','id_barang','id');
    }
    public function distribusi()
    {
        return $this->hasMany('App\Distribusi','id_barang','id');
    }
}
