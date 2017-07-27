<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
  public $timestamps = false;

  public function authors()
  {
    return $this->belongsToMany('App\Author');
  }
}
