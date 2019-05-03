<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clan extends Model
{
<<<<<<< HEAD
  public function profiles()
  {
    return $this->hasMany(Profile::class);
  }
=======
    public function profile()
    {
      return $this->hasMany(Profile::class);
    }
>>>>>>> a278c967b12cf6a5a80f83d86d3f2e5196ea4bbb
}
