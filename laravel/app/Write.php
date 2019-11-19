<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Write extends Model
{
    //
    public function photo(){
        return $this->belongsToMany('\app\Photo');
    }
    public function comment(){
        return $this->belongsToMany('\app\Comment');
    }
}
