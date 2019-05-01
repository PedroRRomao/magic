@extends('layouts.app')

@section('title', 'Decks')


@section('content')

<h1 class='title has-text-white'>Create your own deck!</h1>

<form method='POST' action='/decks'>
  @csrf
  <div>
    <label class='label has-text-white'>Enter your Deck's Name:</label>
    <input type='text' name='title' placeholder='DeckName' required>
  </div>
  <br>
  <div>
    <label class='label has-text-white'>Your Deck's Description:</label>
    <textarea name='Description' required></textarea>
  </div>
  <br>
  <div>
    <button type='submit' class='button is-link'>Submit</button>
  </div>
</form>


@endsection
