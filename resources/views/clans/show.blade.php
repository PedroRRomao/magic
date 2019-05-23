@extends('layouts.app')

@section('title', 'Clan')


@section('content')

<h1 class='title'>{{ $Clan->name }}</h1>
<div class='content'>{{ $Clan->victory}}, {{ $Clan->defeat}}
</div>
<div class='content'>
  <p>Number of Members:</p>
  {{ $Clan->members_number}}
</div>

<form method= 'GET' action= '/clans/{{ $Clan->id }}/edit'>
  @csrf
  <div>
  <button type='submit' class='has-text-white button is-link'>Edit Deck Name</button>
 </div>
</form>
<br>
<br>
<div class="card">
    <div class="card-header has-text-dark">Clan Members</div>
      <div class="card-body">
          @foreach ($Profile as $Profiles)
              <a href="/profiles/{{ $profile->id }}" target="_blank">
                    {{$profile->username}}
              </a>
      </div>
          @endforeach
</div>


@endsection
