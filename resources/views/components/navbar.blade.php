<nav class="navbar navbar-expand-lg navbar-light" style="background-color: lightgrey; height: 60px;">
  <a class="navbar-brand" href="{{ route('index') }}" style="margin-left:1%">FreeHome</a>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      @guest
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">Registrati</a>
      </li>
      @endguest

      @auth
      <li class="nav-item">
        <a class="nav-link" href="{{ route('immobili.index') }}">Immobili</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('inquilini.index') }}">Inquilini</a>
      </li>
      @endauth
    </ul>

    @auth
    <div class="d-flex align-items-center ms-auto" style="gap: 15px; margin-right: 1%;">
      <a href="{{ route('profili.index', ['id' => auth()->user()->id]) }}">
        <img src="https://www.fabriziorocca.it/guide/wp-content/uploads/2018/03/thumb_14400082930User-250x240.png"
             alt="Profilo"
             style="height: 70%; max-height: 40px;">
      </a>
      <form action="{{ route('logout') }}" method="POST" class="mb-0">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
      </form>
    </div>
    @endauth
  </div>

  <!-- Dropdown per mobile -->
  <div class="dropdown d-lg-none">
    <button class="navbar-toggler" type="button" id="navbarDropdownMenu" data-bs-toggle="dropdown" aria-expanded="false">
      <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenu" style="background-color: lightgray;">
      @guest
      <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
      <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
      @endguest
      @auth
      <li><a class="dropdown-item" href="{{ route('immobili.index') }}">Immobili</a></li>
      <li><a class="dropdown-item" href="{{ route('inquilini.index') }}">Inquilini</a></li>
      <li><a class="dropdown-item" href="{{ route('profili.index', ['id' => auth()->user()->id]) }}">Profilo</a></li>
      <li>
        <form action="{{ route('logout') }}" method="POST" class="dropdown-item m-0 p-0">
          @csrf
          <button type="submit" class="btn btn-link dropdown-item" style="background-color: red; color: white; width: 100%;">Logout</button>
        </form>
      </li>
      @endauth
    </ul>
  </div>
</nav>
