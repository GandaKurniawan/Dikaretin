<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class biodata extends Model
{
    protected $table = 'biodatas';

    protected $fillable =['user_id','nama','alamat','no_telephone'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
