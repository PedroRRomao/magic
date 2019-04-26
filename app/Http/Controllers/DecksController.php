<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deck;

class DecksController extends Controller
{
  public function decks()
  {
    $decks = Deck::all();

    return view('decks.index', compact('decks'));

  }

  public function create()
  {

    return view('decks.create');

  }
  public function store()
  {
    $Deck = new Deck();
    $Deck-> Name = request('title');
    $Deck-> Description = request('Description');
    $Deck-> IdOwner = 4;
    $Deck-> CardNumber;
    $Deck->save();


    return view('decks.add');

  }

}
