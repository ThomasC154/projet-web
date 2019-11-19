<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class participates extends Model
{

    protected $primaryKey = 'id';

    protected $fillable = ['user_id', 'event_id', 'participated'];

        //
        public function event(){
            return $this->belongsToMany('\app\Event');
        }
        public function user(){
            return $this->belongsToMany('\app\User');
        }
        
}
