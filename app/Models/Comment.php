<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function commentable()
    {
        return $this->morphTo();
    }

    /**
     * Get the user who commented.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
