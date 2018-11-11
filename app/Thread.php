<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{

  public function users(){
    return $this->belongsToMany('App\User');
  }

  public function messages(){
    return $this->hasMany('App\Message');
  }

  public function getLastmessageAttribute(){
    return $this->messages->last();
  }
}
