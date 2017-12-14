<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnage extends Model
{
  public $timestamps = false;
  public function sex()
  {
    return $this->belongsTo('App\Sex');
  }
  public function films()
  {
     return $this->belongsToMany('App\Film');
  }
}
