<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
  protected $fillable = [
      'message',
  ];

  public function thread(){
    return $this->belongsTo('App\Thread');
  }

  public function sender(){
    return $this->belongsTo('App\User', 'sender_id');
  }

  public function receiver(){
    return $this->belongsTo('App\User', 'receiver_id');
  }

}
