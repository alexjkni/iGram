<ul class="site-navigation inline" id="siteNavigation">
  <li>
    <a href="/">Home</a>
  </li>
  @if (auth()->check())
  <li>
    <a href="/add">Add</a>
  </li>
  <li>
    <a href="/logout">Logout</a>
  </li>
  @else
  <li>
    <a href="/login">Login</a>
  </li>
  <li>
    <a href="/register">Register</a>
  </li>
  @endif
</ul>
