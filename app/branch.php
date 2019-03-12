<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class branch extends Model
{
    //

    public function User()
    {
        return $this->hasMany('App\User');
    }

    public function company()
    {
        return $this->belongsTo('App\company');
    }
}
