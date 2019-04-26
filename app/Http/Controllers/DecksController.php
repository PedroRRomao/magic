<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deck;

class DecksController extends Controller
{
  public function index()
  {
    $decks = Deck::all();

    return view('decks.index', compact('decks'));

  }

  public function create()
  {

    return view('decks.create');

  }
  public function show()
  {

    return;

  }

  public function update()
  {
    $Deck = Deck::find($id);
    $Deck-> Name = request('title');
    $Deck-> Description = request('Description');
    $Deck->save();




    return;

  }

  public function edit($id)
  {
    $Deck = Deck::find($id);

    return view('decks.edit', compact('Deck'));

  }

  public function destroy()
  {

    return;

  }

  public function store()
  {
    $Deck = new Deck();
    $Deck-> Name = request('title');
    $Deck-> Description = request('Description');
    $Deck->save();


    return view('decks.add');

  }

}
