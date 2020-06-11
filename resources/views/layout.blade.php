<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/img/icon.png" />
  <title>@yield('title', 'Juango')</title>
  <link rel="stylesheet" href="/css/main.css">
</head>

<body>
  <nav class="navbar">
    <ul class="navbar__menu">
      <li class="navbar__menu--item"><a class="link" href="/">Home</a></li>
      <li class="navbar__menu--item"><a class="link" href="/about">About</a></li>
      <li class="navbar__menu--item"><a class="link" href="/portfolio">Portfolio</a></li>
      <li class="navbar__menu--item"><a class="link" href="/contact">Contact</a></li>
    </ul>
  </nav>
  @yield('content')
</body>

</html>