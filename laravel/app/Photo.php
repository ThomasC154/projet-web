<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    public function user(){
        return $this->belongsTo('\app\User');
    }
    public function event(){
        return $this->belongsTo('\app\Event');
    }
    public function write(){
        return $this->hasMany('\app\Write');
    }
    public function like(){
        return $this->hasMany('\app\Like');
    }
}
