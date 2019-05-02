<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deck extends Model
{


  protected $fillable = ['Name', 'Description'];

  public function cards()
  {
    return $this->hasMany(Card::class);
  }

}
