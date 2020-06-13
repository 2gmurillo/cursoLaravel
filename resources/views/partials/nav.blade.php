<nav class="navbar">
  <ul class="navbar__menu">
    <li class="navbar__menu--item"><a class="link {{ setActive('home') }}" href="{{ route('home') }}">@lang('Home')</a></li>
    <li class="navbar__menu--item"><a class="link {{ setActive('about') }}" href="{{ route('about') }}">@lang('About')</a></li>
    <li class="navbar__menu--item"><a class="link {{ setActive('projects.*') }}" href="{{ route('projects.index') }}">@lang('Portfolio')</a></li>
    <li class="navbar__menu--item"><a class="link {{ setActive('contact') }}" href="{{ route('contact') }}">@lang('Contact')</a></li>
  </ul>
</nav>