<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deck;
use App\User;
use App\Card;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_user, $id_trade)
    {

        $user = User::find($id_user);
        $user_trade = User::find($id_trade);

        $deck_user = $user->deck;
        $deck_trader = $user_trade->deck;

        $cards_user = Card::findMany($deck_user['cards_array']);
        $cards_trader = Card::findMany($deck_trader['cards_array']);

        $url = url()->full();

        $this->sendNotification($url, $user_trade);

        return view('decktrade.edit', compact('deck_user', 'deck_trader', 'user_trade', 'cards_trader', 'cards_user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    public function sendNotification($url, User $user)
    {

        $details = [
            'greeting' => 'Another User wants to trade with you',
            'actionURL' => $url,
            'order_id' => $user->id,
        ];

        $user->notify(new TradeNotification($details));

    }
}
