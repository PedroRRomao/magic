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
  public function show(Deck $Deck)
  {

    return view('decks.show', compact('Deck'));

  }

  public function update(Deck $Deck)
  {

    $Deck-> Name = request('title');
    $Deck-> Description = request('Description');
    $Deck->save();




    return redirect('/decks');

  }

  public function edit(Deck $Deck)
  {

    return view('decks.edit', compact('Deck'));

  }

  public function destroy(Deck $Deck)

  {
    $Deck->delete();

    return redirect('/decks');

  }

  public function store()
  {
    Deck::create([
      'Name' => request('title'),
      'Description' => request('Description')

    ]);
    // $Deck-> Name = request('title');
    // $Deck-> Description = request('Description');
    // $Deck->save();


    return view('decks.add');

  }

}
