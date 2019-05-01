@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

            </div>
            <br>
            <br>
        </div>
    </div>
    <form method='GET' action='/'>
      @csrf
      <div>
        <button type="submit" style="display: block; border-radius: 5px; margin: 0 auto;">Back to main page</button>
      </div>
    </form>
</div>
@endsection
