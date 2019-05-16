@extends('layouts.app')



@section('title', 'Cards')


@section('content')

        @foreach ($cards as $card)

          @if ( $card->id == 1)
            <div class="card">
              <div class="card-body">
                <div class="card-deck">
                  <div class="card">
                    <a href="{{ $card->src }}" target="_blank">
                      <img src="{{ $card->src }}" alt="Card image cap">
                    </a>

                  </div>

          @elseif (($card->id)%5 == 0)

                  <div class="card">
                    <a href="{{ $card->src }}" target="_blank">
                      <img src="{{ $card->src }}" alt="Card image cap">
                    </a>
                  </div>
                </div>
              </div>
            </div>

          @elseif ((($card->id)-1)%5 == 0)
            <div class="card">
              <div class="card-body">
                <div class="card-deck">
                  <div class="card">
                    <a href="{{ $card->src }}" target="_blank">
                      <img src="{{ $card->src }}" alt="Card image cap">
                    </a>
                  </div>
          @else
                  <div class="card">
                    <a href="{{ $card->src }}" target="_blank">
                      <img src="{{ $card->src }}" alt="Card image cap">
                    </a>
                  </div>
          @endif

        @endforeach


@endsection
