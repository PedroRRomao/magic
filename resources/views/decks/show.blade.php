@extends('layouts.app')

@section('title', 'Decks')


@section('content')

<h1 class='title'>{{ $Deck-> Name }}</h1>
<div class='content'>{{ $Deck-> Description}}
</div>
<p>
  <a href='/decks/{{ $Deck->id }}/edit'>Edit</a>
<br>
@endsection
