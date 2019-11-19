<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function cart(){
        return $this->belongsToMany('\app\Cart');
    }
    public function article(){
        return $this->belongsToMany('\app\Article');
    }
}
