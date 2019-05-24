@extends('layouts.app')

@section('content')


    <h1 class="title">User Decks:</h1>
    <ul>
    @foreach ($user as $user)


        <li><h1>{{ $user->name }} : <a href="/decks/{{ $user->deck->id }}">{{ $user->deck->Name }}</h1></a></li>





    @endforeach
    </ul>
@endsection
