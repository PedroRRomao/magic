@extends('layouts.app')

@section('title', 'Decks')


@section('content')

<h1 class='title '>Congratulations!</h1>
<div>
  <label class=''> You have created your deck, now it's time to add cards.</label>
</div>
<br>
<div>
  <form method='GET' action='/decks'>
    @csrf
    <div>
      <button type="submit" class='button is-link' style="border-radius: 5px;">Back to Decks page</button>
    </div>
  </form>
</div>
@endsection
