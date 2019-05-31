@extends('layouts.app')

@section('style')
  <link href="{{ asset('css/cards.css') }}" rel="stylesheet">

@stop

@section('scrypt')
<script src="{{ asset('js/cards.js') }}" defer></script>
@stop
@section('trades')

      <hr>

      <form  method="POST" action="/send/{{ $user_trade->id }}">

        @method('PATCH')
        @csrf

        <div class="row">
          <div class='col-6'><h1 class="has-text-white">Your Deck: {{ Auth::user()->name }} </h1>

            @foreach ($cards_user as $Cards)

              @if ($loop->first)
                <div class="card">
                  <div class="card-body">
                    <div class="card-deck">
                      <div class="card" id="card">
                        <label class="c-check">
                          <img src="{{ URL::asset($Cards->src) }}" alt="Card image cap">
                          <input type="checkbox" name="cards_user[]" value="{{ $Cards->id }}"/>
                          <span class="c-check__view"></span>
                        </label>

                      </div>

              @elseif (($loop->iteration)%5 == 0)

                      <div class="card" id="card">
                        <label class="c-check">
                          <img src="{{ URL::asset($Cards->src) }}" alt="Card image cap">
                          <input type="checkbox" name="cards_user[]" value="{{ $Cards->id }}"/>
                          <span class="c-check__view"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

              @elseif ((($loop->iteration)-1)%5 == 0)

                @if($loop->remaining < 1)

                  <div class="card">
                    <div class="card-body">
                      <div class="card-deck">
                        <div class="card is-clearfix" id="card">
                          <label class="c-check">
                            <img src="{{ URL::asset($Cards->src) }}" alt="Card image cap">
                            <input type="checkbox" name="cards_user[]" value="{{ $Cards->id }}"/>
                            <span class="c-check__view"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>

                @else

                  <div class="card">
                    <div class="card-body">
                      <div class="card-deck">
                        <div class="card" id="card">
                          <label class="c-check">
                            <img src="{{ URL::asset($Cards->src) }}" alt="Card image cap">
                            <input type="checkbox" name="cards_user[]" value="{{ $Cards->id }}"/>
                            <span class="c-check__view"></span>
                          </label>
                        </div>
                @endif

              @else

                  @if($loop->remaining <1)

                        <div class="card is-clearfix" id="card">
                          <label class="c-check">
                            <img src="{{ URL::asset($Cards->src) }}" alt="Card image cap">
                            <input type="checkbox" name="cards_user[]" value="{{ $Cards->id }}"/>
                            <span class="c-check__view"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>

                @else
                      <div class="card" id="card">
                        <label class="c-check">
                          <img src="{{ URL::asset($Cards->src) }}" alt="Card image cap">
                          <input type="checkbox" name="cards_user[]" value="{{ $Cards->id }}"/>
                          <span class="c-check__view"></span>
                        </label>
                      </div>
                @endif

              @endif

            @endforeach
          </div>

          <div class="col-6"><h1 class="has-text-white">Traders Deck: {{ $user_trade->name }} </h1>

            @foreach ($cards_trader as $CardsT)

              @if ($loop->first)
                <div class="card">
                  <div class="card-body">
                    <div class="card-deck">
                      <div class="card" id="card">
                        <label class="c-check">
                          <img src="{{ URL::asset($CardsT->src) }}" alt="Card image cap">
                          <input type="checkbox" name="cards_trader[]" value="{{ $CardsT->id }}"/>
                          <span class="c-check__view"></span>
                        </label>
                      </div>

              @elseif (($loop->iteration)%5 == 0)

                      <div class="card" id="card">
                        <label class="c-check">
                          <img src="{{ URL::asset($CardsT->src) }}" alt="Card image cap">
                          <input type="checkbox" name="cards_trader[]" value="{{ $CardsT->id }}"/>
                          <span class="c-check__view"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

              @elseif ((($loop->iteration)-1)%5 == 0)

                @if($loop->remaining < 1)
                  <div class="card">
                    <div class="card-body" id="last_card">
                      <div style="width: 40%" class="card-deck">
                        <div class="card" id="card">
                          <label class="c-check">
                            <img src="{{ URL::asset($CardsT->src) }}" alt="Card image cap">
                            <input type="checkbox" name="cards_trader[]" value="{{ $CardsT->id }}"/>
                            <span class="c-check__view"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>

                @else

                  <div class="card">
                    <div class="card-body">
                      <div class="card-deck">
                        <div class="card" id="card">
                          <label class="c-check">
                            <img src="{{ URL::asset($CardsT->src) }}" alt="Card image cap">
                            <input type="checkbox" name="cards_trader[]" value="{{ $CardsT->id }}"/>
                            <span class="c-check__view"></span>
                          </label>
                        </div>
                @endif

              @else

                  @if($loop->remaining <1)

                        <div class="card" id="card">
                          <label class="c-check">
                            <img src="{{ URL::asset($CardsT->src) }}" alt="Card image cap">
                            <input type="checkbox" name="cards_trader[]" value="{{ $CardsT->id }}"/>
                            <span class="c-check__view"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>

                @else
                      <div class="card" id="card">
                        <label class="c-check">
                          <img src="{{ URL::asset($CardsT->src) }}" alt="Card image cap">
                          <input type="checkbox" name="cards_trader[]" value="{{ $CardsT->id }}"/>
                          <span class="c-check__view"></span>
                        </label>
                      </div>
                @endif

              @endif

            @endforeach
        </div>
    </div>


@stop

@section('content')


    <div class="control" style="margin-left: 12%;">
      <button type="submit" name="submit" class="button is-link rounded offset-md-4" style="border-radius: 5px;">Ask for Trade</button>
    </div>



</form>



@endsection
