<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';
    protected $guarded = [];
    public function statusbarang()
    {
        return $this->hasMany('App\Peminjaman','id_status','id');
    }
    public function distribusi()
    {
        return $this->hasMany('App\Distribusi','id_status','id');
    }
}
