@extends('layouts.app')

@section('content')

  <h1 class="title">Edit Profile</h1>


  <form  method="POST" action="/profiles/{{ $profile->id }}">

    @method('PATCH')

    @csrf

    <div class="field">

      <label class="label">Username</label>

      <div class="control">
        <input class="input" type="text" name="username" placeholder="User Name" value="{{ $profile->username }}">
      </div>
    </div>

      <div class="field">
        <label class="label">First Name</label>
        <div class="control">
          <input class="input" type="text" name="first_name" placeholder="First Name" value="{{ $profile->first_name }}">
        </div>
      </div>

      <div class="field">
        <label class="label">Last Name</label>
        <div class="control">
          <input class="input" type="text" name="last_name" placeholder="Last Name" value="{{ $profile->last_name }}">
        </div>
      </div>

      <div class="field">
        <label class="label">Country</label>
        <div class="control">
          <input class="input" type="text" name="country" placeholder="Country" value="{{ $profile->country }}">
        </div>
      </div>

      <div class="field">
        <label class="label">City</label>
        <div class="control">
          <input class="input" type="text" name="city" placeholder="City" value="{{ $profile->city }}">
        </div>
      </div>

      <div class="field">
        <label class="label">Birthdate</label>
        <div class="control">
          <input class="input" type="text" name="birthdate" placeholder="BirthDate" value="{{ $profile->birthdate }}">
        </div>
      </div>

      <div class="field">
        <div class="control">
          <button type="submit" name="button is-link">Update Profile</button>
        </div>
      </div>



  </form>

@endsection
