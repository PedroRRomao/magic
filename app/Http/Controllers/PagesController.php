<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\Notifications\TradeNotification;

class PagesController extends Controller
{
    public function home()
    {
      // $links = \App\Link::all();

      // return view('welcome')->withLinks($links);

      return view('welcome');
    }

    public function rules()
    {
      return view('rules');
    }

    public function cards()
    {

      $cards = Card::all();


      return view('cards', compact('cards'));

    }
}
