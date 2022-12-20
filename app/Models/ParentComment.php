<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentComment extends Model
{
    use HasFactory;

    public function comments() {
        return $this->hasMany(Comments::class);
    }

    public function user() {
        return $this->hasOne(UserData::class);
    } 

}
