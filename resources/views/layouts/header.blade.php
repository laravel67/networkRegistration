<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-app"></i> Aplikasi Pendaftaran Pemasangan Jaringan
      </div>
      <div class="d-flex align-items-center">
        @guest
        <a class="btn btn-sm text-light" href="{{ route('login') }}">Login</a>
        <a class="btn btn-sm text-light" href="{{ route('register') }}">Register</a>
        @else
        <form action="{{ route('logout') }}" method="post">
          @csrf
          <button class="btn btn-sm text-light" type="submit">Logout</button>
        </form>
        @endguest
      </div>
    </div>
</div>