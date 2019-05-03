<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deck extends Model
{


  protected $fillable = ['Name', 'Description','owner_id'];

  public function cards()
  {
    return $this->hasMany(Card::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }


  public function addCard($name){
    $this->tasks()->create(compact('name'));

  }

}
