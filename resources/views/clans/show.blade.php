@extends('layouts.app')

@section('title', 'Clan')


@section('content')

<h1 class='title'>{{ $Clan->name }}</h1>
<div class='content label'>Victories:{{ $Clan->victory}} | Defeats:{{ $Clan->defeat}}
</div>
<div class='content'>
  <p class='label'>Number of Members Allowed: {{ $Clan->members_number}}</p>
</div>

<br>
@if(Auth::user()->profile->clan_id == $Clan->id)
  <form method= 'DELETE' action= '/clans/{{ $Clan->id }}'>
    @csrf
    <div>
    <button type='submit' class='has-text-white button is-link'>Leave Clan</button>
   </div>
  </form>

@else
  <form method= 'POST' action= '/clans/{{ $Clan->id }}'>
    @method('PATCH')
    @csrf
    <div>
    <button type='submit' class='has-text-white button is-link'>Join</button>
   </div>
  </form>
@endif
<br>
<br>
<div class="card">
    <div class="card-header has-text-dark">Clan Members</div>
      <div class="card-body">
          @foreach ($Clan->profile as $Profile)
              <a href="/profiles/{{ $Profile->id }}" target="_blank">
                    <h1> - {{ $Profile->user->name }}</h1>
              </a>
      </div>
          @endforeach
</div>


@endsection
