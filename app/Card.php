<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
  protected $fillable = ['src'];

  public function deck()
  {
    return $this->belongsTo(Deck::class);
  }

}
