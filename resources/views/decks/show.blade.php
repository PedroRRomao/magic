@extends('layouts.app')

@section('title', 'Decks')


@section('content')

<h1 class='title'>{{ $Deck->Name }}</h1>
<div class='content'>{{ $Deck->Description}}

</div>
<form method= 'GET' action= '/decks/{{ $Deck->id }}/edit'>
  @csrf
  <div>
  <button type='submit' class='has-text-white button is-link'>Edit Deck Name</button>
 </div>
</form>
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

            @elseif (($loop->iteration)%5 == 0)

                    <div class="card">
                      <a href="{{ URL::asset($Cards->src) }}" target="_blank">
                        <img src="{{ URL::asset($Cards->src) }}" alt="Card image cap">
                      </a>
                    </div>
                  </div>
                </div>
              </div>

            @elseif ((($loop->iteration)-1)%5 == 0)
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
