<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $guarded = [];

    public function barang()
    {
        return $this->belongsTo('App\Barang','id_barang','id');
    }
    public function statusbarang()
    {
        return $this->belongsTo('App\Status','id_status','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','id_karyawan','id');
    }

}
