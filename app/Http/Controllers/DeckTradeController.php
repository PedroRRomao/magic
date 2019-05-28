<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Request;

use App\Deck;
use App\User;
use App\Card;
use Illuminate\Support\Facades\Auth;
use Notification;
use App\Notifications\TradeNotification;

class DeckTradeController extends Controller
{

      public function __construct() {

        $this->middleware('auth');
      }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
       $user = User::all();

       $deck = Deck::all();

       return view('decktrade.index', compact('user', 'deck'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::find(Auth::id());

        $splitRequest = explode(':', $request->submit);

        $card_trader = Card::find($splitRequest[1]);


        $card_user = Card::find($splitRequest[2]);

        if($splitRequest[0] == "accept")
        {
          $card_array = $user->deck->cards_array;
          $array_copy = array();

          foreach($card_array as $key => $value)
          {
             if($value == $card_trader->id){

               $array_copy[$key] = $card_user->id; // for arrays where key equals offset
               $trade_array = array_replace($card_array, $array_copy);

             }

          }

          $user->deck->cards_array = $trade_array;
          $user->deck->save();
          return view('welcome');
        }
        else if($splitRequest[0] == "decline")
        {
          return view('welcome');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


      return view('decktrade.show', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

      $cards = Card::all();

      return view('decktrade.trade', compact('cards'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_user, $id_trade)
    {

      $user = User::find($id_user);
      $user_trade = User::find($id_trade);

      $deck_user = $user->deck;
      $deck_trader = $user_trade->deck;

      $cards_user = Card::findMany($deck_user['cards_array']);
      $cards_trader = Card::findMany($deck_trader['cards_array']);


      return view('decktrade.edit', compact('deck_user', 'deck_trader', 'user', 'user_trade', 'cards_trader', 'cards_user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function sendNotification(User $user, Card $card_user, Card $card_trader)
    {

        $url = url('/decktrade/trade/'.$user->id);

        $details = [
            'greeting' => 'Another User wants to trade with you',
            'image_trader' => $card_trader,
            'image_user' => $card_user,
            'actionURL' => $url,
            'order_id' => $user->id,
        ];

        $user->notify(new TradeNotification($details, $card_user, $card_trader));

    }

    public function trade(Request $request, User $user){

      $user_card = $request->cards_user[0];
      $trade_card = $request->cards_trader[0];

      $this->sendNotification($user, Card::find($user_card), Card::find($trade_card));

      return view('decktrade.show');
    }
}
