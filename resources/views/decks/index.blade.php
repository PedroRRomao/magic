@extends('layouts.app')

@section('title', 'Decks')


@section('content')
  <h1 class='has-text-white'>Decks</h1>

  <ul>
    @foreach($decks as $Deck)
      <li>
        <a class='has-text-white' href="/decks/{{ $Deck-> id }}">
          {{ $Deck-> Name }}
        </a>
      </li>
    @endforeach
  </ul>




@endsection
