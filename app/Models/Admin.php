<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{

    use Notifiable;
    use HasFactory;

    // protected $guarded = [];
    protected $fillable = [
        'name', 'email', 'password','image'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}