<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Pendapatan extends Model
{
    Protected $table = 'pendapatans';
    Protected $fillable =['user_id','berat_bersih','berat_kotor','tanggal'];
    Protected $dates = ['tanggal','updated_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function confirm()
    {
        return $this->belongsTo('App\confirm');
    }


    public function getCreateAt()
    {
        return Carbon\Carbon::setToStringFormat('Y/m/d');
    }


}
