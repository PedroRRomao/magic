<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clan extends Model
{
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7b157700e6e888186cf3aaf29de0570af70547ad
  public function profiles()
  {
    return $this->hasMany(Profile::class);
  }
<<<<<<< HEAD
=======
    public function profile()
    {
      return $this->hasMany(Profile::class);
    }
>>>>>>> a278c967b12cf6a5a80f83d86d3f2e5196ea4bbb
=======
>>>>>>> 7b157700e6e888186cf3aaf29de0570af70547ad
}
