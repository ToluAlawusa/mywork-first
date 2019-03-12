<?php

namespace App;

use App\User;
use app\branch;
use App\support_ticket;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    //

    public function User()
    {
        return $this->hasMany('App\User');
    }

    public function support_ticket()
    {
        return $this->hasMany('App\support_ticket');
    }

    public function branch()
    {
        return $this->hasMany('App\branch');
    }
}
