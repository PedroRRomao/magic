@extends('layouts.app')

@section('title', 'Decks')


@section('content')
  <div>
    <form method= 'GET' action= 'decks/create'>
      @csrf
    <div>
      <button type="submit" class='button is-link is-pulled-right' style="border-radius: 5px;">Build a New One</button>
    </div>
    </form>
    <h1 class='has-text-white'>Decks</h1>
  </div>
  <br>
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
