<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>{{ $shared["meta"]->title }} | Test page</title>

  @yield('header')
</head>
<body>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('test') }}">Test</a></li>
        <li><a href="/wrongurl">wrong URL</a></li>
        <li><a href="{{ route('404') }}">404</a></li>
    </ul>
    @yield('content')

    @yield('footer')
</body>
</html>
