<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //

	protected $primaryKey = 'id';

    protected $fillable = ['image', 'campus_id', 'category_id','name','price','description'];

    public function  category(){
        return $this->belongsTo('\app\Category');

    }
    public function campus(){
        return $this->belongsTo('\app\Campus');
    }
    public function order(){
        return $this->hasOne('\app\Order');
    }
}
