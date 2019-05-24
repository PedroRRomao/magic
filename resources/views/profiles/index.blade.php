@extends('layouts.app')

@section('content')


    <h1 class="title">Profile:</h1>
    @foreach ($profile as $profile)

      <li>
        <a href="/profiles/{{ $profile->id }}">
          {{ Auth::user()->name }}
        </a>

      </li>

    @endforeach

@endsection
