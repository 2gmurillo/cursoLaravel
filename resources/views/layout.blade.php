<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSRF Token for axios -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="/img/icon.png" />
  <title>@yield('title', 'Juango')</title>
  {{-- <link rel="stylesheet" href="/css/main.css">
  <script src="/js/main.js" defer></script> --}}
  <link rel="stylesheet" href="{{mix('css/main.css')}}">
  <script src="{{mix('js/main.js')}}" defer></script>
</head>

<body>
  <!-- app for Vue.js -->
  <div id="app">
    @include('partials.nav')
    <main class="content">
      @include('partials.session-status')
      @yield('content')
    </main>
    @include('partials.footer')
  </div>
</body>

</html>