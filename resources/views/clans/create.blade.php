@extends('layouts.app')

@section('content')
    <h1>Here you can create a Clan</h1>
    <
    <form method="POST" action="/clans">

      @csrf

      <div class="field">

        <label class="label">Clan Name</label>

        <div class="control">
          <input class="input" type="text" name="name" placeholder="Clan Name" required>
        </div>
      </div>

        <div class="field">
          <label class="label">Number of Members allowed</label>
          <div class="control">
            <input class="input" type="text" name="members_number" placeholder="Number of members" required>
          </div>
        </div>
        <div class="field">
          <div class="control">
            <button type="submit" name="button is-link">Create Clan</button>
          </div>
        </div>

        @if ($errors->any())
          <div class="notification is-danger">

            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>

          </div>
        @endif
    </form>
@endsection
