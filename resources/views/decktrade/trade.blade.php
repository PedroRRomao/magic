@extends('layouts.app')

@section('content')

    <form  method="GET" action="/">



    @php $noti = Auth::user()->notifications; @endphp


    <h1>Do you want to trade this cards?</h1>
    <div class="row">

      @php $trader = $noti->first()->data['image_trade']; @endphp
      @php $user_c = $noti->first()->data['image_user']; @endphp
      <div class="col-6">
        <img src="/{{ $cards->find($trader)->src }}" alt="image">
      </div>
      <div class="col-6">
        <img src="/{{ $cards->find($user_c)->src }}" alt="image">
      </div>
    </div>



    <div class="row">
      <div class="col-6">
        <button type="submit" class='button is-link' style="border-radius: 5px;" value="1">Accept</button>
      </div>
      <div class="col-6">
        <button type="submit" class='button is-link rounded offset-md-4' style="border-radius: 5px;" value="2">Decline</button>
      </div>
    </div>
</form>

@endsection
