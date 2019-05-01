@extends('layouts.app')

@section('title', 'Decks')


@section('content')
  <h1>Decks</h1>

  <ul>
    @foreach($decks as $Deck)
      <li>
        <a href="/decks/{{ $Deck-> id }}">
          {{ $Deck-> Name }}
        </a>
      </li>
    @endforeach
  </ul>




@endsection
