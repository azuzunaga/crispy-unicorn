<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      @foreach ($users as $user)
      <li>{{ $user }}</li>
      @endforeach
    </ul>
  </body>
</html>
