<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('index')}}">FreeHome</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      @guest
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('login')}}">Login</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('register')}}">Registrati</a>
      </li>
      @endguest
      @auth
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('immobili')}}">Immobili</a>
      </li>
      @endauth
    </ul>
  </div>
</nav>