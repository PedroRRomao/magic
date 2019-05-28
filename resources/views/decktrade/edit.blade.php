unchecked@extends('layouts.app')

@section('style')
  <link href="{{ asset('css/cards.css') }}" rel="stylesheet">

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
                        <label class="image-checkbox">
                            <img src="{{ URL::asset($Cards->src) }}" alt="Card image cap">
                            <input type="checkbox" name="cards_user[]" value="{{ $Cards->id }}" checked="checked" />
                        </label>

                      </div>

              @elseif (($loop->iteration)%5 == 0)

                      <div class="card" id="card">
                        <label class="image-checkbox">
                            <img src="{{ URL::asset($Cards->src) }}" alt="Card image cap">
                            <input type="checkbox" name="cards_user[]" value="{{ $Cards->id }}" checked="unchecked" />
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
                          <label class="image-checkbox">
                              <img src="{{ URL::asset($Cards->src) }}" alt="Card image cap">
                              <input type="checkbox" name="cards_user[]" value="{{ $Cards->id }}" checked="unchecked" />
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
                          <label class="image-checkbox">
                              <img src="{{ URL::asset($Cards->src) }}" alt="Card image cap">
                              <input type="checkbox" name="cards_user[]" value="{{ $Cards->id }}" checked="unchecked" />
                          </label>
                        </div>
                @endif

              @else

                  @if($loop->remaining <1)

                        <div class="card is-clearfix" id="card">
                          <label class="image-checkbox">
                              <img src="{{ URL::asset($Cards->src) }}" alt="Card image cap">
                              <input type="checkbox" name="cards_user[]" value="{{ $Cards->id }}" checked="unchecked" />
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>

                @else
                      <div class="card" id="card">
                        <label class="image-checkbox">
                            <img src="{{ URL::asset($Cards->src) }}" alt="Card image cap">
                            <input type="checkbox" name="cards_user[]" value="{{ $Cards->id }}" checked="unchecked" />
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
                        <label class="image-checkbox">
                            <img src="{{ URL::asset($CardsT->src) }}" alt="Card image cap">
                            <input type="checkbox" name="cards_trader[]" value="{{ $CardsT->id }}" checked="unchecked" />
                        </label>
                      </div>

              @elseif (($loop->iteration)%5 == 0)

                      <div class="card" id="card">
                        <label class="image-checkbox">
                            <img src="{{ URL::asset($CardsT->src) }}" alt="Card image cap">
                            <input type="checkbox" name="cards_trader[]" value="{{ $CardsT->id }}" checked="unchecked" />
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
                          <label class="image-checkbox">
                              <img src="{{ URL::asset($CardsT->src) }}" alt="Card image cap">
                              <input type="checkbox" name="cards_trader[]" value="{{ $CardsT->id }}" checked="unchecked" />
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
                          <label class="image-checkbox">
                              <img src="{{ URL::asset($CardsT->src) }}" alt="Card image cap">
                              <input type="checkbox" name="cards_trader[]" value="{{ $CardsT->id }}" checked="unchecked" />
                          </label>
                        </div>
                @endif

              @else

                  @if($loop->remaining <1)

                        <div class="card" id="card">
                          <a href="{{ URL::asset($CardsT->src) }}" target="_blank">
                            <img src="{{ URL::asset($CardsT->src) }}" alt="Card image cap">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                @else
                      <div class="card" id="card">
                        <label class="image-checkbox">
                            <img src="{{ URL::asset($CardsT->src) }}" alt="Card image cap">
                            <input type="checkbox" name="cards_trader[]" value="{{ $CardsT->id }}" checked="unchecked" />
                        </label>
                      </div>
                @endif

              @endif

            @endforeach
        </div>
    </div>



<script type="text/javascript">
  jQuery(function ($) {
      // init the state from the input
      $(".image-checkbox").each(function () {
          if ($(this).find('input[type="checkbox"]').first().attr("checked")) {
              $(this).addClass('image-checkbox-checked');
          }
          else {
              $(this).removeClass('image-checkbox-checked');
          }
      });

      // sync the state to the input
      $(".image-checkbox").on("click", function (e) {
          if ($(this).hasClass('image-checkbox-checked')) {
              $(this).removeClass('image-checkbox-checked');
              $(this).find('input[type="checkbox"]').first().removeAttr("checked");
          }
          else {
              $(this).addClass('image-checkbox-checked');
              $(this).find('input[type="checkbox"]').first().attr("checked", "checked");
          }

          e.preventDefault();
      });
  });
</script>


@stop

@section('content')


    <div class="control">
      <button type="submit" name="button is-link">Ask for Trade</button>
    </div>



</form>



@endsection
