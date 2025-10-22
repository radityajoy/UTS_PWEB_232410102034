<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">MY DASHBOARD</a>

    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('pengelolaan') }}">Pengelolaan</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('profile') }}">Profile</a></li>
      </ul>

      <div class="d-flex">
        @php
          $username = request()->query('username') ?? session('username');
        @endphp

        @if($username)
          <a href="{{ route('logout') }}" class="btn btn-outline-danger btn-sm">Logout</a>
        @else
          <a href="{{ route('login.show') }}" class="btn btn-outline-primary btn-sm">Login</a>
        @endif
      </div>
    </div>
  </div>
</nav>
