<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-end justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-app"></i> {{ __('Aplikasi Pendaftaran Pemasangan Jaringan') }}
      </div>
      <div class="d-flex align-items-center">
        @guest
          <a class="btn btn-sm text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
        @else
        <a class="btn btn-sm text-light" href="{{ route('profile') }}"><strong>{{ Auth::user()->name }}</strong></a>
        <form action="{{ route('logout') }}" method="post">
          @csrf
          <button class="btn btn-sm text-light" type="submit">{{ __('Logout') }}</button>
        </form>
        @endguest
      </div>
    </div>
</div>