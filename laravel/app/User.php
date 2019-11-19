<?php

namespace App;

use Laravelista\Comments\Commenter;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, Commenter;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lastname', 'firstname', 'status', 'campus_id', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function cart(){
        return  $this->hasOne('\app\Cart');
    }
    public function comment(){
        return $this->hasOne('\app\Comment');
    
    }
    public function like(){
        return $this->hasMany('\app\Like');
    }
    public function photo(){
        return $this->hasOne('\app\Photo');
    }
    public function participates(){
        return $this->hasMany('\app\Participates');  
    }
    public function event(){
        return $this->hasOne('\app\Event');
    }
    public function campus(){
        return $this->belongsTo('\app\Campus');
    }
    
}
    
