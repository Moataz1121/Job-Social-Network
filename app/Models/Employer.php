<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Employer extends Authenticatable
{
    use Notifiable;
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'password', 'image', 'phone_number', 'company_name'
    ];
    public function posts(){
        return $this->hasMany(Post::class);
    }


    protected $hidden = [
        'password', 'remember_token',
    ];
}
