<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Profile;

class ProfilesController extends Controller
{
  public function index()
  {
    $profiles = Profile::all();


    return view('profiles.index', compact('profiles'));
  }

  public function show(){


  }

  public function create()
  {
    return view('profiles.create');
  }

  public function store() {

    $profile = new Profile();

    $profile->username = request('username');
    $profile->first_name = request('first_name');
    $profile->last_name = request('last_name');
    $profile->email = request('email');
    $profile->country = request('country');
    $profile->city = request('city');
    $profile->birthdate = request('birthdate');

    $profile->save();

    return redirect('/profiles');

  }

  public function edit($id) {

    $profiles = Profile::find($id);


    return view('profiles.edit', compact('profiles'));
  }

  public function update() {


    dd(request()->all());
    // $profile = Profile::find($id);
    //
    // $profile->username = request('username');
    // $profile->first_name = request('first_name');
    // $profile->last_name = request('last_name');
    // $profile->email = request('email');
    // $profile->country = request('country');
    // $profile->city = request('city');
    // $profile->birthdate = request('birthdate');
    //
    // $profile->save();
    //
    // return redirect('/profiles');
  }
}
