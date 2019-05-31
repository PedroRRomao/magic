@extends('layouts.app')

@section('title', 'Decks')

@section('style')
  <link href="{{ asset('css/cards.css') }}" rel="stylesheet">

@stop

@section('content')

<h1 class='title'>{{ $Deck->Name }}</h1>
<div class='content'>{{ $Deck->Description}}

</div>
@if(Auth::user()->id == $Deck->owner_id)
<form method= 'GET' action= '/decks/{{ $Deck->owner_id }}/edit'>
  @csrf
  <div>
  <button type='submit' class='has-text-white button is-link'>Edit Deck Name</button>
 </div>
</form>
@else
  <form method= 'GET' action= '/decktrade/{{ Auth::user()->deck->owner_id }}/trade/{{ $Deck->owner_id }}'>
    @csrf
    <div>
    <button type='submit' class='has-text-white button is-link'>Trade</button>
   </div>
  </form>
@endif

<br>
<br>
<div class="card">
    <div class="card-header has-text-dark">Deck Cards</div>
      <div class="card-body">
          @foreach ($Card as $Cards)

            @if ($loop->first)
              <div class="card">
                <div class="card-body">
                  <div class="card-deck">
                    <div class="card">
                      <a href="{{ URL::asset($Cards->src) }}" target="_blank">
                        <img src="{{ URL::asset($Cards->src) }}" alt="Card image cap">
                      </a>

                    </div>

            @elseif (($loop->iteration)%3 == 0)

                    <div class="card">
                      <a href="{{ URL::asset($Cards->src) }}" target="_blank">
                        <img src="{{ URL::asset($Cards->src) }}" alt="Card image cap">
                      </a>
                    </div>
                  </div>
                </div>
              </div>

            @elseif ((($loop->iteration)-1)%3 == 0)
              <div class="card">
                <div class="card-body">
                  <div class="card-deck">
                    <div class="card">
                      <a href="{{ URL::asset($Cards->src) }}" target="_blank">
                        <img src="{{ URL::asset($Cards->src) }}" alt="Card image cap">
                      </a>
                    </div>
            @else
                    <div class="card">
                      <a href="{{ URL::asset($Cards->src) }}" target="_blank">
                        <img src="{{ URL::asset($Cards->src) }}" alt="Card image cap">
                      </a>
                    </div>
            @endif

            {{-- <img src="{{ URL::asset($Cards->src) }}" alt="Card image cap"> --}}
          @endforeach
      </div>
</div>

@endsection
