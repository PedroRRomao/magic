<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use App\Deck;
use App\Card;
use App\Profile;

class DecksController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  }



  public function index()
  {
    $decks = Deck::where('owner_id', auth()->id())->get();

    return view('decks.index', compact('decks'));

  }


  public function create()
  {

    return view('decks.create');

  }

  public function show(Deck $Deck)
  {

    $Card = Card::findMany($Deck['cards_array']);

    return view('decks.show', compact('Deck', 'Card'));

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
      $attributes = $this->validateDeck();

      $user = auth()->id();

      $attributes['owner_id'] = $user;

      $cards_number = Card::count();

      $array = array();


      for($i = 1;$i<=(38);$i++)
      {
          $monsters = rand(1,$cards_number - 20);
          array_push($array, $monsters);
      }

      for($i = 0;$i<=(27);$i++)

      {
          $mana = rand(255,275);

          if(count($array) < 55)
          {
            array_push($array, $mana);
          }

      }


      $attributes['cards_array'] = $array;



      Deck::create($attributes);

      // redireccionar para mostrar as cartas
      return redirect('/decks');

  }

  public function validateDeck(){

    return request()->validate([
      'Name'=>['required', 'min:3', 'max:30'],
      'Description'=>'required'
    ]);
  }

}
