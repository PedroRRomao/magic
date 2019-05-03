@extends('layouts.app')

@section('content')


    <h1 class="title">Profile:</h1>
    @foreach ($profile as $profile)

      <li>
        <a href="/profiles/{{ $profile->id }}">
          {{ $profile->username }}
        </a>

      </li>

    @endforeach

@endsection
