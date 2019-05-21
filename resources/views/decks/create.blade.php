@extends('layouts.app')

@section('title', 'Decks')


@section('content')

<h1 class='title '>Create your own deck!</h1>

<form method='POST' action='/decks'>
  @csrf
  <div class="field">

    <label class="label">Deck Name</label>

    <div class="control">
      <input class="input" type="text" name="Name" placeholder="Name" required>
    </div>
  </div>
  <br>
  <div class="field">

    <label class="label">Your Deck Description</label>

    <div class="control">
      <input class="input" type="text" name="Description" placeholder="Description" required>
    </div>
  </div>
  <br>
  <div>
    <button type='submit' class='button is-link'>Submit</button>
  </div>
  <br>
  @if ($errors->any())
  <div class='notification is-danger'>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

</form>

@endsection
