<?php

namespace App\Http\Controllers;


use App\Profile;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{

  public function __construct() {

    $this->middleware('auth');
  }

  public function index()
  {
    $profile = Profile::where('user_id', auth()->id())->get();


    return view('profiles.index', compact('profile'));
  }

  public function show(Profile $profile){

    $this->authorize('view', $profile);

    return view('profiles.show', compact('profile'));
  }

  public function create()
  {

    return view('profiles.create');
  }

  public function store()
  {

    $attributes = $this->validateProfile();

    $user = Auth::user();

    $attributes['user_id'] = auth()->id();
    $attributes['email'] = $user->email;


    // Profile::create(request(['username', 'first_name', 'last_name', 'email', 'country', 'city', 'birthdate']));
    Profile::create($attributes);
    return redirect('/profiles');
  }

  public function edit(Profile $profile) {

    $this->authorize('view', $profile);

    return view('profiles.edit', compact('profile'));
  }

  public function update($id) {


    $profile = Profile::findOrFail($id);

    $this->authorize('view', $profile);

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

  public function validateProfile(){

    return request()->validate([

      'first_name'=>['required','min:3'],

      'last_name'=>['required','min:3'],

      'country'=>'required',

      'city'=>'required',

      'birthdate'=>'required'

    ]);
  }
}
