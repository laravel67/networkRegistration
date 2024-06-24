<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <a href="/" class="logo me-auto"><img src="{{ asset('assets/img/unsri.png') }}" alt="">{{ __('UNSRI') }}</a>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li>
              <a class="nav-link scrollto {{ Request::is('/') ? 'active' : '' }}" href="/">{{ __('Beranda') }}</a>
          </li>
          @if (Request::is('/'))
              <li>
                  <a class="nav-link scrollto {{ Request::is('#about') ? 'active' : '' }}" href="#about">{{ __('Profile') }}</a>
              </li>
              <li>
                  <a class="nav-link scrollto {{ Request::is('#contact') ? 'active' : '' }}" href="#contact">{{ __('Kontak') }}</a>
              </li>
          @endif
          @guest
            <li>
              <a class="nav-link scrollto {{ Request::routeIs('pendaftaran') ? 'active' : '' }}" href="{{ route('pendaftaran') }}">{{ __('Pendaftaran') }}</a>
            </li>
          @else
          <li>
            <a class="nav-link scrollto {{ Request::routeIs('dashboard.index') ? 'active' : '' }}" href="{{ route('dashboard.index') }}">{{ __('Data Pendaftaran') }}</a>
          </li>
          <li>
            <a class="nav-link scrollto {{ Request::routeIs('users', 'register') ? 'active' : '' }}" href="{{ route('users') }}">{{ __('Pengguna') }}</a>
          </li>
          <li>
            <a class="nav-link scrollto {{ Request::routeIs('profile') ? 'active' : '' }}" href="{{ route('profile') }}">{{ __('Akun') }}</a>
          </li>
          @endguest
      </ul>      
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>