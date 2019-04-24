<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Deck;

class PagesController extends Controller
{
  public function decks(){
    // $decks = Deck::all();
    //
    // return $decks;
    $decks = Deck::all();

    return view('decks', compact('decks'));

  }

}
