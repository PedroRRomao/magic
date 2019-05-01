@extends('layouts.app')

@section('title has-text-white', 'Decks')


@section('content')

<h1 class='title has-text-white'>{{ $Deck-> Name }}</h1>
<div class='content has-text-white'>{{ $Deck-> Description}}
</div>
<p>
  <a class='has-text-white' href='/decks/{{ $Deck->id }}/edit'>Edit</a>
<br>
@endsection
