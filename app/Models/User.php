<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // ⬅ penting
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    protected $table = 'users';

    protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
