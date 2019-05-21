@extends('layouts.app')

@section('title', 'Decks')


@section('content')
  <div>

    </form>
    <br>
    <h1>Decks</h1>

    @if(count($decks) == 0)
      <form method= 'GET' action= 'decks/create'>
        @csrf
      <div>
        <button type="submit" class='button is-link' style="border-radius: 5px;">Build a New One</button>
      </div>

    @else
      <ul>
        @foreach($decks as $Deck)
          <li>
            <a href="/decks/{{ $Deck->id }}">
              {{ $Deck->Name }}
            </a>
          </li>
        @endforeach
      </ul>

    @endif
  </div>


@endsection
