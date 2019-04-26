<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Deck;

class PagesController extends Controller
{
    public function home()
    {
      // $links = \App\Link::all();

      // return view('welcome')->withLinks($links);

      return view('welcome');
    }

    public function decks()
    {
      $decks = Deck::all();

      return view('decks', compact('decks'));
      
    }

    public function rules()
    {
      return view('rules');
    }
}
