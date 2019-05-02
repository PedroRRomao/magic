<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deck;
use App\Card;

class DeckCardsController extends Controller
{
    public function index(){

    }

    public function store(Deck $Deck){

      $Deck->addCard(request('name'));


    }

}
