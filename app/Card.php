<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
  protected $fillable = ['deck_id'];


  public function deck()
  {
    return $this->belongsTo(Deck::class);
  }

}
