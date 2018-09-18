<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function likedBy(){
        return $this->belongsToMany('App\User', 'likes');
    }
}
