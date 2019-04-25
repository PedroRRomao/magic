@extends('layouts.app')

@section('content')

  <h1 class="title">Edit Profile</h1>


  <form  method="POST" action="/profiles/{{ $profiles->id }}">

    {{ method_field('PATCH') }}

    {{ csrf_field() }}

    <div class="field">

      <label class="label">Username</label>

      <div class="control">
        <input class="input" type="text" placeholder="User Name" value="{{ $profiles->username }}">
      </div>

      <div class="field">
        <label class="label">First Name</label>
        <div class="control">
          <input class="input" type="text" placeholder="First Name" value="{{ $profiles->first_name }}">
        </div>
      </div>

      <div class="field">
        <label class="label">Last Name</label>
        <div class="control">
          <input class="input" type="text" placeholder="Last Name" value="{{ $profiles->last_name }}">
        </div>
      </div>

      <div class="field">
        <label class="label">Country</label>
        <div class="control">
          <input class="input" type="text" placeholder="Country" value="{{ $profiles->country }}">
        </div>
      </div>

      <div class="field">
        <label class="label">City</label>
        <div class="control">
          <input class="input" type="text" placeholder="City" value="{{ $profiles->city }}">
        </div>
      </div>

      <div class="field">
        <label class="label">Birthdate</label>
        <div class="control">
          <input class="input" type="text" placeholder="BirthDate" value="{{ $profiles->birthdate }}">
        </div>
      </div>

      <div class="field">
        <div class="control">
        <button type="submit" name="button is-link">Update Profile</button>
        </div>
      </div>

    </div>

  </form>

@endsection
