@extends('layouts.app')

@section('title', 'Decks')


@section('content')

<h1 class='title'>You have deleted your deck succesfully.</h1>
<form method= 'GET' action= 'decks/create'>
  @csrf

<div>
  <button type= 'submit'> Build a new one!</button>
</div>


@endsection
