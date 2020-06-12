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
  @include('partials.nav')
  <section class="content">
    @yield('content')
  </section>
  @include('partials.footer')
</body>

</html>