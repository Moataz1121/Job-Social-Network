<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class PostsEmployee extends Model
{
    use HasFactory;
    use Notifiable;
    protected $fillable = [
        'user_id', 
        'post_id',
        'resume',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function post()
    {
        return $this->belongsTo(Post::class , 'post_id' , 'id');
    }
}
