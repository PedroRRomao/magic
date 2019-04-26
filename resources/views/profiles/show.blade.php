@extends('layouts.app')

@section('content')

  <h1 class="title">{{ $profile->username }}</h1>

  <div class="container"><h1>This user is from: {{ $profile->country }}</h1>

  </div>

  <p>
    <a href="/profiles/{{ $profile->id }}/edit">Edit Profile</a>
  </p>
@endsection
