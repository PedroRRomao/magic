@extends('layouts.app')

@section('content')

    {{-- {{ dd(Auth::user()->unreadNotifications) }} --}}
    @php $data = Auth::user()->unreadNotifications; @endphp
    {{-- <h1>{{ $data }}</h1> --}}
    @foreach ( $data as $notification)

        <h1>Do you want to trade this cards?</h1>
        <div class="row">


        @php $trader = $notification->first()->data['image_trade']; @endphp
        @php $user_c = $notification->first()->data['image_user']; @endphp
        <div class="col-6">
          <img src="/{{ $cards->get($trader)->src }}" alt="image">
        </div>
        <div class="col-6">
          <img src="/{{ $cards->get($user_c)->src }}" alt="image">
        </div>
      </div>

    @endforeach

    <div class="row">
      <div class="col-6">
        <button type="submit" class='button is-link' style="border-radius: 5px;" value="1">Accept</button>
      </div>
      <div class="col-6">
        <button type="submit" class='button is-link' style="border-radius: 5px;" value="2">Decline</button>
      </div>
    </div>


@endsection
