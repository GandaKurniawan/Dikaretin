<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    Protected $table='roles';

    protected $fillable=['name_role'];

    public function user()
    {
        return $this->hasMany('App\User');
    }
}
