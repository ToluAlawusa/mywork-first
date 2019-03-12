<?php

namespace App;

use App\Employee;
use App\company;
use App\branch;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    // public static function getUserByID($id) {
    //     $userId = User::where('id', '=', $id)
    //                             ->with("company")
    //                             ->first();
    //     return $userId;
    // }

    public function Employee()
    {
        return $this->belongsTo('App\Employee');
    }

    

    public function branch()
    {
        return $this->belongsTo('App\branch');
    }
}
