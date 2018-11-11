<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function threads(){
      return $this->belongsToMany('App\Thread');
    }

    public function sent(){
      return $this->hasMany('App\Message', 'sender_id');
    }

    public function received(){
      return $this->hasMany('App\Message', 'receiver_id');
    }

    public function getMessagesAttribute(){
      return $this->sent->merge($this->received);
    }
}
