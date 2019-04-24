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

    return view('profiles', compact('profiles'));
  }
}
