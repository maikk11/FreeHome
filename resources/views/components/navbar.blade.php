<nav class="navbar navbar-expand-lg navbar-light" style="background-color: lightgrey; color: lightgray;">
  <a class="navbar-brand" href="{{ route('index')}}" style="margin-left:1%">FreeHome</a>

  <!-- Link visibili su schermi grandi -->
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      @guest
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login')}}">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register')}}">Registrati</a>
      </li>
      @endguest
      @auth
      <li class="nav-item">
        <a class="nav-link" href="{{ route('immobili.index')}}">Immobili</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('inquilini.index')}}">Inquilini</a>
      </li>
      <form action="{{ route('logout')}}" method="POST" style="margin-left: 750%;">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
      </form>
      @endauth
    </ul>
  </div>

  <!-- Bottone per aprire la dropdown su schermi piccoli -->
  <div class="dropdown d-lg-none">
    <button class="navbar-toggler" type="button" id="navbarDropdownMenu" data-bs-toggle="dropdown" aria-expanded="false">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Dropdown menu per schermi piccoli -->
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenu">
      @guest
      <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
      <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
      @endguest

      @auth
      <li><a class="dropdown-item" href="{{ route('immobili.index') }}">Immobili</a></li>
      <li><a class="dropdown-item" href="{{ route('inquilini.index') }}">Inquilini</a></li>
      <li>
        <form action="{{ route('logout') }}" method="POST" class="dropdown-item m-0 p-0">
          @csrf
          <button type="submit" class="btn btn-link dropdown-item">Logout</button>
        </form>
      </li>
      @endauth
    </ul>
  </div>
</nav>
