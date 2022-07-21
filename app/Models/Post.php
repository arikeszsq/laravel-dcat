<?php

namespace App\Models;


use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }

    public function author()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
