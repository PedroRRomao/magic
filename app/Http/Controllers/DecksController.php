<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deck;

class DecksController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  }



  public function index()
  {
    $decks = Deck::where('user_id', auth()->id())->get();

    return view('decks.index', compact('decks'));

  }


  public function create()
  {

    return view('decks.create');

  }

  public function show(Deck $Deck)
  {
    $this->authorize('view', $Deck);
    return view('decks.show', compact('Deck'));

  }

  public function update(Deck $Deck)
  {
    $Deck->update(request(['Name', 'Description']));
    // // $Deck-> Name = request('title');
    // // $Deck-> Description = request('Description');
    // $Deck->save();




    return redirect('/decks');

  }

  public function edit(Deck $Deck)
  {

    return view('decks.edit', compact('Deck'));

  }

  public function destroy(Deck $Deck)

  {
    $Deck->delete();

    return view('decks.delete');

  }

  public function store()
  {
      $attributes = request()->validate([
      'Name' => ['required', 'min:3', 'max:30'],
      'Description' => 'required'
    ]);
      $attributes['user_id'] = auth()->id();

      Deck::create($attributes);

    return view('decks.add');

  }

}
