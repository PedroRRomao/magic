<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  protected $guarded = [];

  public function user()
    {
      return $this->belongsTo(User::class);
    }

  public function clan()
<<<<<<< HEAD
    {
        return $this->belongsTo('App\Clan');
    }
=======
  {
      return $this->belongsTo(Clan::class);
  }
>>>>>>> a278c967b12cf6a5a80f83d86d3f2e5196ea4bbb
}
