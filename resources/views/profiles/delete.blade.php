@extends('layouts.app')

@section('content')

  <h1 class="title">Delete Profile</h1>


  <form  method="POST" action="/profiles/{{ $profile->id }}">

    {{ method_field('DELETE') }}

    {{ csrf_field() }}

    <div class="field">

      <h1>Do you want to delete your profile?</h1>
    </div>

      <div class="field">
        <div class="control">
          <button type="submit" name="button is-link">Delete Profile</button>
        </div>
      </div>

    </div>

  </form>

@endsection
