<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;


class Event extends Model
{

    use Commentable;

    protected $primaryKey = 'id';
    
    protected $fillable = ['campus_id', 'user_id', 'name', 'date', 'location', 'price', 'description', 'validated'];



    //
    public function campus(){
        return $this->belongsTo('\app\Campus');
    }
    public function user(){
        return $this->belongsTo('\app\User');
    }
    public function photo(){
        return $this->hasOne('\app\Photo');
    }
    public function participates(){
        return $this->hasMany('\app\Participates');
    }
}
