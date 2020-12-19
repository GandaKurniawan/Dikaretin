<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table ='statuses';
    protected $fillable = ['name_status'];

    public function user()
    {
        return $this->hasMany('App\User');
    }
}

