@extends('layouts.app')

@section('title', 'Decks')


@section('content')

<h1 class='title'>Edit your deck!</h1>

<form method='POST' action='/decks/{{ $Deck->id}}'>

  @method('PATCH')
  @csrf
  <div>
    <label class=label>Enter your Deck's Name:</label>
    <input type='text' name='title' placeholder='DeckName'value='{{ $Deck->Name }}'>
  </div>
  <br>
  <div>
    <label class=label>Your Deck's new Description:</label>
    <textarea name='Description' value='{{ $Deck->Description }}'></textarea>
  </div>
  <br>
  <div>
    <button type='submit' class='button is-link'>Update</button>
  </div>
</form>


@endsection
