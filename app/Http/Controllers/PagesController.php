<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
      $links = \App\Link::all();

      return view('welcome')->withLinks($links);
    }

    public function decks()
    {
      return view('decks');
    }

    public function rules()
    {
      return view('rules');
    }
}
