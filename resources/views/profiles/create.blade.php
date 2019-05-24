@extends('layouts.app')

@section('content')
    <h1>Create your Profile</h1>
    <form method="POST" action="/profiles">

      @csrf

        <div class="field">
          <label class="label">First Name</label>
          <div class="control">
            <input class="input {{ $errors->has('first_name') ? 'is-danger' : '' }}" type="text" name="first_name" placeholder="First Name" required>
          </div>
        </div>

        <div class="field">
          <label class="label">Last Name</label>
          <div class="control">
            <input class="input" type="text" name="last_name" placeholder="Last Name" required>
          </div>
        </div>

        <div class="field">
          <label class="label">Country</label>
          <div class="control">
            <input class="input" type="text" name="country" placeholder="Country" required>
          </div>
        </div>

        <div class="field">
          <label class="label">City</label>
          <div class="control">
            <input class="input" type="text" name="city" placeholder="City" required>
          </div>
        </div>

        <div class="field">
          <label class="label">Birthdate</label>
          <div class="control">
            <input class="input" type="text" name="birthdate" placeholder="BirthDate" required>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <button type="submit" name="button is-link">Create Profile</button>
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
