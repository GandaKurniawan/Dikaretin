<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perkiraan extends Model
{
    protected $table ='perkiraans';
    protected $fillable = ['kode','bulan_id','perkiraan_Pendaptan','tahun'];

    public function bulan()
    {
        return $this->belongsTo('App\Bulan');
    }
}
