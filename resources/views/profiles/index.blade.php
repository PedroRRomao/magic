<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profile</title>
  </head>
  <body>
    <h1>Profile:</h1>
    @foreach ($profiles as $profile)
      <li>{{ $profile->username }}</li>
    @endforeach
  </body>
</html>
