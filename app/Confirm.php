<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Confirm extends Model
{
    protected $table ='confirms';
    protected $fillable = ['name_confirms'];

    public function pendapatan()
    {
        return $this->hasMany('App\Pendapatan');
    }
}

