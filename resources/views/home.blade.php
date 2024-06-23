@extends('layouts.app')
@section('content')
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/unsri.jpg)">
          <div class="container" style="background-color: rgba(252, 252, 252, 0.705); ">
            <h2 class="text-dark">Selamat Datang</span></h2>
          </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/jaringan.jpg)">
          <div class="container">
            <h2>Aplikasi Pendaftaran Pemasangan Jaringan</h2>
          </div>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/sriwijaya.jpg)">
        </div>
      </div>
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>
      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section>
  <main id="main">
    @include('profile')
    @include('contact')
  </main>
@endsection