@extends('layouts.layout')

@section('content')
  <h1>Decks</h1>
  @foreach($decks as $Deck)
    <li> {{ $Deck->Name }} </li>
  @endforeach


@endsection
