@extends('layouts.app')

@section('title has-text-white', 'Decks')


@section('content')

<h1 class='title has-text-white'>{{ $Deck-> Name }}</h1>
<div class='content has-text-white'>{{ $Deck-> Description}}
</div>
  <button type='submit' class='has-text-white button is-link' href='/decks/{{ $Deck->id }}/edit'>Edit</button>
<br>
<br>
<div class="card">
    <div class="card-header has-text-dark">Deck Cards</div>
      <div class="card-body">
          @foreach ($Deck->cards as $Card)
            <li>{{ $Card-> Name }}</li>
          @endforeach
      </div>
</div>

@endsection
