<?php

namespace App\Http\Controllers;
use App\Profile;
use App\Clan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ClansController extends Controller
{

    public function __construct(){
      // $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $clans = Clan::all();

      return view('clans.index', compact('clans'));

    }


    public function create()
    {
      return view('clans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store()
    {
      $attributes = $this->validateClan();


      $user = Auth::user();

      // $user->profile->clan_id =


      $clan = Clan::create($attributes);

      $user->profile->clan_id = $clan->id;

      $user->profile->save();

      return redirect('/clans');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clan  $clan
     * @return \Illuminate\Http\Response
     */
    public function show(Clan $Clan)
    {
      // $this->authorize('view', $Clan);

      // $Profile = Profile::where('clan_id', $Clan->id);

      // dd($Profile);

      return view('clans.show', compact('Clan', 'Profile'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clan  $clan
     * @return \Illuminate\Http\Response
     */
    public function edit(Clan $Clan)
    {

      $this->authorize('view', $Clan);
      return view('clans.edit', compact('Clan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clan  $clan
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $Clan = Clan::find($id);

        $user = Auth::user();
        $Profile = $user->profile;
        $Profile->clan_id = $id;
        $Profile->save();

        return view('clans.show', compact('Clan'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clan  $clan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clan $Clan)
    {

      $user = Auth::user();
      $profile = $user->profile;
      $profile->clan_id = null;
      $profile->save();

      return view('clans.show');

    }

    public function validateClan(){

      return request()->validate([
        'name'=>['required', 'min:3', 'max:30'],
        'description'=>['required', 'max:30']
      ]);
    }

}
