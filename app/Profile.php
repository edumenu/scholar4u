<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  protected $guarded = [];

   public function profileImage()  //Creating a method to add a default image just incase the image is empty
    {
        $imagePath = ($this->image) ? $this->image : 'default.png';

        return '/storage/' . $imagePath;
    }

  //Fetching a user ID
  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
