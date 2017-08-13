<html>
  <body>
    <h1>users</h1>
    <ul>
      @foreach ($users as $user)
        <li>{{ $user->name }}</li>
      @endforeach
    </ul>
  </body>
</html>
