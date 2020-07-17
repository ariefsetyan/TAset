<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distribusi extends Model
{
    protected $guarded = [];
    public function barang()
    {
        return $this->belongsTo('App\Barang','id_barang','id');
    }
    public function status()
    {
        return $this->belongsTo('App\Status','id_status','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','id_penerima','id');
    }
}
