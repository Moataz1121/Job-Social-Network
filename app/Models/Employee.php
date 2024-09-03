<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'birth_date',
        'phone_number',
        'image',
        'gender',
        'password',
    ];
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
