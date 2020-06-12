<nav class="navbar">
  <ul class="navbar__menu">
    <li class="navbar__menu--item"><a class="link {{ setActive('home') }}" href="/">@lang('Home')</a></li>
    <li class="navbar__menu--item"><a class="link {{ setActive('about') }}" href="/about">@lang('About')</a></li>
    <li class="navbar__menu--item"><a class="link {{ setActive('portfolio') }}" href="/portfolio">@lang('Portfolio')</a></li>
    <li class="navbar__menu--item"><a class="link {{ setActive('contact') }}" href="/contact">@lang('Contact')</a></li>
  </ul>
</nav>