@extends('layouts.app')

@section('title', 'Decks')


@section('content')

<h1 class='title'>Congratulations!</h1>
<div>
  <label> You have created your deck, now it's time to add cards.</label>
</div>
<br>
<div>
  <button> Start adding cards</button>

</div>
<br>
{{-- <form method='GET' action= 'decks/{{ $Deck->id}}/edit'>
  @method('GET')

  @csrf
  <div>
    <button type = 'submit'> Edit your deck</button>
  </div>
</form> --}}