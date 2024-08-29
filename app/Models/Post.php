<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function employer(){
        return $this->belongsTo(Employer::class);
    }
}
