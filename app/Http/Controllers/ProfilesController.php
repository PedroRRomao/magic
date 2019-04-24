<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profile;

class ProfilesController extends Controller
{
  public function profiles()
  {
    $profiles = Profile::all();
    //
    // return $profiles;

    return view('profiles.index', compact('profiles'));
  }

  public function edit()
  {
    return view('profiles.edit');
  }

  public function store() {

    $profile = new Profile();

    $profile->first_name = request('first_name')


  }
}
