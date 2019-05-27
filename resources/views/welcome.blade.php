@extends('layouts.layout')

@section('content')

  <div class="container has-text-centered" style="border: 1px solid red">
      <div class="center-logo" style="border: 1px solid red">
              <figure class="image">
                  <img src="/img/logo.png">
              </figure>
      </div>
  </div>

  <style media="screen">
  .center-logo {
    display: block;
    margin-left: 22%;
    margin-right: auto;
    margin-top: 10%;
    width: 50%;
    }

    .container {
      width: 70%;
    }
  </style>

@endsection
