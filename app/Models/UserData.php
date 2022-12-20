<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    use HasFactory;

    public function likes() 
    {
        return $this->hasOne(Likes::class);
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function comments(){
        return $this->hasMany(Comments::class);
    }

    public function parentComments(){
        return $this->hasMany(ParentComment::class);
    }
}
