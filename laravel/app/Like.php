<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //
    public function photo(){
        return $this->belongsToMany('\app\Photo');
    }
    public function user(){
        return $this->belongsToMany('\app\Users');
    }
}
