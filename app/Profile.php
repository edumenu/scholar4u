<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  protected $guarded = [];
  
  //Fetching a user ID
  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
