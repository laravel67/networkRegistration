<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="/" class="logo me-auto"><img src="{{ asset('assets/img/unsri.png') }}" alt=""> UNSRI</a>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li>
              <a class="nav-link scrollto {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a>
          </li>
          @if (Request::is('/'))
              <li>
                  <a class="nav-link scrollto {{ Request::is('#about') ? 'active' : '' }}" href="#about">Profile</a>
              </li>
              <li>
                  <a class="nav-link scrollto {{ Request::is('#contact') ? 'active' : '' }}" href="#contact">Kontak</a>
              </li>
          @endif
          @guest
            <li>
              <a class="nav-link scrollto {{ Request::routeIs('pendaftaran') ? 'active' : '' }}" href="{{ route('pendaftaran') }}">Pendaftaran</a>
            </li>
          @else
          <li>
            <a class="nav-link scrollto {{ Request::routeIs('dashboard.index') ? 'active' : '' }}" href="{{ route('dashboard.index') }}">Data Pendaftaran</a>
          </li>
          @endguest
      </ul>      
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>