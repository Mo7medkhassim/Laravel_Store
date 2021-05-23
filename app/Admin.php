<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;
    protected $guard = 'admin';
    protected $fillable = [
        'name' ,'email', 'password','avatar','phone','created_at','updated_at',
    ];

    protected $hidden = [

        'password','remember_token',
    ];

}
