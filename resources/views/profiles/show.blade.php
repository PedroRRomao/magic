@extends('layouts.app')

@section('content')

  <h1 class="title">{{ $profile->username }}</h1>

  <div class="box"><h1>This user is from: {{ $profile->city }}</h1>

  </div>

  <div class="box">
    @if(is_null($profile->clan))

    @else
      <h1>Clan: {{ $profile->clan->name }}</h1>
    @endif
  </div>

  <p>
    <a href="/profiles/{{ $profile->id }}/edit">Edit Profile</a>
  </p>
@endsection
