<?php

namespace App\Http\Controllers;

use App\Clan;
use Illuminate\Http\Request;

class ClansController extends Controller
{

    public function __construct(){
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Clans = Clan::all();

      return view('clans.index', compact('clans'));

    }


    public function create()
    {
      return view('decks.create');
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





      Clan::create($attributes);



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
      $this->authorize('view', $Clan);

      $Profile = Profile::findMany($Clan['profiles_array']);

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
      $Clan = Clan::findorFail($id);

      return view('clans.edit', compact('Ceck'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clan  $clan
     * @return \Illuminate\Http\Response
     */
    public function update(Clan $Clan)
    {
        $Clan->update(request(['name', 'members_mumber']));

        return redirect('/clans');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clan  $clan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clan $Clan)
    {
      $Card->delete();

      return view('clans.delete');

    }

    public function validateClan(){

      return request()->validate([
        'name'=>['required', 'min:3', 'max:30'],
        'members_number'=>'required'
      ]);
    }

}
