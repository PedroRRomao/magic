<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deck extends Model
{

  protected $casts = [
        'cards_array' => 'array'
    ];

  protected $guarded = [];

  public function cards()
  {
    return $this->hasMany(Card::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }

}
