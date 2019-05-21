@extends('layouts.app')

@section('title', 'Decks')


@section('content')

<h1 class='title '>You have deleted your deck succesfully.</h1>
<br>
<form method= 'GET' action= '/decks'>
  @csrf

<div>
  <button type="submit" class='button is-link' style="border-radius: 5px;">Back to Decks page</button>
</div>
</form>



@endsection
