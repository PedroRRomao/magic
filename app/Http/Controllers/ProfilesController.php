<?php

namespace App\Http\Controllers;


use App\Profile;

class ProfilesController extends Controller
{
  public function index()
  {
    $profile = Profile::all();


    return view('profiles.index', compact('profile'));
  }

  public function show(Profile $profile){

    return view('profiles.show', compact('profile'));
  }

  public function create()
  {
    return view('profiles.create');
  }

  public function store()
  {
    // request()->validate([
    //   'username'->['required','min:3'],
    //
    //   'first_name'->'required',
    //
    //   'last_name'->'required',
    //
    //   'email'->'required',
    //
    //   'country'->'required',
    //
    //   'city'->'required',
    //
    //   'birthdate'->'required'
    //
    // ]);

    Profile::create(request(['username', 'first_name', 'last_name', 'email', 'country', 'city', 'birthdate']));

    return redirect('/profiles');
  }

  public function edit(Profile $profile) {

    return view('profiles.edit', compact('profile'));
  }

  public function update($id) {

    $profile = Profile::findOrFail($id);


    $profile->username = request('username');
    $profile->first_name = request('first_name');
    $profile->last_name = request('last_name');
    $profile->country = request('country');
    $profile->city = request('city');
    $profile->birthdate = request('birthdate');

    $profile->save();

    return redirect('/profiles');
  }

  public function destroy(Profile $profile){

    $profile->delete();

    return redirect('/profiles');
  }
}
