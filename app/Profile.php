<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  protected $guarded = [];

  public function user()
    {
        return $this->belongsTo('App\User');
    }

  public function clan()
    {
        return $this->belongsTo('App\Clan');
    }
}
