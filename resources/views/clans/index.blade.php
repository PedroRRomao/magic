@extends('layouts.app')

@section('title', 'Clans')


@section('content')
  <div>

    </form>
    <br>
    <h1>Clans</h1>

    @if(count($clans) == 0)
      <form method= 'GET' action= 'clans/create'>
        @csrf
      <div>
        <button type="submit" class='button is-link' style="border-radius: 5px;">Create a Clan</button>
      </div>

    @else
      <ul>
        @foreach($clans as $Clan)
          <li>
            <p>  {{ $Clan->name }} </p>
            <a href="/clans/{{ $Clan->id }}">
              Join this Clan
            </a>
          </li>
        @endforeach
      </ul>

    @endif
  </div>


@endsection
