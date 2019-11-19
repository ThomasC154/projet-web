<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    public function write(){
        return $this->hasMany('\app\Write');
    }
    public function user(){
        return $this->belongsTo('\app\User');
    }
}
