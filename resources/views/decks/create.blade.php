@extends('layouts.app')

@section('title', 'Decks')


@section('content')

<h1 class='title'>Create your own deck!</h1>

<form method='POST' action='/decks'>
  @csrf
  <div>
    <label class=label>Enter your Deck's Name:</label>
    <input type='text' name='title' placeholder='DeckName'>
  </div>
  <br>
  <div>
    <label class=label>Your Deck's Description:</label>
    <textarea name='Description'></textarea>
  </div>
  <br>
  <div>
    <button type='submit'>Submit</button>
  </div>
</form>


@endsection
