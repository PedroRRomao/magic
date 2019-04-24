<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profile</title>
  </head>
  <body>
    <h1>Edit your Profile</h1>
    <form method="POST" action="/profiles">

      {{ csrf_field() }}

      <div>
        <input type="text" name="first_name" placeholder="First Name">
      </div>

      <div>
        <input type="text" name="last_name" placeholder="Last Name">
      </div>

      <div>
        <input type="text" name="country" placeholder="Country">
      </div>

      <div>
        <input type="text" name="city" placeholder="City">
      </div>

      <div>
        <input type="text" name="birthdate" placeholder="Birth date">
      </div>

      <div>
        <button type="submit" name="submit">Submit</button>
      </div>

    </form>
  </body>
</html>
