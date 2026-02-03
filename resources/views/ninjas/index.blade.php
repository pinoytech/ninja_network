<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Ninja network | Home</title>
</head>
<body>
  <h2>Current available ninjas</h2>
  <p>{{ $greeting }}</p>
  <ul>
    @foreach ($ninjas as $ninja)
    <li><a href="/ninjas/{{ $ninja['id'] }}">{{ $ninja['name'] }}</a></li>
    @endforeach
  </ul>
</body>
</html>
