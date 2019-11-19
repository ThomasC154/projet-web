<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    //
    public function article(){
        return $this->hasOne('\app\Article');
    }
    public function user(){
        return $this->hasOne('\app\User');
    }
    public function event(){
        return $this->hasOne('\app\Event');
    }
}
