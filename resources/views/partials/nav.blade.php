<nav class="navbar">
  <ul class="navbar__menu">
    <li class="navbar__menu--item"><a class="link {{ setActive('home') }}" href="{{ route('home') }}">@lang('Home')</a></li>
    <li class="navbar__menu--item"><a class="link {{ setActive('about') }}" href="{{ route('about') }}">@lang('About')</a></li>
    <li class="navbar__menu--item"><a class="link {{ setActive('projects.*') }}" href="{{ route('projects.index') }}">@lang('Portfolio')</a></li>
    <li class="navbar__menu--item"><a class="link {{ setActive('contact') }}" href="{{ route('contact') }}">@lang('Contact')</a></li>
    @auth
    <li class="navbar__menu--item"><a class="link" href="#">{{auth()->user()->name}}</a></li>
    <li class="navbar__menu--item"><a class="link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">@lang('Logout')</a></li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
    @else
    <li class="navbar__menu--item"><a class="link {{ setActive('login') }}" href="{{ route('login') }}">@lang('Login')</a></li>
    @endauth
  </ul>
</nav>