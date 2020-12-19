<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TotalPendapatan extends Model
{
    protected $table ='total_pendapatans';
    protected $fillable = ['kode','bulan_id','total_Pendaptan','tahun'];

    public function bulan()
    {
        return $this->belongsTo('App\Bulan');
    }
}
